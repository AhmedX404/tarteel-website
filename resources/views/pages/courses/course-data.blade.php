@extends('layouts.index')

@section('content')
    <div class="d-flex align-items-center justify-content-center" >
        <div class="row justify-content-center" >
            <div class="col-md-12" >
                <div class="container">
                    @foreach($courseData as $lesson)
                        <div class="card m-3 border-0" style="width: 24rem">
                            <a href="{{route('lesson.data',$lesson->id)}}">
                                <img class="card-img-top"  src="{{asset('class_select.jpg')}}" alt="Course image">
                                <div class="card-body">
                                    <div class="col-12 col-md-12 col-lg-12 mx-auto">
                                        <a href="{{route('lesson.data',$lesson->id)}}" style="text-decoration: none;">
                                            <h5 class="card-title text-center text-black">{{ $lesson->name }}</h5><br>
                                        </a>
                                        <a draggable="false" href="{{route('lesson.data',$lesson->id)}}" class="btn btn-primary" style="width: 100%">أختر</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
