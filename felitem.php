<?php
	header("Content-Type: text/html; charset=utf-8");

   $conn = mysqli_connect('localhost', 'root','') or die("Hib�s csatlakoz�s!");
        if ( mysqli_select_db($conn, 'adbktporog_szlxagt.sze') ) { // ha sikeres az adatb�zis kiv�laszt�sa
            $sql = "SELECT * FROM item WHERE ".$_POST['fele']." AND ".$_POST['felk'].";" ;
			try{
            $res = mysqli_query($conn, $sql) or die ('Hib�s utas�t�s!' . mysqli_error($conn));
			}catch(Exception $e){
				print $e;
			}
			//echo $sql;
             while (($row = mysqli_fetch_assoc($res))!= null) {
              echo " Szint: ".$row['Szint']. "Nev: ".$row['Neve'].
			 "ItemID: ".$row['ItemID']." Erteke ".$row['Erteke'].
			 "Eletero: ".$row['Eletero']." Pancel ".$row['Pancel'].
			 " Ero: ".$row['Ero']." ugyesseg: "
			 .$row['Ugyesseg']." Alkat: ".$row['Alkat'].
			 " Karizma: ".$row['Karizma'].
			 " Inteligencia: ".$row['Inteligencia'];
			 echo "<br>";
             }
             mysqli_free_result($res);
        } else {                                    // nem siker�lt csatlakozni az adatb�zishoz
            die('Nem siker�lt csatlakozni az adatb�zishoz.');
        }
        mysqli_close($conn);
		


?>
<a href="index.php"> Vissza </a>