<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Session;
use Stripe;
use Customer;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Config;

class CheckoutController extends Controller
{
    
    public function checkout(Request $request)
    {
       
       $stripe = \Cartalyst\Stripe\Laravel\Facades\Stripe::setApiKey(env('STRIPE_SECRET'));
       try{
        $dataPayment = $request->input('dataPayment');
        $token = $stripe->tokens()->create([
          'card' => [
            'name'=>$dataPayment['name'], 
            'number' => $dataPayment['number'],
            'exp_year' =>intval($dataPayment['year']),
            'exp_month' =>intval($dataPayment['month']),
            'cvc' => intval($dataPayment['cvc']),   
          ]
        ]);

          if (!isset($token['id'])) {
            return redirect()->route('stripe.add.money');
          }
            
          $charge = $stripe->charges()->create([
            'card' => $token['id'],
            'currency' => 'USD',
            'amount' => $dataPayment['price'],
            'description' => 'course spring boot', 
          ],);
            
           if($charge['status'] == 'succeeded') {  
                $data = [
                    'StatusVisa' =>$charge['status'], 
                    'id' =>$charge['id'],
                    'status'=>$charge['status'] 
                ]; 
           }else return response()->json(['error' => 'Internal Server Error'], 500);
       }catch(\Exception $e){
            return response()->json(['error' => 'Internal Server Error'], 500);
       }
    } 
    
    public function checkoutSimple($price){
      try { 
        return view('checkout', compact('price')); 
      } catch (\Throwable $th) {
        return $th->getMessage();
      }
    }

    public function stripePost(Request $request){ 
      
      $request->validate(
        [
          'email'=>'required|email',
          'name'=>'required',
          'phone'=>'required',
          //'state'=>'required',
          'country'=>'required',
          'city'=>'required',
          //'zip'=>'required',
          //'address1'=>'required'
        ]   
    ); 
      Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
      
      $customer = Stripe\Customer::create([
        'name' => $request->name,
        'email' => $request->email,
        //'phone' =>$request->phone,
        'address' => [
        //     'line1' => $request->adress1,
        //     'line2' => $request->adress2,
        'city' => $request->city,
        //     'state' => $request->state,
        //     'postal_code' =>$request->zip,
          'country' => $request->country,
        ],
        "source" => $request->stripeToken,
      ]); 

      $charge = Stripe\Charge::create ([
        'customer' => $customer->id,
        "amount" => $request->price*100, 
        "currency" => "usd",
         "description" => $request->thankyou == 'smartersplanet'  ? 'BOOT-COURSE' : $request->course 
      ]);
         
        if ($charge->status === 'succeeded') {
          //return view("payment.success");
           $dataOrder = [
            'price' => $request->price,
            'name' =>  $request->name,
            'email' => $request->email,
            'orderId' => $customer->id,
            'phone' =>$request->phone,
            'country' =>$request->country,
            'offre' =>$request->offre,
            'thankyou' =>$request->thankyou,
            'course' =>$request->course,
            'device' =>$request->device,
            'mac_address' =>$request->mac_address,
            'application' =>$request->application
          ];
            if(isset($request->thankyou) && $request->thankyou == 'bootcoders'){
                Mail::send('emails.newOrder',$dataOrder,function($message){
                  $message->to('bootcoders.tv@gmail.com','Hicham marhar')
                  ->subject('New Order BootCoders');
                });
                 Mail::send('emails.orderCustomer',$dataOrder,function($message){
                  $message->to('bootcoders.tv@gmail.com','Hicham marhar')
                  ->subject('New Order BootCoders');
                });
                Mail::send('emails.orderCustomer', $dataOrder, function ($message) use ($request) {
                  $message->to($request->email, $request->name)
                      ->subject('Order BootCoders (IPTV)');
                });
                  return redirect("https://www.bootcoders.com/successOrder" 
                . ($request->login ? "?login=" . $request->login : '?login=00')
                . ($request->phone ? "&phone=" . $request->phone : '')
                . ($request->country ? "&country=" . $request->country : '')
                . ($request->name ? "&name=" . $request->name : '')
                . ($request->email ? "&email=" . $request->email : '')
                . ($request->price ? "&price=" . $request->price : '')
                . ($dataOrder['orderId'] ? "&orderId=" . $dataOrder['orderId'] : '')
                . ($request->offre ? "&offre=" . $request->offre : ''))
                ;
            }else if (isset($request->thankyou) && $request->thankyou == 'technooiptv'){
                config(['mail.from.name' => 'Technooiptv']);
                Mail::send('emails.newOrder',$dataOrder,function($message){
                  $message->to('technoiptvservice@gmail.com','Hicham marhar')
                  ->subject('New Order Technoiptv');
                });
                 Mail::send('emails.orderCustomer',$dataOrder,function($message){
                  $message->to('technoiptvservice@gmail.com','Hicham marhar')
                  ->subject('New Order Technoiptv');
                });
                Mail::send('emails.orderCustomer', $dataOrder, function ($message) use ($request) {
                  $message->to($request->email, $request->name)
                      ->subject('Order Technoiptv ');
                }); 
                return redirect('https://technooiptv.com/thank-you/');
            }
            else if (isset($request->thankyou) && $request->thankyou == 'smartersplanet'){
              config(['mail.from.name' => 'Smartersplanet']);
              Mail::send('emails.newOrder',$dataOrder,function($message){
                $message->to('smartersplanet@gmail.com','Hicham marhar')
                ->subject('New Order Smartersplanet');
              });
              config(['mail.from.name' => 'Smartersplanet']);
              Mail::send('emails.orderCustomerSmartersplanet',$dataOrder,function($message){
                $message->to('smartersplanet@gmail.com','Hicham marhar')
                ->subject('New Order Smartersplanet'.'Smartersplanet');
              });
              config(['mail.from.name' => 'Smartersplanet']);
              Mail::send('emails.orderCustomerSmartersplanet', $dataOrder, function ($message) use ($request) {
                $message->to($request->email, $request->name)
                    ->subject('Order Smartersplanet ');
              }); 
              return redirect('https://smartersplanet.com/thanks-page'); 
            }
            else if (isset($request->thankyou) && $request->thankyou == 'smarterstivi'){
              config(['mail.from.name' => 'Smarterstivi']);
              Mail::send('emails.newOrder',$dataOrder,function($message){
                $message->to('smarterstivi@gmail.com','Hicham marhar')
                ->subject('New Order Smarterstivi');
              });
              config(['mail.from.name' => 'Smarterstivi']);
              Mail::send('emails.orderCustomerSmarterstivi',$dataOrder,function($message){
                $message->to('smarterstivi@gmail.com','Hicham marhar')
                ->subject('Order Smarterstivi');
              });
              config(['mail.from.name' => 'Smarterstivi']);
              Mail::send('emails.orderCustomerSmarterstivi', $dataOrder, function ($message) use ($request) {
                $message->to($request->email, $request->name)
                  ->subject('Order Smarterstivi');
              }); 
              return redirect('https://smarterstivi.com/checkout/order-received/'); 
            }
        }else{
          return view("payment.oops");
        } 
    }


