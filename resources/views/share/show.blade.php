@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-right">
                <span><a href="{{ route('landing') }}">Go back Dashboard</a></span></div>
        </div>
        <h2>Company Name - {{  $share_data->name_of_company}}</h2>
        <div class="row">
            <div class="col-md-2">Company Name : </div>
            <div class="col-md-6">{{ $share_data->name_of_company }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Company Type : </div>
            <div class="col-md-6">{{ $share_data->company_type }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">No. Of Share : </div>
            <div class="col-md-6">{{ $share_data->share_no }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Amount of Share : </div>
            <div class="col-md-6">{{ $share_data->amt }}</div>
        </div>

        <div class="row">
            <div class="col-md-2">Shareholder : </div>
            <div class="col-md-6">{{ $share_data->user_id }}</div>
        </div>
    </div>
@endsection
