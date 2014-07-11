<?php include("inc/head.php"); ?>

<body class="pr">

<?php include("inc/header.php"); ?>

<main role="main">

<hgroup class="pr">
	<h1>&ldquo;raunjak intermedias&rdquo;</h1>
	<h3>Responsive website</h3>
</hgroup>

<div class="prjdet <?php echo $dir;?>">
	<figure class="main"><img src="img/prj/raunjak.jpg" alt="Main view"></figure>
	<a href="<?php echo $prevlink; ?>?dir=p" class="p" title="Previous project">Previous project</a>
	<a href="<?php echo $nextlink; ?>?dir=n" class="n" title="Next project">Next project</a>
</div>

<p class="prjinfo">One of my assignments at my former job was to redo my employer's website. Although I've built a few responsive sites in the past, this was my first big, commerical project where I took care about device independance.</p>

<p class="prjlink"><a href="http://www.raunjakintermedias.at">Visit website</a></p>

</main>

<?php include("inc/footer.php"); ?>

<?php include("inc/foot.php"); ?>