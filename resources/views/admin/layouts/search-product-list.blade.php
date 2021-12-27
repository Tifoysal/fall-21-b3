@extends('admin.master')


@section('content')
<h3>Searched Product list</h3>

<a href="#" class="btn btn-warning" onclick="printDiv('PrintTableArea')">Print</a>

<div id="PrintTableArea">
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
        @if (!empty($products))
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
        @else
            <tr>
            <h1>product not found...404!</h1>
                <th></th>
            </tr>
            
        @endif
        


    </tbody>
</table>
</div>
<script type="text/javascript">
    function printDiv(divName) {
        var printContents = document.getElementById(divName).innerHTML;
        var originalContents = document.body.innerHTML;
        document.body.innerHTML = printContents;
        window.print();
        document.body.innerHTML = originalContents;
    }
</script>
@endsection