    public function checkoutView(Request $request){
      if($request->price != null && $request->isMethod('get') ){
        $data = [
          'price' =>$request->price,
          'course' =>$request->course,
          'offre' =>$request->offre,
          'thankyou' =>$request->thankyou
        ]; 
        $this->saveData($data); 
        return view('checkout',$data);
      
      }else if($request->isMethod('get'))
      {
        $data = $_SESSION['data']; 
        return view('checkout',$data); 
      }else{
        $data = [
          'price' =>$request->price,
          'course' =>$request->course,
          'offre' =>$request->offre,
          'thankyou' =>$request->thankyou,
        ]; 
        $this->saveData($data); 
        return view('checkout',$data);  
      }
     
    }
    

    public function checkoutViewFromSmartersplanet(Request $request){
      if($request->price != null && $request->isMethod('get') ){
        $data = [
          'price' =>$request->price,
          'course' =>$request->Courses,
          'offre' =>$request->offres,
          'thankyou' =>$request->thankyou
        ];

        $this->saveData($data); 
        return view('checkout',$data);
      
      }else if($request->isMethod('get'))
      {
        $data = $_SESSION['data']; 
        return view('checkout',$data); 
      }else{
        $data = [
          'price' =>$request->price,
          'course' =>$request->Courses,
          'offre' =>$request->offres,
          'thankyou' =>$request->thankyou
        ];
        $this->saveData($data); 
        return view('checkout',$data);  
      }
     
    }
    
   public function checkoutViewB(Request $request){
      if($request->price != null && $request->isMethod('get') ){
        $data = [
          'price' =>$request->price,
          'course' =>$request->course,
          'thankyou' =>$request->thankyou,
          'offre' =>$request->offre,
          'login' =>$request->login,
          'remoteSubmit' => false
        ]; 
        $this->saveData($data); 
        return view('checkout',$data);
      
      }else if($request->isMethod('get'))
      {
        $data = $_SESSION['data']; 
        return view('checkout',$data); 
      }else{
        $data = [
          'price' =>$request->price,
          'course' =>$request->course,
          'thankyou' =>$request->thankyou,
          'offre' =>$request->offre,
          'login' =>$request->login,
          'remoteSubmit' => false
        ]; 
        $this->saveData($data); 
        return view('payment.checkout',$data);  
      }
     
    }

    public function saveData($data){
      $_SESSION['data'] = $data;
      return  $_SESSION['data'] ;
    }


    public function productPage(Request $request){

      if($request->isMethod('get')){
        $data = $_SESSION['ProductPage']; 
        return view('productPage',$data);    
      } 

      $data = [
        'price' =>$request->price,
        'course' =>$request->course,
        'videos' =>$request->videos,
        'duration' =>$request->duration,
        'valeurAjeuter' =>$request->valeurAjeuter
      ]; 
      $this->saveProductPage($data); 
      return view('productPage',$data);      
    }

    public function saveProductPage($data){
      $_SESSION['ProductPage'] = $data; 
    }


}
