@extends('layouts/layoutMaster')

@section('title', 'Customers')

@section('content')
    <h4 class="py-3 breadcrumb-wrapper mb-4">
        <span class="text-muted fw-light">Dashboard /</span> Customers
    </h4>

    <div class="card">
        <div class="card-datatable table-responsive">
            <table class="datatables-basic table table-bordered yajra-datatable">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Phone</th>
                        <th>Address</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
    </div>

    <div class="modal fade" id="deleteModal" data-delete_id="" tabindex="-1" aria-labelledby="deleteModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="deleteModalLabel">Delete Category</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Are you sure to delete this Category?</p>
                    @csrf
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary text-white" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger text-white delete_btn"
                        data-bs-dismiss="modal">Delete</button>
                </div>
            </div>
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
        $(function() {
            var table = $('.yajra-datatable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('customers.index') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex'
                    },
                    {
                        data: 'name',
                        name: 'name'
                    },
                    {
                        data: 'phone',
                        name: 'phone'
                    },
                    {
                        data: 'address',
                        name: 'address'
                    },
                    {
                        data: 'status',
                        name: 'status'
                    },
                    {
                        data: 'action',
                        name: 'action',
                        orderable: false,
                        searchable: false
                    },
                ],
            });

            $("body").on("click", ".open_delete_modal", function() {
                var id = $(this).data('id');
                $("#deleteModal").attr('data-delete_id', id);
            })

            $("body").on("click", ".delete_btn", function() {
                var id = $("#deleteModal").data('delete_id');
                var url = "{{ route('customers.destroy', ':id') }}";
                url = url.replace(":id", id);
                $.ajax({
                    type: 'DELETE',
                    url: url,
                    data: {
                        "id": id,
                        "_token": "{{ csrf_token() }}"
                    },
                    success: function(data) {
                        data.success == true ? notify('success', data.message) : notify('error',
                            data.message);
                        table.ajax.url("{{ route('customers.index') }}").load();
                    }
                })
            })
        });
    </script>
@endsection
