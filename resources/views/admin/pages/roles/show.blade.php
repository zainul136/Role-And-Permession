@extends('admin.layouts.app')
@section('content')
    <div class="container-fluid">
        <!-- begin row -->
        <div class="row">
            <div class="col-md-12 m-b-30">
                <!-- begin page title -->
                <div class="d-block d-sm-flex flex-nowrap align-items-center">
                    <div class="page-title mb-2 mb-sm-0">
                        <h1>Role </h1>
                    </div>
                    <div class="ml-auto d-flex align-items-center">
                        <nav>
                            <ol class="breadcrumb p-0 m-b-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html"><i class="ti ti-home"></i></a>
                                </li>
                                <li class="breadcrumb-item">
                                    Role
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
        <div class="row">
            <div class="col-lg-12">
                <div class="card card-statistics">
                    <div class="card-body">
                        <div class="datatable-wrapper table-responsive">
                            <table id="datatable" class="display compact table table-striped table-bordered">
                                <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Role</th>
                                    <th>Permission</th>

                                </tr>
                                </thead>
                                <tbody>
                                    <tr>

                                        <td> {{ $role->id }}</td>
                                        <td>{{ $role->title }}</td>
                                        @foreach($role->permissions as $key => $permissions)
                                            <td>{{ $permissions->title }}</td>
                                        @endforeach

                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end row -->
    </div>

@endsection
