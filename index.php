<!doctype html>
<!-- 
  /*
 * Akbarali yozgan OOP dagi kod
 * sana 23.10.2020
 * Website: UzHackerSW.uz
 * Namuna: https://uzhackersw.uz/modul/clashofclans/
 * Akbarali bilan bog`lanish; Email: Akbarali@uzhackersw.uz
*/
 -->
<html lang="en">
<head>
 <meta charset="UTF-8">
 <title>Clash of Clansda klan haqida ma'lumot olish</title>
</head>
<body>
 <p>Bu sahifada siz Clash of Clansdagi klan haqida va u klan A'zolar haqida batafsil ma'lumot olishingiz mumkun. <br>Buning uchun siz bor yo`g`i Klan ID raqamini # (panjara) siz kiritsangiz kifoya. <br><i>Misol uchun:</i> <b>22LC2CGQJ</b> ni yozing</p>
 <form action="clan.php" class="input-group mb-3" method="get">
  <input type="text" class="form-control" name="clanid" >
  <input class="btn btn-outline-secondary" type="submit">
  </form>
  <?php require_once ("yadro.php"); ?>
  <?php $clash = new ClashofClans();?>
  <?=$clash->view();?>
</body>
</html>