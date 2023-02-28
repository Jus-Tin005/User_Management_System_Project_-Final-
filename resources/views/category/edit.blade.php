@extends('layouts.app')
@section('admin')

<!------------------------
        * All Category *
  ------------------------>
<div class="container mt-5 px-2">
               <h5>Edit Category</h5>
               <div class="row mr-2" style="float:right;">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session('success')}}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="col-12">
                                                <form action="{{url('category/update/' . $categories->id)}}" method="POST">
                                                        @csrf
                                                        <div class="mb-2">
                                                                <label for="category-name" class="form-label"><strong>Category Name</strong></label>
                                                                <input type="text"  name="category_name" class="form-control" value="{{$categories->category_name}}">
                                                        </div>
                                                        @error('category_name')
                                                                <div class="text-danger mb-2">{{$message}}</div>
                                                        @enderror

                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Update Category</button>
                                                </form>
                        </div>
               </div>

</div>

@endsection