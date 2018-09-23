<!DOCTYPE html>
<html>
<head>
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
<div class="logo"><a href="home.html"><img src="img/logo.png" /></a></div>
<div class="contacts">
<div class="phone"><span itemprop="telephone" class="number">(+374)93 54-38-49</span></div><BR>
<div style="margin-left:130px;"><a href="#">Զանգ մասնագետին</a></div>
</div>
<div class="schedule">Շուրջօրյա</div>
<div class="topmenu">
<ul>
<li class="top-menu"><a href="index.php">Գլխավոր</a></li>
<li class="top-menu topmenua"><a href="comment.php">Կարծիքներ</a></li>
<li class="top-menu"><a href="#">Հեռախոսազանգ</a></li>
<li class="top-menu"><a href="#">Գնացուցակ</a></li>
<li class="top-menu"><a href="#">Ֆորում</a></li>
<li class="top-menu"><a href="contact.php">Կոնտակտներ</a></li>
</ul></div>
</div>

<div id="main">
﻿<div id="left"><div class="block"><p>Ծառայություններ</p>
<div class="menu"><ul>
<li class="e1"><a href="comp.php"><span>Համակարգչի վերանորոգում</span></a></li>
<li class="e2"><a href="#"><span>Նոութբուքների վերանորոգում</span></a></li>
<li class="e21"><a href="phone.php"><span>Հեռախոսների վերանորոգում</span></a></li>
<li class="e22"><a href="#"><span>Պլանշետների վերանորոգում</span></a></li>
<li class="e7"><a href="#"><span>Apple վերանորոգում</span></a></li>
<li class="e24"><a href="#"><span>Կենցաղային տեխնիկայի վերանորոգում</span></a></li>
<li class="e12"><a href="#"><span>Կայքերի ստեղծում</span></a></li>
<li class="e17"><a href="#"><span>Կայքերի տարածում</span></a></li>
<li class="e19"><a href="#"><span>Ջերմաստիճանի կարգավորում</span></a></li>
<li class="e6"><a href="#"><div>Ծրագրերի տեղադրում (Windows MacOS Linux Android Ubuntu Debian)</div></a></li>
<li class="e3"><a href="#"><span>Windows-ի տեղադրում (Apple Mac)</span></a></li>
<li class="e14"><a href="#"><span>Ֆայլերի վերականգնում</span></a></li>
<li class="e15"><a href="#"><span>Վիրուսների մաքրում</span></a></li>
<li class="e10"><a href="#"><span>Բաններների հեռացում</span></a></li>
<li class="e8"><a href="#"><span>Անտիվիրուսների տեղադրում</span></a></li>
<li class="e13"><a href="#"><span>Wi-Fi կարգավորում</span></a></li>
<li class="e11"><a href="#"><span>Ռոուտերների կարգավորում</span></a></li>
<li class="e5"><a href="#"><span>Ծրագրերի տեղադրում</span></a></li>
<li class="e9"><a href="#"><span>Համակարգչի հզորացում</span></a></li>
<li class="e4"><a href="#"><span>Աբոնենտային սպասարկում</span></a></li>
<li class="e16"><a href="#"><span>Լավագույն առաջարկներ</span></a></li>
<li class="e18"><a href="#"><span>Օգտակար հղումներ</span></a></li>
<li class="e20"><a href="#"><span>Փնտրում ենք մասնագետներ</span></a></li>
<li class="e23"><a href="video.php"><span>Տեսահոլովակներ</span></a></li>

</ul></div></div></div><div id="content">




<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "diplom";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

mysql_query("SET CHARACTER SET 'utf-8'");
mysql_query("SET NAMES 'utf-8'");

$Anun = $_POST['anun'];
$Azganun = $_POST['azg'];
$Comment = $_POST['comment'];



$sql = "INSERT INTO comm (Anun, Azganun, Comment) VALUES ('$Anun', '$Azganun', '$Comment')";

if (mysqli_query($conn, $sql)) {
    echo "<h1>"."Ձեր գրառումը հաջողությամբ կատարվեց"."</h1>";
} else {
    echo "Սխալ: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
	
?>

<script type="text/javascript">
window.location = "comment.php"
</script>
</div></div>
﻿<div id="footer">
﻿<div id="footer">
<div class="line">


<ul class="bott">
<li><a href="index.php">Գլխավոր</a></li>
<li><a href="comment.php">Կարծիքներ</a></li>
<li><a href="#">Հեռախոսազանգ</a></li>
<li><a href="#">Գնացուցակ</a></li>
<li><a href="contact.php">Կոնտակտներ</a></li>

Copyright © 2013 - 2017 <a itemprop="url" href="#" title="CompService">CompService</a>

</ul>
</div>
</div>

</div>

</body></html>