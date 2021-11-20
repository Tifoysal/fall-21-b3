@extends('admin.master')


@section('content')

    <h1>Create an Category</h1>

    <form action="{{route('category.add')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter Category Name</label>
            <input name="name" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Enter category details</label>
            <input name="details" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

        </div>
        

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

@endsection
