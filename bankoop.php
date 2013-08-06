<?php

  class transactions {

   // public $balance;
    public $amount;
    public $total;
  }    
    
  
  class debit extends transactions {  
    function __construct($amount, &$total) {
      $total = $total - $amount;
      echo "debit: $$amount........Balance: $$total" . '<br>';
    }
  }
  class credit extends transactions {
    function __construct($amount, &$total) {
      $total = $total + $amount;
      echo "credit: $$amount.........Balance: $$total" . '<br>';
    }
  }
  class headers extends transactions{
    function __construct() {
      $balance = 100;
      echo '<u>'.'<b>'. "Bank Account". '</u>'.'</b>' . '<br>'.'<br>';
      echo "Beginning Balance $$balance <br> <br>";
     
    }
  }
  
  $balance = 100;
  $obj = new headers;
  $obj = new debit (5, $balance);
  $obj = new debit (10, $balance);
  $obj = new debit (3, $balance);
  $obj = new debit (2, $balance);
  $obj = new credit (1,$balance);
  $obj = new credit (5,$balance);

  echo '<br>' . "Ending Balance: $$balance" . '<br>';



?>
