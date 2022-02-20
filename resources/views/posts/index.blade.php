@extends('site_layouts.app')
@section('content')
<a href="{{route('posts.create')}}" class="link-danger">Add new Post</a>

<table class="table table-dark table-striped" style="width:1200px;margin:auto">
    <tr>
        <th>ID</th>
        <th>Name Of User</th>
        <th>Email</th>
        <th>Name Of Course</th>
        <th>body</th>
        <th>title</th>
        <th>Created_at</th>
        <th>Updated_at</th>
        <th>Show</th>
        <th>Edit</th>
        <th>Delete</th>

    </tr>
        @foreach($posts as $post)
        <tr>

            <td>{{$post['id']}}</td>
            <td>{{$post->user->name}}</td>
            <td>{{$post->user->email}}</td>
            <td>{{$post['name']}}</td>
            <td>{{$post['body']}}</td>
            <td>{{$post['title']}}</td>
            <td>{{$post['created_at']}}</td>
            <td>{{$post['updated_at']}}</td>
            <td><a href="/posts/{{$post['id']}}">Show</a></td>
            <td><a href="/posts/{{$post['id']}}/edit">Edit</a></td>
            <td>
                <form action="posts/{{$post['id']}}" method="post">
                    @csrf
                    @method("delete")
                    <input type="submit" value="Delete">
                </form>
            </td>
        </tr>

            @endforeach
</table>
@endsection


