<body>
<form method="post" action="Ara.php" id="search">
<table><tr><td>Ara:<input type="text" name="searchText" id="searchText" /><td></tr></table>
<table><tr><td>Ara:<input type="submit" name="searchSubmit" id="searchSubmit" /><td></tr></table>

</form>
<?php

$str = file_get_contents("http://birsite.com/ozelarama/");
$metin = strip_tags($str);
if($_POST["searchText"]!=""){
$ara=$_POST["searchText"];

echo "\n";

for($i=0; $i<strlen($metin);$i++){
	if(strstr($metin,$ara)){
		echo $metin;
		break;
		}
	}
}



?>

</body>
