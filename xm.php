<?php


$path = (isset($_GET["path"]))  ? $_GET["path"]  : '';


// Параметры подключения к БД
$dbname = 'dorilaruz_soft01';
$dbtable = 'rinfo';
$dbuser = 'doril_suser';
$dbpass = 'sny%589E';

//$dbuser = 'root'; //'doril_suser';
//$dbpass = '123789';



// Подключаемся к базе MySQL и выбираем базу под названием $dbname
// Хост: 127.0.0.1, имя пользователя: $dbuser, $dbpass, база: sakila
$mysqli = new mysqli('127.0.0.1', $dbuser, $dbpass, $dbname);

if ($mysqli->connect_errno) {
    // Соединение не удалось. Что нужно делать в этом случае? 
    $retval = array('status' => 'err', 'error' => 'db');

    //echo "Номер_ошибки: " . $mysqli->connect_errno . "\n";
    //echo "Ошибка: " . $mysqli->connect_error . "\n";
    
	$retval = json_encode($retval);
	echo $retval;

    exit;
}

if (strlen($path) > 0) {
	$sql = "DELETE FROM $dbtable WHERE path = '$path'";
	$mysqli->query($sql);
}

// Выполняем запрос SQL
$sql = "SELECT fullname, email, phone, code, path, datereg, dateexpire FROM $dbtable";

if (!$result = $mysqli->query($sql)) {
   // Запрос не удался. Что нужно делать в этом случае? 
    $retval = array('status' => 'err', 'error' => 'dbtable');

	$retval = json_encode($retval);
	echo $retval;

    exit;
}

if ($result->num_rows == NULL) {
	// Номер не существует в базе
	// Нужно сгенерировать код подтверждения и отправить СМС/email (пока почту!!!)
	// 
   // Запрос не удался. Что нужно делать в этом случае? 
    $retval = array('status' => 'err', 'error' => 'dbtable');

	$retval = json_encode($retval);
	echo $retval;

    exit;
}
else {
        echo '<table style="width:100%">';

	while ($row = mysqli_fetch_row($result)) {
		// $row[3] - Code,
		echo '<tr>';
		$c = count($row);
		$i = 0;
		while ($i < $c) {
			$rd = $row[$i];
			$rp = "<td>$rd</td>";
			echo $rp;
			$i++;
		} 
		echo '</tr>';
	}

	echo '</table>';
}

$result->free();
$mysqli->close();


#$retval = array('status' => 'err', 'error' => 'unknown');

#$retval = json_encode($retval);
#echo $retval;

//exit;

//echo 'recv data: ' . $name . ', ' . $email . ', ' . $phone;

function printError() {

}

function sendFile() {
	$filename = "__files/MoneyManagerSetup.exe";

	if(file_exists($filename)){

	    //Get file type and set it as Content Type
	    $finfo = finfo_open(FILEINFO_MIME_TYPE);
	    header('Content-Type: ' . finfo_file($finfo, $filename));
	    finfo_close($finfo);

	    //Use Content-Disposition: attachment to specify the filename
	    header('Content-Disposition: attachment; filename='.basename($filename));

	    //No cache
	    header('Expires: 0');
	    header('Cache-Control: must-revalidate');
	    header('Pragma: public');

	    //Define file size
	    header('Content-Length: ' . filesize($filename));

	    ob_clean();
	    flush();
	    readfile($filename);
	}	
}

?>