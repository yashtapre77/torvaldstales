@include('sections.header')
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
    <style>
        #main_footer {
            position: relative;
        }

        body {
            background-color: #ebf0dc;
            color: ;
        }
    </style>
</head>

<body>
    <div>
        @yield('mainSection')
    </div>

        <div id="main_footer">
            @include('sections.footer')
        </div>
</body>

</html>
