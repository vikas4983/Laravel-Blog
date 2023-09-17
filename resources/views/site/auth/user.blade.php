


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        body{
  padding: 50px;
  font-family: 'Roboto', sans-serif;
  background-color: #F5F5F5;
}
/*Sign In Form*/
.signin{
  position: relative;
  height: 700px;
  width: 500px;
  margin: auto;
  box-shadow: 0px 30px 125px -5px #000;}
/*Background Img*/
.back-img{
  position: relative;
  width: 100%;
  height: 250px;
  background: url('https://www.omnihotels.com/-/media/images/hotels/nycber/destinations/nyc-aerial-skyline.jpg?h=660&la=en&w=1170')no-repeat   center center;
background-size: cover;
}
.layer {
    background-color: rgba(33,150,243,0.5);
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
}
.active{
  padding-left: 25px;
  color: #fff;
}
.nonactive {
  color: rgba(255, 255, 255, 0.6);
}
.sign-in-text{
  top: 175px;
  position: absolute;
  z-index: 1;
}
h2 {
  padding-left: 15px;
  font-size: 25px;
  text-transform: uppercase;
  display: inline-block;
  font-weight: 300;
}
.point{
  position: absolute;
  z-index: 1;
  color: #fff;
  top: 235px;
  padding-left: 50px;
  font-size: 20px;
}

/*form-section*/
.form-section{
  padding: 70px 90px 70px 90px;
}
.keep-text{
  font-size: 15px;
  color: #BDBDBD;
}
.forgot-text{
  font-size: 12px;
  color: #BDBDBD;
  text-align: right;
}
/*sign-in-btn*/
.sign-in-btn{
  width: 100%;
  height: 75px;
  position:absolute;
  bottom:0;
  border-radius: 0px;
  background-color: rgba(63, 78, 191, 1);
}
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
    </style>
    <!-- Add this line to include Bootstrap CSS -->

</head>

    
<body>
    <div class="signin">
      <div class="back-img">
        <div class="sign-in-text">
          <h2 class="active">Sign In</h2>
          <h2 class="nonactive">Sign Up</h2>
        </div><!--/.sign-in-text-->
        <div class="layer">
        </div><!--/.layer-->
        <p class="point">&#9650;</p>
      </div><!--/.back-img-->
      <div class="form-section">
       
        <form method="POST" action="{{ url('user') }}" >
            @csrf
       
          <div class= "mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
          
            <label class="mdl-textfield__label" for="sample3">{{ __('E-Mail Address') }}</label>
            <input class="mdl-textfield__input" id="sample3" id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
          </div>
<br><br>

         <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
           <label class="mdl-textfield__label" for="sample3">{{ __('Password') }}</label>
            <input id="sample3" pattern=".{8,}" class="mdl-textfield__input" id="password" type="password" name="password" required autocomplete="current-password">
        </div>
          
        <button  type="submit">{{ __('Login') }}</button>
        </form>
      
      
      
   
  </body>

</html>





{{-- <button class="sign-in-btn mdl-button mdl-js-ripple-effect mdl-js-button mdl-button--raised mdl-button--colored">
    {{ __('Login') }}
  </button> --}}



































{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                

                <div class="card-body">
                    <form method="POST" action="{{ url('user') }}">
                        @csrf
  
                          <div class="form-group">
                              <label for="email">{{ __('E-Mail Address') }}</label>
                              <input id="email" type="email" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                          </div>
  
                          <div class="form-group">
                              <label for="password">{{ __('Password') }}</label>
                              <input id="password" type="password" name="password" required autocomplete="current-password">
                          </div>
  
                          
  
                          <button type="submit">{{ __('Login') }}</button>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}




