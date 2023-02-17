@extends('layouts.app')
@section('admin')
<section id="user-main" class="container my-3">
        <div class="table-wrapper">
                <div class="table-title">
                        <div class="row">
                                        <div class="col-12">
                                                <h5>Add New Product</h5>
                                        </div>
                                        <div class="col-12  d-flex justify-content-end">
                                                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                                        </div>
                        </div>
                </div>
        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="main-section">
                <form action="{{ route('products.store') }}" method="POST">
                @csrf
                        <div class="row">
                                <div class="col-12">
                                        <div class="card">
                                                <div class="card-body">
                                                        <div class="row mb-3">
                                                            <label for="name" class="col-sm-3 col-form-label"><strong>Name :</strong></label>
                                                                <div class="col-sm-9">
                                                                        <input type="text" name="name" class="form-control product-content" placeholder="Name">
                                                                </div>
                                                        </div>
                                                        <div class="row mb-3">
                                                            <label for="name" class="col-sm-3 col-form-label"><strong>Detail :</strong></label>
                                                                <div class="col-sm-9">
                                                                        <textarea class="form-control product-content" style="height:200px" name="detail" placeholder="Details"></textarea>
                                                                </div>
                                                        </div>
                                                        <div class="btn-group d-flex justify-content-end">
                                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                        </div>
                                                </div>
                                        </div>
                                </div>
                        </div>
                </form>
        </div>
</section>
@endsection