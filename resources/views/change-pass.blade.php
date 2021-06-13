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
                <label for="currentPassword" class="col-3">Current Password :</label>
                <div class="col-9">
                    <input type="password" name="currentPassword" class="form-control form-control-sm" placeholder="Enter your Current Password here" required>
                    @if(session('msg_currentPassword'))
                        <p class="text-danger">{{ session('msg_currentPassword') }}</p>
                        @endif
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-3">Password :</label>
                <div class="col-9">
                    <input type="password" name="password" id="password" class="form-control form-control-sm" placeholder="Enter New Password here" required>
                    @error('password')
                    <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password_confirmation" class="col-3">Retype-Password :</label>
                <div class="col-9">
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-sm" placeholder="Retype Password Here" required>
                    <span class="text-danger" id="error_pwd"></span>
                </div>

            </div>

            <div class="form-group row">
                <div class="offset-3 col-9">
                    <button type="submit" id="submit">Submit</button>
                    <button type="reset">Reset</button>
                </div>
            </div>
        </form>
    </div>
@endsection
