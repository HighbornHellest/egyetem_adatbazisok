<?php
	//header("Content-Type: text/html; charset=utf-8");

   $conn = mysqli_connect('localhost', 'root','') or die("Hib�s csatlakoz�s!");
		if($_POST['BANN']!="Highborn")
		{
        if ( mysqli_select_db($conn, 'adbktporog_szlxagt.sze') ) { // ha sikeres az adatb�zis kiv�laszt�sa
            $sql = "DELETE FROM `jatekos` WHERE Nev='".$_POST['BANN']."'";
			try{
            $res = mysqli_query($conn, $sql) or die ('Hib�s utas�t�s!' . mysqli_error($conn));
			}catch(Exception $e){
				print $e;
			}
            echo "BANHAMMER LESUJTOTT ES TOROLTE A FERGET!";
        } else {                                    // nem siker�lt csatlakozni az adatb�zishoz
            die('Nem siker�lt csatlakozni az adatb�zishoz.');
        }
        mysqli_close($conn);
		}
		else
		{
			
			echo "na ot azert nem engemdem";
		}


?>
<a href="index.php"> Vissza </a>