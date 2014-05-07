<?php
$url = basename($_SERVER['PHP_SELF'],".php");
$url = strpos($url, "project");
if ($url === false) $act = 0;
else $act = 1;
?>

<header class="main" role="banner">
	<div class="title" title="Home"><a href="/">Chris Krammer</a></div>

	<nav class="main" role="navigation">
		<ul>
			<li class="pf"><a href="/" <?php if ((basename($_SERVER['PHP_SELF'],".php") == "index") || ($act == 1)) echo "class=\"on\""; ?>>Portfolio</a></li>
			<li class="ab"><a href="aboutme.php" <?php if (basename($_SERVER['PHP_SELF'],".php") == "aboutme") echo "class=\"on\""; ?>>About me</a></li>
			<li class="bo"><a href="books.php" <?php if (basename($_SERVER['PHP_SELF'],".php") == "books") echo "class=\"on\""; ?>>Books</a></li>
			<li class="bl"><a href="http://css3files.com">Blog</a></li>
			<li class="tw"><a href="http://twitter.com/#!/Chris_Krammer">Twitter</a></li>
		</ul>

		<!-- hide-link is inserted via javaScript -->
	</nav>
</header>