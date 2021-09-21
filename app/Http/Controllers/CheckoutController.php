<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\Cart;
use App\Models\Transactions;
use App\Models\TransactionDetail;
use App\Models\User;
use Exception;

use Midtrans\Snap;
use Midtrans\Config;

class CheckoutController extends Controller
{
    //
    public function process(Request $request)
    {
        // Save data User
        $user = Auth::user();
        $user->update($request->except('total_price'));

        // Proses Checkout
        $code = 'STORE-' . mt_rand('000000', '999999');
        $carts = Cart::with(['product', 'user'])
            ->where('users_id', Auth::user()->id)
            ->get();

        // Transaction create
        $transaction = Transactions::create([
            'users_id' => Auth::user()->id,
            'insurance_price' => 0,
            'shipping_price' => 0,
            'total_price' => $request->total_price,
            'transaction_status' => 'PENDING',
            'code' => $code,
        ]);
        foreach ($carts as $cart) {
            $trx = 'TRX-' . mt_rand('000000', '999999');
            TransactionDetail::create([
                'transaction_id' => $transaction->id,
                'product_id' => $cart->product->id,
                'price' => $cart->product->price,
                'shipping_status' => 'PENDING',
                'resi' => '',
                'code' => $trx,
            ]);
        }
        
        //Delete Cart
        Cart::with(['product_id','users_id'])
            ->where('users_id', Auth::user()->id)->delete();

        //Konfigurasi Midtrans
        // Set your Merchant Server Key
        Config::$serverKey = config('services.midtrans.serverKey');
        // Set to Development/Sandbox Environment (default). Set to true for Production Environment (accept real transaction).
        Config::$isProduction = config('services.midtrans.isProduction');
        // Set sanitization on (default)
        Config::$isSanitized = config('services.midtrans.isSanitized');
        // Set 3DS transaction for credit card to true
        Config::$is3ds = config('services.midtrans.is3ds');

        // Array untuk dikirim ke midtrans
        $midtrans = [
            'transaction_details' => [
                'order_id' => $code,
                "gross_amount" => (int) $request->total_price,
            ],
            'customer_details' => [
                'first_name' => Auth::user()->name,
                'email' => Auth::user()->email,
                "enabled_payments" => [
                    "credit_card", "cimb_clicks",
                    "bca_klikbca", "bca_klikpay", "bri_epay", "echannel", "permata_va",
                    "bca_va", "bni_va", "bri_va", "other_va", "gopay", "indomaret",
                    "danamon_online", "akulaku", "shopeepay", "bank_transfer"
                ],
            ],
            'vtweb' => []
        ];

        try {
            // Get Snap Payment Page URL
            $paymentUrl = Snap::createTransaction($midtrans)->redirect_url;
            
            // Redirect to Snap Payment Page
            return redirect($paymentUrl);
          }
          catch (Exception $e) {
            echo $e->getMessage();
          }
    }
    public function callback(Request $request)
    {
    }
}
