<!
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="chrome">
    <link href="{{ mix("css/app.css")}}" rel="stylesheet" type="text/css">

    <title>SHUKEI - @yield('title')</title>
</head>

<body class="container-md">
@yield('content')
</body>

<script src="{{mix("js/app.js")}}"></script>
</html>
