@extends('layouts.app')
@section('content')
    <div class="container">
        <p class="text-right"><a href="{{ route('landing') }}">Go back Dashboard</a></p>
        <h3 class="text-center">Edit Share</h3>
        @auth
            <form action="" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="form-group row">
                    <label for="name_of_company" class="col-3">Choose a Company :</label>
                    <div class="col-9">
                        <select name="name_of_company" id="" class="form-control form-control-sm">
                            <option value="nabil" {{ (isset($share) && $share->name_of_company == 'nabil') ? 'selected' : ''}}>Nabil Bank</option>
                            <option value="himal" {{ (isset($share) && $share->name_of_company == 'himal') ? 'selected' : ''}}>Himalayan Bank</option>
                            <option value="sikles" {{ (isset($share) && $share->name_of_company == 'sikles') ? 'selected' : ''}}>Sikles Hydropower Ltd</option>
                            <option value="chilime" {{ (isset($share) && $share->name_of_company == 'chilime') ? 'selected' : ''}}>Chilime Hydropower Ltd</option>
                            <option value="soaltee" {{ (isset($share) && $share->name_of_company == 'soaltee') ? 'selected' : ''}}>Soaltee Hotel</option>
                            <option value="barahi" {{ (isset($share) && $share->name_of_company == 'barahi') ? 'selected' : ''}}>Hotel Barahi</option>
                            <option value="cdec" {{ (isset($share) && $share->name_of_company == 'cdec') ? 'selected' : ''}}>CDEC Hydropower Investment Ltd</option>
                            <option value="tourism" {{ (isset($share) && $share->name_of_company == 'tourism') ? 'selected' : ''}}>Tourism Investment Ltd</option>
                        </select>
                        @error('name_of_company')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="share_no" class="col-3">No. of Share :</label>
                    <div class="col-9">
                        <input type="number" name="share_no" class="form-control form-control-sm" value="{{ $share->share_no }}" placeholder="Enter No. of Shares" required min="10">
                        @error('share_no')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="amt" class="col-3">Amount of Share :</label>
                    <div class="col-9">
                        <input type="number" name="amt" class="form-control form-control-sm" value="{{ $share->amt }}" min="100">
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
