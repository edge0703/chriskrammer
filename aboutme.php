<?php include("inc/head.php"); ?>

<?php
$timestamp = time();
$timestamp_ck = mktime(0,0,0,03,07,1979);
$timestamp_fl = mktime(0,0,0,12,03,2006);

$time_diff_ck = $timestamp - $timestamp_ck;
$time_diff_fl = $timestamp - $timestamp_fl;

$datum_ck = strftime("%Y", $time_diff_ck) - 1970;
$datum_fl = strftime("%Y", $time_diff_fl) - 1970;
?>

<body class="ab">

<?php include("inc/header.php"); ?>

<main class="ab" role="main">

<hgroup class="ab">
	<h1>About me</h1>
	<h3>Your chance to get to know me.</h3>
</hgroup>

<p class="intro">I&rsquo;m <?php echo $datum_ck; ?> years old, married and have a <?php echo $datum_fl; ?>-years old son. We live together close to Graz in the lovely country of Austria.</p>

<p>Everything started &ndash; at least as a web-designer &ndash; almost two decades ago. Back then the web was still fresh, the Internet Explorer a pioneer in terms of technology and tables the only method to lay out sites properly. Since my father gave me an understanding of computers pretty soon I certainly needed a website. But about which topic? Computer games were my life at the time and the absolute game for me was Quake 2. And so my first website was born, hosted at Geocities. Although not online anymore I have fond memories of it, not least because it was my ticket into professional web-design.</p>

<p>My professional life started at a small web agency in Graz, which I already left after two years to hire at <a href="http://www.kleinezeitung.at">Kleine Zeitung</a>, one of the biggest newspapers in Austria. After I worked there for exactly twelve years I recently decided to accept a new challenge. Unfortunately things didn't work out and so I have commenced as a frontend-designer at <a href="http://netconomy.net">Netconomy</a>. So far I love to work there.</p>

<p>Whenever I don&rsquo;t tinker with <a href="http://css3files.com">css3files.com</a> and <a href="http://sketchtips.info">sketchtips.info</a> &ndash; two of my side projects &ndash;, I love to do sports and watch some movies. I also used to play videogames passionately but unfortunately there is not much time in my life for them anymore. But what I love to do is listening to music. As soon as I have a chance I tune in to Linkin Park, Nirvana, Faith No More, Fear Factory, Green Day, The Prodigy and the like.</p>

<aside class="about">
	<img src="img/me.jpg" alt="Portrait of Christian Krammer">

	<h4 class="f">Chris Krammer &hellip;</h4>
	<ul>
		<li>loves to play Mario games with his son</li>
		<li>has one cat</li>
		<li>enjoys Faith no More more than any other band</li>
		<li>listens to tons of audiobooks while exercising</li>
		<li>can't stand Brussel sprouts</li>
		<li>loves <a href="http://sublimetext.com">Sublime Text 3</a> and <a href="http://www.bohemiancoding.com/sketch/">Sketch</a></li>
	</ul>

	<h4 class="f">Skills</h4>
	<ul>
		<li>Design</li>
		<li>HTML, CSS</li>
		<li>Photoshop</li>
		<li>Sketch</li>
		<li>JavaScript/jQuery, Ajax</li>
		<li>PHP, MySQL</li>
		<li>Sass</li>
	</ul>

	<h4>Imprint</h4>
	<p>Christian Krammer<br/>
	Pirkhof 78a<br/>
	8511 St. Stefan, Austria<br/>
	<a href="mailto:me@chriskrammer.com">me@chriskrammer.com</a><br/>
	<a href="http://twitter.com/#!/Chris_Krammer">@Chris_Krammer</a></p>
</aside>


</main>

<?php include("inc/footer.php"); ?>

<?php include("inc/foot.php"); ?>