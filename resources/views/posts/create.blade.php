@extends('site_layouts.app')
@section('content')
    <form action="/posts" style="width: 400px;margin:auto" method="POST">
        @csrf
        {{-- <div class="mb-3">
          <label  class="form-label">ID</label>
          <input type="text" class="form-control"  name="id" >
        </div> --}}
        <div class="mb-3">
          <label class="form-label">Name Of Course</label>
          <input type="text" class="form-control" name="name" value="{{old('name')}}" >
        </div>
        <div class="mb-3">
            <label  class="form-label">body</label>
            <input type="text" class="form-control" name="body" value="{{old('body')}}">
          </div>
          <div class="mb-3">
            <label class="form-label">title</label>
            <input type="text" class="form-control" name="title" value="{{old('title')}}">
          </div>

        <button type="submit" class="btn btn-primary">Add</button>
      </form>
      @if($errors->any())
      <div class="alert alert-danger">
          <ul>
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    </ul>
       </div>
      @endif
@endsection
