@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center">Add a User</h3>
            <form action="{{ route('add-user') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="form-group row">
                <label for="name" class="col-3">Name :</label>
                <div class="col-9">
                    <input type="text" name="name" class="form-control form-control-sm" placeholder="Enter Username" required>
                    @error('name')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="email" class="col-3">Email :</label>
                <div class="col-9">
                    <input type="email" name="email" class="form-control form-control-sm" placeholder="Enter Email Address" required>
                    @error('email')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password" class="col-3">Password :</label>
                <div class="col-9">
                    <input type="password" name="password" class="form-control form-control-sm" placeholder="Enter Password here" required>
                    @error('password')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="password_confirmation" class="col-3">Retype-Password :</label>
                <div class="col-9">
                    <input type="password" name="password_confirmation" class="form-control form-control-sm" placeholder="Retype Password Here" required>
                </div>
            </div>

            <div class="form-group row">
                <label for="role" class="col-3">Role :</label>
                <div class="col-9">
                    <select name="role" id="" class="form-control form-control-sm" required>
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                        <option value="company">Company</option>
                    </select>
                    @error('role')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>

            <div class="form-group row">
                <label for="status" class="col-3">Status :</label>
                <div class="col-9">
                    <select name="status" id="" class="form-control form-control-sm" required>
                        <option value="active">Active</option>
                        <option value="inactive">Inactive</option>
                    </select>
                    @error('status')
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
