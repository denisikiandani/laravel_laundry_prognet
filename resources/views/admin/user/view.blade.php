@extends('admin.layout.templateAdmin')

@section('page-heading2')
{{-- <div class="justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800 mb-4 ">View Contact Notification</h1>
</div> --}}
@endsection

@section('content2')
<div class="row">
    <div class="col-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">

            <div class="justify-content-between mb-4">
                <h1 class="h1 mb-0 text-gray-800 mb-4 ">View Detail User</h1>
            </div>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form class="forms-sample" action="{{ url('user-update')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row gutters">
                    
        

                   
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mb-2 text-primary">Personal Details</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="fullName">Full Name</label>
                            <input type="text" name="name" class="form-control" value ="{{ $user->name }}" id="fullName" placeholder="Enter full name">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="eMail">Email</label>
                            <input type="email"  name="email" class="form-control" id="eMail" value ="{{ $user->email }}" placeholder="Enter email ID">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="number" name="phone" class="form-control" id="phone" value ="{{ $user->phone }}"  placeholder="Enter phone number">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="website">Number Room</label>
                            <input type="number" name="room" class="form-control" id="room" value ="{{ $user->room }}"  placeholder="Number Room">
                        </div>
                    </div>
                </div>
                <div class="row gutters">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <h6 class="mt-3 mb-2 text-primary">Address</h6>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="Street">Street</label>
                            <input type="text" name="street" class="form-control" id="Street" value ="{{ $user->street }}" placeholder="Enter Street">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="ciTy">City</label>
                            <input type="text" name="city" class="form-control" id="ciTy" value ="{{ $user->city }}" placeholder="Enter City">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="sTate">State</label>
                            <input type="text" name="state" class="form-control" id="sTate" value ="{{ $user->state }}" placeholder="Enter State">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                        <div class="form-group">
                            <label for="zIp">Zip Code</label>
                            <input type="text" name="zip" class="form-control" id="zIp" value ="{{ $user->zip }}" placeholder="Zip Code">
                        </div>
                    </div>
                </div>
                <div class="row gutters">
                    <a href="{{ url('users')}}" class='btn btn btn-dark ml-3'>Back</a>
                </div>

            </form>

            </div>
        </div>
        </div>
        </div>
        </div>  
                {{-- @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif --}}
                {{-- <h4 class="card-title">Category of Tadika Laundry</h4> --}}


{{-- 
                <div class="row">
                    <div class="col-md-6">
                        <h5>First Name</h5><p> {{ $user->first_name }}</p>
                    </div>
                    <div class="col-md-6">
                        <h5>Last Name</h5><p> {{ $contact->last_name  }}</p>
                    </div>
                </div>
                <hr>
                
                <div class="row">
                    <div class="col-md-12">
                        <h5>Email</h5><p> {{ $contact->email }}</p>
                    </div>
                </div>
                <hr>
                
                <div class="row">
                    <div class="col-md-12">
                        <h5>Message</h5><p> {{ $contact->massage }}</p>
                    </div>
                </div>
                
                <hr>
                <div class="row">
                    <div class="col-md-12">
                        <h5>Created Date</h5><p> {{ $contact->created_at }}</p>
                    </div>
                </div>
                <br>


                <a href="{{ url('contact-notif')}}" class='btn btn btn-dark'>Back</a> --}}
             
            {{-- </div>
          </div> --}}
    </div>
</div>
@endsection