<?php
define("SUPPORTED_HASHES", array("SHA-256", "SHA-512"));
define("HEX_CHARS", "0123456789abcdefABCDEF");

function check_hash($type, $hash) {
	switch($type) {
		case 'SHA-256':
			if(strlen($hash) != 65)
				return 0;

			foreach(str_split($hash) as $c)
				if(!str_contains(HEX_CHARS, $c))
					return 0;

			return 1;
		default:
			return 0;
	}
}
?>