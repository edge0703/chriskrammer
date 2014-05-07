<?php include("inc/head.php"); ?>

<body class="pr">

<?php include("inc/header.php"); ?>

<main role="main">

<hgroup class="pr">
	<h1>M-Electronics and Micasa</h1>
	<h3>Apps</h3>
</hgroup>

<div class="prjdet <?php echo $dir;?>">
	<figure class="main"><img src="img/prj/migros.jpg" alt="Main view"></figure>
	<a href="<?php echo $prevlink; ?>?dir=p" class="p" title="Previous project">Previous project</a>
	<a href="<?php echo $nextlink; ?>?dir=n" class="n" title="Next project">Next project</a>
</div>

<p class="prjinfo">In my role as a Frontend Designer at <a href="http://netconomy.net">Netconomy</a> I'm primarily responsible for the HTML markup and CSS of Apps for mobile phones and tablets. The first two projects I had the honor to support were M-Electronics and Micasa from the Swiss <a href="http://www.migros.ch/de">Migros</a> group. Those are two online shops where you can buy electronic equipment and furniture. The main challenge was to keep the SASS files tight and use CSS3 properties as often as possible to avoid images. I also employed SVG images and an iconfont to be resolution independent. </p>

<p class="prjlink"><a href="http://m.melectronics.ch">Visit M-Electronics app</a></p>

<p class="prjlink"><a href="http://m.micasa.ch">Visit Micasa app</a></p>


</main>

<?php include("inc/footer.php"); ?>

<?php include("inc/foot.php"); ?>