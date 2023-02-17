@extends('layouts.app')
@section('admin')
<section id="user-main" class="container my-3">
        <div class="table-wrapper">
                <div class="table-title">
                        <div class="row">
                                        <div class="col-12">
                                                <h5>All Products</h5>
                                        </div>
                                        <div class="col-12  d-flex justify-content-end">
                                        @can('product-create')
                                                <a class="btn btn-success" href="{{ route('products.create') }}">Add New Product</a>
                                        @endcan
                                        </div>
                        </div>
                </div>
        </div>
        @if ($message = Session::get('success'))
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        @endif

        <table class="table table-bordered">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Details</th>
                    <th style="width:175px;">Action</th>
                </tr>
                @foreach ($products as $product)
                <tr>
                    <td>{{ ++$i }}</td>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->detail }}</td>
                    <td>
                        <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                            <a class="btn btn-warning" href="{{ route('products.show',$product->id) }}"><i class="fas fa-eye"></i></a>
                            @can('product-edit')
                            <a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}"><i class="fas fa-edit"></i></a>
                            @endcan


                            @csrf
                            @method('DELETE')
                            @can('product-delete')
                            <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            @endcan
                        </form>
                    </td>
                </tr>
                @endforeach
    </table>
    {!! $products->links() !!}
</section>
@endsection