<?php
	header("Content-Type: text/html; charset=utf-8");

   $conn = mysqli_connect('localhost', 'root','') or die("Hib�s csatlakoz�s!");
        if ( mysqli_select_db($conn, 'adbktporog_szlxagt.sze') ) { // ha sikeres az adatb�zis kiv�laszt�sa
            $sql = "SELECT * FROM mob ORDER BY Szint ASC;";
			try{
            $res = mysqli_query($conn, $sql) or die ('Hibas utasitas!' . mysqli_error($conn));
			}catch(Exception $e){
				print $e;
			}
             while (($row = mysqli_fetch_assoc($res))!= null) {
             echo "Nev: ".$row['Nev']." Szint: ".$row['Szint']." Ero: ".$row['Ero']." Ugyesseg: ".$row['Ugyesseg']." Alkat: ".$row['Alkat']." Karizma: "
			 .$row['Karizma']." Inteligencia: ".$row['Inteligencia']."Drop: ".$row['Dr_op']."MobID: ".$row['MobID'];
			 echo "<br>";
             }
             mysqli_free_result($res);
        } else {                                    // nem siker�lt csatlakozni az adatb�zishoz
            die('Nem siker�lt csatlakozni az adatb�zishoz.');
        }
        mysqli_close($conn);
		


?>
<a href="index.php"> Vissza </a>