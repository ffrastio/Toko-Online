<?php

namespace App\Http\Controllers;

use App\Models\TransactionDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardTransactionsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sellTransaction = TransactionDetail::with(['product.galleries', 'transaction.user'])->latest()->whereHas('product', function ($product) {
            $product->where('users_id', Auth::user()->id);
        })->get();
        $buyTransaction = TransactionDetail::with(['product.galleries', 'transaction.user'])->latest()->whereHas('transaction', function ($transaction) {
            $transaction->where('users_id', Auth::user()->id);
        })->get();
        return view('pages.dashboard-transactions', [
            'sellTransaction' => $sellTransaction,
            'buyTransaction' => $buyTransaction,
        ]);
    }
    public function details(Request $request, $id)
    {
        //
        $transaction = TransactionDetail::with(['product.galleries', 'transaction.user'])->findOrFail($id);
        return view('pages.dashboard-transaction-details', [
            'transaction' => $transaction
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        $data = $request->all();

        $item = TransactionDetail::findorFail($id);

        $item->update($data);

        return redirect()->route('dashboard-transaction-details', $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
