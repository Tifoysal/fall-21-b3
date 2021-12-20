@extends('admin.master')


@section('content')

    <h1>Create a product</h1>

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            <div>
                <p class="alert alert-danger">{{$error}}</p>
            </div>
        @endforeach
    @endif

    @if(session()->has('msg'))
        <p class="alert alert-success">{{session()->get('msg')}}</p>
    @endif

    <form action="{{route('admin.product.update',$product->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Product Name</label>
            <input value="{{$product->name}}" required name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Product price</label>
            <input value="{{$product->price}}" required name="price" type="number" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div><div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Product Quantity</label>
            <input value="{{$product->quentity}}" required name="quantity" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>

        <div class="form-group">
            <label for="exampleFormControlSelect1">Select Category</label>
            <select required name="category_id" class="form-control" id="exampleFormControlSelect1">
                @foreach ($categories as $category)
                <option value="{{$category->id}}">
                    {{$category->name}}
                </option>
                @endforeach
            </select>
          </div>

        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Product Description</label>
            <input value="{{$product->description}}" required name="description" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div>
        {{-- <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Upload Product Image</label>
            <input name="image" type="file" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
        </div> --}}

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
