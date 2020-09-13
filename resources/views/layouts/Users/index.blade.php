@extends('layouts.app')

@section('title','Users List')

@section('content')
<div class="container">
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h1 class="h3 mb-2 text-gray-800 text-center">Users</h1>
            {{-- <a href="{{route('user.create')}}" class="btn btn-primary">Create A user</a> --}}
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>E-mail</th>
                            <th>Created At</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$user->id}}</td>
                            <td><a href="{{route('user.show',$user->id)}}" class="">{{$user->name}}</a></td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->created_at}}</td>
                            <td>
                                {{-- <a href="{{route('user.show',$user->id)}}" class="btn btn-info">Show</a> --}}
                                <a href="{{route('user.edit',$user->id)}}" class="btn btn-primary">Edit</a>
                                <form action="{{route('user.destroy',$user->id)}}" method="POST" class="d-inline-block">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" name="" value="delete" class="btn btn-danger" id="">
                                </form>

                            </td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

@endsection
