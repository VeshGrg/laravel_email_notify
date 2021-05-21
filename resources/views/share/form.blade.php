@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center">Apply for Share</h3>
        <form action="{{ route('add-user') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="cotype" class="col-3">Company Type :</label>
                <div class="col-9">
                    <select name="cotype" id="" class="form-control form-control-sm">
                        <option value="">Hydropower</option>
                        <option value="">BFI's</option>
                        <option value="">Investment</option>
                        <option value="">Hotel</option>
                    </select>
                    @error('cotype')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="company" class="col-3">Choose a Company :</label>
                <div class="col-9">
                    <select name="company" id="" class="form-control form-control-sm">
                        <option value="nabil">Nabil Bank</option>
                        <option value="himal">Himalayan Bank</option>
                        <option value="sikles">Sikles Hydropower Ltd</option>
                        <option value="chilime">Chilime Hydropower Ltd</option>
                        <option value="soaltee">Soaltee Hotel</option>
                        <option value="barahi">Hotel Barahi</option>
                        <option value="cdec">CDEC Hydropower Investment Ltd</option>
                        <option value="tourism">Tourism Investment Ltd</option>
                    </select>
                    @error('company')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="share" class="col-3">No. of Share :</label>
                <div class="col-9">
                    <input type="number" name="share" class="form-control form-control-sm" placeholder="Enter No. of Shares" required>
                    @error('share')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="amt" class="col-3">Amount of Share :</label>
                <div class="col-9">
                    <input type="number" name="amt" class="form-control form-control-sm">
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
    </div>
@endsection
