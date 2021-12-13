
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
            <th scope="col">image</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">quantity</th>
            <th scope="col">Details</th>

          </tr>
        </thead>
        <tbody>
            @foreach ($products as $key=>$product)
            <tr>
                <th scope="row">{{$key+1}}</th>
                <td>
                  <img width="100px" src="{{url('/uploads/'.$product->image)}}" alt="">
                </td>
                <td>{{$product->name}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->quantity}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->details}}</td>
               
              </tr>
            @endforeach
         
          
        </tbody>
      </table></div>
  <div class="col-sm-1"></div>
</div>


  @endsection 