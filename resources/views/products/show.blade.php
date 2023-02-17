@extends('layouts.app')
@section('admin')
<section id="user-main" class="container my-3">
        <div class="table-wrapper">
                <div class="table-title">
                        <div class="row">
                                        <div class="col-12">
                                                <h5>Show Product</h5>
                                        </div>
                                        <div class="col-12  d-flex justify-content-end">
                                                <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                                        </div>
                        </div>
                </div>
        </div>
        <div class="main-section">
                <div class="row">
                        <div class="col-12">
                                <div class="card">
                                        <div class="card-body">
                                                <div class="row mb-3">
                                                      <label for="name" class="col-sm-3 col-form-label"><strong>Name :</strong></label>
                                                        <div class="col-sm-9">
                                                                {{ $product->name }}
                                                         </div>
                                                 </div>
                                                 <div class="row mb-3">
                                                      <label for="name" class="col-sm-3 col-form-label"><strong>Details :</strong></label>
                                                        <div class="col-sm-9">
                                                                {{ $product->detail }}
                                                         </div>
                                                 </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>
@endsection