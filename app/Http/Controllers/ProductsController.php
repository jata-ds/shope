<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Cats;
use App\products;
class ProductsController extends Controller
{
    public function proCat(Request $request){
        $cat = $request->cat;

        $data= DB::table('products')->join('cats','cats.id','products.cat_id')
        ->where('cats.cat_name',$cat)->get();
        return view('front.products',[
          'data' => $data ,'catByUser' => $cat
        ]);
    }

    public function search(Request $request){
        $searchData= $request->searchData;
  
        //start query for search
        $data = DB::table('products')
        ->join('cats','cats.id','products.cat_id')
        ->where('products.pro_name', 'like', '%' . $searchData . '%')
        ->get();
        return view('front.products',[
          'data' => $data, 'catByUser' => $searchData
        ]);
      }

      //pro ajax by cat id 
      public function productsCat(Request $request){
        $cat_id = $request->cat_id;
 
        $priceCount = count($request->price);
        // price are array
        if($cat_id!="" && $priceCount!="0"){
          $price = explode("-",$request->price);
 //$price = $request->price;
           $start = $price[0];
           $end = $price[1];
 
           //echo "both are selected";
           $data = DB::table('products')
           ->join('cats','cats.id','products.cat_id')
           ->where('products.cat_id',$cat_id)
           ->where('products.pro_price', ">=", $start)
           ->where('products.pro_price', "<=", $end)
           ->get();
 
        }
        else if($priceCount!="0"){
          $price = explode("-",$request->price);
          $start = $price[0];
          $end = $price[1];
 
          //echo "price is selected";
          $data = DB::table('products')
          ->join('cats','cats.id','products.cat_id')
          ->where('products.pro_price', ">=", $start)
          ->where('products.pro_price', "<=", $end)
          ->get();
 
        }
        else if($cat_id!=""){
          //echo "cat is selected";
          $data = DB::table('products')
          ->join('cats','cats.id','products.cat_id')
          ->where('products.cat_id',$cat_id)
          ->get();
        }
        else{
          //echo "nothing is slected";
          return "<div class='alert alert-danger' role='alert'>
                  <b align='center'>Please select atleast one filter from dropdown</b>
                </div>";
        }
 
        if(count($data)=="0"){
          return "<div class='alert alert-danger' role='alert'>
                  <b align='center'>No products found under this Category</b>
                </div>";
        }else{
        return view('front.productsPage',[
          'data' => $data, 'catByUser' => $data[0]->cat_name
        ]);
      }
 
     }
}
