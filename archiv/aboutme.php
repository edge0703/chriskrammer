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

<div class="content" role="main">

<h1>About me</h1>

<p><img src="img/ich.jpg" alt="Foto Christian Krammer" class="ich"> I&rsquo;m <?php echo $datum_ck; ?> years old, married and have a <?php echo $datum_fl; ?>-years old son. We live together close to Graz in the lovely country of Austria.</p>

<p>Everything started &ndash; at least as a web-designer &ndash; two decades ago. Back then the web was still fresh, the Internet Explorer a pioneer in terms of technology and tables the only method to lay out sites properly. Since my father gave me an understanding of computers pretty soon I certainly also needed a website. But about which topic? Computer games were my life at the time and the absolute game for me was Quake 2. And so my first website was born, with Geocities (R.I.P.) as its host. Although not online anymore I have fond memories of it, not least because it was my ticket into professional web-design.</p>

<p>My professional life started at a small web agency in Graz, which I already left after two years to hire at <a href="http://www.kleinezeitung.at">Kleine Zeitung</a>, one of the biggest newspapers in Austria. After I worked there eleven years I recently decided to accept a new challenge and herald the start of a completely new phase in my life. I started a new job at a small advertising agency called <a href="http://www.raunjakintermedias.at">raunjak intermedias</a>, which is located pretty close to my home.</p>

<p>Whenever I don&rsquo;t tinker with <a href="http://css3files.com">css3files.com</a> &ndash; my website about CSS3 &ndash;, I love to do sports and watch some movies. I also used to play videogames passionately but unfortunately there is not much time in my life for them anymore. But what I love to do is listening to music. As soon as I enter my car I tune in to Linkin Park, Nirvana, Faith No More, Fear Factory, Green Day, The Prodigy and the like.</p>

<p>To develop as a designer I attend a drawing class since March 2012, because I&rsquo;m convinced that in our industry it&rsquo;s curcial to also master the field of analog drawing. That not only helps me to design better layouts but also gives a better understanding of my profession in general.</p>

<h2>Imprint</h2>
<p>Christian Krammer<br/>
Pirkhof 78a<br/>
8511 St. Stefan<br/>
Austria<br/>
E-Mail: <a href="mailto:me@chriskrammer.com">me@chriskrammer.com</a><br/>
Twitter: <a href="http://twitter.com/#!/Chris_Krammer">@Chris_Krammer</a></p>
</div>

<?php include("inc/footer.php"); ?>

<?php include("inc/foot.php"); ?>