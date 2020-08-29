<?php
	header("Content-Type: text/html; charset=utf-8");

   $conn = mysqli_connect('localhost', 'root','') or die("Hibás csatlakozás!");
        if ( mysqli_select_db($conn, 'adbktporog_szlxagt.sze') ) { // ha sikeres az adatbázis kiválasztása
			$sql = "UPDATE `item` SET
			`Szint`='".$_POST['Szint']."',
			`Neve`='".$_POST['Neve']."',
			`ItemID`='".$_POST['ItemID']."',
			`Erteke`='".$_POST['Erteke']."',
			`Eletero`='".$_POST['Eletero']."',
			`Pancel`='".$_POST['Pancel']."',
			`Ero`='".$_POST['Ero']."',
			`Ugyesseg`='".$_POST['Ugyesseg']."', 
			`Furgeseg`='".$_POST['Furgeseg']."',
			`Alkat`='".$_POST['Alkat']."', 
			`Karizma`='".$_POST['Karizma']."',
			`Inteligencia`='".$_POST['Inteligencia']."'
			WHERE item.ItemID='".$_POST['ItemID']."';";
			try{
            $res = mysqli_query($conn, $sql) or die ('Hibas utasitas!' . mysqli_error($conn));
			}catch(Exception $e){
				print $e;
			}
             echo "updated";
            
        } else {                                    // nem sikerült csatlakozni az adatbázishoz
            die('Nem sikerült csatlakozni az adatbázishoz.');
        }
        mysqli_close($conn);
		
		


?>
<a href="index.php"> Vissza </a>