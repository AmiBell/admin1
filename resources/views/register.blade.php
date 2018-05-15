<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
             body{

            padding: 20%; 
            margin: 0px; 
            background: url("../../images/backend_image/imagge2.jpg");
            background-size: cover ;
            background-position: center;
            font-family: sans-serif;



          }
          .content{
            width:320px; 
            height: 420px ; 
            background:#006699;
            color: #ffffff;
               opacity: .6;
            top:50%;
            left:50%;
            position: absolute; 
            transform: translate(-50%,-50%);
            box-sizing: border-box;
            padding: 70px 30px ;

          }
          h1{
            margin: 0; 
            padding: 0 0 20px ; 
            text-align: center ;
            font-size: 22px; 

          }
          .content p {
            margin: 0; 
            padding: 0 ;
            font-weight: bold;
          }
          .content input{
            width: 100%; 
            margin-bottom: 20px; 


          }


          .content input[type="text"], input[type="password"]{
            border : none;
            border-bottom: 1px solid #fff; 
            background: transparent;
            outline: none; 
            height: 40px; 
            font-size: 16px; 
            color: #fff;

          }

          .content input[type="submit"]{
            border : none ;
            outline :none; 
            height: 40px; 
            background: #ff0000;
            color: #fff; 
            font-size: 18px; 
            border-radius: 20px; 

          }


          .content input[type="submit"]:hover {
            cursor: pointer;
            background: #ffc107; 
            color: 000;

          }
          .content a {
            text-decoration: none;
            font-size: 12px; 
            line-height: 20px ;
            color: darkgrey ; 


          }
          .content a:hover{
             background: #ffc107; 
          }
          .avatar{
            width : 100px;
            height: 100px; 
            border-radius: 50%; 
            position: absolute ;
            top : -10%; 
            left: calc(50%  -50px); 
            left: 34%;

          }
        </style>
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

            <div class="content">
                <img src="{{asset('images/backend_image/logo1.png')}}" class="avatar"> 
                <h1>Inscription</h1>
                <form method="post" class="" action="{{URL::to('/store')}}" >
                    <input type="text" name="name" value="" placeholder="votre nom">
                    <br/> <br/>
                    <input type="text" name="email" value="" placeholder="votre email">
                    <br/> <br/>
                    <input type="password" name="password" value="" placeholder="votre password
                    ">
                    <br/> <br/>
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    

                    <input type="submit" name="s'inscrire" value="s'inscrire">
                    
                </form>

                
            </div>
        </div>
    </body>
</html>