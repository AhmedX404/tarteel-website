<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Almaher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <style>
        body {
            padding-top: 70px; /* Adjust this value to match your navbar's height */
        }
        .navbar {
            background-color: rgb(238, 238, 238);
        }
        #logoutIcon:hover {
            cursor: pointer;
        }
        #backIcon:hover {
            cursor: pointer;
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light fixed-top">
    <div class="container-fluid">
        <i class="fas fa-arrow-left" style="font-size: 20px" id="backIcon"></i>
        <div class="navbar-brand mx-auto" id="pageTitle">{{$title}}</div>
        <i class="fas fa-sign-out-alt" style="font-size: 20px" id="logoutIcon"></i>
    </div>
</nav>
<main>
    @yield('content')
    @if(session('error'))
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops...',
                text: 'An error occurred. Please try again.'
            });
        </script>
    @endif
</main>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>

    $(document).ready(function() {
        $('#loginForm').on('submit', function(e) {
            e.preventDefault();

            $('#spinner').show();
            $('#spinner2').show();

            $.ajax({
                url: "{{route('login')}}",
                type: 'POST',
                data: $(this).serialize(),
                success: function(response) {
                    $('#spinner').hide();
                    $('#spinner2').hide();
                    if (response.success) {
                        window.location.href = response.redirectUrl; // replace with the URL you want to redirect to
                    } else {
                        $('#error').text(response.error).show();
                    }
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    $('#spinner').hide();
                    $('#spinner2').hide();
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: 'An error occurred. Please try again.'
                    });
                }
            });
        });
    });

</script>

<script>
    document.getElementById('logoutIcon').addEventListener('click', function() {
        const { ipcRenderer } = require('electron');
        ipcRenderer.send('close-app');
    });
    document.getElementById('backIcon').addEventListener('click', function() {
        window.history.back();
    });
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
    }
</script>
</body>
</html>
