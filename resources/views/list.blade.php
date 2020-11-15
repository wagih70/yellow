@extends('layouts.main')
@section('content')

<div class="container">     
  <table class="table table-bordered">
    <thead class="thead-light">
      <tr>
        <th style="width:15%">Image</th>
        <th style="width:15%">Name</th>
        <th style="width:10%">Category</th>
        <th style="width:25%">Phone Number</th>
        <th style="width:10%">City</th>
        <th style="width:10%">Area</th>
        @if (Auth::user() &&  Auth::user()->is_admin == 1)
          <th style="width:15%">Action</th>
        @endif
      </tr>
    </thead>
    <tbody>
    	@foreach ($companies as $company)
      <tr>
      	<td>
      		<img src='{{ asset("images/$company->image") }}' alt="{ $company->image }}" height="100px" width="auto">
      	</td>
      	<td> {{$company->name}} </td>
      	<td> {{$company->category}} </td>
      	<td> {{$company->phone_number}} </td>
      	<td> {{$company->city}} </td>
      	<td> {{$company->area}}</td>
        @if (Auth::user() &&  Auth::user()->is_admin == 1)
      	<td class="actions" data-th="">
      	    <a href="/{{$company->id}}/edit" class="btn btn-info btn-sm"><i class="fa fa-refresh"></i></a>
      	    <form method="POST" action="/{{$company->id}}">
  	            @method('Delete')
  	            @csrf
  	            <div class="form-group">
  	               <button type="submit" class="btn btn-danger btn-sm delete-company" ><i class="fa fa-trash-o"></i></button>
  	            </div>
  	     </form>
      	</td>
        @endif
      </tr>
      	@endforeach
    </tbody>
  </table>
  <div class="row pagination">
  	{{ $companies->links() }}
  </div>
</div>

@endsection