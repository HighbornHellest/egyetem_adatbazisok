<?php
	header("Content-Type: text/html; charset=utf-8");

   $conn = mysqli_connect('localhost', 'root','') or die("Hib�s csatlakoz�s!");
        if ( mysqli_select_db($conn, 'adbktporog_szlxagt.sze') ) { // ha sikeres az adatb�zis kiv�laszt�sa
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
            
        } else {                                    // nem siker�lt csatlakozni az adatb�zishoz
            die('Nem siker�lt csatlakozni az adatb�zishoz.');
        }
        mysqli_close($conn);
		
		


?>
<a href="index.php"> Vissza </a>