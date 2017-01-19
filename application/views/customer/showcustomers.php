<h2>Customer from db</h2>
<?php
  foreach ($customers as $row) {
    echo $row['fn'].' '.$row['ln'].'<br>';
  }
?>
