<?php
	header("Content-Type: text/html; charset=utf-8");

   $conn = mysqli_connect('localhost', 'root','') or die("Hib�s csatlakoz�s!");
        if ( mysqli_select_db($conn, 'adbktporog_szlxagt.sze') ) { // ha sikeres az adatb�zis kiv�laszt�sa
            $sql = "INSERT INTO `birtokol` (`ItemID`, `Nev`) VALUES('".$_POST['ItemID']."', '".$_POST['Nev']."');";
			//INSERT INTO `birtokol` (`ItemID`, `Nev`) VALUES('ItemID', 'Nev');
			try{
            $res = mysqli_query($conn, $sql) or die ('Hibas utasitas!' . mysqli_error($conn));
			}catch(Exception $e){
				print $e;
			}
             echo "Hozzadva";
            
        } else {                                    // nem siker�lt csatlakozni az adatb�zishoz
            die('Nem siker�lt csatlakozni az adatb�zishoz.');
        }
        mysqli_close($conn);
		


?>
<a href="index.php"> Vissza </a>