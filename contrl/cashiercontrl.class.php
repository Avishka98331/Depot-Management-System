 <?php

 /**
  *
  */
 class CashierContrl extends Cashier
 {

   public function showRoutes()
   {

     $results = $this->getRoutes();

     return $results;

   }

   public function showTktBooks()
   {

     $results = $this->getTktBooks();

     return $results;

   }

   public function showSelectedtktbook($tktbkid)
   {
     $results = $this->getSelectedtktbook($tktbkid);

     return $results;
   }

   public function showDutyRecords()
   {

     $results = $this->getDutyRecords();

     $count = 0;
     foreach ($results as $row){
       $record = $this->getbusRecord($row['busid']);
       $results[$count]['busid'] = $record[0]['numplate'];
       $record = $this->getemployeeRecord($row['driverid']);
       $results[$count]['driverid'] = $record[0]['FirstName'];
       $record = $this->getemployeeRecord($row['conductorid']);
       $results[$count]['conductorid'] = $record[0]['FirstName'];
       $count++;
     }

     return $results;

   }

   public function showSelectedDutyRecords($routeid)
   {
     $results = $this->getselectedDutyRecords($routeid);

     $count = 0;
     foreach ($results as $row){
       $record = $this->getbusRecord($row['busid']);
       $results[$count]['busid'] = $record[0]['numplate'];
       $record = $this->getemployeeRecord($row['driverid']);
       $results[$count]['driverid'] = $record[0]['FirstName'];
       $record = $this->getemployeeRecord($row['conductorid']);
       $results[$count]['conductorid'] = $record[0]['FirstName'];
       $count++;
     }

     return $results;
   }
 }
