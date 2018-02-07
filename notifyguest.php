<?php

$connect = mysqli_connect('localhost','root','','wildcraf_14_jun');  
if (!$connect) { 
	die('Could not connect to MySQL: ' . mysqli_error());
}
		$query = "SELECT * from guest";
		$result = mysqli_query($connect,$query);
		$rowcount = mysqli_num_rows($result);
		echo '<span style="font-size:22px;font-family:serif;">Notify GuestUser Data</span><br/>';
		echo  '<span style="font-family:fantasy">'.$rowcount.'</span>';
		//while ($row = mysqli_fetch_array($result))
            //{	
				//echo "$row[0]".'<br/>';
			//}   
		?>