@extends('layouts.app')

@section('content')

<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="card card-body">
                <form action="{{route('user.store')}}" method="post">
                    @include('layouts.Users.form')
                </form>
            </div>
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
@endsection
