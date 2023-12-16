@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1>Role  Add</h1>
                    </div>
                    <div class="ml-auto d-flex align-items-center">
                        <nav>
                            <ol class="breadcrumb p-0 m-b-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Role Add
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
                            <h4 class="card-title">Default</h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route("roles.store") }}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label class="required" for="title">Title</label>
                                <input class="form-control {{ $errors->has('title') ? 'is-invalid' : '' }}" type="text" name="title" id="title" value="{{ old('title', '') }}" required>
                                @if($errors->has('title'))
                                    <span class="text-danger">{{ $errors->first('title') }}</span>
                                @endif
                            </div>
                            <div class="form-group mb-0">
                                <label for="permission"></label>
                                <select class="js-basic-multiple form-control select2-hidden-accessible" id="permission" name="permissions[]" multiple="" data-select2-id="4" tabindex="-1" aria-hidden="true">
                                    @foreach($permissions as $id => $permission)
                                        <option value="{{ $id }}" data-select2-id="{{ $id }}" {{ in_array($id, old('permissions', [])) ? 'selected' : '' }}>{{ $permission }}</option>
                                    @endforeach
                                </select>
                                @if($errors->has('permissions'))
                                    <span class="text-danger">{{ $errors->first('permissions') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                @if($errors->has('permissions'))
                                    <span class="text-danger">{{ $errors->first('permissions') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <button class="btn btn-danger" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

@endsection
