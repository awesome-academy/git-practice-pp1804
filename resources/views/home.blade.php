@extends('layouts.app')

@section('content')
<div class="container">
<<<<<<< HEAD
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
=======
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
>>>>>>> 9d388240b5e547064f3fc98a63603daba00790f8
                            {{ session('status') }}
                        </div>
                    @endif

<<<<<<< HEAD
                    You are logged in!!!
=======
                    You are logged in!
>>>>>>> 9d388240b5e547064f3fc98a63603daba00790f8
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
