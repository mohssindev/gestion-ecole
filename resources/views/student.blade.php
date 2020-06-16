@extends('layouts.layout')

@section('title')
<title>Student Space</title>
@endsection

@section('content')
<div class="student-area">{{-- start student area --}}
    <div class="overlay">
        <div class="container">
            <div class="form-container float-right">
                <i class="fas fa-graduation-cap fa-5x mb-3"></i>
                <h2 class="mb-4">Login</h2>
                @include('auth.login_layout')
            </div>
        </div>
    </div>
</div>{{-- end student area --}}
@endsection
