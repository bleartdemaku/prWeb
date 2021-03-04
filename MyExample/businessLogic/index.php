
<link rel="stylesheet" href="../css/header.css" />
<div class="container">
  <div class="link-container">
    <a id="firstA" onclick="changeForm(0)" href="#">Login</a>
    <a onclick="changeForm(1)" href="#">Register</a>
  </div>
  <form id="mainForm" action="../businessLogic/loginVerify.php" method="post" onsubmit="return validate()">
    <div class="login forms form-style">
      <label for="">Username:</label>
      <input type="text" name='username' class="input" placeholder="username..." />
      <label for="">Password:</label>
      <input type="password" name='password' class="input" placeholder="password..." />
      <input id="submit" type="submit" name='login-btn' class="input submit" value="Login" onclick="validate(0)">
    </div>
  </form>
  <form id="mainForm" action="../businessLogic/loginVerify.php" method="post" onsubmit="return validate()">
    <div class="register forms hidden">
      <label for="">Name:</label>
      <input type="text" class="input" name="register-username" placeholder="username..." />
      <label for="">Lastname:</label>
      <input type="text" class="input" name="register-lastname" placeholder="password..." />
      <label for="">Password:</label>
      <input type="password" class="input" name="register-password" placeholder="password..." />
      <input id="submitRegister" name="register-btn" type="submit" class="input submit" value="Register" onclick="validate(1)">
    </div>
  </form>
</div>

<script src="../js/main.js"></script>

<script>
  function validate(number){
    var inputList = document.getElementsByClassName('input');
    
    if(number == 0){
        
        var usernameValue = inputList[0].value;
        var passwordValue = inputList[1].value;
        
        if(usernameValue ===''){
          alert("Username duhet te plotesohet");
        }
        else if(usernameValue.length > 30){
          alert("Username duhet te kete me pak se 30 karaktera");
       }
       else if(passwordValue ===''){
           alert("Password incorrect");
       }
       else{
           alert("Login succsessful");
       }

    }

    else if(number == 1){
        var nameValue = inputList[2].value;
        var lastnameValue = inputList[3].value;
        var passwordValue = inputList[4].value;

        if(nameValue ==='' ){
            alert('Plotesoni emrin');
        }
        else if(nameValue.length>20){
            alert("Emri duhet te jete me pak se 20 karaktera");
        }
        else if(lastnameValue ===''){
            alert('Plotesoni Mbiemrin');
        }
        else if(lastnameValue.length>20){
          alert("Emri duhet te jete me pak se 20 karaktera");
        }
        else if(passwordValue ===''){
            alert('plotesoni passwordin');
        }
        else if(passwordValue.length>20){
            alert('Passwordi nuk mundet te jete me i gjate se 20 karaktera');
        }
        else{
            alert("Register succsessful");
            
        }
      }
  }
</script>