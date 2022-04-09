// short version of if
[usr_priv_admin] 	= ({rs[0][0]} == 'Y') ? TRUE : FALSE;



// USING COOKIE
?>
<script> document.cookie = {"myJavascriptVar" : window.innerWidth} </script>
<?php

$SG_Width= $_COOKIE['myJavascriptVar'];
echo $SG_Width;
if ($SG_Width >= 1000) {
	echo "mayor<br>";
} else {
	echo "menor<br>";
}
