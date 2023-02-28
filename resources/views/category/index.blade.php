@extends('layouts.app')
@section('admin')

<!------------------------
        * All Category *
  ------------------------>

  <div class="container">
        <h5>All Category</h5>
        <div class="row">
                <div class="col-lg-12">
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

                                                        @foreach($categories as $category)
                                                        <tr>
                                                                <td>{{$categories->firstItem()+$loop->index}}</td>
                                                                <td>{{$category->user->name}}</td>
                                                                <td>{{$category->category_name}}</td>
                                                                <td>{{$category->created_at->diffForHumans()}}</td>
                                                                <td>
                                                                        <a href="{{url('category/edit/' . $category->id)}}" class="btn btn-info waves-effect waves-light"><i class="fas fa-edit"></i></a>
                                                                        <a href="{{url('category/softdelete/' . $category->id)}}" class="btn btn-danger waves-effect waves-light"><i class="fas fa-trash"></i></a>
                                                                </td>
                                                        </tr>
                                                        @endforeach
                                                        </tbody>
                                        </table>
                                        {{$categories->links()}}
                </div>
        </div>
  </div>
  <hr class="ruler">
  <!--------------------------------
        * Add Category *
  ----------------------------------->
  <div class="container my-3" >
  <h5>Add Category</h5>
        <div class="row">
                        <div class="col-lg-12">
                                @if(session('success'))
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                        <strong>{{session('success')}}</strong>
                                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
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

  <hr class="ruler">
<!--------------------------------
        * All Category Restore *
  ----------------------------------->
  <div class="container my-3">
  <h5>Trash Lists</h5>
        <div class="row">
                <div class="col-lg-12">
                               <table class="table table-responsive table-borderless">
                                        <thead>
                                                <tr class="bg-light">
                                                        <th>S/N</th>
                                                        <th width="20%">User</th>
                                                        <th width="20%">Email</th>
                                                        <th width="18%">Date</th>
                                                        <th width="30%">Action</th>
                                                </tr>
                                        </thead>
                                        <tbody>

                                        @foreach($trashCategory as $category)
                                        <tr>
                                                <td>{{$categories->firstItem()+$loop->index}}</td>
                                                <td>{{$category->user->name}}</td>
                                                <td>{{$category->category_name}}</td>
                                                <td>{{$category->created_at->diffForHumans()}}</td>
                                                <td>
                                                        <a href="{{url('category/restore/' . $category->id)}}" class="btn btn-info waves-effect waves-light">Restore</a>
                                                        <a href="{{url('category/perDelete/' . $category->id)}}" class="btn btn-danger waves-effect waves-light">Delete Permanently</a>
                                                </td>
                                        </tr>
                                        @endforeach
                                        </tbody>
                              </table>
                        {{ $trashCategory->links()}}
                </div>
        </div>
  </div>

@endsection