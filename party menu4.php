<html>
<body>
<form name="f" method="POST">
NUMBER OF PEOPLE:<input type="number" name="NUMBER_OF_PEOPLE">
</form>
</body>
</html>

<?php
$no=$_POST['NUMBER_OF_PEOPLE'];
$p=105;
echo"COST PER PLATE IS $p<br>";
$c=$no*$p;
echo"TOTAL COST: $c<br>";
echo"Thank you for placing the order";
?>