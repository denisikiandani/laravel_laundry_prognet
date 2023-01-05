@extends('admin.layout.templateAdmin')

@section('page-heading')
<div class="justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800 mb-4 ">Users Orders</h1>
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
                                <th>ID Order</th>
                                <th>Order Date</th>
                                <th>Name</th>
                                <th>Category</th>
                                <th>Product</th>
                                <th>Price</th>
                                <th>Qty</th>
                                <th>status</th>
                                
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        @foreach ($order as $o)
                        <tr>
                            <td>{{ $o->id}}</td>
                            <td>{{ $o->created_at}}</td>
                            <td>{{ $o->name}}</td>
                            <td>{{ $o->category}}</td>
                            <td>{{ $o->product}}</td>
                            <td>{{ $o->price}}</td>
                            <td>{{ $o->quantity}}</td>
                            <td>{{ $o->status}}</td>
                        
                            <td>
                                <div style="display: flex">
                                    <a href="{{ url('status-update'.$o->id)}}" class="btn btn-success">Delivered</a>
                                  <form action="" method="POST" class="d-inline">
                                   @method('delete')
                                   <a href="{{ url('order-delete'.$o->id)}}" class='btn btn-danger'>Delete</a>
                                  </form>
                                 </div>
                                {{-- <form action="{{url('addChart' .$s->service_id)}}" method="POST">
    
                                    @csrf
                                    <div style="display: flex">
                                        <div>
                                            <input type="number" value="1" min="1" class="form-control" name="quantity" width="100px">
                                        </div>
                                        
                                        <input class="btn btn-info" type="submit" value="Add to Chart">
                                    </div>
                                </form> --}}
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