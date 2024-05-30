@extends('layouts.index')

@section('content')
    <div class="d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="container">
                    @foreach($courses['rows'] as $course)
                        <div class="card m-3 border-0" style="width: 24rem;">
                            <a draggable="false" href="{{route('course.data',$course['tax_tid'])}}">

                                <img class="card-img-top"  src="{{ $course['tax_image'] ?? 'default-image-url' }}" alt="Course image">
                                <div class="card-body">
                                    <div class="col-12 col-md-12 col-lg-12 mx-auto">
                                        <a href="{{route('course.data',$course['tax_tid'])}}" style="text-decoration: none;">
                                            <h6 class="card-title text-center">{{ $course['tax_name'] }}</h6>
                                        </a>
                                        <a draggable="false" href="{{route('course.data',$course['tax_tid'])}}" class="btn btn-primary" style="width: 100%">أختر</a>
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
