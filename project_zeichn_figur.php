<?php include("inc/head.php"); ?>

<body class="pr">

<?php include("inc/header.php"); ?>

<main role="main">

<hgroup class="pr">
	<h1>Figure &ldquo;Link&rdquo;</h1>
	<h3>Pencil drawing</h3>
</hgroup>

<div class="prjdet <?php echo $dir;?>">
	<figure class="main"><img src="img/prj/zeichnung_figur.jpg" alt="Main view"></figure>
	<a href="<?php echo $prevlink; ?>?dir=p" class="p" title="Previous project">Previous project</a>
	<a href="<?php echo $nextlink; ?>?dir=n" class="n" title="Next project">Next project</a>
</div>

<p class="prjinfo">This is a loose drawing of a small figure (Link from the Zelda-videogames), which I mad in my free-time.</p>

</main>

<?php include("inc/footer.php"); ?>

<?php include("inc/foot.php"); ?>