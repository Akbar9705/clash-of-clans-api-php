<?php
/*
 * Akbarali yozgan OOP dagi kod
 * sana 23.10.2020
 * Website: UzHackerSW.uz
 * Namuna: https://uzhackersw.uz/modul/clashofclans/
 * Akbarali bilan bog`lanish; Email: Akbarali@uzhackersw.uz
*/
$tag = isset($_GET['tag']) ? trim($_GET['tag']) : 'LPJ9CUUQG';
$tag = substr_replace($tag, "#", 0, 0);
require_once ("yadro.php");
$clash = new ClashofClans();
$data = $clash->players($tag);
$clan = $data['clan'];
$league = $data['league'];
$achievements = $data['achievements'];
$labels = $data['labels'];
$troops = $data['troops'];
$heroes = $data['heroes'];
$damlamalar = $data['spells'];
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title><?=$data['name']; ?> haqida malumotlar</title>
    <link href="//uzhackersw.uz/theme/theme/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="table-responsive table-bordered movie-table">
          <h2> <?=$data['name']?> haqida malumot</h2>
          <table class="table movie-table" style=" font-size: 18px; ">
            <thead>
              <tr class="movie-table-head" style=" text-align: center; ">
                <th>Ismi</th>
                <th>TAG raqami</th>
                <th>Ratusha Uroveni</th>
                <th>Tajribasi</th>
                <th>Liga bali</th>
                <th width="1%">Ligadagi eng ko'p bali</th>
                <th>To'lpagan yulduzlari</th>
                <th>Jangda g'alaba qozongan</th>
                <th>Liga gerbi</th>
              </tr>
            </thead>
            <tbody>
              <!--row-->
              <tr class="dark-row ">
                <td><b><?=$data['name']?></td>
                <td><?=$data['tag']?></td>
                <td><?=$data['townHallLevel']?></td>
                <td><?=$data['expLevel']?></td>
                <td><?=$data['trophies']?> </td>
                <td><?=$data['bestTrophies']?></td>
                <td><?=$data['warStars']?></td>
                <td><?=$data['attackWins']?></td>
                <td><a href="<?=$league['iconUrls']['medium']?>"><img src="<?=$league['iconUrls']['small']?>" alt=""></a></td>
              </tr>
            </tbody>
          </table>
          <h2>Quruvchi bazasi haqida malumotlar</h2>
          <table class="table movie-table" style=" font-size: 18px; ">
            <thead>
              <tr class="movie-table-head" style=" text-align: center; ">
                <th>versusBattleWinCount</th>
                <th>Quruvchilar zali uroveni</th>
                <th>Turnir reytingi</th>
                <th>Eng ko`p turnir reytingi</th>
                <th>Versus Battle Wins</th>
              </tr>
            </thead>
            <tbody>
              <!--row-->
              <tr class="dark-row ">
                <td><b><?=$data['versusBattleWinCount']?></td>
                <td><?=$data['builderHallLevel']?></td>
                <td><?=$data['versusTrophies']?></td>
                <td><?=$data['bestVersusTrophies']?></td>
                <td><?=$data['versusBattleWins']?> </td>
              </tr>
            </tbody>
          </table>
          <h2>Klani haqida ma'lumot</h2>
          <table class="table movie-table" style=" font-size: 18px; ">
            <thead>
              <tr class="movie-table-head" style=" text-align: center; ">
               <th>Klan gerbi</th>
                <th>Klani nomi</th>
                <th>Klanda lavozimi</th>
                <th>Klan TAG raqami</th>
                <th>Askar bergan</th>
                <th>Askar olgan</th>
                <th width="1%">Klan uroveni</th>
                <th>Klan ligasi</th>
                <th>Himoyada g'alaba qozondi</th>
              </tr>
            </thead>
            <tbody>
              <!--row-->
              <tr class="dark-row ">
                <td><a href="<?=$clan['badgeUrls']['large']?>"><img src="<?=$clan['badgeUrls']['small']?>" alt=""></a></td>
                <td><b><?=$clan['name']?></td>
                <td><?=$data['role']?></td>
                <td><?=$clan['tag']?></td>
                <td><?=$data['donations']?></td>
                <td><?=$data['donationsReceived']?> </td>
                <td><?=$clan['clanLevel']?></td>
                <td><?=$league['name']?></td>
                <td><?=$data['defenseWins']?></td>
              </tr>
            </tbody>
          </table>
          <h2>Olgan yutuqlari haqida ma'lumot</h2>
          <table class="table movie-table" style=" font-size: 18px; ">
            <thead>
              <tr class="movie-table-head" style=" text-align: center; ">
                <th width="17%">Yutuq nomi</th>
                <th width="1%">Necha yulduz olgan</th>
                <th width="1%" >To'plagan</th>
                <th width="1%">To'plash kerak</th>
                <th >Nima uchun beriladi</th>
                <th>Boshqa</th>
                <th width="1%">Qaysi qishloq uchun berildi</th>
              </tr>
            </thead>
            <tbody>
              <?php   foreach ($achievements as $achievement) { ?>
              <!--row-->
              <tr class="dark-row ">
                <td><b><?=$achievement['name']?></td>
                <td><?=$achievement['stars']?></td>
                <td><?=$achievement['value']?></td>
                <td><?=$achievement['target']?></td>
                <td><?=$achievement['info']?></td>
                <td><?=$achievement['completionInfo']?></td>
                <td><?=$achievement['village']?></td>
              </tr>
              <?php  } ?>
            </tbody>
          </table>
          <?php if($labels){ ?>
          <p><b><h2>Yorliq malumotlari</h2></b></p>
          <table class="table movie-table" style=" font-size: 18px; ">
            <thead>
              <tr class="movie-table-head" style=" text-align: center; ">
                <th width="25%">Nomi</th>
                <th>Yorliq ramzi(gerbi)</th>
              </tr>
            </thead>
            <tbody>
              <?php   foreach ($labels as $label) { ?>
              <!--row-->
              <tr class="dark-row ">
                <td><b><?=$label['name']?></td>
                <td><a href="<?=$label['iconUrls']['medium']?>"><img src="<?=$label['iconUrls']['small']?>" alt=""></a></td>
              </tr>
              <?php  } ?>
            </tbody>
          </table>
          <?php } ?>
          <h2>Askarlari haqida ma'lumot</h2>
          <table class="table movie-table" style=" font-size: 18px; ">
            <thead>
              <tr class="movie-table-head" style=" text-align: center; ">
               <th>Askar rasmi</th>
                <th width="25%">Askar nomi</th>
                <th>Askar darajasi</th>
                <th>Eng yuqori darajasi</th>
                <th>Qaysi qishloqda</th>
              </tr>
            </thead>
            <tbody>
              <?php   foreach ($troops as $troop) {  ?>
              <!--row-->
              <tr class="dark-row ">
                <td><?=$clash->askar($troop['name']);?></td>
                <td><b><?=$troop['name']?></td>
                <td> <?=$troop['level']?> </td>
                <td><?=$troop['maxLevel']?></td>
                <td> <?=$troop['village']?></td>
              </tr>
              <?php  } ?>
            </tbody>
          </table>
          <h2>Qahramonlar qirol oilasi haqida ma'lumot</h2>
          <table class="table movie-table" style=" font-size: 18px; ">
            <thead>
              <tr class="movie-table-head" style=" text-align: center; ">
                <th>Askar rasmi</th>
                <th width="25%">Askar nomi</th>
                <th>Askar darajasi</th>
                <th>Eng yuqori darajasi</th>
                <th>Qaysi qishloqda</th>
              </tr>
            </thead>
            <tbody>
            <?php if($heroes['0']){?>
              <tr class="dark-row ">
                <td><?=$clash->hero($heroes['0']['name']);?></td>
                <td><b><?=$heroes['0']['name']?></b></td>
                <td> <?=$heroes['0']['level']?> </td>
                <td><?=$heroes['0']['maxLevel']?></td>
                <td> <?=$heroes['0']['village']?></td>
              </tr>
             <? } ?>
             <?php if($heroes['1']){?>
              <tr class="dark-row ">
                <td><?=$clash->hero($heroes['1']['name']);?></td>
                <td><b><?=$heroes['1']['name']?></b></td>
                <td> <?=$heroes['1']['level']?> </td>
                <td><?=$heroes['1']['maxLevel']?></td>
                <td> <?=$heroes['1']['village']?></td>
              </tr>
             <? } ?>
             <?php if($heroes['2']){?>
              <tr class="dark-row ">
               <td><?=$clash->hero($heroes['2']['name']);?></td>
                <td><b><?=$heroes['2']['name']?></b></td>
                <td> <?=$heroes['2']['level']?> </td>
                <td><?=$heroes['2']['maxLevel']?></td>
                <td> <?=$heroes['2']['village']?></td>
              </tr>
             <? } ?>
             <?php if($heroes['3']){?>
              <tr class="dark-row ">
                <td><?=$clash->hero($heroes['3']['name']);?></td>
                <td><b><?=$heroes['3']['name']?></b></td>
                <td> <?=$heroes['3']['level']?> </td>
                <td><?=$heroes['3']['maxLevel']?></td>
                <td> <?=$heroes['3']['village']?></td>
              </tr>
             <? } ?>
             <?php if($heroes['4']){?>
              <tr class="dark-row ">
                <td><?=$clash->hero($heroes['4']['name']);?></td>
                <td><b><?=$heroes['4']['name']?></b></td>
                <td> <?=$heroes['4']['level']?> </td>
                <td><?=$heroes['4']['maxLevel']?></td>
                <td> <?=$heroes['4']['village']?></td>
              </tr>
             <? } ?>
            </tbody>
          </table>
          <h2>Sexirli  damlamalari haqida ma'lumot</h2>
          <table class="table movie-table" style=" font-size: 18px; ">
            <thead>
              <tr class="movie-table-head" style=" text-align: center; ">
                <th>Damlama rasmi</th>
                <th width="25%">Askar nomi</th>
                <th>Askar darajasi</th>
                <th>Eng yuqori darajasi</th>
                <th>Qaysi qishloqda</th>
              </tr>
            </thead>
            <tbody>
              <?php   foreach ($damlamalar as $damlama) {  ?>
              <!--row-->
              <tr class="dark-row ">
               <td><b><?=$clash->damlama($damlama['name']);?></td>
                <td><b><?=$damlama['name']?></td>
                <td> <?=$damlama['level']?> </td>
                <td><?=$damlama['maxLevel']?></td>
                <td> <?=$damlama['village']?></td>
              </tr>
              <?php  } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </body>
</html>