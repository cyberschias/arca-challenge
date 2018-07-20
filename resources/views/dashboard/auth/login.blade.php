<!DOCTYPE html>

<html lang="en" >
<head>
    <meta charset="utf-8" />
    <title>
        {{ config('app.name') }} - Login
    </title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins|Roboto" rel="stylesheet">
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">

    <link type="text/css" href="{!! url('/') !!}/assets/dashboard/vendors/base/css/main.min.css" rel="stylesheet"/>
    <link type="text/css" href="{!! url('/') !!}/assets/dashboard/css/template.min.css" rel="stylesheet"/>
    <link type="text/css" href="{!! url('/') !!}/assets/dashboard/css/main.css" rel="stylesheet"/>

    <link rel="shortcut icon" href="favicon.ico"/>
</head>


<body class="m--skin- m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default"  >

<div class="m-grid m-grid--hor m-grid--root m-page">
    <div class="m-grid__item m-grid__item--fluid m-grid m-grid--hor m-login m-login--signin m-login--2 m-login-2--skin-1" id="m_login" style="background-image: url(/assets/dashboard/img/bg.jpg);">
        <div class="m-grid__item m-grid__item--fluid	m-login__wrapper">
            <div class="m-login__container">
                <div class="m-login__logo">
                    Business Finder
                </div>
                <div class="m-login__signin">
                    <form class="m-login__form m-form" method="POST" action="{!! url('dashboard/login') !!}">
                        @include('flash::message')
                        {!! csrf_field() !!}
                        <div class="form-group m-form__group">
                            <input class="form-control m-input" type="text" placeholder="Username or E-mail" name="username" autocomplete="off">
                        </div>
                        <div class="form-group m-form__group">
                            <input class="form-control m-input m-login__form-input--last" placeholder="Password" type="password" name="password">
                        </div>
                        <div class="m-login__form-action">
                            <button type="submit" class="btn btn-focus m-btn m-btn--pill m-btn--custom m-btn--air  m-login__btn m-login__btn--primary"
                                    data-loading-text="<i class='fa fa-refresh fa-spin'></i> Processing">
                                Login
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="{!! url('/') !!}/assets/dashboard/vendors/base/js/main.min.js"></script>
<script type="text/javascript" src="{!! url('/') !!}/assets/dashboard/js/main.js"></script>

</body>

</html>
