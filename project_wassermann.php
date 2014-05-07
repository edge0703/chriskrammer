<?php include("inc/head.php"); ?>

<body class="pr">

<?php include("inc/header.php"); ?>

<main role="main">

<hgroup class="pr">
	<h1>Wassermann-Wirt</h1>
	<h3>Website</h3>
</hgroup>

<div class="prjdet <?php echo $dir;?>">
	<figure class="main"><img src="img/prj/wassermann.jpg" alt="Main view"></figure>
	<a href="<?php echo $prevlink; ?>?dir=p" class="p" title="Previous project">Previous project</a>
	<a href="<?php echo $nextlink; ?>?dir=n" class="n" title="Next project">Next project</a>
</div>

<p class="prjinfo">The &ldquo;Wassermann-Wirt&rdquo; is a local, high-class restaurant. Unfortunately their previous website didn&rsquo;t refelect this state and so I was commissioned to rework it with the latest technologies in mind at my last job. I employed a great deal of jQuery, Ajax and CSS3 to give the site the modernest possible appearance and functionality. </p>

<p class="prjlink"><a href="http://wassermann.raunjakintermedias.at/">Visit website</a></p>

</main>

<?php include("inc/footer.php"); ?>

<?php include("inc/foot.php"); ?>