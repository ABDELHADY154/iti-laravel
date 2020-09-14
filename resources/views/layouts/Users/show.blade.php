@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="card card-body">
                <h1>{{$user->name}}</h1>
                <h2>{{$user->email}}</h2>
                <h3>{{$user->created_at}}</h3>
            </div>
        </div>
        <hr>

        <h3>Posts</h3>
        @foreach($user->posts as $userPost)
        <div class="card">
            <div class="card-body">
                <p>Title: {{$userPost->title}}</p>
                <p>slug: {{$userPost->slug}}</p>
                <p>desc: {{$userPost->desc}}</p>
                <p>body: {{$userPost->body}}</p>
                <p>published at: {{$userPost->published_at}}</p>
            </div>
        </div>
        @endforeach

        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
