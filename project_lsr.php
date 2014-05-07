<?php include("inc/head.php"); ?>

<body class="pr">

<?php include("inc/header.php"); ?>

<main role="main">

<hgroup class="pr">
	<h1>LSR-NETWORK-STMK</h1>
	<h3>Website</h3>
</hgroup>

<div class="prjdet <?php echo $dir;?>">
	<figure class="main"><img src="img/prj/lsr.jpg" alt="Main view"></figure>
	<a href="<?php echo $prevlink; ?>?dir=p" class="p" title="Previous project">Previous project</a>
	<a href="<?php echo $nextlink; ?>?dir=n" class="n" title="Next project">Next project</a>
</div>

<p class="prjinfo">The &ldquo;LSR NETWORK STMK&rdquo; (STMK stands for Styria) is a platform for the teachers and school staff of the Austrian state Styria. My assignment was to redesign their totally outdated website, which included the design, the code (HTML and CSS), some JavaScript and AJAX. I was also responsible for the backend in the form of the user management, where I had to deal with a good portion of PHP and mySQL.</p>

<p class="prjlink"><a href="http://www.lsr-network-stmk.at/">Visit website</a></p>


</main>

<?php include("inc/footer.php"); ?>

<?php include("inc/foot.php"); ?>