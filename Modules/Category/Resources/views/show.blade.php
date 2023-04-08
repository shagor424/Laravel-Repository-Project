@extends('category::layouts.master')
@section('content')
<div class="card">
  <div class="card-header">
     <div class="row">
        <div class="col-md-6">
          <h5 class="fw-bold   font-weight-bold"> Category Details</h5>
        </div>
        <div class="col-md-6">
          <div class="row ">
            <div class="col-md-7 col-sm-12">
            </div>
            <div class="col-md-5 col-sm-12 text-center">
              <a href="{{route('view.category')}}" class="btn btn-info float-end  mx-auto">
              Category List
              </a>
            </div>

          </div>
        </div>
      </div>
  </div>
  
  <div class="card-body">
    <table class="table table-bordered" >
      <tr>
        <th>Category Name</th>
        <td>{{$category->category_name}}</td>
        <th>Category Code</th>
        <td>{{$category->category_code}}</td>
      </tr>
      <tr>
        <th>Parent Category</th>
        <td>{{$category->parent_category}}</td>
        <th>Description</th>
        <td>{{$category->description}}</td>
      </tr>
      <tr>
        <th>Status</th>
        <td>{{$category->status}}</td>
        <th>Create At</th>
        <td>{{date("d-m-Y", strtotime($category->created_at))}}</td>
      </tr>
    </table>
    
  </div>
</div>
@endsection