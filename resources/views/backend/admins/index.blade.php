@extends('layouts/layoutMaster')

@section('title', 'Administrative')

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Dashboard /</span> Admins
</h4>

<div class="card">
  <h5 class="card-header d-flex justify-content-between"><span>Admin Panel</span> <a href="{{ route('administrative.create') }}">Add New Admin</a></h5>
  <!--Search Form -->
  <hr class="mt-0">
  <div class="card-datatable table-responsive">
    <table class="datatables-basic table table-bordered yajra-datatable">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>User name</th>
          <th>Email</th>
          <th>Role</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>

      </tbody>
    </table>

  </div>
</div>

@endsection

@section('vendor-style')
  @include('vendor.datatable.styles')
@endsection

@section('vendor-script')
  @include('vendor.datatable.scripts')
@endsection

@section('page-script')
<script>

$(function () {

  var table = $('.yajra-datatable').DataTable({
      processing: true,
      serverSide: true,
      ajax: "{{ route('administrative.index') }}",
      columns: [
          {data: 'DT_RowIndex', name: 'DT_RowIndex'},
          {data: 'name', name: 'name'},
          {data: 'user_name', name: 'user_name'},
          {data: 'email', name: 'email'},
          {data: 'role', name: 'role'},
          {
              data: 'action',
              name: 'action',
              orderable: false,
              searchable: false
          },
      ],
  });

});
</script>
@endsection
