@extends('layouts/layoutMaster')

@section('title', 'All Prospect')

@section('content')
<h4 class="py-3 breadcrumb-wrapper mb-4">
  <span class="text-muted fw-light">Dashboard /</span> Prospect
</h4>

<div class="card">
  <h5 class="card-header d-flex justify-content-between"><span>RD2 Interviewed</span> <a href="{{ route('prospect.create') }}">Add New Prospect</a></h5>
  <!--Search Form -->
  <hr class="mt-0">
  <div class="card-datatable table-responsive">
    <table class="datatables-basic table table-bordered yajra-datatable">
      <thead>
        <tr>
          <th>#</th>
          <th>Name</th>
          <th>First name</th>
          <th>Telephone</th>
          <th>Interview Status</th>
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
      ajax: "{{ route('prospect.index') }}",
      columns: [
          {data: 'DT_RowIndex', name: 'DT_RowIndex'},
          {data: 'name', name: 'name'},
          {data: 'first_name', name: 'first_name'},
          {data: 'telephone_prospect_1', name: 'telephone_prospect_1'},
          {
              data: 'interviewed',
              name: 'interviewed',
              orderable: false,
              searchable: true
          },
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
