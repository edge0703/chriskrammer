<header role="banner" class="main">
	<div class="title"><a href="index.php">Chris Krammer</a></div>

	<nav role="navigation">
		<ul>
			<li class="pf"><a href="index.php" <?php if (basename($_SERVER['PHP_SELF'],".php") == "index") echo "class=\"on\""; ?>>Portfolio</a></li>
			<li class="ab"><a href="aboutme.php" <?php if (basename($_SERVER['PHP_SELF'],".php") == "aboutme") echo "class=\"on\""; ?>>About me</a></li>
			<li class="bo"><a href="books.php" <?php if (basename($_SERVER['PHP_SELF'],".php") == "books") echo "class=\"on\""; ?>>Books</a></li>
			<li class="bl"><a href="http://css3files.com">Blog</a></li>
			<li class="tw"><a href="http://twitter.com/#!/Chris_Krammer">Twitter</a></li>
		</ul>

		<!-- hide-link is inserted via JavaScript -->
	</nav>
</header>