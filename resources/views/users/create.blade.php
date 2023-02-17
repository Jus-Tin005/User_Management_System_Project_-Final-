@extends('layouts.app')
@section('admin')
<section class="container my-3">
             <div class="table-wrapper">
                    <div class="table-title">
                                <div class="row">
                                    <div class="col-12">
                                            <h5>Add New User</h5>
                                    </div>
                                    <div class="col-12  d-flex justify-content-end">
                                                <a class="btn btn-primary" href="{{ route('users.index') }}">Back</a>
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

            {!! Form::open(array('route' => 'users.store','method'=>'POST')) !!}
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
                                                      <label for="name" class="col-sm-3 col-form-label"><strong>Email :</strong></label>
                                                        <div class="col-sm-9">
                                                                    {!! Form::text('email', null, array('placeholder' => 'Email','class' => 'form-control')) !!}
                                                        </div>
                                                </div>

                                                    <div class="row mb-3">
                                                        <label for="name" class="col-sm-3 col-form-label"><strong>Password :</strong></label>
                                                        <div class="col-sm-9">
                                                                {!! Form::password('password', array('placeholder' => 'Password','class' => 'form-control')) !!}
                                                        </div>
                                                    </div>

                                                    <div class="row mb-3">
                                                        <label for="name" class="col-sm-3 col-form-label"><strong>Confirm Password :</strong></label>
                                                        <div class="col-sm-9">
                                                                {!! Form::password('confirm-password', array('placeholder' => 'Confirm Password','class' => 'form-control')) !!}
                                                        </div>
                                                    </div>


                                                    <div class="row mb-3">
                                                        <label for="name" class="col-sm-3 col-form-label"><strong>Role :</strong></label>
                                                        <div class="col-sm-9">
                                                                {!! Form::select('roles[]', $roles,[], array('class' => 'form-control','multiple')) !!}
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
            @endsection
</section>





