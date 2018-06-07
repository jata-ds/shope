<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart;
use App\products;
class cartController extends Controller
{
    public function index(){
        $cart =  Cart::content();
        return view('cart.index', [
            'data' => $cart
        ]);
    }
   public function addItem($id){
       $pro = products::find($id);
        Cart::add(['id' => $pro->id, 'name' => $pro->pro_name, 
       'qty' => 1, 'price' => $pro->pro_price,
       'options' =>[
            'img' => $pro->pro_img
       ]]);  
          return redirect()->back();
   }

   public function removeItem($id){
       Cart::remove($id);
       return redirect()->back();
   }

   public function update(Request $request){
       $qty = $request->newQty;
        $rowId = $request->rowID;
       //update cart
       Cart::update($rowId,$qty);
       echo "Cart update successfuly";
   }
}
