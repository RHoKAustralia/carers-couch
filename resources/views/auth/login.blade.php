
<?php

@extends('layouts.app')

@section('content')
?>


<html class="no-js" lang="">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Carers Couch</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/main.css">
</head>
<body>

<div style="height:90px">

    <div style="float: left;padding: 1em">
        <a href="index.html">
            <img src="img/logo.png" width="140px" height="60px" alt="CC">
        </a>
    </div>

    <div style="float: right;padding: 1em">
        <p style='margin-bottom: 0px;text-align: left'>
            <span style='font-size:18px;text-align: right;'>Follow the Couch</span>
            <a href="https://www.facebook.com/CarersCouch" target="_blank"><img src="https://carerscouch.com/wp-content/themes/dynamik/css/images/fb.png"></a>
            <a href="https://twitter.com/carerscouch" target="_blank"><img src="https://carerscouch.com/wp-content/themes/dynamik/css/images/twt.png"></a>
            <a href="https://www.instagram.com/carerscouch/" target="_blank"><img src="https://carerscouch.com/wp-content/themes/dynamik/css/images/ig.png"></a>
            <a href="https://www.youtube.com/channel/UC7vyAp63KqwT7WpP-f8bOiQ" target="_blank"><img src="https://carerscouch.com/wp-content/themes/dynamik/css/images/yt.png"></a>
        </p>
    </div>

</div>

<form id="signIn" onsubmit="return validateLogInForm()" class="form-horizontal" method="POST" action="{{ route('login') }}">
    {{ csrf_field() }}
<header class="header_index" style="min-height: 500px">




    <div id="buttons" style="margin-left: 40%;position: relative;top: 140px">
        <p>
        <div style="width:390px;height:40px" class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                @if ($errors->has('email'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
        </p>
        <p>
        <div style="width:390px;height:40px class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
            <label for="password" class="col-md-4 control-label">Password</label>

            <div class="col-md-6">
                <input id="password" type="password" class="form-control" name="password" required>

                @if ($errors->has('password'))
                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                @endif
            </div>
        </div>
            </p>
        <p >
            <button form="signIn"  type="submit" value="Sign Up" style="width:200px;height:50px;background-color: whitesmoke;">Sign Up</button>
            <button form="signIn" type="submit" value="Sign In" style="width:200px;height:50px;background-color: whitesmoke">Sign In</button>
        </p>
        <br>
        <p style="text-align: center">
        <p >
            <button form="enter" type="submit" value="enter" style="width:400px;height:50px;background-color: whitesmoke">Browse Site Without Sign In</button>
        </p>
        </p>


    </div>
    @endsection
</header>







<footer height="50px">
    <p style="padding: 1em">Copyright © 2017 Carers Couch | ABN 84 432 561 467 </p>

</footer>

<!--[if lte IE 9]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
<![endif]-->

<!-- Add your site or application content here -->

<script src="js/vendor/modernizr-3.5.0.min.js"></script>
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<script>window.jQuery || document.write('<script src="js/vendor/jquery-3.2.1.min.js"><\/script>')</script>
<script src="js/plugins.js"></script>
<script src="js/main.js"></script>

<!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
<script>
    window.ga=function(){ga.q.push(arguments)};ga.q=[];ga.l=+new Date;
    ga('create','UA-XXXXX-Y','auto');ga('send','pageview')
</script>

<script>

    function validateLogInForm() {
        var x = true;
        var errStr = '';
        if(document.getElementById('email').value == ''){x = false; errStr += 'Please enter your email \n'}
        if(document.getElementById('password').value == ''){x = false; errStr += 'Please enter your password'}


        if (x == false) {
            alert(errStr);
            return false;
        }else{return true;}
    }


</script>

<script src="https://www.google-analytics.com/analytics.js" async defer></script>
</body>
</html>



@endsection
