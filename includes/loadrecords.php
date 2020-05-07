<?php
  include 'class-autoload.inc.php';
    echo
    "<tr>
      <th>NumberPlate</th>
      <th>Driver</th>
      <th>Conductor</th>
    </tr>";
    if ($_GET['q'] == "default") {
      $cashierObj = new CashierContrl();
      $results = $cashierObj->showDutyRecords();
      foreach ($results as $row){
        echo "<tr data-value=\"{$row['dutyid']}\">
                <td>{$row['busid']}</td>
                <td>{$row['driverid']}</td>
                <td>{$row['conductorid']}</td>
              </tr>";
      }
    }else {
      $cashierObj = new CashierContrl();
      $results = $cashierObj->showSelectedDutyRecords($_GET['q']);
      foreach ($results as $row){
        echo "<tr data-value=\"{$row['dutyid']}\">
                <td>{$row['busid']}</td>
                <td>{$row['driverid']}</td>
                <td>{$row['conductorid']}</td>
              </tr>";
      }
    }


?>
