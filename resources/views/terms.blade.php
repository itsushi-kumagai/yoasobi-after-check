<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name=description content="terms of service 利用規約　All type of injuries are strictly forbidden.
    Do not use inappropriate content in your profile picture.　We are not responsible for any accidents or troubles that occurred during the event.">
    <link rel="stylesheet" href="{{ asset('/css/terms.css') }}">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap" rel="stylesheet">
    <title>Terms</title>
</head>
<body>
      <div class="header">
        <a href="{{ route('home.show') }}">
          <img src="{{asset('logo/yoasobi.png')}}" class="logo" alt="logo">
        </a>
      </div>
        <div class="text-area">
          <div class="main-text">
            <h1>Terms of service</h1>
            <span class="text">● All type of injuries are strictly forbidden.</span><br>
            <span class="text">● Do not use inappropriate content in your profile picture.</span><br>
            <span class="text">● We are not responsible for any accidents or troubles that occurred during the event.</span><br>
            <span class="text">● Yoasobi can not respond to any questions related to events. </span><br>
            <span class="text">● Your account might be suspended/ banned if rules are not followed.</span>
          </div>                
          <div class="text-area-inner">
          </div>
        </div>
        <footer>
          <div class="footer">
              <!-- <div class="follow">Follow Us Now !! #yoasobi</div>
              <div class="social">
                  <div class="sns-box"><a href="" target="_blank"><img src="{{asset('social link/facebook.svg')}}" width="25" height="25" alt="facebook link"></a></div>
                  <div class="sns-box"><a href="" target="_blank"><img src="{{asset('social link/instagram-logo.svg')}}" width="25" height="25" alt="instagram link"></a></div>
                  <div class="sns-box"><a href="" target="_blank"><img src="{{asset('social link/twitter.svg')}}" width="25" height="25" alt="twitter link"></a></div> 
              </div> -->
              <div class="terms"><a href="{{ route('terms.show') }}">Terms of service</a></div>
                  <small class="copyright">©︎ 2019- yoasobi All Rights Reserved.</small>
          </div>
      </footer>
      
</body>
</html>