@extends('layouts.app')
@section('admin')
<div class="container  my-3">
      <div class="table-wrapper">
              <div class="table-title">
                          <div class="row">
                              <div class="col-12">
                                        <h5>All <b>Users</b></h5>
                              </div>
                                <div class="col-12 d-flex justify-content-end">
                                        <a class="btn btn-success" href="{{ route('users.create') }}"><i class="fas fa-plus-circle"></i><span>Add</span></a>
                                </div>
                          </div>
              </div>
      </div>

      @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
      @endif


      <table class="table table-bordered table-responsive table-striped table-hover">
      <tr>
          <th>Sr.No</th>
          <th>Name</th>
          <th>Email</th>
          <th>Roles</th>
          <th style="width:175px;">Action</th>
      </tr>
      @foreach ($data as $key => $user)
        <tr>
          <td>{{ ++$i }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>
            @if(!empty($user->getRoleNames()))
              @foreach($user->getRoleNames() as $v)
                <label class="badge badge-success">{{ $v }}</label>
              @endforeach
            @endif
          </td>
          <td>
            <a class="btn btn-warning" href="{{ route('users.show',$user->id) }}"><i class="fas fa-eye"></i></a>
            <a class="btn btn-primary" href="{{ route('users.edit',$user->id) }}"><i class="fas fa-edit"></i></a>
              {!! Form::open(['method' => 'DELETE','route' => ['users.destroy', $user->id],'style'=>'display:inline']) !!}
             {!! Form::button('<i class="fa fa-trash"></i>', array('class' => 'btn  btn-danger', 'type' => 'submit')) !!}
             {!! Form::close() !!}

          </td>
        </tr>
      @endforeach
      </table>
                        <div class="clearfix">
                                        <div class="text-hint">Showing <b>6</b> out of <b>over 150</b> entries</div>
                                                <ul class="pagination">
                                                        <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                                        <li class="page-item active"><a class="page-link" href="#">3</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">4</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">5</a></li>
                                                        <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                                </ul>
                                        </div>
                        </div>
      {!! $data->render() !!}
      @endsection
</div>















