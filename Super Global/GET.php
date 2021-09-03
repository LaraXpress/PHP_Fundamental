<?php 
      $data = array();
      echo '<pre>';
      print_r($data);

      $values = array('Apple','Sumsung','Nokia');
      echo '<pre>';
      print_r($values);

      $items = ['name'=>'Audi','model'=>'Audi503','price'=>'125000 USD'];
      echo '<pre>';
      print_r($items);

      # Not allow for it
      echo $_GET; 
      echo '<br/>';
      print_r($_GET);

      # Undefined Error
      echo $_GET['name'];

      # Undefined Error
      if($_GET['name']){
         echo $_GET['name'];
      }
      
      # To resolve undefined Error
      if(isset($_GET['name'])){
           echo $_GET['name'];
      }else{
           echo $_GET['name'] = 'BBA and MBA';
      }

      # Short Form to write on $_GET
      $name = isset($_GET['name'])? 'Yes' : 'No';
      echo $name;

      $name = isset($_GET['name'])? $_GET['name'] : NULL;
      echo $name;
?>