@extends('backend.layouts.master')

@section('content')

<div class="app-content content">
        <div class="content-overlay"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-12 mb-2 mt-1">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h5 class="content-header-title float-left pr-1 mb-0">User</h5>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb p-0 mb-0">
                                    <li class="breadcrumb-item"><a href="index.html"><i class="bx bx-home-alt"></i></a>
                                    </li>
                                    <li class="breadcrumb-item active">User List
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                
              

                <!-- Column selectors with Export Options and print table -->
                <section id="column-selectors">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                     <a href="{{route('admin.user.create.page')}}" class="btn btn-primary float-right">Create User </a> 
                                </div>
                                 @if ($message = Session::get('success'))
                                              <div class="alert alert-success alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong class="text-white" style="color:white">{{ $message }}</strong>
                                              </div>
                                              @endif
                                              @if ($message = Session::get('error'))
                                              <div class="alert alert-danger alert-block">
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong class="text-white" style="color:white">{{ $message }}</strong>
                                              </div>
                                              @endif
                                <div class="card-content">
                                    <div class="card-body card-dashboard">
                                    
                                        <div class="table-responsive">
                                            <table class="table table-striped dataex-html5-selectors">
                                                <thead>
                                                    <tr>
                                                    	<th>#</th>
                                                        <th>Name</th>
                                                        <th>Role</th>
                                                        <th>Email</th>
                                                        <th>Phone</th>
                                                        
                                                        <th width="20%">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                	@foreach($users as $key=> $user)
                                                    <tr>
                                                        <td>{{$key+1}}</td>
                                                        <td>{{$user->name}}</td>
                                                        <td>{{$user->role}}</td>
                                                        <td>{{$user->email}}</td>
                                                        <td>{{$user->phone}}</td>
                                                       
                                                        <td>
                                                        	<div class="btn-group" role="group" aria-label="Basic example">
                                                   <a type="button" class="btn btn-primary" href="{{route('admin.user.show.details',$user->id)}}"><i class="bx bx-show"></i></a>
                                                   <a type="button" class="btn btn-success" href="{{route('admin.user.edit.page',$user->id)}}"><i class="bx bx-edit"></i></a>
                                                    <a type="button" class="btn btn-danger" href="{{route('admin.user.delete',$user->id)}}"><i class="bx bx-trash"></i></a>
                                                </div>
                                                        </td>
                                                    </tr>
                                                   @endforeach
                                                   
                                                </tbody>
                                                
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Column selectors with Export Options and print table -->

                <!--/ Scroll - horizontal and vertical table -->
            </div>
        </div>
    </div>
@endsection