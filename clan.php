<?php
/*
 * Akbarali yozgan OOP dagi kod
 * sana 23.10.2020
 * Website: UzHackerSW.uz
 * Namuna: https://uzhackersw.uz/modul/clashofclans/
 * Akbarali bilan bog`lanish; Email: Akbarali@uzhackersw.uz
*/
require_once ("yadro.php");
$clantag1 = isset($_GET['clanid']) ? trim($_GET['clanid']) : '22LC2CGQJ';
$clantag = "#" . $clantag1;
$clash = new ClashofClans();
$data = $clash->clans($clantag);
if (isset($data["reason"])) {
    $errormsg = true;
}
$members = $data["memberList"];
if (isset($errormsg)) {
    if ($data['reason'] == "notFound") {
        echo 'Umuman bironnima topib bo`lmadi. # ni olib tashlaganigiz aniqmi  ? yoki qarang nimaur qoshilib qolgan ko`rinadi.';
        exit;
    }
    echo "<p>", "Failed: ", $data["reason"], " : ", isset($data["message"]) ? $data["message"] : "", "</p></body></html>";
    exit;
}
?>
 <!doctype html>
<html lang="en">
   <head>
      <meta charset="UTF-8">
      <title><?php echo $data["name"]; ?> klan haqida ma'lumot</title>
      <link href="//uzhackersw.uz/theme/theme/css/bootstrap.css" rel="stylesheet" id="bootstrap-css">
      <link href="//uzhackersw.uz/theme/theme/css/colors.css?ver=0.95" rel="stylesheet" id="bootstrap-css">
      <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
      <style>.dark-row{    background:#AEC5E8;} .light-row{ background:#F1F3F0; } .movie-table-head{ background: ;} ak.ong { float: right; } ak.chap { float: left; }</style>
   </head>

   <body>
      <div class="container">
         <div class="row">
            <div class="table-responsive table-bordered movie-table">
               <table class="table movie-table">
                  <tbody>
                     <tr class=" light-row">
                        <td rowspan="4" width="15%"><a href="<?php echo $data["badgeUrls"]["large"]; ?>"><img src="<?php echo $data["badgeUrls"]["medium"]; ?>" alt="<?php echo $data["name"]; ?>"/></a></td>
                        <td colspan="2">
                           <h1><?php echo $data["name"]; ?> <br><?php echo $data["tag"]; ?></h1>
                        </td>
                        <td colspan="5"></td>
                     </tr>
                     <tr class=" light-row">
                        <td colspan="2" rowspan="4" width="50%">
                           <h4><?php echo $data["description"]; ?></h4>
                        </td>
                        <td colspan="5" >
                           <ak class="chap">Klanlar urushi ligasi</ak>
                           <ak class="ong"><b><?php echo $data["warLeague"]["name"]; ?></b></ak>
                        </td>
                     </tr>
                     <tr class=" light-row">
                        <td colspan="5" >
                           <ak class="chap">Jami ballar:</ak>
                           <ak class="ong"><b><?php echo $data["clanPoints"]; ?></b> || <b><?php echo $data["clanVersusPoints"]; ?></b></ak>
                        </td>
                     </tr>
                     <tr class=" light-row">
                        <td colspan="5">
                           <ak class="chap">Klanning joylashuvi: </ak>
                           <ak class="ong"><b><?php echo $data["location"]["name"]; ?></b></ak>
                        </td>
                     </tr>
                     <tr class=" light-row">
                        <td>
                           <h5>
                              <ak class="chap">Klan darajasi: </ak>
                              <ak class="ong"><b><?php echo $data["clanLevel"]; ?></b></ak>
                           </h5>
                        </td>
                        <td colspan="5">
                           <ak class="chap">Turi: </ak>
                           <ak class="ong"><b><?php echo $data["type"]; ?></b></ak>
                        </td>
                     </tr>
                     <tr class=" light-row">
                        <td colspan="1" rowspan="6"></td>
                        <td rowspan="2" colspan="2"></td>
                        <td colspan="5">
                           <ak class="chap">Klanga kirish liga bali: </ak>
                           <ak class="ong"><b><?php echo $data["requiredTrophies"]; ?></b></ak>
                        </td>
                     </tr>
                     <tr class=" light-row">
                        <td colspan="5">
                           <ak class="chap">Urush bo`lib turishi: </ak>
                           <ak class="ong"><b><?php echo $data["warFrequency"]; ?></b></ak>
                        </td>
                     </tr>
                     <tr class=" light-row">
                        <td colspan="2" rowspan="3">
                        <a href="<?php echo $data["labels"]["0"]["iconUrls"]["medium"]; ?>">
                         <img src="<?php echo $data["labels"]["0"]["iconUrls"]["medium"]; ?>" alt="<?php echo $data["labels"]["0"]["name"]; ?>" title="<?php echo $data["labels"]["0"]["name"]; ?>">
                        </a>  ||  
                        <a href="<?php echo $data["labels"]["1"]["iconUrls"]["medium"]; ?>">
                         <img src="<?php echo $data["labels"]["1"]["iconUrls"]["medium"]; ?>" alt="<?php echo $data["labels"]["1"]["name"]; ?>" title="<?php echo $data["labels"]["1"]["name"]; ?>">
                        </a>  ||  
                        <a href="<?php echo $data["labels"]["2"]["iconUrls"]["medium"]; ?>">
                         <img src="<?php echo $data["labels"]["2"]["iconUrls"]["medium"]; ?>" alt="<?php echo $data["labels"]["2"]["name"]; ?>" title="<?php echo $data["labels"]["2"]["name"]; ?>"></td>
                        </a>
                        <td colspan="5">
                           <ak class="chap">Urushlar g'alaba qozondi: </ak>
                           <ak class="ong"><b><?php echo $data["warWins"]; ?></b></ak>
                        </td>
                     </tr>
                     <tr class=" light-row">
                        <td colspan="5">
                           <ak class="chap">Yutqazilgan urushlar: </ak>
                           <ak class="ong"><b><?php echo $data["warLosses"]; ?></b></ak>
                        </td>
                     </tr>
                     <tr class=" light-row">
                        <td colspan="5">
                           <ak class="chap">Urush g'alabasi seriyasi:: </ak>
                           <ak class="ong"><b><?php echo $data["warWinStreak"]; ?></b></ak>
                        </td>
                     </tr>
                     <tr class=" light-row">
                        <td colspan="2"><h4><ak class="chap"> A'zolar:</ak> <ak class="ong"> <b><?php echo $data["members"]; ?>/50</b></ak></h4></td>
                        <td colspan="5">
                           <ak class="chap">Wars drawn: </ak>
                           <ak class="ong"><b><?php echo $data["warTies"]; ?></b></ak>
                        </td>
                     </tr>
                  </tbody>
               </table>
               <h1 style=" text-align: center; margin: 15px; ">Klan A'zolar haqida ma'lumot</h1>
               <table class="table movie-table" style=" font-size: 18px; ">
                  <thead>
                     <tr class= "movie-table-head" style=" text-align: center; ">
                        <th>Klandagi hozirgi raqmi</th>
                        <th>Klandagi avvalgi raqmi</th>
                        <th>ID raqmi</th>
                        <th>Darajasi</th>
                        <th>Liga reytingi</th>
                        <th width="1%">Liga</th>
                        <th>Liga nomi</th>
                        <th>O`yindagi ismi</th>
                        <th>Klandagi mavqeyi</th>
                        <th>Qancha askar bergan</th>
                        <th>Qancha askar olgan</th>
                        
                     </tr>
                  </thead>
                  <tbody>
                     <?php   foreach ($members as $member) {  
                     $usertag = explode("#", $member["tag"]);

                     ?>
                     <!--row-->
                     <tr class= "<?php if(++$i%2 == 0){ ?> light-row<?php }else{ ?>dark-row <?php } ?>">
                        <td ><?= $member["clanRank"]; ?></td>
                        <td><?=$member["previousClanRank"]?></td>
                        <td ><?= $member["tag"]; ?></td>
                        <td><?=$member["trophies"]; ?></td>
                        <td> <a href="<?= $member["league"]["iconUrls"]["medium"]; ?>"><img src="<?= $member["league"]["iconUrls"]["small"]; ?>" alt="<?= $member["league"]["name"]; ?>" title="<?= $member["league"]["name"]; ?>"/> </a></td>
                        <td><?=$member["league"]["name"]; ?></td>
                        <td><?= $member["expLevel"]; ?></td>
                        <td><b><a href="players.php?tag=<?=$usertag['1'];?>"><?=$member["name"];?></a></b></td>
                        <td><?=$member["role"];?></td>
                        <td><?=$member["donations"]; ?></td>
                        <td><?=$member["donationsReceived"]; ?></td>
                        
                     </tr>
                     <?php  } ?>
                     <!--/.row-->
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </body>
</html>
