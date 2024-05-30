@extends('layouts.index')

@section('content')
    <style>
        body{
            overflow: hidden;
        }
    </style>
    <div class="d-flex align-items-center justify-content-center" style="height: 100vh;">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="card border rounded">
                        <div class="card-header text-center" style="background-color: white">
                            <img src="{{asset('1024.ico')}}" alt="Logo" class="mb-3"> <!-- Add your logo here -->
                            <h4>تسجيل الدخول</h4><br>
                        </div>
                        @if(session()->has('error'))
                            <div class="alert alert-danger text-center">
                                {{session()->get('error')}}
                            </div>
                        @endif
                        <div class="card-body">
                            <form action="{{route('login')}}" method="POST">
                                @csrf
                                <div class="mb-3 text-end">
                                    <label for="username" class="form-label">اسم المستخدم</label>
                                    <input type="text" class="form-control" name="user_name" dir="rtl" id="username" required>
                                </div>
                                <div class="mb-3 text-end">
                                    <label for="password" class="form-label">كلمة المرور</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control" name="password" dir="rtl" id="password" required style="border-radius: 5px">
                                        <i class="bi bi-eye-fill" id="togglePasswordIcon"></i>
                                    </div>
                                </div>
                                <div class="d-grid">
                                    <button draggable="false" type="submit" class="btn btn-primary">تسجيل الدخول</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
