@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1>Permission  Create</h1>
                    </div>
                    <div class="ml-auto d-flex align-items-center">
                        <nav>
                            <ol class="breadcrumb p-0 m-b-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Permission Add
                                </li>
                                <li class="breadcrumb-item active text-primary" aria-current="page">Data Table</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <!-- end page title -->
            </div>
        </div>
        <!-- end row -->
        <!-- begin row -->
        <div class="row select-wrapper">
            <div class="col-md-12 col-12 selects-contant">
                <div class="card card-statistics">
                    <div class="card-header">
                        <div class="card-heading">
                            <h4 class="card-title">Permissions Details</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route("permissions.store") }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="required" for="title">{{ trans('cruds.permission.fields.title') }}</label>
                                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                                @if($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                                <span class="help-block">{{ trans('cruds.permission.fields.title_helper') }}</span>
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger" type="submit">
                                    {{ trans('global.save') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
 @endsection
