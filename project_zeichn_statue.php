<?php include("inc/head.php"); ?>

<body class="pr">

<?php include("inc/header.php"); ?>

<main role="main">

<hgroup class="pr">
	<h1>Geometric statue</h1>
	<h3>Pencil drawing</h3>
</hgroup>

<div class="prjdet <?php echo $dir;?>">
	<figure class="main"><img src="img/prj/zeichnung_statue.jpg" alt="Main view"></figure>
	<a href="<?php echo $prevlink; ?>?dir=p" class="p" title="Previous project">Previous project</a>
	<a href="<?php echo $nextlink; ?>?dir=n" class="n" title="Next project">Next project</a>
</div>

<p class="prjinfo">The challenges of this drawing were the straight lines and the pure geometry. No ruler was used to transfer the drawing from the (unknown) reference to the piece of paper; just drawing by eye.</p>
</main>

<?php include("inc/footer.php"); ?>

<?php include("inc/foot.php"); ?>