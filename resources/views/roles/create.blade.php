@extends('layouts.app')
@section('admin')
<section id="user-main" class="container my-3">
        <div class="table-wrapper">
                <div class="table-title">
                        <div class="row">
                                        <div class="col-12">
                                                <h5>Add New Role</h5>
                                        </div>
                                        <div class="col-12  d-flex justify-content-end">
                                                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
                                        </div>
                        </div>
                </div>
        </div>
        @if (count($errors) > 0)
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
                </ul>
            </div>
        @endif

        {!! Form::open(array('route' => 'roles.store','method'=>'POST')) !!}
        <div class="main-section">
                <div class="row">
                        <div class="col-12">
                                <div class="card">
                                        <div class="card-body">
                                                <div class="row mb-3">
                                                      <label for="name" class="col-sm-3 col-form-label"><strong>Name :</strong></label>
                                                        <div class="col-sm-9">
                                                                {!! Form::text('name', null, array('placeholder' => 'Name','class' => 'form-control')) !!}
                                                         </div>
                                                 </div>
                                                 <div class="row mb-3">
                                                      <label for="name" class="col-sm-3 col-form-label"><strong>Permission :</strong></label>
                                                        <div class="col-sm-9">
                                                                @foreach($permission as $value)
                                                                        <label>{{ Form::checkbox('permission[]', $value->id, false, array('class' => 'name')) }}
                                                                        {{ $value->name }}</label>
                                                                        <br/>
                                                                @endforeach
                                                         </div>
                                                 </div>
                                                  <div class="btn-group d-flex justify-content-end">
                                                            <button type="submit" class="btn btn-primary">Submit</button>
                                                  </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
        {!! Form::close() !!}
</section>
@endsection