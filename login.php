<!DOCTYPE html>
<html lang="en">
<title>OG Tech PC - Login</title>
<?php include "header.php"; ?>

<form method="POST" action="includes/login.inc.php">
  <div class="container">
    <h3 class="page-title grid">Login</h3>
    <div class="rounded-card-parent center">
      <div class="card rounded-card">
        <div class="row">
          <div class="input-field col s4 offset-s4">
          <i class="material-icons prefix white-text">account_circle</i>
            <label class="white-text">Username or Email</label>
            <input type="text" name="username" class="white-text">
          </div>
        </div>
        <div class="row">
          <div class="input-field col s4 offset-s4">
          <i class="material-icons prefix white-text">password</i>
            <label class="white-text">Password</label>
            <input type="password" name="pwd" class="white-text">
          </div>
        </div>
        <div class="row">
          <button type="submit" name="submit" class="btn" style="margin-left: 50px">Login</button>
        </div>
        <div class="row">
          <a href="recover_pass.php" style="margin-right: 10px">Forgot Password?</a>
          <span class="white-text">Not yet a member?</span>
          <a href="signup.php">Sign Up!</a>
          <div class="errormsg">
            <?php
              if (isset($_GET["error"]))
              {
                if ($_GET["error"] == "empty_input")
                  echo "<p>*Fill in all fields!</p>";
                else if ($_GET["error"] == "WrongLogin")
                  echo "<p>*Incorrect credentials!</p>";
                else if ($_GET["error"] == "usernotfound")
                  echo "<p>*User does not exists!</p>";
                else if ($_GET["error"] == "stmtfailed")
                  echo "<p>*SQL ERROR! Try Again Later.</p>";
              }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</form>

<?php include "footer.php"; ?>
</html>