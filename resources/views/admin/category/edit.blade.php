@extends('admin.layouts.admin')


@section('main-content') 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <!-- left column -->
                <div class="col-md-12">
                    <!-- jquery validation -->
                    <div class="card card-primary">
                        <div class="card-header">
                            <h3 class="card-title">Edit Category</h3>
                        </div>

                        @if( count($errors) > 0)
                            <div class="col-md-6">
                            @foreach($errors->all()  as $error)
                                <p class="alert alert-warning">{{ $error}}</p>
                            @endForeach
                            </div>
                        @endif
                        <!-- /.card-header -->
                        <!-- form start -->
                        <form id="quickForm" action="{{ route('category.update', $category->id) }}" method="post">

                            {{ csrf_field() }}
                            {{ method_field('put') }}

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputName">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName" value="{{$category->name}}" placeholder="Enter Category Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputSlug">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="exampleInputSlug" value="{{$category->slug}}" placeholder="Category Slug">
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>    
    </section>
    <!-- /.content -->
    
</div>

@endsection