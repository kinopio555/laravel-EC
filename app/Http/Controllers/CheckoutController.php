<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserStock;

class CheckoutController extends Controller
{
    public function checkout(Request $request)
    {
        $user = $request->user();
        $userStock = new UserStock();
        $myCartStocks = $userStock->showMyCart();

        // Check if the cart is empty
        if ($myCartStocks->isEmpty()) {
            return redirect()->route('stock.myCart')->with('message', 'カートが空です。');
        }

        // Create an array of price IDs from the cart items
        $priceIds = $myCartStocks->map(function ($item) {
            // Assuming each stock item has a 'stripe_price_id' field
            return $item->stock->stripe_price_id;
        })->toArray();

        // Redirect user to a new Stripe Checkout Session
        return $user->checkout($priceIds, [
            'success_url' => route('success'),
            'cancel_url' => route('cancel'),
        ]);
    }
}