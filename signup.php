<?php
  require "header.php";
?>
    <main>
      <div>
        <section>
          <h1>signup</h1>
          <?php
            if(isset($_GET['error'])){
              if($_GET['error']=="emptyfields"){
                echo '<p>Fill in all fields!</p>';
              }
              else if($_GET['error']=="invalidmailuid"){
                echo '<p>Invalid Username and E-mail!</p>';
              }
              else if($_GET['error']=="invaliduid"){
                echo '<p>Invalid Username!</p>';
              }
              else if($_GET['error']=="invalidmail"){
                echo '<p>Invalid E-mail!</p>';
              }
              else if($_GET['error']=="passwordcheck"){
                echo '<p>Your password do not match!</p>';
              }
              else if($_GET['error']=="usernametaken"){
                echo '<p>Username already taken!</p>';
              }
            }
            else if(isset($_GET['signup'])){
              if($_GET['signup']=="success"){
                echo '<p>Signup Successful!</p>';
              }
            }
          ?>
          <form action="includes/signup.inc.php" method="post">
            <input type="text" name="uid" placeholder="Username">
            <input type="text" name="mail" placeholder="E-mail">
            <input type="password" name="pwd" placeholder="Password">
            <input type="password" name="pwd-repeat" placeholder="Repeat password">
            <button type="submit" name="signup-submit">Signup</button>
          </form>
        </section>
      </div>
    </main>
<?php
  require "footer.php";
?>
