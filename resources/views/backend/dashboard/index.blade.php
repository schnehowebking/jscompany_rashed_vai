
@extends('layouts/layoutMaster')

@section('title', 'Dashboard')

@section('vendor-style')
<link rel="stylesheet" href="{{asset('assets/vendor/libs/apex-charts/apex-charts.css')}}" />
@endsection

@section('vendor-script')
<script src="{{asset('assets/vendor/libs/apex-charts/apexcharts.js')}}"></script>
@endsection

@section('content')
    <div class="row">
      <!-- Referral Chart-->
      <div class="col-sm-3 col-6 mb-4">
        <div class="card">
          <div class="card-body text-center">
            <h2 class="mb-1">Applications</h2>
            <span class="text-muted">Total : </span>
            <div id="referralLineChart"></div>
          </div>
        </div>
      </div>
    </div>
@endsection

@section('page-script')
{{-- <script src="{{asset('assets/js/dashboards-analytics.js')}}"></script> --}}
<script>

</script>
@endsection
