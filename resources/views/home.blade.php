@extends('layouts.app')
<!--inhert -> extends-->
<!--tell father where to locate-->
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Message</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <p class="card-text">You are logged in!</p>
                    <a href="/admin/article" class="btn btn-outline-dark">List of Articles</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
