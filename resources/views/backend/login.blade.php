<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="{{url('/css/login.css')}}">
</head>
<body>
<form action="{{route('do_login')}}" method="post">
 @csrf
<h3>Login Here</h3>

<label for="email">Email</label>
<input type="email" placeholder="Email or Phone" id="email" name="email">

<label for="password">Password</label>
<input type="password" placeholder="Password" id="password" name="password">

<button type="submit">Log In</button>

</div>
</form>
</body>
</html>