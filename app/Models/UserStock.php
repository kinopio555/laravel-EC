<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth; 

class UserStock extends Model
{
    // use HasFactory;
    protected $table = 'users_tables';
    protected $guarded = [
        'id'
      ];
    public function showMyCart() {
       $userId = Auth::id();
       return $this->where('userId',$userId)->with('stock')->get();
      }
    public function stock() {
          return $this->belongsTo('\App\Models\Stock','stockId');
      }

    public function addMyCart($stockId) {
       $userId = Auth::id(); 
       $cartAddInfo = $this->firstOrCreate(['stockId' => $stockId,'userId' => $userId]);

       if($cartAddInfo->wasRecentlyCreated){
           $message = 'カートに追加しました';
       }
       else{
           $message = 'カートに登録済みです';
       }

       return $message;
      }
}
