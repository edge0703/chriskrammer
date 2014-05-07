<?php include("inc/head.php"); ?>

<body class="pr">

<?php include("inc/header.php"); ?>

<main role="main">

<hgroup class="pr">
	<h1>Kleine Zeitung</h1>
	<h3>Website</h3>
</hgroup>

<div class="prjdet <?php echo $dir;?>">
	<figure class="main"><img src="img/prj/kleinezeitung.jpg" alt="Main view"></figure>
	<a href="<?php echo $prevlink; ?>?dir=p" class="p" title="Previous project">Previous project</a>
	<a href="<?php echo $nextlink; ?>?dir=n" class="n" title="Next project">Next project</a>
</div>

<p class="prjinfo">During my over ten years at Kleine Zeitung I was responsible for the front-end development amongst other things. The whole HTML and CSS code was developed and maintained by me and sometimes I also got the chance to do a little bit of jQuery. The biggest challenges was to keep the overview of the CSS, which was several 1000 lines long. </p>

<p class="prjlink"><a href="http://www.kleinezeitung.at">Visit website</a></p>

</main>

<?php include("inc/footer.php"); ?>

<?php include("inc/foot.php"); ?>