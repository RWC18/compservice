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
<h1>Wi-Fi սարքերի կարգավորում</h1>
<p>Wi-Fi սարքերի կարևորությունը պարզ է, դուք այլևս չեք կորի բազմաթի. Եվ դա նշանակում է, որ համակարգչից և սարքերից կարող եք օգտվել ոչ միայն մեկ վայրից այլ կից սենյակներից Ձեզ հարմար վայրից. Նույնիսկ դրսում դուք կմնաք կապի մեջ. Մեկ բառով ասած որտեղ էլ լինեք դուք միշտ կարող եք օգտվել բոլոր սարքերից.</p>
<p>Wi-Fi սարքի տեղադրումը և կարգավորումը բարդ գործ է. Մեր մասնագետները իզորու են այդ ամենին.</p>
<table border="0" width="50%" align="center"><tbody><tr>
<td><img class="i1" src="img/wifi-net.png" border="0" alt="" title="" hspace="25" vspace="0"/></td>
<td><img class="i1" src="img/wifi-shema.png" border="0" alt="" title="" hspace="25" vspace="0"/></td>
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



$sql = "SELECT * FROM ginwifi";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>


<h2>Ծառայությունների արժեքները:</h2>
<table class="price" align="center">
<tr><th>Ծառայություն</th><th>Արժեք</th></tr>
<tr><td>Մասնագետի այցը տուն</td><td><span><?php echo $row['wi1']?></span></td></tr>
<tr><td>Դիագնոստիկա</td><td><span><?php echo $row['wi2']?></span></td></tr>
<tr><td>Wi-Fi սարքի կարգավորումներ</td><td><?php echo $row['wi3']?></td></tr>
<tr><td>Ռոուտերի կարգավորումներ</th><td><?php echo $row['wi4']?></td></tr>
<tr><td>Wi-Fi սարքի անվտանգության կազմակերպումը</td><td><?php echo $row['wi5']?></td></tr>
<tr><td>Ընդհանուր թղթապանակների ստեղծում</td><td><?php echo $row['wi6']?></td></tr>
<tr><td><b>Անվճար</b> WEP, WPA, WPA2 ինտերնետին միացում</td><td><?php echo $row['wi7']?></td></tr>
</table>
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