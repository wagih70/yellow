@extends('layouts.main')
@section('content')

<div class="content">
  <div class="card">
    @include('partials.messages')
    <div class="card-header">
        Add Company
    </div>
    <div class="card-body">
      <form action="/" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
          <label for="inputName4">Name</label>
          <input type="text" class="form-control" name="name" id="inputName4" placeholder="Name">
        </div>
        <div class="form-group">
          <label for="inputCategory">Category</label>
          <select name="inputCategory" class="form-control">
              <option disabled selected hidden>Select Category</option>
              @foreach($categories as $category)
              <option value="{{ $category->name }}"> {{$category->name}} </option>
              @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="inputPhone">Phone Number</label>
          <input type="tel" class="form-control" name="inputPhone" id="phone" placeholder="Phone Number">
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="inputCity">City</label>
            <select name="inputCity" class="form-control">
              <option disabled selected hidden>Select City</option>
              @foreach($cities as $city)
              <option value="{{ $city->id }}"> {{$city->name}} </option>
              @endforeach
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="inputArea">Area</label>
            <select name="inputArea" class="form-control">
              <option disabled selected hidden>Select Area</option>
            </select>
          </div>
        </div>
        <div class="form-group">
          <label for="image">Name</label>
          <input type="file" class="form-control" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection