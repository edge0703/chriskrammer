<?php
$aPage = basename($_SERVER['PHP_SELF'],".php");

switch ($aPage) {
	case 'aboutme': $title = "Project css3files.com | "; break;
	case 'project_css3files': $title = "About me | "; break;
	case 'project_cssoff': $title = "Project CSS Off | "; break;
	case 'project_designm1': $title = "Article DesignModo | "; break;
	case 'project_designm2': $title = "Article DesignModo | "; break;
	case 'project_kleinezeitung': $title = "Project Kleine Zeitung | "; break;
	case 'project_klzapps': $title = "Kleine Zeitung Apps | "; break;
	case 'project_klzolympia': $title = "Project Kleine Zeitung Olympia-Special | "; break;
	case 'project_net': $title = "Article .net magazine | "; break;
	case 'project_poster': $title = "Poster &ldquo;Millet&rdquo; | "; break;
	case 'project_smash1': $title = "Article Smashing Magazine | "; break;
	case 'project_smash2': $title = "Article Smashing Magazine | "; break;
	case 'project_userrankings': $title = "Project userrankings.com | "; break;
	case 'project_zeichn_baum': $title = "Drawing of a tree | "; break;
	case 'project_zeichn_figur': $title = "Drawing of a figure | "; break;
	case 'project_zeichn_figur2': $title = "Drawing of a figurine | "; break;
	case 'project_zeichn_hahn': $title = "Drawing of a rooster | "; break;
	case 'project_zeichn_katze': $title = "Drawing of a cat | "; break;
	case 'project_zeichn_maedchen': $title = "Drawing of a girl | "; break;
	case 'project_zeichn_statue': $title = "Drawing of a statue | "; break;
	case 'project_zeichn_vogel': $title = "Drawing of a bird | "; break;
	default: $title = "Portfolio | "; break;
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<script type="text/javascript" src="//use.typekit.net/ies3mci.js"></script>
	<script type="text/javascript">try{Typekit.load();}catch(e){}</script>
	<title><?php echo $title; ?>chriskrammer.com</title>
	<meta name="description" content="Hi, I'm a web-designer from Austria, near Graz."/>
	<meta name="author" content="Christian Krammer"/>
	<meta name="viewport" content="width=device-width,initial-scale=1"/>
	<link rel="stylesheet" media="screen" href="stylesheets/style.css"/>
	<!--[if IE 9]><link rel="stylesheet" media="screen" href="stylesheets/ie9.css"/><![endif]-->	
	<!--[if lte IE 8]><link rel="stylesheet" media="screen" href="stylesheets/ie.css"/><![endif]-->	
	<script src="js/modernizr.js"></script>
</head>