<?php

session_start();

?>
<html dir="rtl" lang="ar">
<head>
<link rel="stylesheet" type="text/css" href="style.css" >

</head>
<body>
<header>
<b>
<a href="http://localhost/res/main.php"  class="Amain"> الصفحة الرئيسية </a>
<a href="http://localhost/res/reservation.php"  class="Amain"> الحجوزات </a> 
<a href="file:///C:/Users/At/Desktop/weppage/about.html#"  class="Amain"> حول </a> 
<a href="http://localhost/res/login.php"  class="Amain"> تسجيل الدخول </a>
</b>
</header>


<aside >
<center>
<img src="https://w7.pngwing.com/pngs/416/62/png-transparent-anonymous-person-login-google-account-computer-icons-user-activity-miscellaneous-computer-monochrome.png" width="100px">
</center>
<br><br>

<a href="admin.php"><button class="buttt"> تعديل الملف الشخصي </button></a>
<br><br>
<a href="addpe.php"><button class="buttt2"> اضافة مطعم</button></a>
<br><br>
<a href="delete.php"><button class="buttt3" > حذف مطعم</button></a>
<br><br>
<a href="up.php"><button class="buttt4">تعديل مطعم</button></a>
<br><br>
<a href="selectper.php"><button class="buttt5"> عرض المطاعم</button></a>
<br><br>
<a href="logout.php"><button class="buttt6">   تسجيل خروج</button></a>
</aside>


<?php
include('config.php');

	$result = mysqli_query($con, "SELECT * FROM product");
while ($row = mysqli_fetch_array($result)) {
echo"
<center>
<article>
<div class='cards' style='width: 16rem;'>
  <img src='$row[imge]' class='cardim'>
  <div class='cardbody'>
    <h5 class='card-title'>$row[name]</h5>
	
	<a href='update.php?  id=$row[id]'><button class='bu8'> تعديل المطعم </button></a>
	
   
	
  </div>
</div>
</article>
</center>

";
}

?>
 
 
 <footer>
    <center>
       
<img src="https://png.pngitem.com/pimgs/s/366-3662072_twitter-icon-transparent-outline-twitter-logo-black-and.png" height="40px" width="40px">
&nbsp; &nbsp;&nbsp;&nbsp;
<img src="https://seeklogo.com/images/W/whatsapp-logo-112413FAA7-seeklogo.com.png" height="40px" width="40px">
&nbsp; &nbsp;&nbsp;&nbsp;

<br>
جميع الحقوق محفوظة &copy;
</center>

</footer>
 

</body>
</html>