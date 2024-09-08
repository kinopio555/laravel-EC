<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth; //追加
use App\Models\Stock; //追加
use Illuminate\Http\Request;
use App\Models\UserStock; //追加



class StockController extends Controller
{
    public function index() //追加
   {
       $stocks = Stock::SimplePaginate(6); //Eloquantで検索 
       return view('stocks',compact('stocks')); //追記変更
   }
   
   public function myCart(UserStock $userStock)
   {
       $myCartStocks = $userStock->showMyCart();
       return view('myCart',compact('myCartStocks'));
   }

   public function addMycart(Request $request,UserStock $userStock)
   {

       //カートに追加の処理
       $stockId=$request->stockId;
       $message = $userStock->addCart($stockId);

       //追加後の情報を取得
       $myCartStocks = $userStock->showMyCart();

       return view('myCart',compact('myCartStocks' , 'message'));
    }
}
