@extends('layouts.app')
@section('content')
    <div class="container">
        <p class="text-right"><a href="{{ route('landing') }}">Go back Dashboard</a></p>
        <h3 class="text-center">Add Transaction Details</h3>
        @auth
            <form action="{{ route('dailytransactions.store') }}" method="POST" enctype="multipart/form-data">
                @csrf

                {{ $errors }}
                <div class="form-group row">
                    <label for="company" class="col-3">Choose a Company :</label>
                    <div class="col-9">
                        <select name="company" id="" class="form-control form-control-sm">
                            @foreach($share_data as $share)
                                <option value="{{ $share }}">{{ $share }}</option>
                            @endforeach
                        </select>
                        @error('company')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="type" class="col-3">Company Type :</label>
                    <div class="col-9">
                        <select name="type" id="" class="form-control form-control-sm">
                            <option value="">--Choose Company Type--</option>
                            <option value="hydropower">Hydropower</option>
                            <option value="bfi">BFI's</option>
                            <option value="investment">Investment</option>
                            <option value="hotel">Hotel</option>
                        </select>
                        @error('type')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="op_price" class="col-3">Opening Price :</label>
                    <div class="col-9">
                        <input type="number" name="op_price" class="form-control form-control-sm" placeholder="Enter Opening Price" required>
                        @error('op_price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="cl_price" class="col-3">Closing Price :</label>
                    <div class="col-9">
                        <input type="number" name="cl_price" class="form-control form-control-sm" placeholder="Enter Closing Price" required>
                        @error('cl_price')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="tot_transaction" class="col-3">Total Transaction :</label>
                    <div class="col-9">
                        <input type="number" name="tot_transaction" class="form-control form-control-sm" value="">
                        @error('tot_transaction')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="turnover" class="col-3">Turnover :</label>
                    <div class="col-9">
                        <input type="number" name="turnover" class="form-control form-control-sm" value="">
                        @error('turnover')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <div class="offset-3 col-9">
                        <button type="submit">Submit</button>
                        <button type="reset">Reset</button>
                    </div>
                </div>


            </form>
        @endauth
    </div>
    @endsection
