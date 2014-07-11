<?php include("inc/head.php"); ?>

<body class="pr">

<?php include("inc/header.php"); ?>

<main role="main">

<hgroup class="pr">
	<h1>Colorful knob</h1>
	<h3>Playground</h3>
</hgroup>

<div class="prjdet <?php echo $dir;?>">
	<figure class="main"><img src="img/prj/playground_knob.png" alt="Main view" width="800" height="560"></figure>
	<a href="<?php echo $prevlink; ?>?dir=p" class="p" title="Previous project">Previous project</a>
	<a href="<?php echo $nextlink; ?>?dir=n" class="n" title="Next project">Next project</a>
</div>

<p class="prjinfo">While listening to the biography of Steve Jobs and the involved talking about circuits and controllers I had this idea about a knob which adjusts the background color based on the HSL color model. It should not only react to different input methods, but also be as simple as possible. I employed jQuery for all the functionality and used an object-based structure for the first time. As a cool side effect this knob is a cool way to get acquainted to color wheel of the HSL model.</p>

<p class="prjlink"><a href="http://www.css3files.com/playground/knob">Use the colorful knob</a></p>
</main>

<?php include("inc/footer.php"); ?>

<?php include("inc/foot.php"); ?>