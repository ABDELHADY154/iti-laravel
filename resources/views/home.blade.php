@extends('layouts.app')

@section('title','Home')

@section('content')
<div class="container">
    <div class="row">
        <div class="col">
            <!-- DataTales Example -->
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Welcome {{auth()->user()->name}}</h5>

                </div>
            </div>
        </div>
    </div>
    <!-- Page Heading -->


</div>
@endsection
