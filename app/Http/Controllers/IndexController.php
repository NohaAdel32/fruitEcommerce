<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function indx(){
        return  view('indx'); 
                  }
    public function about(){
        return  view('about'); 
                  }

    public function contact(){
    return  view('contact'); 
                }
    public function cart(){
        return  view('cart'); 
                    }
    public function checkout(){
        return  view('checkout'); 
                    }
    public function news(){
        return  view('news'); 
                    }
    public function shop(){
        return  view('shop'); 
                    }
    public function singleNews(){
        return  view('singleNews'); 
                    }
    public function singleProduct(){
        return  view('singleProduct'); 
                    }
    public function dyHome(){
        return  view('dyHome'); 
                    }
}
