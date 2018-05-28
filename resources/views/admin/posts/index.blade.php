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
                <li class="breadcrumb-item"><a href="{{ action('PostController@index') }}">Home</a></li>
                <li class="breadcrumb-item active">Posts List</li>
                </ol>
            </div>
            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            @include('admin.messages')
            <div class="row">
                <div class="col-lg-6">
                    <a href="{{ action('PostController@create') }}" class="btn btn-info mb-3">
                        <i class="fa fa-plus-circle"></i>&nbsp;&nbsp; Create new Post
                    </a>
                </div>
            </div>
            <div class="card">
                <div class="card-header row">
                    <h3 class="card-title col-lg-6 my-auto">Posts List</h3>
                    <div class="card-tools">
                        <form action="" method="get">
                            <div class="input-group input-group-sm" style="width:200px">
                                <input type="text" name="q" placeholder="Search by post title" class="form-control">
                                <div class="input-group-append">
                                    <button type="submit" class="btn btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="card-body p-0 table-responsive">
                    <table class="table table-hover table-valign-middle text-center">
                        <tbody>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Slug</th>
                                <th>Thumbnail</th>
                                <th>Position</th>
                                <th>Description</th>
                                <th>Content</th>
                                <th>Category</th>
                                <th colspan="2">Action</th>
                            </tr>
                            @foreach($posts as $post)
                            <tr>
                                <td>{{ $post->id }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ str_limit($post->slug, 50) }}</td>
                                <td><img src="{{ $post->thumbnail }}" alt="{{ $post->title }}" width="200"></td>
                                <td>{{ $post->position }}</td>
                                <td>{{ str_limit(removePTag($post->description), 120) }}</td> 
                                <td>{{ str_limit(removePTag($post->content), 120) }}</td>
                                <td>{{ getCategoryColumn($post->category_id, 'name') }}</td>
                                <td>
                                    <a href="{{ action('PostController@edit', ['id' => $post->id]) }}" class="btn btn-light"><i class="fa fa-edit"></i></a>
                                    <a href="{{ action('PostController@destroy', ['id' => $post->id]) }}"onclick="return confirm('Are you sure?');" class="btn btn-danger"><i class="fa fa-trash-alt"></i></a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            {{ $posts->links() }}
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
<!-- ./wrapper -->
@endsection