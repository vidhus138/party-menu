<?php
if($_POST)
{


$astarters=$_POST['starters'];
if(!isset($astarters)) 
{
    echo("<p>You didn't select any starters!</p>\n");
} 
 else
{
    $nstarters = count($astarters);
     
    echo("<p>You selected $nstarters starters: ");
    for($i=0; $i < $nstarters; $i++)
    {
      echo($astarters[$i] . " ");
    }
    echo("</p>");
}

$amaincourse=$_POST['maincourse'];
if(!isset($amaincourse)) 
{
    echo("<p>You didn't select any maincourse!</p>\n");
} 
 else
{
    $nmaincourse = count($amaincourse);
     
    echo("<p>You selected $nmaincourse maincourse: ");
    for($j=0; $j < $nmaincourse; $j++)
    {
      echo($amaincourse[$j] . " ");
    }
    echo("</p>");
}

$arice=$_POST['rice'];
if(!isset($arice)) 
{
    echo("<p>You didn't select any rice!</p>\n");
} 
 else
{
    $nrice = count($arice);
     
    echo("<p>You selected $nrice rice: ");
    for($k=0; $k < $nrice; $k++)
    {
      echo($arice[$k] . " ");
    }
    echo("</p>");
}

$abreads=$_POST['breads'];
if(!isset($abreads)) 
{
    echo("<p>You didn't select any breads!</p>\n");
} 
 else
{
    $nbreads = count($abreads);
     
    echo("<p>You selected $nbreads breads: ");
    for($l=0; $l < $nbreads; $l++)
    {
      echo($abreads[$l] . " ");
    }
    echo("</p>");
}

$adesserts=$_POST['desserts'];
if(!isset($adesserts)) 
{
    echo("<p>You didn't select any desserts!</p>\n");
} 
 else
{
    $ndesserts = count($adesserts);
     
    echo("<p>You selected $ndesserts desserts: ");
    for($m=0; $m < $ndesserts; $m++)
    {
      echo($adesserts[$m] . " ");
    }
    echo("</p>");
}

$adrinks=$_POST['drinks'];
if(!isset($adrinks)) 
{
    echo("<p>You didn't select any drinks!</p>\n");
} 
 else
{
    $ndrinks = count($adrinks);
     
    echo("<p>You selected $ndrinks drinks: ");
    for($n=0; $n < $ndrinks; $n++)
    {
      echo($adrinks[$n] . " ");
    }
    echo("</p>");
}

$acomplimentary=$_POST['complimentary'];
if(!isset($acomplimentary)) 
{
    echo("<p>You didn't select any complimentary!</p>\n");
} 
 else
{
    $ncomplimentary = count($acomplimentary);
     
    echo("<p>You selected $ncomplimentary complimentary: ");
    for($o=0; $o < $ncomplimentary; $o++)
    {
      echo($acomplimentary[$o] . " ");
    }
    echo("</p>");
}
}
?>

<html>
<body>
<form action="party menu4.php" method="POST">
<input type="submit" value="GO TO BILLING">
</form>
</body>
<html>


