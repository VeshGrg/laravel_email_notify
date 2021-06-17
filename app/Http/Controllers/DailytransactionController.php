<?php

namespace App\Http\Controllers;

use App\Models\Dailytransaction;
use App\Models\Share;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DailytransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $transaction = Dailytransaction::latest()->paginate(8);
        return view('transaction.index')
            ->with('daily_transaction', $transaction);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Share $share)
    {
        $share_detail = $share->orderBy('id', 'DESC')->pluck('name_of_company');
        return view('transaction.create')
            ->with('share_data', $share_detail);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Dailytransaction $dailytransaction, Share $share)
    {
        $request->validate([
           'company' => 'required',
           'type' => 'required|in:hydropower,bfi,investment,hotel',
           'op_price' => 'required',
            'cl_price' => 'required',
            'shareName_id' => 'nullable|exists:shares,id',
            'tot_transaction' => 'required',
            'turnover' => 'required'
        ]);
        $data = $request->except('_token');
        $data['user_id'] = auth()->user()->id;
        $dailytransaction->fill($data);
        $dailytransaction->save();

        return redirect()->route('dailytransactions.index')
            ->with('success', 'Daily transactions added successfully.');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dailytransaction  $dailytransaction
     * @return \Illuminate\Http\Response
     */
    public function show(Dailytransaction $dailytransaction)
    {
        return view('transaction.show')
            ->with('transaction_detail', $dailytransaction);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dailytransaction  $dailytransaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Dailytransaction $dailytransaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Dailytransaction  $dailytransaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dailytransaction $dailytransaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dailytransaction  $dailytransaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dailytransaction $dailytransaction)
    {
        //
    }
}
