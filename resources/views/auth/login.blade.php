<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l"
 crossorigin="anonymous">
    <meta charset="utf-8">
    <title>signup & login </title>
   <!--  {{asset('backend/login/style.css')}} -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/login/style.css')}}">
        
</head>
<body>


<div class="container right-panel-active">
    <!-- message  -->



    <!-- Sign In -->
    <div class="container__form container--signin">
        <form action="{{ route('login')}}" method="post"  class="form" id="form2">
                   @csrf
            <h2 class="form__title">Sign In</h2>
            <input type="email" placeholder="Email" class="input"  name="email"/>
                    @error('email') 
                      <span class="text-danger">{{ $message }} </span>
                      @enderror 
            <input type="password" placeholder="Password" class="input"  name="password"/>

                        
              @error('password') 
                      <span class="text-danger">{{ $message }} </span>
                      @enderror 
            @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="link">Forgot your password?</a>
            @endif
            <button class="btn">Sign In</button>
     {{--     <p>Don't have an account yet ?
                      <a class="text-blue" href="{{route('register')}}"  style="text-decoration: none">Sign Up</a>
                    </p> --}}
        </form>
    </div>

    <!-- Overlay -->

    <div class="container__overlay">

        <div class="overlay">
            <div class="overlay__panel overlay--left">
                <button class="btn" id="signIn">Sign In >></button> <br>
               <h2>Don't have an account yet ?</h2>
<a href="#"><button class="btn" id="signIn" >Sign up</button></a>



            </div>
            <div class="overlay__panel overlay--right">
                <button class="btn" id="signUp"><< Sign in</button>
                <br>
                 <h2>Don't have an account yet ?</h2>
<a href="#"><button class="btn" id="signIn" >Sign up</button></a>

            </div>
        </div>
    </div>

</div>
  <p class="text-center " style="color: white; font-weight: bolder;">&copy; 2021 Copyright Admin Dashboard  by
          <a style="color: white;" class="text-primary" href="http://www.iamabdus.com/" target="_blank">Amankhalsa</a>.
        </p>
<script type="text/javascript" src="{{asset('backend/assets/login/java.js')}}">
    

    const signInBtn = document.getElementById("signIn");
const signUpBtn = document.getElementById("signUp");
const fistForm = document.getElementById("form1");
const secondForm = document.getElementById("form2");
const container = document.querySelector(".container");

signInBtn.addEventListener("click", () => {
    container.classList.remove("right-panel-active");
});

signUpBtn.addEventListener("click", () => {
    container.classList.add("right-panel-active");
});

fistForm.addEventListener("submit", (e) => e.preventDefault());
secondForm.addEventListener("submit", (e) => e.preventDefault());

</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>

</body>
</html>