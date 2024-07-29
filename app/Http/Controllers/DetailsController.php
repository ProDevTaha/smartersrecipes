<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetailsController extends Controller
{
    public function index($index){
        $data = null;
        if($index == 1){
            $data = [
                'img'=> 'orange.png',
                'price'=> '45',
                'description'=> '
                    <div class="container my-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header text-dark">
                                        <h2>Flavors Of Morocco</h2>
                                        <h2>45$</h2>
                                    </div>
                                    <div class="card-body">
                                        <p class="lead">Discover the heart of Moroccan cuisine with <strong>Authentic Moroccan Flavors</strong>. This captivating book takes you on a culinary journey through five classic Moroccan dishes:</p>
    
                                        <div class="mb-4">
                                            <h4 class="text-warning">Tagine</h4>
                                            <p>Master the art of preparing this iconic slow-cooked stew, where tender meat meets a harmonious blend of vegetables and spices, all simmered in a traditional earthenware pot.</p>
                                        </div>
    
                                        <div class="mb-4">
                                            <h4 class="text-warning">Tanjia</h4>
                                            <p>Unveil the secrets of Tanjia, a savory lamb dish cooked with preserved lemons and olives. This recipe brings a rich, tangy flavor that embodies Moroccan tradition.</p>
                                        </div>
    
                                        <div class="mb-4">
                                            <h4 class="text-warning">Meat with Plums</h4>
                                            <p>Explore the sweet and savory combination of tender meat and juicy plums. This dish highlights the unique flavors that define Moroccan cuisine.</p>
                                        </div>
    
                                        <div class="mb-4">
                                            <h4 class="text-warning">Rfisa</h4>
                                            <p>Experience the comforting flavors of Rfisa, a classic Moroccan dish featuring shredded flatbread topped with a hearty chicken and lentil stew. Ideal for special occasions and gatherings.</p>
                                        </div>
    
                                        <div class="mb-4">
                                            <h4 class="text-warning">Couscous</h4>
                                            <p>Learn to create fluffy couscous served with a savory stew of vegetables and meat. This versatile dish is a staple in Moroccan households and perfect for any occasion.</p>
                                        </div>
    
                                        <p>Each recipe in this book is crafted to bring the authentic taste of Morocco to your kitchen. Whether you are a seasoned chef or a culinary novice, <strong>Authentic Moroccan Flavors</strong> provides step-by-step instructions, helpful tips, and cultural insights to make each dish a success.</p>
    
                                        <p class="font-weight-bold">Elevate your cooking and savor the rich, aromatic tastes of Morocco with every page of this book.</p>
                                        <div class = "text-center">
                                            <a role="button" href="/checkout/45" class="btn w-100 m-auto mb-3 btn-primary">Checkout</a>
                                        </div>
                                        </div>
                                        
                                    </div>
                                </div>
                            </div>
                    </div>
                ',
            ];
        }else if ($index == 2){
            $data = [
                'img'=> 'grapes.png',
                'price'=> '49',
                'description'=> '
                    <div class="container my-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header text-dark">
                                        <h2>Sweet Delights Of Morocco</h2>
                                        <h2>49$</h2>
                                    </div>
                                    <div class="card-body">
                        <p class="lead">Indulge in the sweet side of Moroccan cuisine with <strong>Sweet Delights of Morocco</strong>. This delightful book brings you recipes for four beloved Moroccan sweets:</p>

                        <div class="mb-4">
                            <h4 class="text-warning">Chebakia</h4>
                            <p>Discover the intricate beauty of Chebakia, a deep-fried pastry coated with honey and sesame seeds. This traditional treat is often enjoyed during Ramadan and other festive occasions.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="text-warning">Ghriba</h4>
                            <p>Savor the simplicity and rich flavors of Ghriba, a type of Moroccan cookie made with almonds or coconut. These crumbly cookies are perfect for tea time or as a sweet snack.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="text-warning">Mhancha</h4>
                            <p>Explore the delightful spirals of Mhancha, a pastry filled with almond paste and rolled into a snake-like shape. This visually striking dessert is as delicious as it is beautiful.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="text-warning">Beghrir</h4>
                            <p>Enjoy the light and fluffy texture of Beghrir, also known as Moroccan pancakes. These spongy pancakes, with their characteristic holes, are often drizzled with honey and butter.</p>
                        </div>

                        <p>Each recipe in this book is designed to bring the authentic taste of Moroccan sweets to your kitchen. Whether you are an experienced baker or just starting out, <strong>Sweet Delights of Morocco</strong> provides clear instructions, helpful tips, and cultural insights to help you create these delicious treats.</p>

                        <p class="font-weight-bold">Experience the joy of Moroccan sweets and add a touch of sweetness to your culinary repertoire with this book.</p>
                         <div class = "text-center">
                                            <a role="button" href="/checkout/59" class="btn w-100 m-auto mb-3 btn-primary">Checkout</a>
                                        </div>
                        </div>
                    
                                </div>
                            </div>
                    </div>
                ',
            ];        
        }else if ($index == 3){
            $data = [
                'img'=> 'gauva.png',
                'price'=> '59',
                'description'=> '
                    <div class="container my-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header text-dark">
                                        <h2>Soups Of Morocco</h2>
                                        <h2>59$</h2>
                                    </div>
                                    <div class="card-body">
                        <p class="lead">Warm your soul with the comforting flavors of Moroccan soups in <strong>Hearty Moroccan Soups</strong>. This book brings you recipes for four traditional Moroccan soups:</p>

                        <div class="mb-4">
                            <h4 class="text-warning">Harira</h4>
                            <p>Discover the rich and nourishing Harira, a traditional Moroccan soup made with tomatoes, lentils, chickpeas, and tender pieces of meat. This soup is a staple during Ramadan and a favorite for any time of year.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="text-warning">Bissara</h4>
                            <p>Enjoy the simplicity and flavor of Bissara, a creamy fava bean soup. This hearty and nutritious dish is perfect for a warming meal, especially during the colder months.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="text-warning">Chorba</h4>
                            <p>Savor the delightful taste of Chorba, a Moroccan soup made with vegetables, meat, and a blend of spices. This versatile soup can be adapted to include a variety of ingredients, making it a family favorite.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="text-warning">Loubia</h4>
                            <p>Experience the comforting flavors of Loubia, a bean soup made with white beans, tomatoes, and aromatic spices. This hearty soup is both filling and flavorful, perfect for a satisfying meal.</p>
                        </div>

                        <p>Each recipe in this book is crafted to bring the authentic taste of Moroccan soups to your kitchen. Whether you are looking for a nutritious meal or a comforting dish, <strong>Hearty Moroccan Soups</strong> provides step-by-step instructions, helpful tips, and cultural insights to make each soup a success.</p>

                        <p class="font-weight-bold">Dive into the warmth and flavor of Moroccan soups with this essential cookbook.</p>
                     <div class = "text-center">
                                           <a role="button" href="/checkout/59" class="btn w-100 m-auto mb-3 btn-primary">Checkout</a>
                                        </div>
                        </div>
                                </div>
                            </div>
                    </div>
                ',
            ];
        }else if ($index == 4){
            $data = [
                'img'=> 'fekkas.png',
                'price'=> '59',
                'description'=> '
                    <div class="container my-5">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card">
                                    <div class="card-header text-dark">
                                        <h2>Moroccan Cakes & Pastries</h2>
                                        <h2>59$</h2>
                                    </div>
                                    <div class="card-body">
                        <p class="lead">Indulge in the rich and diverse flavors of Moroccan desserts with <strong>Moroccan Sweet Treats</strong>. This delightful book brings you recipes for four beloved Moroccan sweets:</p>

                        <div class="mb-4">
                            <h4 class="text-warning">Meskouta</h4>
                            <p>Enjoy the simplicity and versatility of Meskouta, a traditional Moroccan cake. Often flavored with orange zest or vanilla, this light and fluffy cake is perfect for any occasion.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="text-warning">Kaab el Ghazal</h4>
                            <p>Discover the delicate and fragrant Kaab el Ghazal, also known as Gazelle Horns. These crescent-shaped cookies are filled with almond paste and flavored with orange blossom water, making them a delightful treat.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="text-warning">Baklava</h4>
                            <p>Savor the layers of flaky pastry, filled with chopped nuts and sweetened with honey or syrup, that make Baklava a beloved dessert. This version brings a Moroccan twist to the classic treat.</p>
                        </div>

                        <div class="mb-4">
                            <h4 class="text-warning">Fekkas</h4>
                            <p>Explore the crunch and flavor of Fekkas, Moroccan twice-baked cookies. Often filled with almonds, sesame seeds, and anise, these cookies are perfect for enjoying with a cup of tea or coffee.</p>
                        </div>

                        <p>Each recipe in this book is crafted to bring the authentic taste of Moroccan sweets to your kitchen. Whether you are an experienced baker or just starting out, <strong>Moroccan Sweet Treats</strong> provides clear instructions, helpful tips, and cultural insights to help you create these delicious desserts.</p>

                        <p class="font-weight-bold">Add a touch of sweetness to your culinary repertoire with these delightful Moroccan desserts.</p>
                         <div class = "text-center">
                                            <a role="button" href="/checkout/59" class="btn w-100 m-auto mb-3 btn-primary">Checkout</a>
                                        </div>
                        </div>
                                </div>
                            </div>
                    </div>
                ',
            ];
        }
        return view('details',compact('data'));
    }
}
