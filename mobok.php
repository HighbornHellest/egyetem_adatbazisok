<?php
	header("Content-Type: text/html; charset=utf-8");

   $conn = mysqli_connect('localhost', 'root','') or die("Hibás csatlakozás!");
        if ( mysqli_select_db($conn, 'adbktporog_szlxagt.sze') ) { // ha sikeres az adatbázis kiválasztása
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
        } else {                                    // nem sikerült csatlakozni az adatbázishoz
            die('Nem sikerült csatlakozni az adatbázishoz.');
        }
        mysqli_close($conn);
		


?>
<a href="index.php"> Vissza </a>