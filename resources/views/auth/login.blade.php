<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>login</title>
  <link href="http://cdn.bootcss.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.bootcss.com/jquery/2.1.4/jquery.min.js"></script>
  <script src="http://cdn.bootcss.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container">
{!! Form::open(['auth/login','class'=>'form-signin']) !!}
    <h2 class="form-signin-heading">Please sign in</h2>
    <div class="form-group">
        {!! Form::label('email','Email address',['for'=>'email']) !!}
        {!! Form::email('email',null,['class'=>'form-control','placeholder'=>"Email"]) !!}
    </div>

    <!-- Password Field -->
    <div class="form-group">
        {!! Form::label('password','Password',['for'=>'password']) !!}
        {!! Form::password('password',['class'=>'form-control','placeholder'=>"Password"]) !!}
    </div>

    <div class="checkbox">
        <label>
            <input type="checkbox" value="remember me"> Remember me
        </label>
    </div>
    {!! Form::submit('提交',['class'=>'btn btn-primary']) !!}
{!! Form::close() !!}

</div>
</body>
</html>