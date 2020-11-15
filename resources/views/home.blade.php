@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                @include('partials.messages')
                <div class="card-header">Yellow</div>
                <div class="card-body">
                    <div class="row ">
                        <div class="col-md-4">
                           <a href="/" class="btn btn-primary">All Companies</a>
                        </div>
                        @if (Auth::user() &&  Auth::user()->is_admin == 1)
                        <div class="col-md-4">
                            <a href="/addcompany" class="btn btn-primary">Add Company</a>
                        </div>
                        <div class="col-md-4">
                            <a href="/addcategory" class="btn btn-primary">Add Category</a>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
