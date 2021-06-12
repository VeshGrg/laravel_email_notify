@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                Change Password Form
            </div>
        </div>

        <form action="{{ route('update-password', $pass->id) }}" method="POST" enctype="multipart/form-data">
            @method('patch')
            @csrf
            {{ $errors }}
            <div class="form-group row">
                <label for="newPassword" class="col-3">Password :</label>
                <div class="col-9">
                    <input type="password" name="newPassword" class="form-control form-control-sm" placeholder="Enter New Password here" required>
                    @error('newPassword')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="newPassword_confirmation" class="col-3">Retype-Password :</label>
                <div class="col-9">
                    <input type="password" name="newPassword_confirmation" class="form-control form-control-sm" placeholder="Retype Password Here" required>
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
