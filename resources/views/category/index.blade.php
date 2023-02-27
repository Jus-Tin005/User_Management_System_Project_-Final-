@extends('layouts.app')
@section('admin')

<!------------------------
        * All Category *
  ------------------------>
<div class="container mt-5 px-2">
        <h5>All Category</h5>
     <div class="row">
                <div class="col-12">
                        <table class="table table-responsive table-borderless">
                                        <thead>
                                                <tr class="bg-light">
                                                        <th>S/N</th>
                                                        <th width="25%">User</th>
                                                        <th width="25%">Email</th>
                                                        <th width="25%">Date</th>
                                                        <th width="25%">Action</th>
                                                </tr>
                                        </thead>
                                        <tbody>
                                                @php($i=1)
                                        @foreach($categories as $category)
                                        <tr>
                                                <td>{{$i++}}</td>
                                                <td>{{$category->user_id}}</td>
                                                <td>{{$category->category_name}}</td>
                                                <td>{{$category->created_at->diffForHumans()}}</td>
                                                <td>
                                                        <a href="#" class="btn btn-info waves-effect waves-light"><i class="fas fa-edit"></i></a>
                                                        <a href="#" class="btn btn-danger waves-effect waves-light"><i class="fas fa-trash"></i></a>
                                                </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                        </table>
                </div>
     </div>
     <hr class="ruler">
      <div class="row mr-2" style="float:right;">
                        @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>{{session('success')}}</strong>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>
                        @endif
                        <div class="col-12">
                                                <form action="{{route('store.category')}}" method="POST">
                                                        @csrf
                                                        <div class="mb-2">
                                                                <label for="category-name" class="form-label"><strong>Category Name</strong></label>
                                                                <input type="text"  name="category_name" class="form-control">
                                                        </div>
                                                        @error('category_name')
                                                                <div class="text-danger mb-2">{{$message}}</div>
                                                        @enderror

                                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Add Category</button>
                                                </form>
                        </div>
        </div>

</div>



<!--------------------------------
        * All Category Restore *
  ----------------------------------->
@endsection