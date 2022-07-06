<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="../js/menu.js" defer></script>
    <link rel="stylesheet" href="../css/style.css">
    <title>My Tutor Landing Page</title>
</head>
<style>
        body {
            font-family: 'Nunito', sans-serif;
        }
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

<body>
    <div class="w3-top">
        <div class="w3-bar w3-padding w3-card w3-large w3-center" style="background-color:#ccccff">
            <a class="w3-bar-item w3-button" href="{{ url('landing') }}">MY TUTOR</a>
        </div>
    </div>
    <!-- Header -->

    <hr>
    <div class="w3-row w3-padding-large" id="about">

        <div class="w3-padding-large w3-center ">
            <h1 class="w3-center">WELCOME TO MY TUTOR</h1><br>
        </div>

        <div class="w3-center">
            <a class="w3-bar-item w3-button" style="background-color:#cce6ff" href="{{ url('registration') }}">Register</a>
            <a class="w3-bar-item w3-button" style="background-color:#cce6ff" href="{{ url('login') }}">Login</a>
        </div>
    </div>
    <hr>

    </div>
    <footer class="w3-footer w3-center" style="background-color:#ccccff">Copyright&copy Tan Jia Kee</footer>
</body>

</html>