
@extends('website.master')

@section('content')
<div class="row">
  <div class="col-sm-1"></div>
  <div class="col-sm-10">
    <br><br><br>
    <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">details</th>
            <th scope="col">action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($categories as $key=>$category)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>{{$category->name}}</td>
                <td>{{$category->details}}</td>
                <td>
                    <a href="{{route('frontend.product.under.category',$category->id)}}" class="btn btn-info">View</a>
                </td>
              </tr>
            @endforeach
         
          
        </tbody>
      </table></div>
  <div class="col-sm-1"></div>
</div>


  @endsection 