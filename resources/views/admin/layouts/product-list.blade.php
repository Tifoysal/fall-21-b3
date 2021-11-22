@extends('admin.master')


@section('content')

<h1>Product list</h1>
<a href="{{route('admin.products.create')}}" class="btn btn-success">Create new product</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">name</th>
        <th scope="col">price</th>
        <th scope="col">quantity</th>
        <th scope="col">description</th>
        <th scope="col">category</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
            <tr>
                <th>{{$product->id}}</th>
                <th>{{$product->name}}</th>
                <th>{{$product->price}}</th>
                <th>{{$product->quentity}}</th>
                <th>{{$product->description}}</th>
                <th>{{$product->category->name}}</th>

            </tr>
        @endforeach


    </tbody>
</table>
@endsection
