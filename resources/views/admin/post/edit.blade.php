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
                            <h3 class="card-title">Edit Post</h3>
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
                        <form id="quickForm" action="{{ route('post.update', $post->id) }}" method="post">

                            {{ csrf_field() }}
                            {{ method_field('put') }}

                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputName">Title</label>
                                    <input type="text" name="title" class="form-control" id="exampleInputName" value="{{$post->title}}" placeholder="Enter Post Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputSlug">Slug</label>
                                    <input type="text" name="slug" class="form-control" id="exampleInputSlug" value="{{$post->slug}}" placeholder="Post Slug">
                                </div>

                                
                                <div class="form-group">
                                    <label for="exampleInputSubtitle">Sub Title</label>
                                    <input type="text" name="sub_title" class="form-control" id="exampleInputSubtitle" value="{{$post->sub_title}}" placeholder="Post sub title">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputBody">body</label>
                                    <input type="text" name="body" class="form-control" id="exampleInputBody" value="{{$post->body}}" placeholder="Post body">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputImage">image</label>
                                    <input type="text" name="image" class="form-control" id="exampleInputImage" value="{{$post->image}}" placeholder="Post Image">
                                </div>
                                
                                <div class="form-group">
                                    <label for="exampleInputStatus">Status</label>
                                    <input type="text" name="status" class="form-control" id="exampleInputStatus" value="{{$post->status}}" placeholder="Status">
                                </div>



                                <div class="form-group">
                                    <label>Tags</label>
                                    <select class="select2 select2-hidden-accessible" name="tags[]" multiple="" data-placeholder="Select a Tag" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        @foreach($tags as $tag)
                                            <option value="{{$tag->id}}"
                                            @foreach($post->tags as $postTag)
                                                @if( $postTag->id == $tag->id)  
                                                    selected
                                                @endif
                                            @endforeach    
                                            >{{$tag->name}}</option>
                                        @endforeach
                                    </select>
                                </div>

                                
                                <div class="form-group">
                                    <label>Categories</label>
                                    <select class="select2 select2-hidden-accessible" name="categories[]" multiple="" data-placeholder="Select a Category" style="width: 100%;" data-select2-id="2" aria-hidden="true">
                                        @foreach($categories as $category)
                                            <option value="{{$category->id}}"
                                            @foreach($post->categories as $postCat)
                                                @if( $postCat->id == $tag->id)  
                                                    selected
                                                @endif
                                            @endforeach

                                            >{{$category->name}}</option>
                                        @endforeach
                                    </select>
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