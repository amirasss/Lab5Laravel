@extends('site_layouts.app')
@section('content')
    <form action="/posts/{{$id}}" style="width: 400px;margin:auto" method="post">
        @csrf
        @method("patch")
        <div class="mb-3">
          <label  class="form-label">ID</label>
          <input type="text" class="form-control"  name="id" value="{{$id}}">
        </div>
        <div class="mb-3">
          <label class="form-label">Name</label>
          <input type="text" class="form-control" name="name" value="{{$name}}">
        </div>
        <div class="mb-3">
            <label  class="form-label">body</label>
            <input type="text" class="form-control" name="body" value="{{$body}}">
          </div>
          <div class="mb-3">
            <label class="form-label">title</label>
            <input type="text" class="form-control" name="title" value="{{$title}}">
          </div>

        <button type="submit" class="btn btn-primary">Update</button>
      </form>
      @if($errors->any())
      <div class="alert alert-danger">
          <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        @endif
@endsection
