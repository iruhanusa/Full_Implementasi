<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class TransactionController extends Controller
{
    // store product with transaction
    public function storeProductTransaction($id)
    {
        $product = Product::find($id);
        if (!$product) {
            return redirect()->route('dashboard.products.index')->with('error', 'Produk tidak ditemukan.');
        }
        return view('transaction.detail', ['product' => $product]);
    }

    // Progress Transaction
    public function loadingProductTransaction(Request $request ,$id)
    {
        $product = Product::find($id);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }


        $request->validate([
            'name' => 'required',
            'no_invoice' => 'required',
            'admin_fee' => 'required',
            'product_id' => 'required|exists:products,id',
            'user_id' => 'required|exists:users,id',
            'total' => 'required',
        ]);

        $userId = Auth::user()->id;

        $transaction = new Transaction();
        $transaction->no_invoice = Str::random(15);
        $transaction->admin_fee = 2500;
        $transaction->product_id = $request->product_id;
        $transaction->user_id = $userId;
        $transaction->total = $transaction->products->price + 2500;
        $transaction->save();

        return redirect()->route('dashboard.products.detail-transaction')->with('success', 'Child created successfully.');
    }

    //Detail Transaction Invoice
    public function storeDetailTransaction($id)
    {
        $transaction = Transaction::with('products', 'users')->find($id);

    return view('transaction.invoice', ['transaction' => $transaction]);
    }

}
