<?php


$path = (isset($_GET["path"]))  ? $_GET["path"]  : '';
$code = (isset($_GET["code"]))  ? $_GET["code"]  : '';

/*
if (empty($phone)) {
	$retval = array('status' => 'err', 'error' => 'phone');
	$retval = json_encode($retval);
	echo $retval;
	exit;
}
//*/

// path = hash MD4(phone)
//$path = bin2hex(mhash(MHASH_MD4,iconv('UTF-8','UTF-16LE',($phone) ) ));

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

// Выполняем запрос SQL
$sql = "SELECT fullname, email, phone, code, path, datereg, dateexpire FROM $dbtable WHERE path = '$path'";

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

	if ($row = mysqli_fetch_row($result)) {
		// $row[3] - Code, 
		$datenow = DateTime::createFromFormat("Y-m-d H:m:s", date("Y-m-d H:m:s"));
		$dbcode = $row[3];
		$dbdatereg = DateTime::createFromFormat("Y-m-d H:m:s", $row[5]);
		$dbdateexpire = DateTime::createFromFormat("Y-m-d H:m:s", $row[6]);
		$dbpath = $row[4];

		//$dbdateexpire = $dbdateexpire->getTimestamp();
		//$dbdatereg = $dbdatereg->getTimestamp();


		if ($datenow->getTimestamp() > $dbdateexpire->getTimestamp()) {
			// Link Expired
		    $retval = array('status' => 'err', 'error' => 'expired', 'time' => $datenow, 'expired' => $dbdateexpire);

			$retval = json_encode($retval);
			echo $retval;
			exit;			
		}
		if ($code == $dbcode) {
			// ok Send file
			sendFile();
			exit;	
		}
	}
}

$result->free();
$mysqli->close();


$retval = array('status' => 'err', 'error' => 'unknown');

$retval = json_encode($retval);
echo $retval;

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