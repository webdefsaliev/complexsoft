<?php
require 'PHPMailerAutoload.php';


$name = (isset($_POST["name"]))  ? $_POST["name"]  : '';
$email = (isset($_POST["email"]))  ? $_POST["email"]  : '';
$phone = (isset($_POST["phone"]))  ? $_POST["phone"]  : '';
$code = (isset($_POST["code"]))  ? $_POST["code"]  : '';

$phone = str_replace(array("(",")", " ", "-" ), "", $phone);
$phone = trim($phone);

if (empty($phone)) {
	$retval = array('status' => 'err', 'error' => 'phone');
	$retval = json_encode($retval);
	echo $retval;
	exit;
}

// path = hash MD4(phone)
//$path = bin2hex(mhash(MHASH_MD4,iconv('UTF-8','UTF-16LE',($phone) ) ));
$path = md5($phone);

// Параметры подключения к БД
$dbname = 'dorilaruz_soft01';
$dbtable = 'rinfo';
$dbuser = 'doril_suser';
$dbpass = 'sny%589E';

//$dbuser = 'root';
//$dbpass = '123789';



// Подключаемся к базе MySQL и выбираем базу под названием $dbname
// Хост: 127.0.0.1, имя пользователя: $dbuser, $dbpass, база: sakila
$mysqli = new mysqli('127.0.0.1', $dbuser, $dbpass, $dbname);

if ($mysqli->connect_errno) {
    // Соединение не удалось. Что нужно делать в этом случае? 
    $retval = array('status' => 'err', 'error' => $mysqli->connect_errno);

    //echo "Номер_ошибки: " . $mysqli->connect_errno . "\n";
    //echo "Ошибка: " . $mysqli->connect_error . "\n";
    
	$retval = json_encode($retval);
	echo $retval;

    exit;
}

// Выполняем запрос SQL
$sql = "SELECT fullname, email, phone, code, path, datereg, dateexpire FROM $dbtable WHERE phone = '$phone'";

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
	$code = sprintf("%'.04d", rand(1000, 9999));
	//$code = 1;

	$datereg = date("Y-m-d H:m:s");
	$dateexpire = date("Y-m-d H:m:s", time() + 5*60*60);

	// Save code phone in db
	$sql = "INSERT INTO $dbtable (fullname, email, phone, code, path, datereg, dateexpire) 
		VALUES ( '$name', '$email', '$phone', '$code', '$path', '$datereg', '$dateexpire' )";

    if ($mysqli->query($sql) === TRUE) {

    	// Send email
    	sendEmail($code, $phone, $name, $email);

    	// return ok
		$retval = array('status' => 'ok', 'path' => '', 'expire' => $dateexpire, 'datereg' => $datereg );

		$retval = json_encode($retval);
		echo $retval; 
		exit;  	
    }
    else {

	    $retval = array('status' => 'err', 'error' => 'dbinsert');

		$retval = json_encode($retval);
		echo $retval;
		exit;
	}	
}
else {

	if ($row = mysqli_fetch_row($result)) {
		// $row[3] - Code, 
		$datenow = DateTime::createFromFormat("Y-m-d H:m:s", date("Y-m-d H:m:s"));
		$dbcode = $row[3];
		$dbdatereg = DateTime::createFromFormat("Y-m-d H:m:s", $row[5]);
		$dbdateexpire = DateTime::createFromFormat("Y-m-d H:m:s", $row[6]);
		$dbpath = $row[4];
		$dbfullname = $row[0];
		$dbemail = $row[1];

		//$dbdateexpire = $dbdateexpire->getTimestamp();
		//$dbdatereg = $dbdatereg->getTimestamp();


		if ($datenow->getTimestamp() > $dbdateexpire->getTimestamp()) {
			// Link Expired
		    $retval = array('status' => 'err', 'error' => 'expired', 'time' => $datenow, 'expired' => $dbdateexpire);

			$retval = json_encode($retval);
			echo $retval;
			exit;			
		}

		if ($code == '') {

			if ( $path != '' ) {
				if ($path === $dbpath) {
					// Send file ==========================

					//sendFile();
					exit;
					//
				}
				else {
				    $retval = array('status' => 'err', 'error' => 'path');

					$retval = json_encode($retval);
					echo $retval;
					exit;					
				}
			}
			// Send email again
			sendEmail($code, $phone, $dbfullname, $dbemail);

		}
		else {
			if ($code != $dbcode) {
				// Incorrect Code
			    $retval = array('status' => 'err', 'error' => 'code');

				$retval = json_encode($retval);
				echo $retval;
				exit;
			}
			// All ok send path
		    $retval = array('status' => 'ok', 'path' => $dbpath, 'code' => $code);

			$retval = json_encode($retval);
			echo $retval;
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

function sendEmail($fcode, $fphone, $fname, $femail) {

	$mail = new PHPMailer;

	$mail->isSMTP();                                      // Set mailer to use SMTP
	$mail->Host = 'mail.komplexsoft.uz';  // Specify main and backup SMTP servers
	$mail->SMTPAuth = true;                               // Enable SMTP authentication
	$mail->Username = 'admin@komplexsoft.uz';                 // SMTP username
	$mail->Password = '0Tzm!8u1';                           // SMTP password
	//$mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

	$mail->From = 'admin@komplexsoft.uz';
	$mail->FromName = 'Administrator';
	$mail->addAddress('gmsasad@gmail.com');     // Add a recipient
	$mail->addAddress('komplexsoft.uz@gmail.com');     // Add a recipient
	//$mail->addAddress('gmsasad@bitrix24.ru');     // Add a recipient


	$mail->Subject = "sms number $fphone code: $fcode";
	$mail->Body    = "Code: $fcode \r\nkomplexsoft.uz\r\n\r\n--AUTO LEAD START--\n$fname\n$femail\n$fphone\n$fcode\r\n--AUTO LEAD END--";
	//$mail->AltBody = "Code: $fcode \r\nkomplexsoft.uz";

	if(!$mail->send()) {
		return TRUE;
	} else {
	    return FALSE;
	}
}

function sendFile() {
	$filename = "MoneyManagerSetup.exe";

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