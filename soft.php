<!DOCTYPE html>
<html>
<head>
<link rel="icon" href="img/favicon1.ico" type="image/x-icon">
<meta http-equiv="content-type" content="text/html" charset="utf-8"/>
<meta name="keywords" content="Համակարգիչների վերանորոգում Երևանում և շրջակա տարածքում" />
<meta name="description" content="Համակարգիչների վերանորոգում Երևանում և շրջակա տարածքում" />
<meta name="title" content="Համակարգիչների վերանորոգում Երևանում և շրջակա տարածքում" />
<link rel="stylesheet" href="style.css" type="text/css"/>
<script async type="text/javascript" src="js/watermark.js"></script>
<script async type="text/javascript" src="js/mask.js"></script>
<script async type="text/javascript" src="js/scripts.js"></script>
<title>Համակարգիչների վերանորոգում Երևանում</title>

</head> 





<body>
<div id="wraper">
﻿<div id="header">
<div class="logo"><a href="index.php"><img src="img/logo.png" /></a></div>
<div class="contacts">
<div class="phone"><span itemprop="telephone" class="number">(+374)93 54-38-49</span></div><BR>
<div style="margin-left:130px;"><a href="courier.php">Զանգ մասնագետին</a></div>
</div>
<div class="schedule">Շուրջօրյա</div>
<div class="topmenu">
<ul>
<li class="top-menu"><a href="index.php">Գլխավոր</a></li>
<li class="top-menu"><a href="comment.php">Կարծիքներ</a></li>
<li class="top-menu"><a href="order.php">Պատվեր</a></li>
<li class="top-menu"><a href="price.php">Գնացուցակ</a></li>
<li class="top-menu"><a href="work.php">Աշխատատեղ</a></li>
<li class="top-menu"><a href="contact.php">Կոնտակտներ</a></li></ul></div>
</div>

<div id="main">
﻿<div id="left"><div class="block"><p>Ծառայություններ</p>
<div class="menu"><ul>
<li class="e1"><a href="comp.php"><span>Համակարգչի վերանորոգում</span></a></li>
<li class="e2"><a href="noteb.php"><span>Նոութբուքների վերանորոգում</span></a></li>
<li class="e21"><a href="phone.php"><span>Հեռախոսների վերանորոգում</span></a></li>
<li class="e22"><a href="tablet.php"><span>Պլանշետների վերանորոգում</span></a></li>
<li class="e7"><a href="apple.php"><span>Apple վերանորոգում</span></a></li>
<li class="e24"><a href="electronics.php"><span>Կենցաղային տեխնիկայի վերանորոգում</span></a></li>
<li class="e12"><a href="site.php"><span>Կայքերի ստեղծում</span></a></li>
<li class="e6"><a href="windows.php"><div>Ծրագրերի տեղադրում (Windows MacOS Linux Android Ubuntu Debian)</div></a></li>
<li class="e14"><a href="recover.php"><span>Ֆայլերի վերականգնում</span></a></li>
<li class="e15"><a href="virus.php"><span>Վիրուսների մաքրում</span></a></li>
<li class="e8"><a href="antivirus.php"><span>Անտիվիրուսների տեղադրում</span></a></li>
<li class="e13"><a href="wifi.php"><span>Wi-Fi կարգավորում</span></a></li>
<li class="e5"><a href="soft.php"><span>Ծրագրերի տեղադրում</span></a></li>
<li class="e9"><a href="none.php"><span>Համակարգչի հզորացում</span></a></li>
<li class="e16"><a href="none.php"><span>Լավագույն առաջարկներ</span></a></li>
<li class="e23"><a href="video.php"><span>Տեսահոլովակներ</span></a></li>

</ul></div></div></div><div id="content">
<h1>Ծրագրերի տեղադրում</h1>
<p>Վաղուց գաղտնիք չէ, որ համակարգչի օգտակարությունը կախված է տեղադրված ծրագրերից. Համակարգիչն առանց ՕՀ-ի և ծրագրերի նման է երկաթյա անպետք տուփի. Ծրագրերի նորնաոր տեսակներից նորանոր ֆունկցիաներ են իհայտ գալիս. Վերջին տարիների ծրագրերի շնորհիվ, հիմա համակարգչով կարելի է երգեր լսել, նկարել, եռաչափ խաղեր խաղալ, գրել տեքստեր և այլն. Ահա թե ինչու է այդքան կարևոր ծրագրերերի տեղադրումը.</p>
<table border="0" width="50%" align="center">
<tbody><tr>
<td><img class="i1" src="img/programm.jpg" border="0" alt="" title="Комп Сервис - Установка программ в Барселоне" hspace="5" vspace="15"/></td>
</tr></tbody></table>
	<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diplom";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
mysqli_set_charset($conn, 'utf8');
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
mysql_query("SET CHARACTER SET 'utf-8'");
mysql_query("SET NAMES 'utf-8'");



$sql = "SELECT * FROM ginsoft";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<h2>Ծառայությունների արժեքը:</h2>
<table class="price" align="center">
<tr><th>Ծառայություն</th><th>Արժեք</th></tr>
<tr><td>Մասնագետի այցը տուն	</td><td><span><?php echo $row['s1'] ?></span></td></tr>
<tr><td>Դիագնոստիկա</td><td><span><?php echo $row['s2'] ?></span></td></tr>
<tr><td>Windows / XP / Vista / 7 / 8 / 10 / տեղադրում</td><td><?php echo $row['s3'] ?></td></tr>
<tr><td>Office / XP / 2003 / 2007 / 2010 / 2013 /2016 / տեղադրում</td><td><?php echo $row['s4'] ?></td></tr>
<tr><td>Անտիվիրուսի տեղադրում</td><td><?php echo $row['s5'] ?></td></tr>
<tr><td>Adobe Packet / CorelDraw X4-X8 / GoogleChrome / Opera / FireFOX / տեղադրում</td><td><?php echo $row['s6'] ?></td></tr>
</table>
<br>
<p><em style="font-size:12pt; font-family: Monotype Corsiva; color: red;">* Այլ ծրագրեր մասին տեղեկանալու համար զանգահարեք վերը նշված համար կամ հարցրեք</em> <a href="order.php"><em style="font-size:12pt; font-family: Monotype Corsiva; color: black;">Պատվեր</em></a><em style="font-size:12pt; font-family: Monotype Corsiva; color: red;"> էջի օգնությամբ.</em></p>

<BR><BR>
</div></div>
﻿<div id="footer">
﻿<div id="footer">
<div class="line">


<ul class="bott">
<li><a href="index.php">Գլխավոր</a></li>
<li><a href="comment.php">Կարծիքներ</a></li>
<li><a href="order.php">Պատվեր</a></li>
<li><a href="price.php">Գնացուցակ</a></li>
<li><a href="contact.php">Կոնտակտներ</a></li>

Copyright © 2013 - 2017 <a itemprop="url" href="index.php" title="CompService">CompService</a>

</ul>
</div>
</div>

</div>

</body></html>