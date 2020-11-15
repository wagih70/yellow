@extends('layouts.main')
@section('content')

<div class="content">
  <div class="card">
    @include('partials.messages')
    <div class="card-header">
        Add Category
    </div>
    <div class="card-body">
      <form action="/addcategory" method="post">
        @csrf
        <div class="form-group">
          <label for="inputName4">Category</label>
          <input type="text" class="form-control" name="name" id="inputName4" placeholder="Category Name">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection