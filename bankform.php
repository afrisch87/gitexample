<?php



  $form =
 ' <FORM action="bankform.php" method="post">
    <fieldset>
    <LABEL for="amount">Amount: </LABEL>
              <INPUT type="text" id="amount"><BR>
    <INPUT type="radio" name="trans_type" value="Debit"> Debit<BR>
    <INPUT type="radio" name="trans_type" value="Credit"> Credit<BR>
    <INPUT type="submit" value="Send"> <INPUT type="reset">
    </fieldset>
   </FORM>';


   print_r ($_SERVER['REQUEST_METHOD']);

  if($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo $form;
  }
  else {
    echo '<br> Here are the details of your transaction: <br>';
    foreach($_POST as $key => $value) {
      echo $key . ': ' . $value . '<br>';
    }
  }

 
    
?>
