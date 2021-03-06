@extends('admin.master')


@section('content')

<h1>Product list</h1>
<a href="{{route('admin.products.create')}}" class="btn btn-success">Create new product</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th>Image</th>
        <th scope="col">price</th>
        <th scope="col">quantity</th>
        <th scope="col">description</th>
        <th scope="col">category</th>
        <th scope="col">Action</th>

    </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <th>{{$product->id}}</th>
                <th>{{$product->name}}</th>
                <th>
                    <img src="{{url('/uploads/'.$product->image)}}" width="100px" alt="product image">
                </th>
                <th>{{$product->price}}</th>
                <th>{{$product->quentity}}</th>
                <th>{{$product->description}}</th>
                <th>{{$product->category->name}}</th>
                <th>
                    <a href="{{route('admin.product.edit',$product->id)}}" class="btn btn-info">Edit</a>
                </th>

            </tr>
        @endforeach


    </tbody>
</table>
@endsection
