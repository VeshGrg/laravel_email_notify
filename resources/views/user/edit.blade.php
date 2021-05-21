@extends('layouts.app')
@section('content')
    <div class="container">
        <h3 class="text-center">Add a User</h3>
            <form action="{{ route('update-user', $user_data->id) }}" method="POST" enctype="multipart/form-data">
                @method('put')
                @csrf

                <div class="form-group row">
                    <label for="name" class="col-3">Name :</label>
                    <div class="col-9">
                        <input type="text" name="name" class="form-control form-control-sm" value="{{ @$user_data->name }}" placeholder="Enter Username" required>
                        @error('name')
                        <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="form-group row">
                    <label for="role" class="col-3">Role :</label>
                    <div class="col-9">
                        <select name="role" id="" class="form-control form-control-sm" required>
                            <option value="admin" {{(isset($user_data) && $user_data->role == 'admin') ? 'selected': '' }}>Admin</option>
                            <option value="user" {{ (isset($user_data) && $user_data->role == 'user') ? 'selected': '' }}>User</option>
                            <option value="company" {{ (isset($user_data) && $user_data->role == 'company') ? 'selected': '' }}>Company</option>
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
                            <option value="active" {{ (isset($user_data) && $user_data->status == 'active') ? 'selected': '' }}>Active</option>
                            <option value="inactive" {{ (isset($user_data) && $user_data->status == 'inactive') ? 'selected': '' }}>Inactive</option>
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
