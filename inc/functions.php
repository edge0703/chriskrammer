<?php
function getPage() {
	$url = basename($_SERVER['PHP_SELF'],".php");
	$prj = substr($url, 8);

	$pages = array("knob", "sketchtips", "migros", "raunjak", "css3files", "wassermann", "zeichn_hahn", "net", "lsr", "designm2", "kleinezeitung", "smash1", "zeichn_statue", "sitepoint", "klzapps", "designm1", "zeichn_katze");
	$pages_len = count($pages) - 1;

	$n = 0;
	while($n < $pages_len) {
		if ($pages[$n] == $prj) break;
		$n++;
	}

	if ($n == 0) $prev = $pages_len;
	else $prev = $n - 1;
	if ($n == $pages_len) $next = 0;
	else $next = $n + 1;
	$prevlink = "project_" . $pages[$prev] . ".php";
	$nextlink = "project_" . $pages[$next] . ".php";
	$links = array($prevlink, $nextlink);
	return $links;
}
?>