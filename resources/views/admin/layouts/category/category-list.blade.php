@extends('admin.master')


@section('content')

<h1>Category list</h1>

<a href="{{route('category.form')}}" class="btn btn-success">Create new category</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">Name</th>
        <th scope="col">Details</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($categories as $key=>$category)
        <tr>
            <th>{{$key+1}}</th>
            <td>{{$category->name}}</td>
            <td>{{$category->details}}</td>
        </tr>
        @endforeach
           
    
    
    </tbody>
</table>





@endsection
