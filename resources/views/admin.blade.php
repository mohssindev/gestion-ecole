@extends('layouts.layout')

@section('title')
<title>Admin Space</title>
@endsection

@section('content')
<div class="admin-area">{{-- start admin area --}}
    <div class="overlay">
        <div class="container">
            <div class="form-container float-right">
                <i class="fab fa-black-tie fa-5x mb-3 mt-3"></i>
                <h2 class="mb-4">Login</h2>
                @include('auth.login_layout')
            </div>
        </div>
    </div>
</div>{{-- end admin area --}}
@endsection
