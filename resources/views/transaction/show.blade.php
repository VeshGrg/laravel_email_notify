@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-right">
                <span><a href="{{ route('landing') }}">Go back Dashboard</a></span></div>
        </div>
        <h2>Company Name - {{  $transaction_detail->company}}</h2>
        <div class="row">
            <div class="col-md-2">Company Name : </div>
            <div class="col-md-6">{{ $transaction_detail->company }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Company Type : </div>
            <div class="col-md-6">{{ $transaction_detail->type }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Opening Price : </div>
            <div class="col-md-6">{{ $transaction_detail->op_price }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Closing Price : </div>
            <div class="col-md-6">{{ $transaction_detail->cl_price }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Total Transaction : </div>
            <div class="col-md-6">{{ $transaction_detail->tot_transaction }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Total Turnover : </div>
            <div class="col-md-6">{{ $transaction_detail->turnover }}</div>
        </div>
    </div>
@endsection
