@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Simple Larave CRUD </h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{url('products/create')}}" title="Create a product"> <i class="fas fa-plus-circle"></i>
                    </a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{$message}}</p>
        </div>
    @endif

    <table class="table table-bordered table-responsive-lg">
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>description</th>
            <th>Price</th>
            <th>Date Created</th>
            <th width="150px">Actions</th>
        </tr>
        {{$products}}
        @foreach ($products as $key => $product)
            <tr>
                <td>{{$key+1}}</td>
                <td>{{$product->name}}</td>
                <td>{{$product->description}}</td>
                <td>{{$product->price}}</td>
                <td>{{$product->created_at}}</td>
                <td align="center">
                    <form action="{{route('delete',['id' => $product->id])}}" method="POST">
                    <a href="{{route('show',['id' => $product->id]) }}" title="show">
                        <i class="fas fa-eye text-success  fa-lg"></i>
                    </a>

                    <a href="{{route('edit',['id' => $product->id]) }}">
                        <i class="fas fa-edit  fa-lg"></i>
                    </a>
                    
                        @csrf
                        @method('DELETE')

                        <button type="submit" title="delete" style="border: none; background-color:transparent;">
                            <i class="fas fa-trash fa-lg text-danger"></i>
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

    {!! $products->links() !!}

@endsection