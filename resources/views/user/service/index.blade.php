@extends('user.layout.templateUser')

@section('page-heading')
<div class="justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800 mb-4 ">Services</h1>
</div>

@if(session()->has('message'))
    <div class="alert alert-success">   
        <button type="button" class="close" data-dismiss="alert">x</button>
        {{session()->get('message')}}
    </div>
@endif

@endsection

@section('content')
{{-- BABI BABI --}}

<div class="row">
    <div class="col-lg-12 grid-margin stretch-card">
        <div class="card">
            <div class="card-body">
            
                <br>
                <div class="table-responsive"> 
                    <table class="table table-striped" class="display nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Product</th>
                                <th>Price</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($service as $s)
                        <tr>
                            <td>{{ $s->service_id }}</td>
                            <td>
                                <img src="{{ asset('/uploads/layanan/'.$s->image) }}" alt="" style="margin-top: 10px" width="60px" height="60px">
                            </td>
                            <td>{{ $s->category }}</td>
                            <td>{{ $s->product  }}</td>
                            <td>{{ $s->price}}</td>
                        

                            
                            <td>
                                <form action="{{url('addChart' .$s->service_id)}}" method="POST">
                                {{-- <form action="" method="POST"> --}}
    
                                    @csrf
                                    <div style="display: flex">
                                        <div>
                                            <input type="number" value="1" min="1" class="form-control" name="quantity" width="100px">
                                        </div>

                                        {{-- <a href="{{ url('addChart'.$s->service_id)}}" class="btn btn-info">Add to Chart</a> --}}
                                        
                                        <input class="btn btn-info" type="submit" value="Add to Chart">
                                    </div>
                                </form>
                            </td>    
                        </tr>

                        @endforeach
                        
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection