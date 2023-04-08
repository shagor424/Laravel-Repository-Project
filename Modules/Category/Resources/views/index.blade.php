@extends('category::layouts.master')
@section('content')
<div class="card">
  <div class="card-header">
    <div class="row">
        <div class="col-md-6">
          <h5 class="fw-bold   font-weight-bold"> Category List</h5>
        </div>
        <div class="col-md-6">
          <div class="row ">
            <div class="col-md-7 col-sm-12">
            </div>
            <div class="col-md-5 col-sm-12 text-center">
              <a href="{{route('create.category')}}" class="btn btn-info float-end  mx-auto">
              Create Category
              </a>
            </div>

          </div>
        </div>
      </div>
  </div>
  <div class="card-body">
    <div class="col-md-12">
      @if ($message = Session::get('success'))
      <div class="alert alert-success" role="alert" mb-5>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        <strong class="text-success">{{ $message }}</strong>
      </div>
      @endif
    </div>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">ID</th>
          <th scope="col">Category Name</th>
          <th scope="col">Category_code</th>
          <th scope="col">Parent Category</th>
          <th scope="col">Status</th>
          <th scope="col">Action</th>
        </tr>
      </thead>
      <tbody>
        @foreach($categories as $key=> $category)
        <tr>
          <th scope="row">{{$key+1}}</th>
          <td>{{$category->id}}</td>
          <td>{{$category->category_name}}</td>
          <td>{{$category->category_code}}</td>
          <td>{{$category->parent_category}}</td>
          <td>{{$category->status}}</td>
          <td>
            <a class=" btn btn-info btn-sm" href="{{route('show.category',$category->id)}}">Show </a>
            <a class=" btn btn-success btn-sm" href="{{route('edit.category',$category->id)}}">Edit </a>
            <a class=" btn btn-danger btn-sm" href="{{route('destroy.category',$category->id)}}">Delete</a>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection