@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row text-center">
            <span class="col-md-12 text-right"><a href="{{ route('landing') }}">Go Back</a></span>
            <div class="col-md-12"><h3>Daily Transaction Details</h3></div>
            <div class="col-md-12">
                <table class="text-center">
                    <thead class="table table-striped">
                    <th>S.No.</th>
                    <th>Company Name</th>
                    <th>Company Type</th>
                    <th>Opening Price</th>
                    <th>Closing Price</th>
                    <th>Company Share</th>
                    <th>Total Transaction</th>
                    <th>Turnover</th>
                    <th>Action</th>
                    </thead>

                    @php
                        $i = 0;
                    @endphp

                    @foreach($daily_transaction as $transaction )
                        <tr>
                            <td>{{ ++$i }}</td>
                            <td>{{ $transaction->company}}</td>
                            <td>{{ $transaction->type }}</td>
                            <td>{{ $transaction->op_price }}</td>
                            <td>{{ $transaction->cl_price }}</td>
                            <td>{{ @$transaction->share->name_of_company }}</td>
                            <td>{{ $transaction->tot_transaction}}</td>
                            <td>{{ $transaction->turnover }}</td>
                            <td><a href="{{ route('dailytransactions.show', $transaction) }}">View</a></td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div
    @endsection
