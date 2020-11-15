@extends('layouts.main')
@section('content')

<div class="content">
  <div class="card">
    @include('partials.messages')
    <div class="card-header">
        Edit Company
    </div>
    <div class="card-body">
      <form action="/{{$company->id}}" method="post" enctype="multipart/form-data">
        @method('PUT')
        @csrf
        <div class="form-group">
          <label for="inputName4">Name</label>
          <input type="text" class="form-control" name="name" id="inputName4" placeholder="Name" value="{{$company->name}}">
        </div>
        <div class="form-group">
          <label for="inputCategory">Category</label>
          <select name="inputCategory" class="form-control">
              <option selected hidden value="{{$company->category}}">{{$company->category}}</option>
              @foreach($categories as $category)
              <option value="{{ $category->name }}"> {{$category->name}} </option>
              @endforeach
          </select>
        </div>
        <div class="form-group">
          <label for="inputPhone">Phone Number</label>
          <input type="tel" class="form-control" name="inputPhone" id="phone" placeholder="Phone Number" value="{{$company->phone_number}}">
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
          <label for="image">Image</label>
          <input type="file" class="form-control" name="image" id="image">
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
  </div>
</div>

@endsection