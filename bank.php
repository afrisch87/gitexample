<?php

  $balance = 100;

  function debit ($amount, &$total) {
    $total = $total - $amount;
    echo "debit: $$amount........Balance: $$total" . '<br>';
  }
  function credit ($amount, &$total) {
    $total = $total + $amount;
    echo "credit: $$amount.........Balance: $$total" . '<br>';
  }

  echo '<u>'.'<b>'. "Bank Account". '</u>'.'</b>' . '<br>';

  debit (5, $balance);
  debit (10, $balance);
  debit (3, $balance);
  debit (2, $balance);
  credit (1,$balance);
  credit (5,$balance);

  echo "Total: $$balance" . '<br>';
 


?>

