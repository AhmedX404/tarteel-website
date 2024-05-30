@extends('layouts.index')

@section('content')
    <style>
        body{
            overflow: hidden;
        }
    </style>
    <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="container">
           @if(session()->has('user_name'))
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center"> {{session()->get('user_name')}}  مرحبا بك</h4>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a draggable="false" class="btn btn-secondary btn-lg" style="width: 60%" href="{{route('courses')}}">دوراتي </a>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a draggable="false" class="btn btn-secondary btn-lg" style="width: 60%" href="{{route('logout')}}">تسجيل الخروج </a>
                    </div>
                </div>
                </div>
            @else
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-center">مرحبا بك</h4>
                    </div>
                </div><br>
                <div class="row">
                    <div class="col-md-12 text-center">
                        <a draggable="false" class="btn btn-secondary btn-lg" href="{{route('login.page')}}">تسجيل الدخول</a>
                    </div>
                </div>
           @endif
        </div>
    </div>
@endsection
