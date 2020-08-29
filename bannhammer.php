<?php
	//header("Content-Type: text/html; charset=utf-8");

   $conn = mysqli_connect('localhost', 'root','') or die("Hibás csatlakozás!");
		if($_POST['BANN']!="Highborn")
		{
        if ( mysqli_select_db($conn, 'adbktporog_szlxagt.sze') ) { // ha sikeres az adatbázis kiválasztása
            $sql = "DELETE FROM `jatekos` WHERE Nev='".$_POST['BANN']."'";
			try{
            $res = mysqli_query($conn, $sql) or die ('Hibás utasítás!' . mysqli_error($conn));
			}catch(Exception $e){
				print $e;
			}
            echo "BANHAMMER LESUJTOTT ES TOROLTE A FERGET!";
        } else {                                    // nem sikerült csatlakozni az adatbázishoz
            die('Nem sikerült csatlakozni az adatbázishoz.');
        }
        mysqli_close($conn);
		}
		else
		{
			
			echo "na ot azert nem engemdem";
		}


?>
<a href="index.php"> Vissza </a>