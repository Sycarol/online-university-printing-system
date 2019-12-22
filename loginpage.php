<?php

include('connection.php');
include('loginsignupserver.php');
include("header.php"); ?>

<div class="loginsignup">
  <button type="button" id="loginBtn" onclick="activeBtn()">Log in</button>
  <button type="button" id="signupBtn"  onclick="activeBtn1()">Sign up</button>
</div>
<center>
  <section>
    <article class="ls">
      <div class="login" id="dispLogin">
        <form class="loginForm" action="loginpage.php" method="post">
          <p>Matric No: </p>
          <input type="text" name="matricNo">
          <p>Password: </p>
          <input type="password" name="loginPW"></br>
          <button type="submit" name="loginUser">Log in</button>

          <p><a href="forgotpassword.php">Forgot password?</a></p>
        </form>
      </div>
      <div class="signup" id="dispSignup">
        <form class="signupForm" action="loginpage.php" method="post">
          <p>Email address: </p>
          <input type="email" name="email" placeholder="b0123456789@student.utem.edu.my" onblur="chkSignUpInput()" required>
          <br><small id="errEmail"></small>
          <p>IC No: </p>
          <input type="text" name="ic" placeholder="Numbers only." pattern="[0-9]{12}" onblur="chkSignUpInput()" required>
          <br><small id="errIc"></small>
          <p>Name: </p>
          <input type="text" name="userName" placeholder="" onblur="chkSignUpInput()" required>
          <br><small id="errUserName"></small>
          <p>Contact No: </p>
          <input type="text" name="phone" placeholder="" onblur="chkSignUpInput()" required>
          <br><small id="errPhone"></small>
          <p>Password: </p>
          <input type="password" name="passWord" placeholder="minimum 6 characters" onblur="chkSignUpInput()" required><br>
          <small id="errPw"></small><br>
          <p>Comfirm Password: </p>
          <input type="password" name="passWord1" onblur="chkSignUpInput()" required></br>
          <small id="errPw1"></small><br>
          <p>Hostel: </p>
          <select name="hostel">
            <option value="satria">SATRIA</option>
            <option value="lestari">LESTARI</option>
          </select>
          <input type="text" name="matricNo" hidden><br>
          <button type="submit" name="signUp" id="signUp" disabled="true">Sign up</button>
          <button type="reset" name="reset">Reset</button>
        </form>
      </div>
    </article>
  </center>
  <div class="info">
    <ul id="loginInfo">
      <li>Log in once, access our sites as  user and printer.</li>
      <li>Access printers available near you and request a print service.</li>
      <li>Manage printers and provide printing service to others.</li>
    </ul>
    <ul id="signupInfo">
      <li>One-stop system to ease your printing experiences in UTeM.</li>
      <li>Sign up with your matrics no and email address to use our system.</li>
      <li>Opt to log in as user or printer to access different services provided. </li>
      <li>Join us as printer to provide printing services and generate income.</li>
    </ul>
  </div>
  </section>

<?php include("footer.php"); ?>

</body>
</html>
