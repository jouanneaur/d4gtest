<?php
$header="MIME-Version: 1.0\r\n";
$header.='From:"La mère de Gwendal"<fromirtosep@gmail.com>'."\n";
$header.='Content-Type:text/html; charset="UTF-8"'."\n";
$header.='Content-Transfer-Encoding: 8bit';

$message='
<html>
	<body>
		<div align="center">
 			J\'ai envoyé ce mail avec PHP !
		</div>
	</body>
</html>
';
 
mail("rom.jouanneau@gmail.com", "Salut tout le monde !", $message, $header);
?>