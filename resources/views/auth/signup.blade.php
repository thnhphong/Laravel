<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sign Up</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>

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
    }
    .signup-container{
        display: flex;
    }
    .form{
        margin: 80px auto;
        max-width: 500px;
        padding: 20px;
    }
    .form h2{
        padding-bottom: 25px;
    }
    #submitBtn{
        position: relative;
        width: 10px;
        height: 10px;
        border: 1px solid black;
    }
    .signupBtn{
        width: 510px;
        background: black;
        color: white;
        border-radius: 50px;
        height: 50px;
        border: none;

    }
    .account{
        width: 510px;
        margin-top: 20px;
        display: flex;
        justify-content: space-evenly;
    }
    .account a{
        color: black;
        text-decoration: none;
        font-size: 20px;
    }
    .input{
        height: 95px;
        margin-bottom: 10px;
    }
input:-webkit-autofill {
    -webkit-box-shadow: 0 0 0 30px rgb(241, 241, 241) inset;
}
input:-webkit-autofill:focus {
    background-color: white;
}

.error{
    color: red;
}
    .input input{
        border: 0.5px solid black;
        transition: border 0.05s ease;
    }
    .input input:focus{
        border: 2px solid black;
    }

input[type=text], select {
    border-radius: 50px;
  width: 510px;
  height: 45px;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
  outline: none;
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
    .square{
        margin: 5px 10px 0px 0px;
        position: relative;
        border-radius: 3px;
        width: 15px;
        height: 15px;
        border: 1px solid black;
        cursor: pointer;
    }
    .tick{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        display: none;
        font-size: 10px;
        text-align: center;
    }
    .square.clicked .tick{
        display: block;
    }
    .square.clicked{
        background: rgb(246, 240, 240);
    }
    .terms{
        display: flex;
    }
    .right{
        position: relative;
        margin: 50px 0px 0px 200px;
        align-items: center;
        display: flex;
        width: 500px;
        height: 750px;
        border-radius: 100px 100px 0px 0px;
        background-image: url('{{asset('storage/img/signup book.png')}}');
        background-repeat: no-repeat;
        background-size: cover;
    }
    .right button{
        color: white;
        font-size: 12px;
        border: none;
        width: 200px;
        height: 35px;
       position: absolute;
       bottom: 5%;
       border-radius: 50px;
    background: rgba(255, 255, 255, 0.10);
    backdrop-filter: blur(5px);
    }
    .btn-left{
        left: 5%;
    }
    .btn-right{
        right:5%;
    }
</style>
</head>
<body>
    <div class="signup-container">
        <div class="row">
            <div class="col-md-6">
                <form class="form" method="POST" action="{{route ('signup.store')}} " onsubmit="return validateForm()">
                    @csrf
                    <h2 class="text-center">Create Your Account</h2>
                    <div class="inputs">
                        <div class="input input1">
                            <label for="name">Name*</label>
                            <input name="name" type="text" id="name"  placeholder="Enter your name" autocomplete="given-name">
                            <div id="nameError" class="error"></div>
                        </div>
                        <div class="input input2">
                            <label for="email">Email*</label>
                            <input name="email" type="text" id="email" placeholder="Enter your email" autocomplete="given-name">
                            <div id="emailError" class="error"></div>
                        </div>
                        <div class="input input3">
                            <label for="password">Password*</label>
                            <input name="password" type="text" id="password"  placeholder="Enter your password" autocomplete="given-name">
                            <div id="passwordError" class="error"></div>
                        </div>
                    </div>
                    <div class="terms">
                        <div class="square" onclick="toogleTick(this)">
                        <div class="tick">&#10004;</div>
                    </div>
                        <p>I agree to the terms and condition</p>
                    </div>
                    <button type="submit" class="signupBtn">
                        Sign Up
                    </button>
                    <div class="account">
                        <p>Already have an account? </p>
                        <a href="login">Log In</a>
                    </div>
                    <x-home-link />
                </form>
            </div>
            <div class="col-md-6">
             <div class="right">
                <button class="btn-left">100% Guarantee</button> 
                <button class="btn-right">Free delivery Ho Chi Minh Area</button>
             </div>
            </div>
        </div>
    </div>
    <script>
        function toogleTick(square){
            square.classList.toggle('clicked');
        }
        function validateForm(){
            const nameInput = document.getElementById('name');
            const emailInput = document.getElementById('email');
            const passwordInput = document.getElementById('password');
            if(!nameInput.value){
                document.getElementById('nameError').innerText = 'Name is required';
                return false;
            }else{
                document.getElementById('nameError').innerText = '';
            }
            if (!emailInput.value) {
            document.getElementById('emailError').innerText = 'Email is required.';
            return false;
        } else {
            document.getElementById('emailError').innerText = '';
        }
        if (!passwordInput.value) {
            document.getElementById('passwordError').innerText = 'Password is required.';
            return false;
        } else {
            document.getElementById('passwordError').innerText = '';
        }
        return true;
        }
    </script>

</body>
</html>