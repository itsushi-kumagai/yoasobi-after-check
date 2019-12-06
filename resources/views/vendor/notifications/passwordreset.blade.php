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
          background-image: url({{url('./email/andre-benz-Mn9Fa_wQH-M-unsplash.jpg')}});
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
                                <td>Change password</td>
                            </tr>
                            <tr>
                                <td>Create a new password</td>
                            </tr>
                            <tr>
                                <td>Please click the button below to change your password.</td>
                            </tr>
                            <table class="btn-area">
                                <tr>
                                    <td class="btn-content">
                                    <a href="{{$reset_url}}" class="btn1">Rest Password</a>
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

</body>
</html>