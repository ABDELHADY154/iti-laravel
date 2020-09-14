@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container">
        <div class="row">
            <div class="card card-body">
                <form action="{{route('post.update',$post)}}" method="post">
                    @method('PUT')

                    @include('layouts.Posts.form')
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
