@extends('site_layouts.app')
@section('content')
    <ul class="list-group" style="width:400px;margin:auto">
        <li class="list-group-item list-group-item-danger">{{$id}}</li>
        <li class="list-group-item list-group-item-warning">{{$name}}</li>
        <li class="list-group-item list-group-item-info">{{$body}}</li>
        <li class="list-group-item list-group-item-light">{{$title}}</li>
        <li class="list-group-item list-group-item-warning">{{$created_at}}</li>
        <li class="list-group-item list-group-item-info">{{$updated_at}}</li>
      </ul>
@endsection
