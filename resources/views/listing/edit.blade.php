@extends('layouts.app')

@section('content')

	 <div class="row">
        <div class="col-md-6 col-md-offset-3">
            <div class="panel panel-default">
                <div class="panel-heading">Edit Listing<a class="btn btn-default btn-xs pull-right" href="{{route('dashboard')}}">Go Back</a></div>
                <div class="panel-body">
                    <form action="{{route('update', $listing->id)}}" method="post">
                    	<div class="form-group">
                    		<label for="company name">Name</label>
                    		<input type="text" name="name" class="form-control" placeholder="company name" value="{{ $listing->name }}">
                    	</div>
                    	<div class="form-group">
                    		<label for="address">Address</label>
                    		<input type="text" name="address" class="form-control" placeholder="Business address" value="{{$listing->address}}">
                    	</div>
                    	<div class="form-group">
                    		<label for="website">Website</label>
                    		<input type="text" name="website" class="form-control" placeholder="company website" value="{{$listing->website}}">
                    	</div>
                    	<div class="form-group">
                    		<label for="email">Email</label>
                    		<input type="text" name="email" class="form-control" placeholder="contact email" value="{{$listing->email}}">
                    	</div>
                    	<div class="form-group">
                    		<label for="phone">Phone</label>
                    		<input type="text" name="phone" class="form-control" placeholder="contact phone" value="{{$listing->phone}}">
                    	</div>
                    	<div class="form-group">
                    		<label for="bio">Bio</label>
                    		<textarea type="text" name="bio" rows="5" class="form-control" placeholder="about the business">{{$listing->bio}}</textarea>
                    	</div>
                    	<button type="submit" class="btn btn-primary">Create List</button>
                    	{{csrf_field()}}
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection