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
<div class="logo"><a href="index.php"><img src="img/logo.png"/></a></div>
<div class="contacts">
<div class="phone"><span itemprop="telephone" class="number">(+374)93 54-38-49</span></div><BR>
<div style="margin-left:130px;"><a href="courier.php">Զանգ մասնագետին</a></div>
</div>
<div class="schedule">Շուրջօրյա</div>
<div class="topmenu">
<ul>
<li class="top-menu"><a href="index.php">Գլխավոր</a></li>
<li class="top-menu topmenua"><a href="comment.php">Կարծիքներ</a></li>
<li class="top-menu"><a href="order.php">Պատվեր</a></li>
<li class="top-menu"><a href="price.php">Գնացուցակ</a></li>
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




<form action="insert.php" method = "POST"><Table border = "1" cellspacing = "5" cellpadding = "5" style = "margin-left:175px;">
<tr>
<td>Անուն:   <input type="text" name="anun" class="inputname" id="name" maxlength="24" required oninvalid="setCustomValidity('Պարտադիր լրացում!!')" oninput="setCustomValidity('')" placeholder="Ձեր անունը"></td>
<td>Ազգանուն:<input type="text" name="azg" class="srname" id="srname" maxlength="200" required oninvalid="setCustomValidity('Պարտադիր լրացում!!')" oninput="setCustomValidity('')"placeholder="Ձեր ազգանունը"></td>
</tr>
<tr>
<td colspan = "2"><textarea class="com" name="comment" id="comment" maxlength="500" style = "width:460px; height:200px;" placeholder="Ձեր գրառումը" required oninvalid="setCustomValidity('Պարտադիր լրացում!!')" oninput="setCustomValidity('')"></textarea></td>
</tr>
</table>
<input type="submit" name="s" id="my_button" value="Հաստատել">
<input type="reset" name="s" id="my_button2" value="Մաքրել">
</form>
<br>
<br>
<br>


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



$sql = "SELECT ID, Anun, Azganun, Comment, Date, Blok FROM comm ORDER BY ID DESC";
$result = mysqli_query($conn, $sql);
$Blok = "Show";

if (mysqli_num_rows($result) > 0){
   // output data of each row


	    while($row = mysqli_fetch_assoc($result)) {

		if ($row["Blok"] === $Blok) 
	{
			echo "<table  bgcolor = 'white' style = 'border-color:#336600; margin-left:50px; text-align:center;' >";
    echo "<tr align = 'left'>"."<td style = 'color:black'><b>" . "Անուն:" . "</b></td>" ."<td>" . $row["Anun"] . "</td></tr>" ; 
    echo "<tr align = 'left'>"."<td style = 'color:black'><b>" . "Ազգանուն:" . "</b></td>" ."<td>" . $row["Azganun"] . "</td></tr>" ; 
    echo "<tr align = 'left'>"."<td style = 'color:black'><b>" . "Ամսաթիվ:" . "</b></td>" ."<td>" . $row["Date"] . "</td></tr>" ; 
    echo "<tr align = 'left'>"."<td style = 'color:black'><b>" . "Գրառում:" . "</b></td>" ."<td>" . $row["Comment"] . "</td></tr><br>" ; 
		echo "</table><hr>"; }
									} 
} else {
    echo "0 results";
} 


mysqli_close($conn);

?> 
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