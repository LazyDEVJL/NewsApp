@extends('layouts.admin.app')
@section('content')
@include('layouts.admin.sidebar-navbar')
<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ action('CategoryController@index') }}">Categories</a></li>
                    <li class="breadcrumb-item active">Create new Cateogory</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            @include('admin.messages')
            <div class="card card-info w-75">
                <div class="card-header">
                    <h3 class="card-title">Create new Category</h3>
                </div>
                <form action="{{ action('CategoryController@createSave') }}" method="post" class="form-horizontal">
                    {{ csrf_field() }}
                    <div class="card-body">
                        <div class="form-row">
                            <div class="form-group col-lg-6">
                                <label for="name">Category Name</label>
                                <input type="text" name="txt_name" id="name" class="form-control">
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="slug">Slug</label>
                                <input type="text" name="txt_slug" id="slug" class="form-control" readonly>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-lg-2">
                                <label for="position">Position</label>
                                <input type="number" name="txt_position" id="position" class="form-control">
                            </div>
                            <div class="form-group col-lg-4">
                                <label for="sl_active">Show/Hide</label>
                                <select id="sl_active" class="form-control" name="sl_active">
                                    <option value="" selected>Choose..</option>
                                    <option value="1">Show</option>
                                    <option value="0">Hide</option>
                                </select>
                            </div>
                            <div class="form-group col-lg-6">
                                <label for="parent_category">Parent Category</label>
                                <select id="parent_category" class="form-control" name="sl_parent_id">
                                    <option value="">Choose..</option>
                                    <option value="0">Highest Grade</option>
                                    @foreach($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>    
                    <div class="card-footer row">
                        <div class="col-lg-6">
                            <input type="submit" value="Create" class="btn btn-info">
                            <input type="reset" value="Reset" class="btn btn-default ml-2">
                        </div>
                        <div class="col-lg-6" align="right">
                            <a href="{{ action('CategoryController@index') }}" class="btn btn-secondary">
                                <i class="fa fa-arrow-alt-circle-left"></i>&nbsp;&nbsp; Back
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
<!-- ./wrapper -->
@endsection