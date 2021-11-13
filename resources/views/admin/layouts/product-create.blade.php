@extends('admin.master')


@section('content')

    <h1>Create a product</h1>

    <form action="{{route('admin.product.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Product Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Product price</label>
            <input name="price" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Product Quantity</label>
            <input name="quantity" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Product Description</label>
            <input name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload Product Image</label>
            <input type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
