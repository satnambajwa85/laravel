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
                            <h3 class="card-title">Edit User</h3>
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
                        <form id="quickForm" action="{{ route('user.update', $user->id) }}" method="post">

                            {{ csrf_field() }}
                            {{ method_field('put') }}
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="exampleInputName">Name</label>
                                    <input type="text" name="name" class="form-control" id="exampleInputName" value="{{$user->name}}"  placeholder="Enter user name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputSlug">Email</label>
                                    <input type="text" name="email" class="form-control" id="exampleInputSlug" value="{{$user->email}}"  placeholder="Email">
                                </div>

                                
                                <div class="form-group">
                                    <label for="exampleInpupassword">password</label>
                                    <input type="text" name="password" class="form-control" id="exampleInpupassword" value="{{$user->password}}"  placeholder="password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInpuphone">Phone</label>
                                    <input type="text" name="phone" class="form-control" id="exampleInpuphone" value="{{$user->phone}}"  placeholder="Phone">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputstatus">Status</label>
                                    <input type="text" name="status" class="form-control" id="exampleInputstatus" value="{{$user->status}}"  placeholder="Status">
                                </div>

                                <div class="form-group">
                                    <label>Roles</label>
                                    <select class="select2 select2-hidden-accessible" name="roles[]" multiple="" data-placeholder="Select User Roles" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                        @foreach($roles as $role)
                                            <option value="{{$role->id}}"
                                            @foreach($user->roles as $uRole)
                                                @if( $role->id == $uRole->id)  
                                                    selected
                                                @endif
                                            @endforeach 
                                            
                                            >{{$role->role}}</option>
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