<?php

	$palabra = "UpgradeHub";

	function cuentaLetraA (string $palabra) {
		echo substr_count($palabra, "a") + substr_count($palabra, "A");
	}

	cuentaLetraA($palabra);

?>