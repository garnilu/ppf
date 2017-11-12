<html>
<body>
Welcome <?php echo $_POST["firstname"]; ?><br>
Your Curent Age is <?php echo $_POST["currentage"]; ?><br>

<?php
         function contributionPeriod($currentage, $pensionage) {
         	if ($currentage > $pensionage)
         		$contri = 0;
         	else
         	     $contri = $pensionage - $currentage;
            echo "Sum of the two numbers is : $contri";
         }
         
         contributionPeriod($_POST["currentage"], $_POST["pensionage"]);
      ?>

      

<body>

<html>
