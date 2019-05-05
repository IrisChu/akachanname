<?php


echo 'test';

$fileName = "name_data.csv";
$con = mysql_connect('127.0.0.1','root','password');
$db = "homestead";

var_dump($con); exit;

set_time_limit(10000);

if (!$con)
{
  die('Could not connect: ' . mysql_error());
}

mysql_select_db($db, $con);
$fp = fopen($fileName, "r");

while(!feof($fp)) {
  if(!$line = fgetcsv($fp, 1000, ';', '"')) {
    continue;
  }

  var_dump($line); exit;
  $gender = $line[0];
  $pronunciation = $line[1];
  $name = $line[2];
  $characteristic = $line[3];
// skip for now
//  $meaning = $line[4];
  $famousPerson = $line[5];

  $SQL = "SELECT * FROM names where name = $name";
  if($nameID = check_if_exists($SQL)) {
    $SQL = "UPDATE names SET pronunciation = $pronunciation, gender = $gender, updated_at = NOW()) WHERE id = $nameID";
    mysql_query($SQL);

    $SQL = "UPDATE characteristic_name SET characteristic_id = (SELECT id FROM characteristics WHERE characteristic = $characteristic) WHERE name_id = $nameID";
    mysql_query($SQL);
  } else {
    $SQL = "INSERT INTO names (name, pronunciation, gender, created_at, updated_at) VALUES($name, $pronunciation, $gender, NOW(), NOW())";
    mysql_query($SQL);
    $nameID = mysql_insert_id();

    $SQL = "INSERT INTO characteristic_name (characteristic_id, name_id, created_at, updated_at) VALUES( (SELECT id FROM characteristics WHERE characteristic = $characteristic), $nameID, NOW(), NOW())"
    mysql_query($SQL);
  }
}

fclose($fp);
mysql_close($con);

function check_if_exists($sql) {
  $result = mysql_query($sql);
  if (!$result) {
      $message  = 'check_if_exists::Invalid query: ' . mysql_error() . "\n";
      $message .= 'Query: ' . $sql;
      die($message);
  }

  $row = mysql_fetch_assoc ($result);
  $count = $row['count(*)'];

  if ($count > 0) {
      return row['id'];
  }

  return false;
}

?>
