@extends('admin.layout.templateAdmin')

@section('page-heading')
<div class="justify-content-between mb-4">
  <h2 class="font-weight-bold ">Hello {{ Auth::user()->name }}</h2>
  <div class="font-weight-normal mb-0">Welcome to Dashboard</div>
</div>
@endsection

@section('content')
<div class="col-lg-6 grid-margin stretch-card">
  <div class="card">
    <div class="card-body">
      <h4 class="card-title">Bar chart</h4>
      <canvas id="barChart"></canvas>
    </div>
    
  </div>
</div>
</div>

@endsection