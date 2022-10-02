<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>signup & login </title>
   <!--  {{asset('backend/login/style.css')}} -->
    <link rel="stylesheet" type="text/css" href="{{asset('backend/assets/login/style.css')}}">
        
</head>
<body>
<div class="container right-panel-active">
  
   

    <!-- Sign In -->
    <div class="container__form container--signin">
       
       <!-- Sign Up -->  
<form method="post" action="{{ route('register')}}" class="form" id="form1">
            @csrf
            <h2 class="form__title">Sign Up</h2>
<input  placeholder="User" class="input"  type="text" name="name"  />

<input type="email" placeholder="Email" class="input"  name="email"  required //>

<input type="password" placeholder="Password" class="input"   name="password" required autocomplete="new-password" />

<input type="password" placeholder="Password confirmation" class="input"  name="password_confirmation" required autocomplete="new-password"/>

    <button class="btn">Sign Up</button>

        </form>
  
    </div>

    <!-- Overlay -->
    <div class="container__overlay">
        <div class="overlay">
            <div class="overlay__panel overlay--left">
                <button class="btn" id="signIn">Sign up >></button><br>
                <h2>Already have an account? </h2>
 <a href="{{route('login')}}"><button class="btn" id="signIn" >Login</button></a>

            </div>
            <div class="overlay__panel overlay--right">
                <button class="btn" id="signUp"><< Sign Up</button><br>
                <h2>Already have an account? </h2>
                
<a href="{{route('login')}}"><button class="btn" id="signIn" >Login</button></a>
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
</body>
</html>