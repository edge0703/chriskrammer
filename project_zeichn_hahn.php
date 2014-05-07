<?php include("inc/head.php"); ?>

<body class="pr">

<?php include("inc/header.php"); ?>

<main role="main">

<hgroup class="pr">
	<h1>Rooster</h1>
	<h3>Pencil drawing</h3>
</hgroup>

<div class="prjdet <?php echo $dir;?>">
	<figure class="main"><img src="img/prj/zeichnung_hahn.jpg" alt="Drawing of a rooster"></figure>
	<a href="<?php echo $prevlink; ?>?dir=p" class="p" title="Previous project">Previous project</a>
	<a href="<?php echo $nextlink; ?>?dir=n" class="n" title="Next project">Next project</a>
</div>

<p class="prjinfo">This drawing is an exercise I made at the drawing class (copied from a reference). It is one of my favorite drawings, since it was very difficult and I hated it innitially, but it turned out to be one of my best achievements.</p>

</main>

<?php include("inc/footer.php"); ?>

<?php include("inc/foot.php"); ?>