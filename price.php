<?php
?>
<!DOCTYPE html>
<html>
<head><link rel="icon" href="img/favicon1.ico" type="image/x-icon">
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
<li class="top-menu topmenua"><a href="price.php">Գնացուցակ</a></li>
<li class="top-menu"><a href="work.php">Աշխատատեղ</a></li>
<li class="top-menu"><a href="contact.php">Կոնտակտներ</a></li>
</ul></div>
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
<h1>Երևանում և շրջակա տարածքում համակարգիչների վերանորոգման գնացուցակ</h1>
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



$sql = "SELECT * FROM Gin";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
?>

<br>
<table class="price" align="center">
<tr><th>Ծառայություն</th><th>Արժեք</th></tr>
<tr><td>Մասնագետի այցելություն Երևանում</td><td><span><?php echo $row['Himn1']?> </span></td></tr>
<tr><td>Մասնագետի այցելություն Երևանի շրջակա տարածքում</td><td><span><?php echo $row['Himn2']?></span></td></tr>
<tr><td>Դիագնոստիկա</td><td><span><?php echo $row['Himn3']?></span></td></tr>
<tr><td>Microsoft Windows / XP / Vista / 7 / 8 / 10 / MacOS / Linux  Տեղադրում</td><td><?php echo $row['Himn4']?></td></tr>
<tr><td>Windows-Ի տեղադրում MacOS-ի վրա</td><td><?php echo $row['Himn5']?></td></tr>
<tr><td>Դրայվերների տեղադրում</td><td><?php echo $row['Himn6']?></td></tr>
<tr><td>Օգատգործողի պարամետրերի կարգավորում</td><td><?php echo $row['Himn7']?></td></tr>
<tr><td>Սիստեմային ծրագրերի կարգավորում</td><td><?php echo $row['Himn8']?></td></tr>
<tr><td>Համակարգչի արագագործության կարգավորում</td><td><?php echo $row['Himn9']?></td></tr>
<tr><td>Համակարգչի տաքացման վերաում</td><td><?php echo $row['Himn01']?></td></tr>
<tr><td>Ջնջված և կորցրած ինֆորմացիայի վերականգնում</td><td><?php echo $row['Himn02']?></td></tr>
<tr><td>Դասընթացներ և կոնսուլտացիա</td><td><?php echo $row['Himn03']?></td></tr>
<tr><td>Օգնություն առևտրի ժամանակ</td><td><?php echo $row['Himn04']?></td></tr>
<tr><th>Անտիվիրուսի տեղադրում, վիրուսների վերացում</th><th></th></tr>
<tr><td>Վիրուսների մաքրում, ՙՏրոյանՙ տիպի վիրուսների մաքրում, ՙորդերիՙ և ալնի վերացում</td><td><?php echo $row['Vir1']?></td></tr>
<tr><td>Անտիվիրուսի տեղադրում</td><td><?php echo $row['Vir2']?></td></tr>
<tr><td>Սեփական Firewall-ի տեղադրում</td><td><?php echo $row['Vir3']?></td></tr>
<tr><th>Ծրագրերի տեղադրում և սպասարկում</th><th></th></tr>
<tr><td>Microsoft Office / XP / 2003 / 2007 / 2010 /2013 տեղադրում</td><td><?php echo $row['OS1']?></td></tr>
<tr><td>Մուլտիմեդիայի տեղադրում</td><td><?php echo $row['OS2']?></td></tr>
<tr><td>WinRAR տեղադրում</td><td><?php echo $row['OS3']?></td></tr>
<tr><td>Կոմունալ ծառայությունների տեղադրում</td><td><?php echo $row['OS4']?></td></tr>
<tr><td>Կոդեկների տեղադրում</td><td><?php echo $row['OS5']?></td></tr>
<tr><td>Փոստային համակարգի տեղադրում</td><td><?php echo $row['OS6']?></td></tr>
<tr><th>Սիստեմային բլոկի վերանորոգում և տեղադրում</th><th></th></tr>
<tr><td>Մայրական պլատայի տեղադրում</td><td><?php echo $row['OS1']?></td></tr>
<tr><td>Պրոցեսսորի տեղադրում</td><td><?php echo $row['OS2']?></td></tr>
<tr><td>Վիդոքարտի տեղադրում</td><td><?php echo $row['OS3']?></td></tr>
<tr><td>Օպերատիվ հիշողության տեղադրում</td><td><?php echo $row['OS4']?></td></tr>
<tr><td>FDD / HDD / CD(DVD)- ROM տեղադրում</td><td><?php echo $row['OS5']?></td></tr>
<tr><th>Երկրորդական սարքավորումների տեղադրում և կարգավորում</th><th></th></tr>
<tr><td>Տպիչի/Ծրիչի տեղադրում և կարգավորում</td><td><?php echo $row['2nd1']?></td></tr>
<tr><td>Տեսախցիկների և վիդեոկամերնաերի կարգավորում</td><td><?php echo $row['2nd2']?></td></tr>
<tr><th>Անլար սարքերի՝ WI-FI տեղադրում</th><th></th></tr>
<tr><td>WI-FI ռոուտերների տեղադրում և կարգավորում</td><td><?php echo $row['WIFI1']?></td></tr>
<tr><td>Ձեր Wi-Fi սարքի ապահովագրությունը կոտրումից</td><td><?php echo $row['WIFI2']?></td></tr>
<tr><td>Wi-Fi կապի ճանապարհի կարգավորում</td><td><?php echo $row['WIFI3']?></td></tr>
<tr><td>Wi-Fi սարքի կապի կարգավորում</td><td><?php echo $row['WIFI4']?></td></tr>
<tr><td>Ընդհանուր թղթապանակների ստեղծում</td><td><?php echo $row['WIFI5']?></td></tr>
<tr><td>WEP, WPA, WPA2 ինտերնետի միացում</td><td><?php echo $row['WIFI6']?></td></tr>
</table>
</div>

</div>
﻿<div id="footer">
﻿<div id="footer">
<div class="line">


<ul class="bott">
<li><a href="index.php">Գլխավոր</a></li>
<li><a href="comment.php">Կարծիքներ</a></li>
<li><a href="#">Հեռախոսազանգ</a></li>
<li><a href="#">Գնացուցակ</a></li>
<li><a href="contact.php#">Կոնտակտներ</a></li>

Copyright © 2013 - 2017 <a itemprop="url" href="#" title="CompService">CompService</a>

</ul>
</div>
</div>

</div>



</body></html>