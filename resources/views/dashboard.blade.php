@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <a href="{{route('create')}}" class="btn btn-success btn-sm pull-right">Add Listing</a></div>

                <div class="panel-body">
                    <h3>Your Listing</h3>
                    @if(count($listings) > 0)
                        <table class="table table-striped">
                            <tr>
                                <th>Company</th>
                                <th></th>
                                <th></th>
                            </tr>
                            @foreach($listings as $listing)
                                <tr>
                                    <td>{{$listing->name}}</td>
                                    <td><a class="pull-right btn btn-default" href="{{route('edit', $listing->id)}}">Edit list</a></td>
                                    <td><a class="pull-left btn btn-danger" href="{{route('delete', $listing->id)}}">Delete list</a></td>
                                </tr>
                            @endforeach
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
@endsection
