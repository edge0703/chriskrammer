<?php
include("functions.php");
// Abrufen der Links für die vorige und nächste Seite bei den Projekten
$navlinks = getPage();
$prevlink = $navlinks[0];
$nextlink = $navlinks[1];

$aPage = basename($_SERVER['PHP_SELF'],".php");

switch ($aPage) {
	case 'aboutme': $title = "About me | "; break;
	case 'books': $title = "Books | "; break;
	case 'project_sketchtips': $title = "sketchtips.info | "; break;
	case 'project_migros': $title = "M-Electronics and Micasa | "; break;
	case 'project_raunjak': $title = "Raunjak intermedias | "; break;
	case 'project_css3files': $title = "css3files.com | "; break;
	case 'project_designm1': $title = "Article DesignModo | "; break;
	case 'project_designm2': $title = "Article DesignModo | "; break;
	case 'project_kleinezeitung': $title = "Kleine Zeitung | "; break;
	case 'project_klzapps': $title = "Kleine Zeitung Apps | "; break;
	case 'project_net': $title = "Article .net magazine | "; break;
	case 'project_poster': $title = "Poster &ldquo;Millet&rdquo; | "; break;
	case 'project_smash1': $title = "Article Smashing Magazine | "; break;
	case 'project_smash2': $title = "Article Smashing Magazine | "; break;
	case 'project_zeichn_figur': $title = "Figure &ldquo;Link&rdquo; | "; break;
	case 'project_zeichn_hahn': $title = "Rooster | "; break;
	case 'project_zeichn_katze': $title = "Hanging cat | "; break;
	case 'project_zeichn_statue': $title = "Geometric statue | "; break;
	default: $title = "Portfolio | "; break;
}

if (isset($_GET['dir'])) $query = $_GET['dir'];
else $query = "";
if ($query == "p") $dir = "prjdet_right";
else if ($query == "n") $dir = "prjdet_left";
else $dir = "";
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php echo $title; ?>chriskrammer.com</title>
	<meta name="description" content="Hi, I'm a web-designer from Austria, near Graz."/>
	<meta name="author" content="Christian Krammer"/>
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<link rel="stylesheet" media="screen" href="stylesheets/style.css"/>
	<!--[if IE 9]><link rel="stylesheet" media="screen" href="stylesheets/ie9.css"/><![endif]-->	
	<!--[if lte IE 8]><link rel="stylesheet" media="screen" href="stylesheets/ie.css"/><![endif]-->	
	<script src="js/html5shiv-printshiv.js"></script>
	<script src="js/modernizr.js"></script>
	<script type="text/javascript" src="http://fast.fonts.com/jsapi/0efe9349-d6f5-4e72-988b-e43ccc9bdbd7.js"></script>
</head>