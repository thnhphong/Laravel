<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Log In</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</head>
<style>
    *{
        font-family: 'Times New Roman', Times, serif;
    }
    body{
        display: flex;
        justify-content: center;
        align-items: center;
        overflow: hidden;
        width: 1280px;
        height: 100vh;
        margin: 0;
        background: #ECECEC;
    }
    .img-content{
        width: 100%;
    }
    .login-container{
        display: flex;
        justify-content: flex-end;
        width: 100%;
        height: 760px;
    }
    .form-container{
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
        max-height: 760px;
        max-width: 560px;
        background: #ffffff;
        border-radius: 50px;
        align-items: center;
    }
    .form-content{
        text-align: center;
    }
.rounded-circle {
    margin-bottom: 10px;
    width: 35px;
    height: 35px;
}
.rounded-circle_blue{
    background: linear-gradient(222deg, #1a1ad6 11.95%, rgba(28, 28, 161, 0.10) 99.74%);
}
.rounded-circle_red{
    background: linear-gradient(140deg, #c50000 10.09%, rgba(164, 0, 0, 0.13) 92.68%);
}
.logo{
    display: flex;
    justify-content: center;
    margin:  100px 0px 10px 0px;
}
.logo .text{
    background: linear-gradient(268deg, #0603AE 4.54%, #9B0000 97.77%);
background-clip: text;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}
.welcome h4{
    font-size: 36px;
}
.welcome p{
    font-size: 20px;
}
.welcome .text{
    background: linear-gradient(268deg, #0603AE 4.54%, #9B0000 97.77%);
background-clip: text;
-webkit-background-clip: text;
-webkit-text-fill-color: transparent;
}
    .input input{
        outline: none;
        width: 440px;
        border: none;
        border-bottom: 1px solid black;
    }
    .input input:focus{
        border-bottom: 1px solid #b5b5b5;
    }
    .input label{
        font-size: 19px;
        margin: 0;
    }
    .remember-password{

        display: flex;
        justify-content: space-around;
    }
    .remember-password p{
      padding-right: 96px;
    }
    .square{
        margin: 6px 6px 0px 0px;
        width: 12px;
        height: 12px;
        border: 1px solid black;
        border-radius: 2px;
    }
    .buttons{
        align-items: center;
        display: flex;
        flex-direction: column;
    }
    .buttons button{
        margin: 18px 0px;
        width: 440px;
        height: 60px;
    }
    .login{
        font-weight: 650;
        border: none;
        background: black;
        color: white;
        border-radius: 50px;
    }
    .login_google{
        font-weight: 650;
        border: none;
        background: ECECEC;
        color: black;
        border-radius: 50px;
    }
    .account{
        margin: 60px 0px 0px 0px;
        display: flex;
        justify-content: center;
    }
    .account a{
        color: black;
        text-decoration: none;
        font-size: 20px;
    }
    .password{
        margin: 20px 0px;
        display: flex;
        justify-content: space-around;
    }
    .img-content{
       position: relative;
       display: flex;
       align-items: center;
       justify-content: center;
       height: 100vh;
    }
    .top{
        position: absolute;
        top: -10%;
        left: 0%;
        transform: rotate(-30deg);
    }
    .bottom{
        position: absolute;
        bottom: -10%;
        left: 0%;
        transform: rotate(-30deg);
        transform: rotate(30deg);
    }
    .quote {
        color: green;
        font-size: 22px;
        text-align: center;
        margin-top: 20px;
        width: 340px;
        height: 60px;
        border-radius: 8px 16px 8px 40px;
        background: #FFF;
        box-shadow: -10px 4px 4px 0px rgba(0, 0, 0, 0.25);
    }
    .home{
        color: black;
        text-decoration: none;
        font-size: 20px;
        display: flex;
        width: 80px;
        height: 30px;
        justify-content: center;
        text-align: center;
        margin-top: 100px;
        cursor: pointer;
        border-radius: 10px;
    }
    .home:hover{
        color: black;
        background: rgb(192, 192, 192);
    }
    .home i{
        font-size: 20px;
        margin-top: 5px;
    }

    </style>

        <body>
            <div class="login-container">
                <div class="img-content">
                    <img width="190px" height="190px" class="top" src="{{ asset('storage/img/book.png') }}"> 
                  <div>
                    <img width="320px" height="320px" src="{{ asset('storage/img/login book.png') }}">
                    <div class="quote">
                        A book is a gift you can open again and again.
                    </div>
                    <a class="home" href="{{route('home')}}">
                        <i class="fa-solid fa-arrow-left"></i>
                        <p>Home</p>
                    </a>
                  </div>
                    <img width="190px" height="190px"  class="bottom" src="{{ asset('storage/img/book.png') }}">
                </div>
                <div class="form-container">
                    <div class="form-content">
                        <div class="logo">
                            <div class="rounded-circle rounded-circle_blue"></div>
                            <div class="rounded-circle rounded-circle_red"></div>
                            <div class="text"><h2>BookClick</h2></div>
                        </div>
                        <div class="welcome">
                            <h4>Welcome back.</h4>
                            <p>Please enter your details</p>
                        </div>
                        <div class="input text-center">
                           <div class="d-inline-block text-left mb-2"> 
                            <label for="email" >Email</label><br>
                            <input type="text"></div>
                            <div class="d-inline-block text-left">
                                <label for="password" >Password</label><br>
                                <input type="text"></div>
                        </div>
                        <div class="password">
                            <div class="remember-password">
                                <div class="square"></div>
                                <p>Remember for 30 days</p>
                            </div>
                            <p>Forgor password</p>
                        </div>
                        <div class="buttons">
                            <button type="submit" class="login">Log In</button>
                            <button class="login_google">
                                <svg enable-background="new 0 0 48 48" height="30" viewBox="0 0 48 48" width="30" xmlns="http://www.w3.org/2000/svg"><path d="m43.611 20.083h-1.611v-.083h-18v8h11.303c-1.649 4.657-6.08 8-11.303 8-6.627 0-12-5.373-12-12s5.373-12 12-12c3.059 0 5.842 1.154 7.961 3.039l5.657-5.657c-3.572-3.329-8.35-5.382-13.618-5.382-11.045 0-20 8.955-20 20s8.955 20 20 20 20-8.955 20-20c0-1.341-.138-2.65-.389-3.917z" fill="#ffc107"/><path d="m6.306 14.691 6.571 4.819c1.778-4.402 6.084-7.51 11.123-7.51 3.059 0 5.842 1.154 7.961 3.039l5.657-5.657c-3.572-3.329-8.35-5.382-13.618-5.382-7.682 0-14.344 4.337-17.694 10.691z" fill="#ff3d00"/><path d="m24 44c5.166 0 9.86-1.977 13.409-5.192l-6.19-5.238c-2.008 1.521-4.504 2.43-7.219 2.43-5.202 0-9.619-3.317-11.283-7.946l-6.522 5.025c3.31 6.477 10.032 10.921 17.805 10.921z" fill="#4caf50"/><path d="m43.611 20.083h-1.611v-.083h-18v8h11.303c-.792 2.237-2.231 4.166-4.087 5.571.001-.001.002-.001.003-.002l6.19 5.238c-.438.398 6.591-4.807 6.591-14.807 0-1.341-.138-2.65-.389-3.917z" fill="#1976d2"/></svg>
                                Log in with Google</button>
                        </div>
                        <div class="account d-lg-flex d-md-flex d-sm-table-cell">
                            <p>Don't have an account?</p>
                            <a href="{{route('signup')}}">Sign Up</a>
                        </div>
                    </div>
                </div>
            </div>
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>