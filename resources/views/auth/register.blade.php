<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Title</title>
  <link href="http://cdn.bootcss.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/bootstrap/4.0.0-alpha.2/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
<!-- Auth/register From-->
{!! Form::open(['auth/register']) !!}
    <h2 class="form-signin-heading">Register sign in</h2>
    <!-- 'Name' Field -->
    <div class="form-group">
        {!! Form::label('name','Name',['for'=>'name']) !!}
        {!! Form::text('name',null,['class'=>'form-control','placeholder'=>"Name"]) !!}
    </div>
    <!-- Email Field -->
    <div class="form-group">
        {!! Form::label('email','Email address',['for'=>'email']) !!}
        {!! Form::email('email',null,['class'=>'form-control','placeholder'=>"Email"]) !!}
    </div>
    <!-- Password Field -->
    <div class="form-group">
        {!! Form::label('password','Password',['for'=>'password']) !!}
        {!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
    </div>
    <!-- password_confirmation Field -->
    <div class="form-group">
        {!! Form::label('password_confirmation','password_confirmation',['for'=>'password_confirmation']) !!}
        {!! Form::password('password',['class'=>'form-control','placeholder'=>"Password_confirmation",'id'=>'password_confirmation','name'=>'password_confirmation']) !!}
    </div>

    {!! Form::submit('提交',['class'=>'btn btn-primary']) !!}


{!! Form::close() !!}
</div>
</body>
</html>