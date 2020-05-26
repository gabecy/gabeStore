@extends('admin.layout.admin')

@section('content')

<h3>Product</h3>

<ul >
    @forelse($products as $product)
    <li class="list-group-item">
    
    <h4>Name of Product : {{$product->name}}</h4>
    
       <form action="{{route('product.destroy',$product->id)}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <input class="btn btn-sm btn-danger" type="submit" value="Delete"></form>

    </li>

    @empty

    <h3>No Product</h3>

    @endforelse
</ul>



@endsection