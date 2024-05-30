@extends('layouts.index')

@section('content')
    <script src="https://al-maher.net/themes/dawn/js/hls.js"></script><script src="https://al-maher.net/themes/dawn/js/plyr.min.js"></script>
    <script src="https://al-maher.net/themes/dawn/js/playerjs.js"></script>
    <link rel="stylesheet" type="text/css" href="https://al-maher.net/themes/dawn/css/plyr.css?sdy0dg">

    <div class="d-flex align-items-center justify-content-center">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="container">
                    @if($lessonVideo->viemo != 'no_data')
                        <video class="imViedo" id="imViedo2" controls="" disablePictureInPicture crossorigin="" playsinline=""><source src="{{$lessonVideo->viemo}}" type="application/x-mpegURL" /></video>
                    @elseif($lessonVideo->dyntub != 'no_data')
                        <video class="imViedo" id="imViedo2" controls="" disablePictureInPicture crossorigin="" playsinline=""><source src="{{$lessonVideo->viemo}}" type="application/x-mpegURL" /></video>
                    @else
                        <div class="text-center">
                            <h3>لم يتم تحميل الفيديو بعد يرجي التواصل مع خدمة العملاء 0797848483</h3>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <script>
        window.onload = function() {
            document.addEventListener('contextmenu', function(e) {
                e.preventDefault();
            });

            document.onkeydown = function(e) {
                if(event.keyCode == 123) {
                    return false;
                }
                if(e.ctrlKey && e.shiftKey && e.keyCode == 'I'.charCodeAt(0)) {
                    return false;
                }
                if(e.ctrlKey && e.shiftKey && e.keyCode == 'C'.charCodeAt(0)) {
                    return false;
                }
                if(e.ctrlKey && e.shiftKey && e.keyCode == 'J'.charCodeAt(0)) {
                    return false;
                }
                if(e.ctrlKey && e.keyCode == 'U'.charCodeAt(0)) {
                    return false;
                }
            }

            var videoElement = document.getElementById('imViedo2');
            if (videoElement) {
                videoElement.addEventListener('canplay', function() {
                    if (videoElement.requestFullscreen) {
                        videoElement.requestFullscreen();
                    } else if (videoElement.mozRequestFullScreen) { // Firefox
                        videoElement.mozRequestFullScreen();
                    } else if (videoElement.webkitRequestFullscreen) { // Chrome, Safari and Opera
                        videoElement.webkitRequestFullscreen();
                    } else if (videoElement.msRequestFullscreen) { // IE/Edge
                        videoElement.msRequestFullscreen();
                    }
                });
            }
        }
    </script>
@endsection
