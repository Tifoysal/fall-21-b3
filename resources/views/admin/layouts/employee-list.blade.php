@extends('admin.master')


@section('content')

<h1>Employee list</h1>

<a href="{{route('employee.create')}}" class="btn btn-success">Create new Employee</a>

<table class="table">
    <thead>
    <tr>
        <th scope="col">#</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">Handle</th>
    </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
            <tr>
                <th>{{$employee->id}}</th>
                <td>{{$employee->name}}</td>
                <td>{{$employee->email}}</td>
                <td>{{$employee->address}}</td>
            </tr>
        @endforeach
    
    
    </tbody>
</table>





@endsection
