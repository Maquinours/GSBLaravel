@extends('layouts.master')
@section('content')

<head>

    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="{{asset('assets/css/login.css')}}">
</head>
<body>
@isset($error)
    <p>{{$error}}</p>
@endisset
<div class="login-box">
    <h2>𝐋𝐨𝐠𝐢𝐧</h2>
    {{ Form::open(array('url' => 'SignIn')) }}
        <div class="user-box">
            <input type="text" name="login" required="">
            <label>Username</label>
        </div>
        <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
        </div>
        <button class="custom-btn btn-3">
            <span>Se connecter</span>
        </button>
    {{ Form::close() }}
</div>
</body>

@stop