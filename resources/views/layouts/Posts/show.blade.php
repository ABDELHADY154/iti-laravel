@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card card-body">
                <h1>Title: {{$post->title}}</h1>
                <h2>Slug: {{$post->slug}}</h2>
                <h3>Description: {{$post->desc}}</h3>
                <h3>Body: {{$post->body}}</h3>
                <h3>User: {{$post->user->name}}</h3>
                <h3>published at : {{$post->published_at}}</h3>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
