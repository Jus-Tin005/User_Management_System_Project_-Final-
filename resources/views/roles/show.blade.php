@extends('layouts.app')
@section('admin')
<section id="user-main" class="container my-3">
        <div class="table-wrapper">
                <div class="table-title">
                        <div class="row">
                                        <div class="col-12">
                                                <h5>Show Role</h5>
                                        </div>
                                        <div class="col-12  d-flex justify-content-end">
                                                <a class="btn btn-primary" href="{{ route('roles.index') }}"> Back</a>
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
                                                                {{ $role->name }}
                                                         </div>
                                                </div>
                                                <div class="row mb-3">
                                                      <label for="name" class="col-sm-3 col-form-label"><strong>Permissions :</strong></label>
                                                        <div class="col-sm-9">
                                                                @if(!empty($rolePermissions))
                                                                    @foreach($rolePermissions as $v)
                                                                        <label class="label label-success">{{ $v->name }},</label>
                                                                    @endforeach
                                                                @endif
                                                         </div>
                                                </div>
                                                  <div class="btn-group d-flex justify-content-end">

                                                  </div>
                                        </div>
                                </div>
                        </div>
                </div>
        </div>
</section>
@endsection