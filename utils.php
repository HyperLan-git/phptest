<?php
function check_hash($type, $hash) {
	const var hex_chars = "0123456789abcdef";
	switch($type) {
		case 'SHA-256':
			if(strlen($hash) != 64)
				return 0;

			foreach(str_split($hash) as $c)
				if(!str_contains(hex_chars, $c))
					return 0;

			return 1;
		default:
			return 0;
	}
}
?>