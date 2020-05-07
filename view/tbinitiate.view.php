<?php
  include '../includes/class-autoload.inc.php';
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description" content="Initiating ticket book for a duty record.">
    <meta name="viewport" content="width-device-width, initial-scaled=1">
    <title>Initiate Ticket Book</title>
<?php
/*
    <script>
      $(document).ready(function(){
        $('#routes').change(function(){
          var route_id = $(this).val();
          $.ajax({
            url:"loadrecords.php",
            method:"post",
            data:{route_id:route_id},
            success:function(data){
              <?php echo "string"; ?>
              $('#test').html(data);
            }
          });
        });
      });
    </script>
*/
?>
  </head>
  <body>
    <header>

    </header>

    <main>
        <div>

            <form action="view\tbinitiate.view.php" method="post">
                <div>
                    <h1>Ticket book issue form</h1>
                </div>
                <select id="routes" name="routes" onchange="showdrec(this.value)">
                  <option value="default">Select a route</option>
                  <?php
                  $cashierObj = new CashierContrl();
                  $results = $cashierObj->showRoutes();
                  foreach ($results as $row){

                    echo "<option value=\"{$row['routeid']}\">{$row['RouteName']}</option>";
                  }
                  ?>
                </select>

                <script>
                  function showdrec(str) {
                    var xhttp;
                    xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                      if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("dutyrecordtable").innerHTML = this.responseText;
                      }
                    };
                    xhttp.open("GET", "../includes/loadrecords.php?q="+str, true);
                    xhttp.send();
                  }
                </script>

                <table id = "dutyrecordtable">
                  <tr>
                    <th>NumberPlate</th>
                    <th>Driver</th>
                    <th>Conductor</th>
                  </tr>
                  <?php
                    $cashierObj = new CashierContrl();
                    $results = $cashierObj->showDutyRecords();
                    foreach ($results as $row){
                      echo "<tr data-value=\"{$row['dutyid']}\">
                              <td>{$row['busid']}</td>
                              <td>{$row['driverid']}</td>
                              <td>{$row['conductorid']}</td>
                            </tr>";
                    }
                  ?>
                </table>
                <label for="tktbknum">Ticket Book number:</label>
                <select id="tktbknum" name="tktbknum" onchange="shownumoftkts(this.value)">
                  <option value="default">Select a Ticket book</option>
                  <?php
                  $cashierObj = new CashierContrl();
                  $results = $cashierObj->showTktBooks();
                  foreach ($results as $row){

                    echo "<option value=\"{$row['ticketbookid']}\">{$row['ticketbookid']}</option>";
                  }
                  ?>
                </select>
                <script>
                  function shownumoftkts(str) {
                    var xhttp;
                    xhttp = new XMLHttpRequest();
                    xhttp.onreadystatechange = function() {
                      if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("tktnumdiv").innerHTML = this.responseText;
                      }
                    };
                    xhttp.open("GET", "../includes/loadtktnumbers.php?q="+str, true);
                    xhttp.send();
                  }
                </script>


                <label for="tktnum" >Ticket number:</label>
                <div id="tktnumdiv">
                <input type="text" id="tktnum" name="tktnum" disabled value="">
                </div>
                <button type="submit" name="close">Change</button><br>
                <button type="submit" name="close">Close</button>
                <button type="submit" name="issue-book">Submit</button>
            </form>
        </div>
    </main>
  </body>
</html>
