<?php
  require "header.php";
?>
    <main>
      <?php
        if(isset($_SESSION['userUid'])) {
          echo '<p style="text-align: center;">You are logged in</p>';
        }
        else{
          echo '<p style="text-align: center;">You are logged out</p>';
        }
      ?>


    </main>
<?php
  require "footer.php";
?>
