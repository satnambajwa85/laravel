@extends('admin.layouts.admin')


@section('main-content') 
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Tag List</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tag</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->   
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                <a href="{{ route('tag.create') }}">Add Tag</a>
                </h3>
                
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th style="width: 10px">#</th>
                      <th>Name</th>
                      <th>Slug</th>
                      <th style="width: 40px">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach($tags as $tag)
                    <tr>
                      <td>{{ $tag->id}}</td>
                      <td>{{ $tag->name}}</td>
                      <td>{{ $tag->slug}}</td>
                      <td><a href="{{ route('tag.edit',$tag->id) }}">Edit</a></td>
                    </tr>
                  @endforeach
                    
                  </tbody>
                </table>
              </div>
              
            </div>
            <!-- /.card -->

          </div>
        </div>
      </div>
    </section> 
<div> 
@endsection