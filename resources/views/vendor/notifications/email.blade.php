<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office" lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0">
    <link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link href="https://fonts.googleapis.com/css?family=Lato&display=swap">
    <title>Mail-send-page</title>
    <style>
        @media screen and (max-width: 767px) {
          .btn-area {
            margin: 80px auto;
          }
        }
        @media screen and (max-width: 767px) {
          .Confirm-box td {
            font-size: 20px;
          }
        }
        @media screen and (max-width: 767px) {
          .btn-content {
            padding: 4px 20px;
            width: 150px;
          }
        }

        @media screen and (max-width: 414px) {
          .btn-area {
            margin: 70px auto;
          }
        }
        @media screen and (max-width: 414px) {
          .Confirm-box {
            padding: 80px 30px;
          }
        }
        @media screen and (max-width: 414px) {
          .Confirm-box td {
            font-size: 18px;
          }
        }
        .header {
            background: #2d2524;
        }

        .header-table {
          width: 100%;
          background: #2d2524;
          position: fixed;
          -webkit-box-pack: center;
              -ms-flex-pack: center;
                  justify-content: center;
        }

        .header-area {
          text-align: center;
          background: #2d2524;
          margin: 0 auto;
        }

        .header-area img {
          height: 50px;
        }

        .main-table {
          width: 100%;
          height: 80vh;
          background-image: url({{url('./email/chris-slupski-tCM6cQjIQ7Q-unsplash.jpg')}});
          background-size: cover;
          background-repeat: no-repeat;
        }

        .Confirm-box {
          width: 100%;
          padding: 80px 50px;
          color: #ffffff;
          background: rgba(0, 0, 0, 0.6);
        }

        .Confirm-box tr {
          text-align: left;
        }

        .Confirm-box td {
          font-weight: bold;
          font-size: 24px;
        }

        .btn-content {
          font-weight: bold;
          background: #0FCC41;
          border-radius: 30px;
          color: #fff;
          padding: 4px 20px;
          width: 200px;
          text-align: center;
          vertical-align: middle;
        }

        .btn-content a {
          color: #ffffff;
          text-decoration: none;
        }

        .btn-area {
          margin: 80px 60px;
        }

        .btn-area tr {
          height: 50px;
          cursor: pointer;
        }

        .footer-table {
          width: 100%;
          background: #262626;
          color: #ffffff;
        }

        .footer-table tr td {
          padding: 20px 20px 0px;
          text-align: center;
        }

        .sns-icon {
          position: relative;
          width: 40px;
          height: 40px;
          border-radius: 50%;
          background: #ffffff;
        }

        .sns-icon img {
          position: absolute;
          top: 50%;
          left: 50%;
          -webkit-transform: translateY(-50%) translateX(-50%);
                  transform: translateY(-50%) translateX(-50%);
          width: 25px;
          height: 25px;
        }

        .sns-box {
          margin: 0 auto;
          padding: 20px 10px 30px;
        }

        .sns-box tr {
          background: #262626;
          color: #ffffff;
          width: 100%;
        }

        .sns-box tr a {
          cursor: pointer;
        }

        .margin-box {
          width: 30px;
          height: 30px;
        }

        .footer-text {
          color: #ffffff;
          width: 100%;
          text-align: center;
        }

        .footer-text td {
          padding: 10px 50px;
        }



        * {
          margin: 0;
          padding: 0;
          font-family: 'Lato', sans-serif;
          font-weight: 100;
        }

        body {
          background: #262626;
        }
        /*# sourceMappingURL=main.css.map */

        </style>
</head>


<body>
<<<<<<< HEAD
    <table class="header-table">
            <tr class="header-area">
                <td>
                  <img src="{{asset('logo/yoasobi.png')}}" class="logo" alt="logo">
                </td>
            </tr>
    </table>

    <table class="main-table" style="back-ground:">
        <tbody>
            <tr>
                <td>
                    <table class="Confirm-box">
                        <tbody>
                            <tr>
                                <td>Confirm your email address</td>
                            </tr>
                            <tr>
                                <td>Please click the button below to confirm your email address.</td>
                            </tr>
                            <table class="btn-area">
                                <tr>
                                    <td class="btn-content">
                                        <a href="http://127.0.0.1:8000" class="btn1">Confirm email</a>
                                    </td>
                                </tr>
                            </table>
                        </tbody>
                    </table>
                </td>
            </tr>
        </tbody>
    </table>

    <table class="footer-table">
        <tbody>
                <tr>
                    <td>Fllow Us Now !! #yoasobi</td>
                </tr>
                <table class="sns-box">
                        <a href=""><td class="sns-icon"><img src="{{asset('social link/facebook.svg')}}" alt="facebook link"></td></a>
                        <td class="margin-box"></td>
                        <a href=""><td class="sns-icon"><img src="{{asset('social link/twitter.svg')}}" alt="twitter link"></td></a>
                        <td class="margin-box"></td>
                        <a href=""><td class="sns-icon"><img src="{{asset('social link/instagram-logo.svg')}}" alt="instagram link"></td></a>
                </table>
                <table class="footer-text">
                    <tr>
                        <a href="{{ route('terms.show') }}"><td>Terms of service</td></a>
                    </tr>
                    <tr>
                        <td>©️ 2019- yoasobi All Rights Reserved</td>
                    </tr>
                </table>
        </tbody>
    </table>
=======
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
>>>>>>> bba8e8af1342c1359a023d79a98682eaf9002e3b
</body>
</html>