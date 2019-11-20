<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap">
    <title>Mail-send-page</title>
</head>
<body>
    <style>
    .logo {
      line-height: 30px;
      margin-top: 2rem;
  }
  .prompt {
    height: 100vh;
    width: 0 auto;
    background: url(../../email/paul-fiedler-L-O36LuX9TY-unsplash.jpg);
    background-size: cover;
    background-repeat: no-repeat;
    background-position: 40% -250px;
    color: #ffffff;
  }
  
  .prompt-erea {
    height: 120vh;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
        -ms-flex-pack: center;
            justify-content: center;
    -webkit-box-align: center;
        -ms-flex-align: center;
            align-items: center;
  }
  
  .prompt-inner {
    position: absolute;
    margin-top: 3rem;
    height: 100vh;
    width: 95%;
    background: rgba(255, 255, 255, 0.95);
    border-radius: 30px;
    top: 90%;
    -webkit-transform: translateY(-90%);
            transform: translateY(-90%);
    padding: 4rem 2rem;
    -webkit-box-sizing: border-box;
            box-sizing: border-box;
    color: #000000;
  }
  
  .prompt-inner h1 {
    margin-bottom: 2rem;
    font-size: 2.5rem;
    font-weight: bold;
  }
  
  .prompt-inner h2 {
    margin-bottom: 1.5rem;
    font-size: 1.6rem;
  }

  .prompt-inner p {
    margin-bottom: 2rem;
  }
  
  .btn1 {
    color: #ffffff;
    background: #0FCC41;
    margin-left: 3rem;
    height: 30px;
    width: 200px;
    border: none;
    border-radius: 30px;
    font-size: 1.3rem;
    line-height: 1rem;
    cursor: pointer;
    outline: none;
    letter-spacing: 1.5px;
    font-size: 1.3rem;
    padding: 1rem;
    text-decoration: none;
  }
  
  .footer {
    height: 55vh;
    width: 100%;
    background-color: #2D2524;
  }

.follow {
  color: white;
  font-size: 24px;
  margin-left: 3rem;
}

.social {
  margin-left: 4rem;
}

.social img {
  margin: 0.5rem;
}

.terms a {
  color: white;
  text-decoration: none;
  float: right;
  margin-top: 10rem;
  margin-bottom: 2rem;
  font-size: 12px;
}

small {
  justify-content: center;
  display: flex;
  color: white;
  width: 100%;
}
  
  @media screen and (max-width: 1030px) {
    .prompt-inner h1 {
      margin-bottom: 2.2rem;
    }
    .prompt-inner h2 {
      margin-bottom: 1.2rem;
    }
    .prompt-inner p {
      font-size: 1.2rem;
    }

    .prompt-inner {
      height: 60rem;
      margin-top: 30rem;
    }

    .footer {
      height: 40vh;
      width: 100%;
      background-color: #2D2524;
  }
  }
  
  @media screen and (max-width: 766px) {
    .prompt-contents {
      width: 80%;
    }
    .prompt-inner {
      text-align: center;
      padding: 3rem 1.5rem;
    }
    .prompt-inner h1 {
      margin-bottom: 1rem;
      font-size: 1.8rem;
    }
    .prompt-inner h2 {
      margin-bottom: 0.5rem;
      font-size: 1.3rem;
    }
    .prompt-inner p {
      font-size: 1rem;
    }
    .btn1 {
      margin-top: 2.0rem;
      height: 20px;
    }

    .footer {
      height: 40vh;
      width: 100%;
      background-color: #2D2524;
  }

  .follow {
    margin-left: 1rem;
    font-size: 15px;
    font-weight: bold;
  }

  .social {
    margin-left: 2rem;
  }

  .terms a {
    color: white;
    text-decoration: none;
    margin-left: 0.5rem;
    margin-top: 8rem;
    margin-bottom: 2rem;
    font-size: 12px;
  }
  
  }
  
  * {
    margin: 0;
    padding: 0;
    font-family: 'Lato', sans-serif;
    font-weight: 100;
  }
  
  body {
    letter-spacing: 1.5px;
    background: #000000;
  }
  
  /*# sourceMappingURL=main.css.map */
    </style>
     <section>
      <div class="prompt">
          <div class="prompt-erea">
              <div class="prompt-inner">
                  <h1>Welcome</h1>
                  <h2>Confirm your email address</h2>
                  <p>Please click the button below to confirm your email address.</p>
                  <img src="{{asset('logo/yoasobi.png')}}" class="logo" alt="logo">
                  <a href="http://127.0.0.1:8000" class="btn1">Confirm email</a>
              </div> 
              
          </div>
          
      </div>
  </section>
  <div class="footer">
      <span class="follow">Follow Us Now !! #yoasobi</span>
      <div class="social">
          <a href="" target="_blank"><img src="{{asset('social link/001-facebook.svg')}}" width="32" height="32" alt="facebook link"></a>
          <a href="" target="_blank"><img src="{{asset('social link/011-instagram.svg')}}" width="32" height="32" alt="instagram link"></a>
          <a href="" target="_blank"><img src="{{asset('social link/013-twitter-1.svg')}}" width="32" height="32" alt="twitter link"></a>
      </div>
      <span class="terms"><a href="{{ route('terms.show') }}">Terms of service</a></span>
          <small class="copyright">Copyright 2019- yoasobi All Rights Reserved.</small>
  </div>
</body>
</html>