@extends('layouts.app')

@section('content')
    <h1 style="text-align: center">All Products</h1>
    <h1 class="btn btn-success" style="font-size: 20px;"><a href="/products/create" style="color: black;">Add Product</a></h1>
    @if(count($products) > 0)
    <table border="2" class="table">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Code</th>
            <th>Price</th>
            <th>Action</th>
        </tr>
        @foreach($products as $product)
        <tr>   
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->code}}</td>
            <td>{{$product->price}}</td>
            <td>
                <a href="/products/{{$product->id}}/edit" class="btn btn-primary" style="float:left">Edit</a>
                {!!Form::open(['action' => ['ProductsController@destroy', $product->id], 'method' => 'POST'])!!}
                    {{Form::hidden('_method', 'DELETE')}}
                    {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                {!!Form::close()!!}
            </td>
        </tr>
        @endforeach
    </table>
    {{$products->links()}}
    @else
        <p>No Products Found</p>
    @endif
@endsection