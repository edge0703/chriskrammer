<?php include("inc/head.php"); ?>

<body class="pr">

<?php include("inc/header.php"); ?>

<main role="main">

<hgroup class="pr">
	<h1>&ldquo;Flexbox: CSS Flexible Box Layout&rdquo;</h1>
	<h3>Article at sitepoint, February 2013</h3>
</hgroup>

<div class="prjdet <?php echo $dir;?>">
	<figure class="main"><img src="img/prj/artikel_sitepoint.jpg" alt="Main view"></figure>
	<a href="<?php echo $prevlink; ?>?dir=p" class="p" title="Previous project">Previous project</a>
	<a href="<?php echo $nextlink; ?>?dir=n" class="n" title="Next project">Next project</a>
</div>

<p class="prjinfo">The "Flexible Box Layout Module" is one of the most exciting things CSS3 has to offer, because it vastly simplifies website layouts. Since I'm very interested in this topic I decided to write an article once again. Sitepoint has gladly published it.</p>

<p class="prjlink"><a href="http://www.sitepoint.com/flexbox-css-flexible-box-layout/">Read article</a></p>

</main>

<?php include("inc/footer.php"); ?>

<?php include("inc/foot.php"); ?>