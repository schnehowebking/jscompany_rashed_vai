@extends('layouts/layoutMaster')

@section('title', 'Administration - Edit')

@section('vendor-style')
@endsection

@section('vendor-script')
@endsection

@section('page-script')
<script src="{{asset('assets/js/form-layouts.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Admin/</span>Edit</h4>

<!-- Multi Column with Form Separator -->
<div class="card mb-4">
  <div class="card-body">
    <form action="{{ route('administrative.update', $admin->id) }}" method="POST">
      @csrf
      @method('PUT')
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Full Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="{{ $admin->name }}" name="full_name" id="basic-default-name" placeholder="John Doe" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="user_name">User name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" value="{{ $admin->username }}" name="user_name" id="user_name" placeholder="username_here" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
        <div class="col-sm-10">
            <input type="email" id="basic-default-email" value="{{ $admin->email }}" name="email" class="form-control" placeholder="email@email.com"/>
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="password">Password</label>
        <div class="col-sm-10">
            <input type="password" id="password" name="password" class="form-control"/>
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="confirm_password">Confirm Password</label>
        <div class="col-sm-10">
            <input type="password" id="confirm_password" name="password_confirmation" class="form-control"/>
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="role">Role</label>
        <div class="col-sm-10">
          <select name="role" id="role" class="form-control">
            <option value="sales" {{ $admin->role == 'sales' ? "selected" : '' }}>Sales</option>
            <option value="finance" {{ $admin->role == 'finance' ? "selected" : '' }}>Finance</option>
            <option value="admin" {{ $admin->role == 'admin' ? "selected" : '' }}>Admin</option>
          </select>
        </div>
      </div>
      <div class="row justify-content-end">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Update Administrative</button>
          <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">Remove</button>
        </div>
      </div>
    </form>
  </div>
</div>



<div class="modal fade" id="deleteModal" data-delete_id="" tabindex="-1" aria-labelledby="deleteModalLabel"
aria-hidden="true">
  <div class="modal-dialog modal-sm">
      <div class="modal-content">
          <div class="modal-header">
              <h5 class="modal-title" id="deleteModalLabel">Delete User</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <p>Are you sure to delete this user?</p>
          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Close</button>
              <form action="{{ route('administrative.destroy', $admin->id) }}" method="POST">
                @csrf
                @method("DELETE")
                <input type="submit" class="btn btn-primary text-white">
              </form>
          </div>
      </div>
  </div>
</div>
@endsection
