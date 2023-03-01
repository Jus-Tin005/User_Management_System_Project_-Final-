@extends('layouts.app')
@section('admin')
<!------------------------
        * Sweet Alert Box  CSS*
  ------------------------>
<link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/5.0.7/sweetalert2.min.css" rel="stylesheet">
<!------------------------
        * All Brand *
  ------------------------>
  <div class="brand-container">
    <h5>All Brands</h5>
    <div class="table-wrapper-brand">
        <table class="fl-table">
            <thead>
                <tr>
                    <th>S/N</th>
                    <th>Brand Name</th>
                    <th>Brand</th>
                    <th>Brand Image</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($brands as $brand)
                <tr>
                    <td>{{$brands->firstItem()+$loop->index}}</td>
                    <td>{{$brand->brand_name}}</td>
                    <td>{{$brand->brand}}</td>
                    <td>
                        <img src="{{asset($brand->brand_image)}}" style="width:80px;height:50px;">
                    </td>
                    <td>{{$brand->created_at->diffForHumans()}}</td>
                    <td>

                        <form method="POST" action="{{url('brand/delete/' . $brand->id)}}">
                            @csrf
                            <a href="{{url('brand/edit/' . $brand->id)}}" class="btn btn-info waves-effect waves-light">Edit</a>
                            <input name="_method" type="hidden" value="DELETE">
                            <button type="submit" class="btn btn-danger waves-effect waves-light show-alert-delete-box" data-toggle="tooltip" title='Delete'>Delete</button>
                        </form>

                    </td>
                </tr>
                @endforeach
            <tbody>
        </table>
    </div>
</div>
<hr class="ruler">
<!------------------------
        * Add Brand *
  ------------------------>
  <div class="container">
                    <form action="{{route('store.brand')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                            <h5>Add Brand</h5>
                            <div class="row">
                                    @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                                            <strong>{{session('success')}}</strong>
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                    </div>
                                    @endif
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                                <label for="brand-name" class="mb-2">Brand Name</label>
                                                <input type="text" name="brand_name" class="form-control">
                                                @error('brand_name')
                                                                <div class="text-danger mb-2">{{$message}}</div>
                                                @enderror
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group mb-3">
                                                <label for="brand" class="mb-2">Brand</label>
                                                <input type="text" name="brand" class="form-control">
                                        </div>
                                    </div>


                            <div class="col-md-6">
                                    <div class="form-group mb-3">
                                        <label for="b-img" class="mb-2">Brand Image</label>
                                        <input type="file" name="brand_image" class="form-control">
                                        @error('brand_image')
                                                                <div class="text-danger mb-2">{{$message}}</div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button type="submit"class="btn btn-success waves-effect waves-light">Submit</button>
                    </form>
</div>


<!------------------------
        * Sweet Alert Box  JS*
  ------------------------>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>

    <script type="text/javascript">
    $('.show-alert-delete-box').click(function(event){
        var form =  $(this).closest("form");
        var name = $(this).data("name");
        event.preventDefault();
        swal({
            title: "Are you sure you want to delete this brand?",
            text: "If you delete this, it will be gone forever.",
            icon: "warning",
            type: "warning",
            buttons: ["Cancel","Yes!"],
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((willDelete) => {
            if (willDelete) {
                form.submit();
            }
        });
    });
</script>
@endsection

