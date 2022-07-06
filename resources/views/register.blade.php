<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <title>Register</title>
    <style>
        @media screen and (max-width: 768px) {
            .w3-container {
                width: 100%;
            }
        }
        @media screen and (min-width: 768px) {
            .w3-container {
                width: 700px;
                margin: 0 auto;
            }
        }
    </style>

</head>
<body>
<div class="w3-container">
   <div class="w3-bar w3-blue ">
   <a class="w3-bar-item w3-button w3-right" href="{{ url('login') }}"> 
       Login</a>
    </div>
   <header class="w3-center w3-padding-large w3-blue">
      <h2>MY TUTOR</h2>
   </header>
   <div class="w3-padding">
      <div class="w3-card w3-round">
        <header class="w3-blue w3-padding">
          <h3>Registration</h3>
        </header>
       <div class="w3-padding ">
       <form action="{{route('register.post')}}" method="post">
         {{csrf_field()}}
           <label for="email">Name</label>
           <p><input id="email" class="w3-input w3-round w3-border" type=
              "name" name="name" required></p>
           @if ($errors->has('name'))
             <span class="text-danger">{{ $errors->first('name') }}</span>
           @endif
           <label for="email">Email</label>
           <p><input id="email" class="w3-input w3-round w3-border" type=
             "email" name="email" required></p>
           @if ($errors->has('email'))
             <span class="text-danger">{{ $errors->first('email') }}</span>
           @endif
           <label for="phonenumber">Phone Number</label>
           <p><input id="phonenumber" class="w3-input w3-round w3-border" type=
             "phonenumber" name="phonenumber" required></p>
           @if ($errors->has('phonenumber'))
             <span class="text-danger">{{ $errors->first('phonenumber') }}</span>
           @endif
           <label for="mailingaddress">Mailing Address</label>
           <p><input id="mailingaddress" class="w3-input w3-round w3-border" type=
             "mailingaddress" name="mailingaddress" required></p>
           @if ($errors->has('mailingaddress'))
             <span class="text-danger">{{ $errors->first('mailingaddress') }}</span>
           @endif
           <label for="state">State</label>
           <p><input id="state" class="w3-input w3-round w3-border" type=
             "state" name="state" required></p>
           @if ($errors->has('state'))
             <span class="text-danger">{{ $errors->first('state') }}</span>
           @endif
           <label for="pass">Password</label>
           <p><input id="pass" class="w3-input w3-round w3-border" type=
              "password" name="password" required></p>
           @if ($errors->has('password'))
             <span class="text-danger">{{ $errors->first('password') }}</span>
           @endif
           <button class="w3-button w3-blue w3-round">Register</button>
         </form>
      </div>
    </div>
  </div>
  <footer class="w3-footer w3-center w3-blue">My Tutor App</footer>
</div>

</body>
</html>