@extends('category::layouts.master')
@section('content')
<div class="card">
  <div class="card-header">
    <div class="row">
        <div class="col-md-6">
          <h5 class="fw-bold   font-weight-bold"> Category Edit</h5>
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
    {{--  <form action="{{route('store.category')}}" method="POST">
      @csrf --}}
      <form class="row g-3" action="{{route('update.category',$category->id)}}" method="POST">
        @csrf
        <div class="col-md-6">
          <label for="category_name" class="form-label">Category Name</label>
          <input type="text" class="form-control" value="{{$category->category_name}}" name="category_name" id="category_name">
          <font style="color:red">{{($errors)->has('category_name')?($errors->first('category_name')):''}}</font>
        </div>
        <div class="col-md-6">
          <label for="category_code" class="form-label">Category Code</label>
          <input type="number" class="form-control" value="{{$category->category_code}}" name="category_code" id="category_code">
          <font style="color:red">{{($errors)->has('category_code')?($errors->first('category_code')):''}}</font>
        </div>
        <div class="col-md-6">
          <label for="parent_category" class="form-label">Parent Category</label>
          <input type="text" class="form-control" value="{{$category->parent_category}}" name="parent_category" id="parent_category">
          <font style="color:red">{{($errors)->has('parent_category')?($errors->first('parent_category')):''}}</font>
        </div>
        <div class="col-md-6">
          <label for="description" class="form-label">Description</label>
          <input type="text" class="form-control" value="{{$category->description}}" name="description" id="description">
          <font style="color:red">{{($errors)->has('description')?($errors->first('description')):''}}</font>
        </div>
        
        <div class="col-12">
          <button type="submit" class="btn btn-success">Update Category</button>
        </div>
      </form>
      
    </div>
  </div>
  @endsection