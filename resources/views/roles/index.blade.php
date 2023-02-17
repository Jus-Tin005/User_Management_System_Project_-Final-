@extends('layouts.app')
@section('admin')
<section id="user-main" class="container my-3">
        <div class="table-wrapper">
                <div class="table-title">
                        <div class="row">
                                        <div class="col-12">
                                                <h5>Role Management</h5>
                                        </div>
                                        <div class="col-12  d-flex justify-content-end">
                                                @can('role-create')
                                                    <a class="btn btn-success" href="{{ route('roles.create') }}">Add New Role</a>
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


        <table class="table table-bordered table-responsive table-striped table-hover">
                    <tr>
                        <th>Sr.No</th>
                        <th>Name</th>
                        <th style="width:175px;">Action</th>
                    </tr>
                    @foreach ($roles as $key => $role)
                    <tr>
                        <td>{{ ++$i }}</td>
                        <td>{{ $role->name }}</td>
                        <td>
                            <a class="btn btn-warning" href="{{ route('roles.show',$role->id) }}"><i class="fas fa-eye"></i></a>
                            @can('role-edit')
                            <a class="btn btn-primary" href="{{ route('roles.edit',$role->id) }}"><i class="fas fa-edit"></i></a>
                            @endcan
                            @can('role-delete')
                                {!! Form::open(['method' => 'DELETE','route' => ['roles.destroy', $role->id],'style'=>'display:inline']) !!}
                                {!! Form::button('<i class="fa fa-trash"></i>', array('class' => 'btn  btn-danger', 'type' => 'submit')) !!}
                                {!! Form::close() !!}
                            @endcan
                        </td>
                    </tr>
                    @endforeach
        </table>
{!! $roles->render() !!}
</section>
@endsection