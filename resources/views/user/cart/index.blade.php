@extends('user.layout.templateUser')

@section('page-heading')
<div class="justify-content-between mb-4">
    <h1 class="h1 mb-0 text-gray-800 mb-4 ">Keranjang Anda</h1>
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
                {{-- <div class="col-md-2" style="float: right">
                    <a href="{{ url('service-create') }}" class="btn btn-primary ml-4">Order</a> <br>
                </div>
                <br>
                <br> --}}
                <br>
                <div class="table-responsive"> 
                    <table class="table table-striped" class="display nowrap">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Image</th>
                                <th>Category</th>
                                <th>Product</th>
                                <th>Qty</th>
                                <th>Price</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        
                 {{-- <form action="{{url('order')}}" method="POST">
                        @csrf --}}
                        @foreach ($carts as $c)
                        <form action="{{url('order')}}" method="POST">
                            @csrf
                        <tr>
                            <td>{{ $c->id}}</td>
                            <td>
                                <img src="{{ asset('/uploads/layanan/'.$c->image) }}" alt="" style="margin-top: 10px" width="60px" height="60px">
                            </td>
                            <td>
                                <input type="text" name="product_category[]" value="{{ $c->category}}" hidden="">
                                {{ $c->category}}
                            </td>
                            <td>
                                <input type="text" name="product[]" value="{{ $c->product}}" hidden="">
                                {{ $c->product}}
                            </td>
                            <td>
                                <input type="number" name="quantity[]" value="{{ $c->quantity}}" hidden="">
                                {{ $c->quantity}}
                            </td>
                            <td>
                                <input type="number" name="price[]" value="{{ $c->price}}" hidden="">
                                {{ $c->price}}
                            </td>
                            <td>
                                {{-- <form action="" method="POST" class="d-inline"> --}}
                                    {{-- @method('delete') --}}
                                    <a href="{{ url('cart-delete'.$c->id)}}" class='btn btn-danger'>Delete</a>
                                {{-- </form> --}}
                            </td>

                        </tr>
                        
                        </tbody>
                        @endforeach
                    </table>

                    {{-- <button class="btn btn-primary ml-4" type="submit" >Confirm Orders</button> --}}
                    <br><br><br>
                    <div class="col-md-2" style="float: right">
                        {{-- <input type="submit" class="btn btn-primary ml-4" value="Confirm Orders"> --}}
                        <button type="submit" class="btn btn-primary ml-4">Confirm Orders</button>
                        {{-- <a href="" class="btn btn-primary ml-4">Confirm Orderr</a> <br> --}}
                    </div>

                </form>

                </div>
            </div>
        </div>
    </div>
</div>

@endsection