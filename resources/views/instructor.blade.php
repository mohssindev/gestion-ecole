@extends('layouts.layout')

@section('title')
<title>Instructor Space</title>
@endsection

@section('content')
<div class="instructor-area">{{-- start instructor area --}}
    <div class="overlay">
        <div class="container">
            <div class="form-container float-right">
                <i class="fas fa-chalkboard-teacher fa-5x mb-3 mt-3"></i>
                <h2 class="mb-4">Login</h2>
                @include('auth.login_layout')
            </div>
        </div>
    </div>
</div>{{-- end instructor area --}}
@endsection
