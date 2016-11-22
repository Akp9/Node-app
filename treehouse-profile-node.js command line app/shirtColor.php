<?php

?>
<html>
<head><title>      </title></head>
<body>
<?php

  $cxn = mysqli_connect($host, $user, $passwd, $dbname) or die("couldn't connect to server");
  
  $query = "SELECT * FROM ShirtColor ORDER BY ShirtColor";
  $result = mysqli_query($cxn, $query)
            or die ("couldn't execute query.");
			
   echo "<div style='margin-left: .lin'>/n 
   <h1 style='text-align: centre'>Shirt Catalog</h1>/n 
   <h2 style='text-align: centre'>Shirt Catalog</h2>/n 
   <p style='text-align: centre'> sfafasfadfa</p>
   <h3> asfafadfadfad</h3>/n
   
   echo "<form action='"
   echo "<table cellpadding='5' border='1'>";
   $counter=1;
   while($row = mysqli_fetch_assoc($result)
   {
	   extract($row)
	   echo "<tr><td> valign='top' width='14%'
	                  style='font-weight: bold;
					  font-size: 1.1em'/n";
	 echo "<input type='radio' name='interest'
	                   value='pet-type'/n';
    if) $counter == 1)
	{
		echo "checked='checked'";
	}
	echo ">$ShirtColor</tf>";
	echo "<td>$colorDescription</td></tr>";
	$counter++
   }
   echo "</table>";
   echo 