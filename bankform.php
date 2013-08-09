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


  echo $form;
?>
