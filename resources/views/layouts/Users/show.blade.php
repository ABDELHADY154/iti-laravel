@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card card-body">
                <h1>{{$user->name}}</h1>
                <h2>{{$user->email}}</h2>
                <h3>{{$user->created_at}}</h3>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
