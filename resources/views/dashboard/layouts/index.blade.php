<!DOCTYPE html>

<html
    lang="en"
    class="light-style layout-navbar-fixed layout-wide"
    dir="ltr"
    data-theme="theme-default"
    data-assets-path="{{asset('assets') }}"
    data-template="front-pages-no-customizer">
<head>
    <meta charset="utf-8" />
    <meta
        name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>أكاديمية ترتيل</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{asset('logo.png')}}" />

    <!-- Fonts -->
    <link rel="preconnect" href="{{url('https://fonts.googleapis.com')}}" />
    <link rel="preconnect" href="{{url('https://fonts.gstatic.com')}}" crossorigin />
    <link
        href="{{asset('https://fonts.googleapis.com/css2?family=IBM+Plex+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&display=swap')}}"
        rel="stylesheet" />


    <!-- Page CSS -->

    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.1.7/css/dataTables.dataTables.min.css"/>
    <style>
        #enrolls-table {
            border-collapse: collapse; /* This is needed to display borders around cells */
        }

        #enrolls-table th, #enrolls-table td {
            border: 1px solid #d2d2d2; /* Change this to your preferred border style */
        }
    </style>
</head>

<body>

<div data-bs-spy="scroll" class="scrollspy-example" style="margin: 50px">
    <div style="display: flex;align-items: center;justify-content: center">
        <img src="{{asset('logo.png')}}" style="width: 15%">
    </div>
    <div class="d-flex align-items-center justify-content-center">
        <h3 style="text-align: center">طلبات التسجيل</h3>
    </div>
    <div class="d-flex align-items-center justify-content-center container">
        <table id="enrolls-table">
            <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Phone</th>
                <th>Course</th>
                <th>Student Age</th>
                <th>Student Gender</th>
                <th>Teacher Gender</th>
                <th>Package</th>
                <th>Days</th>
                <th>Date & Time</th>
            </tr>
            </thead>
        </table>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.datatables.net/2.1.7/js/dataTables.min.js"></script>
        <script>
            $(function() {
                $('#enrolls-table').DataTable({
                    processing: true,
                    serverSide: true,
                    ajax: '{{ route('enrolls_ajax') }}', // Update this to the route for fetching enrolls data
                    columns: [
                        { data: 'id', name: 'id' },
                        { data: 'name', name: 'name' },
                        { data: 'email', name: 'email' },
                        { data: 'phone', name: 'phone' },
                        { data: 'course', name: 'course' },
                        { data: 'student_age', name: 'student_age' },
                        { data: 'student_gender', name: 'student_gender' },
                        { data: 'teacher_gender', name: 'teacher_gender' },
                        { data: 'package', name: 'package' },
                        { data: 'days', name: 'days' },
                        {
                            data: 'created_at',
                            name: 'created_at',
                            render: function(data, type, row) {
                                return new Date(data).toLocaleString();
                            }
                        },
                    ]
                });
            });
        </script>
    </div>

</div>

<!-- / Sections:End -->

</body>
</html>
