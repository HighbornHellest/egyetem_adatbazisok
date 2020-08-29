<?php

?>
<form method = "POST" action="spec.php" >
<input type="text" name="lekerdeznev">Specifikus játékos adatainak lekérése</input>
<button type="submit">Játékosok </button>
</form>
<br>
<form method = "POST" action="toplist.php" >
<button type="submit">Toplista </button>
</form>
<br>
<form method = "POST" action="itemad.php" >
Item hozzáadása 1 játékoshoz
<input type="int" name="ItemID">Mit</input>
<input type="text" name="Nev">Kinek</input>
<button type="submit">ADD </button>
</form>
<br>
<form method = "POST" action="mobok.php" >
Mobok lekérdezése
<button type="submit">mobok</button>
</form>
<br>

	<form>
	<?php
        $conn = mysqli_connect('localhost', 'root','') or die("Hibás csatlakozás!");
        if ( mysqli_select_db($conn, 'adbktporog_szlxagt.sze') ) { // ha sikeres az adatbázis kiválasztása
            $sql = "SELECT MobID FROM mob ORDER BY MobID Desc LIMIT 1;";
			try{
            $res = mysqli_query($conn, $sql) or die ('Hibas utasitas!' . mysqli_error($conn));
			}catch(Exception $e){
				print $e;
			}
             while (($row = mysqli_fetch_assoc($res))!= null) {
				 $kiad=$row['MobID'];
				 ++$kiad;
             echo "Következő mobid: ". "$kiad";
			 echo "<br>";
             }
             mysqli_free_result($res);
        } else {                                    // nem sikerült csatlakozni az adatbázishoz
            die('Nem sikerült csatlakozni az adatbázishoz.');
        }
        mysqli_close($conn);
		?>
	</form>
<form method = "POST" action="Mobadd.php" >
Mob felvétele az adatbázisba<br>
<input type="int" name="MobID">MobID</input>
<input type="text" name="Nev">Név</input>
<input type="int" name="Szint">Szint</input>
<input type="int" name="Elet">Elet</input>
<input type="int" name="Pancel">Pancel</input>
<input type="int" name="Ero">Ero</input>
<input type="int" name="Ugyesseg">Ugyesseg</input><br>
<input type="int" name="Furgeseg">Furgeseg</input>
<input type="int" name="Alkat">Alkat</input>
<input type="int" name="Karizma">Karizma</input>
<input type="int" name="Inteligencia">Inteligencia</input>
<input type="text" name="Dr_op">Drop</input>
<br>
<button type="submit">Mobadd</button>
</form>

Itemek lekérdezése

<form method = "POST" action="items.php" >
<button type="submit">Leker</button>
</form>

	<form>
	
	<?php
        $conn = mysqli_connect('localhost', 'root','') or die("Hibás csatlakozás!");
        if ( mysqli_select_db($conn, 'adbktporog_szlxagt.sze') ) { // ha sikeres az adatbázis kiválasztása
            $sql = "SELECT ItemID FROM Item ORDER BY ItemID Desc LIMIT 1;";
			try{
            $res = mysqli_query($conn, $sql) or die ('Hibas utasitas!' . mysqli_error($conn));
			}catch(Exception $e){
				print $e;
			}
             while (($row = mysqli_fetch_assoc($res))!= null) {
             echo "Max ItemID: ". $row['ItemID'];
			 echo "<br>";
             }
             mysqli_free_result($res);
        } else {                                    // nem sikerült csatlakozni az adatbázishoz
            die('Nem sikerült csatlakozni az adatbázishoz.');
        }
        mysqli_close($conn);
		?>
	</form>
	<form method = "POST" action="Irew.php" >
Full item rework<br>
<input type="int" name="Szint">Szint</input>
<input type="text" name="Neve">Neve</input>
<input type="int" name="ItemID">ItemID(reworkolni kívánt item)</input>
<input type="int" name="Erteke">Erteke</input>
<input type="int" name="Eletero">Eletero</input>
<input type="int" name="Pancel">Pancel</input><br>
<input type="int" name="Ero">Ero</input>
<input type="int" name="Ugyesseg">Ugyesseg</input>
<input type="int" name="Furgeseg">Furgeseg</input>
<input type="int" name="Alkat">Alkat</input>
<input type="int" name="Karizma">Karizma</input>
<input type="int" name="Inteligencia">Inteligencia</input>
<br>
<button type="submit">Rework</button>
</form>


<form method = "POST" action="feltetel.php" >
Proof of concept feltételes lekérdezés<br>
<input type="int" name="fele">FELT1</input>
<input type="int" name="felk">Felt2</input>
<button type="submit">MOND MEG!</button>
</form>

<form method = "POST" action="felitem.php" >
Proof of concept feltételes lekérdezés itemekre<br>
<input type="text" name="fele">FELT1</input>
<input type="text" name="felk">Felt2</input>
<button type="submit">MOND MEG!</button>
</form>

<form method = "POST" action="bannhammer.php" >
Bannoljunk playert (torol)<br>
<input type="int" name="BANN">Nev</input>
<button type="submit">BANN</button>
</form>
