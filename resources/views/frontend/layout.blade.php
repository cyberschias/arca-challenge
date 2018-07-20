<!doctype html>
<html class="no-js" lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ config('app.name') }}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.1/css/all.css" integrity="sha384-O8whS3fhG2OnA5Kas0Y9l3cfpmYjapjI0E4theH4iuMD+pLhbf6JI0jIMfYcK3yZ" crossorigin="anonymous">

    <link type="text/css" href="{!! url('/') !!}/assets/frontend/css/main.min.css" rel="stylesheet"/>
    <script type="text/javascript" src="{!! url('/') !!}/assets/frontend/js/jquery.js"></script>
</head>
<body>

<div class="wrapper">
    @yield('content')
</div>
<script type="text/javascript" src="{!! url('/') !!}/assets/frontend/js/main.js"></script>
</body>
</html>
