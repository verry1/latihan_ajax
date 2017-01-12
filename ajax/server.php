<?php
if ($_GET['p'] == "date") {
	echo date("Y-m-d H:i:s");
}elseif ($_GET['p'] == "joiner") {
	echo $_POST['nama1']." ".$_POST['nama2'];
}

?>