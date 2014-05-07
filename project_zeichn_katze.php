<?php include("inc/head.php"); ?>

<body class="pr">

<?php include("inc/header.php"); ?>

<main role="main">

<hgroup class="pr">
	<h1>Hanging cat</h1>
	<h3>Pencil drawing</h3>
</hgroup>

<div class="prjdet <?php echo $dir;?>">
	<figure class="main"><img src="img/prj/zeichnung_katze.jpg" alt="Main view"></figure>
	<a href="<?php echo $prevlink; ?>?dir=p" class="p" title="Previous project">Previous project</a>
	<a href="<?php echo $nextlink; ?>?dir=n" class="n" title="Next project">Next project</a>
</div>

<p class="prjinfo">This is my best drawing to date (copied from an unknown reference). It took me several hours to complete due to the different layers of the fur. But it was really worth the effort.</p>

</main>

<?php include("inc/footer.php"); ?>

<?php include("inc/foot.php"); ?>