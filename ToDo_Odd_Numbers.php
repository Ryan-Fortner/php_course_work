<?
$table = array();
for($i = 0; $i <=20000; $i++) {
    if ($i %2 == 1) {
       array_push($table, $i);
    }
}
var_dump($table);

?>