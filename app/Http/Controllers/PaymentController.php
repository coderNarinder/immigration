<?php

namespace App\Http\Controllers;

use Exception;
use Razorpay\Api\Api;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Models\WalletTransaction;
class PaymentController extends Controller
{
    public function handlePayment(Request $request)
    {
        $input = $request->all();
        $api = new Api(env('RAZORPAY_API_KEY'), env('RAZORPAY_API_SECRET'));
        $payment = $api->payment->fetch($input['razorpay_payment_id']);
        if (count($input) && !empty($input['razorpay_payment_id'])) {
            try {
                $response = $api->payment->fetch($input['razorpay_payment_id'])->capture([
                    'amount' => $payment['amount']
                ]);

                $p = new WalletTransaction;
                $p->r_payment_id = $response['id'];
                $p->user_id = auth()->user()->id;
                $p->type = "credit";
                $p->method = $response['method'];
                $p->currency =  $response['currency'];
                $p->user_email = $response['email'];
                $p->amount = $response['amount'] / 100;
                $p->json_response = json_encode((array)$response); 
                $p->save();
            } catch (Exception $e) {
                Log::info($e->getMessage());
                return redirect()->route('home.mywallet')->withError($e->getMessage());
            }
        }
        return redirect()->route('home.mywallet')->withSuccess('Payment done.');
    }

    public function wallet()
    {
        $payments  = WalletTransaction::where('user_id', auth()->user()->id)->orderBy('created_at','desc')->paginate(15);
    	return view('home.wallet.index',[
            'payments' => $payments
        ]);
    }
}
