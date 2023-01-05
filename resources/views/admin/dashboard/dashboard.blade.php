@extends('admin.layout.templateAdmin')
@section('page-heading2')
  <div class="justify-content-between mb-4">
    <h2 class="font-weight-bold ">Hello {{ Auth::user()->name }}</h2>
    <div class="font-weight-normal mb-0">Welcome to Dashboard</div>
  </div>
@endsection

@section('content2')
<div class="row">
  <div class="col-md-6 grid-margin stretch-card">
    <div class="card">
      <div class="card-people">
        <img src="admin/images/dashboard/laundry.jpg" alt="people" >
      </div>
    </div>
  </div>
  <div class="col-md-6 grid-margin transparent">
    <div class="row">
      <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-tale">
          <div class="card-body">
            <center> 
              <p style="font-size: 25px">Number of Users</p>
              <p class="mb-4" style="font-size: 45px; margin-top:30px"><b>{{ $user }}</b></p>
            </center>
          </div>
        </div>
      </div>
      <div class="col-md-6 mb-4 stretch-card transparent">
        <div class="card card-dark-blue">
          <div class="card-body">
            <center> 
              <p style="font-size: 25px">Number of Admin</p>
              <p class="mb-4" style="font-size: 45px; margin-top:30px"><b>{{ $admin }}</b></p>
            </center>
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
        <div class="card card-light-blue">
          <div class="card-body">
            <center> 
              <p style="font-size: 25px">Number of Product</p>
              <p class="mb-4" style="font-size: 45px; margin-top:30px"><b>{{ $product }}</b></p>
            </center>
          </div>
        </div>
      </div>
      <div class="col-md-6 stretch-card transparent">
        <div class="card card-light-danger">
          <div class="card-body">
            <p class="mb-4">Number of Clients</p>
            <p class="fs-30 mb-2">47033</p>
            <p>0.22% (30 days)</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="col-12 grid-margin stretch-card">
  <div class="card">
      <div class="card-body">
<div class="table-responsive"> 
              <table class="table table-striped" class="display nowrap">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Transaction Date</th>
                    <th>Customer</th>
                    <th>Payment</th>
                    <th>Status Order</th>
                    <th>Total</th>
                    <th>Action</th>
                </tr>
            </thead>
</div>
</div></div></div>


@endsection