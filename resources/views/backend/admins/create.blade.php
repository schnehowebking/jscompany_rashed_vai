@extends('layouts/layoutMaster')

@section('title', 'Administration - Create')

@section('vendor-style')
@endsection

@section('vendor-script')
@endsection

@section('page-script')
<script src="{{asset('assets/js/form-layouts.js')}}"></script>
@endsection

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4"><span class="text-muted fw-light">Admin/</span>Create</h4>

<!-- Multi Column with Form Separator -->
<div class="card mb-4">
  <div class="card-body">
    <form action="{{ route('administrative.store') }}" method="POST">
      @csrf
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-name">Full Name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="full_name" id="basic-default-name" placeholder="John Doe" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="user_name">User name</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="user_name" id="user_name" placeholder="username_here" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="phone">Phone</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" name="phone" id="phone" placeholder="mobile number here" />
        </div>
      </div>
      <div class="row mb-3">
        <label class="col-sm-2 col-form-label" for="basic-default-email">Email</label>
        <div class="col-sm-10">
            <input type="email" id="basic-default-email" name="email" class="form-control" placeholder="email@email.com"/>
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
            <option value="admin">Admin</option>
            <option value="sales">Sales Person</option>
            <option value="finance">Secretry</option>
          </select>
        </div>
      </div>
      <div class="row justify-content-end">
        <div class="col-sm-10">
          <button type="submit" class="btn btn-primary">Add Admin</button>
        </div>
      </div>
    </form>
  </div>
</div>

@endsection
