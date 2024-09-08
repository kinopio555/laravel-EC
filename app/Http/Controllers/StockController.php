<?php

namespace App\Http\Controllers;

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
   
   public function myCart()
   {
       $myCartStocks = UserStock::all();
       return view('myCart',compact('myCartStocks'));
       
   }
}
