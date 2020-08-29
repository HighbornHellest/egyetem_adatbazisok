<?php
	header("Content-Type: text/html; charset=utf-8");

   $conn = mysqli_connect('localhost', 'root','') or die("Hibás csatlakozás!");
        if ( mysqli_select_db($conn, 'adbktporog_szlxagt.sze') ) { // ha sikeres az adatbázis kiválasztása
            $sql = "INSERT INTO `mob` (`MobID`, `Nev`,`Szint`,`Elet`,`Pancel`,`Ero`,`Ugyesseg`,`Furgeseg`,`Alkat`,`Karizma`,`Inteligencia`,`Dr_op`)
			VALUES('".$_POST['MobID']."', '".$_POST['Nev']."',
			'".$_POST['Szint']."', '".$_POST['Elet']."',
			'".$_POST['Pancel']."', '".$_POST['Ero']."',
			'".$_POST['Ugyesseg']."', '".$_POST['Furgeseg']."',
			'".$_POST['Alkat']."', '".$_POST['Karizma']."',
			'".$_POST['Inteligencia']."', '".$_POST['Dr_op']."');";
			try{
            $res = mysqli_query($conn, $sql) or die ('Hibas utasitas!' . mysqli_error($conn));
			}catch(Exception $e){
				print $e;
			}
             echo "added";
            
        } else {                                    // nem sikerült csatlakozni az adatbázishoz
            die('Nem sikerült csatlakozni az adatbázishoz.');
        }
        mysqli_close($conn);
		
		


?>
<a href="index.php"> Vissza </a>