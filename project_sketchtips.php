<?php include("inc/head.php"); ?>

<body class="pr">

<?php include("inc/header.php"); ?>

<main role="main">

<hgroup class="pr">
	<h1>sketchtips.info</h1>
	<h3>Website</h3>
</hgroup>

<div class="prjdet <?php echo $dir;?>">
	<figure class="main"><img src="img/prj/sketchtips.jpg" alt="Main view"></figure>
	<a href="<?php echo $prevlink; ?>?dir=p" class="p" title="Previous project">Previous project</a>
	<a href="<?php echo $nextlink; ?>?dir=n" class="n" title="Next project">Next project</a>
</div>

<p class="prjinfo">I started sketchtips.info because of two reasons: 1. My love to the vector app Sketch, 2. I wanted to employ all the techniques and approaches I read about recently in a project. The foremost goal was accessibility, every area of the site should be accessible with the keyboard alone. Furthermore I wanted to use vector images exclusively to be resolution-independent. Lastly sketchtips.info should be as lightweight as possible and I dedicated much time to achieve this goal. You can read more about my intentions in <a href="http://www.sketchtips.info/?tip=1">this article</a>.</p>

<p class="prjlink"><a href="http://sketchtips.info">Visit website</a></p>
</main>

<?php include("inc/footer.php"); ?>

<?php include("inc/foot.php"); ?>