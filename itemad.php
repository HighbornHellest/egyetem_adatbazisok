<?php
	header("Content-Type: text/html; charset=utf-8");

   $conn = mysqli_connect('localhost', 'root','') or die("Hibás csatlakozás!");
        if ( mysqli_select_db($conn, 'adbktporog_szlxagt.sze') ) { // ha sikeres az adatbázis kiválasztása
            $sql = "INSERT INTO `birtokol` (`ItemID`, `Nev`) VALUES('".$_POST['ItemID']."', '".$_POST['Nev']."');";
			//INSERT INTO `birtokol` (`ItemID`, `Nev`) VALUES('ItemID', 'Nev');
			try{
            $res = mysqli_query($conn, $sql) or die ('Hibas utasitas!' . mysqli_error($conn));
			}catch(Exception $e){
				print $e;
			}
             echo "Hozzadva";
            
        } else {                                    // nem sikerült csatlakozni az adatbázishoz
            die('Nem sikerült csatlakozni az adatbázishoz.');
        }
        mysqli_close($conn);
		


?>
<a href="index.php"> Vissza </a>