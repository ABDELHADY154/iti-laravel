@extends('layouts.app')


@section('title','New User')
@section('content')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="card card-body">
                <form action="{{route('post.store')}}" method="post">
                    @include('layouts.Posts.form')
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
