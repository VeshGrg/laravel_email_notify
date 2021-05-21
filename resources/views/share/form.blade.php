@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center">Apply for Share</h3>
        @auth
            <form action="{{ route('shares.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="company_type" class="col-3">Company Type :</label>
                <div class="col-9">
                    <select name="company_type" id="" class="form-control form-control-sm">
                        <option value="hydropower">Hydropower</option>
                        <option value="bfi">BFI's</option>
                        <option value="investment">Investment</option>
                        <option value="hotel">Hotel</option>
                    </select>
                    @error('company_type')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="name_of_company" class="col-3">Choose a Company :</label>
                <div class="col-9">
                    <select name="name_of_company" id="" class="form-control form-control-sm">
                        <option value="nabil">Nabil Bank</option>
                        <option value="himal">Himalayan Bank</option>
                        <option value="sikles">Sikles Hydropower Ltd</option>
                        <option value="chilime">Chilime Hydropower Ltd</option>
                        <option value="soaltee">Soaltee Hotel</option>
                        <option value="barahi">Hotel Barahi</option>
                        <option value="cdec">CDEC Hydropower Investment Ltd</option>
                        <option value="tourism">Tourism Investment Ltd</option>
                    </select>
                    @error('name_of_company')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="share_no" class="col-3">No. of Share :</label>
                <div class="col-9">
                    <input type="number" name="share_no" class="form-control form-control-sm" placeholder="Enter No. of Shares" required min="10">
                    @error('share_no')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="amt" class="col-3">Amount of Share :</label>
                <div class="col-9">
                    <input type="number" name="amt" class="form-control form-control-sm" value="" min="100">
                    @error('amt')
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
