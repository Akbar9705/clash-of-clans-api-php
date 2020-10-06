
<?php
  $tag = $_GET['tag'];    
  //ini_set('display_errors', 1);  ini_set('display_startup_errors', 1);  error_reporting(E_ALL);
  $tag = substr_replace($tag,"#",0,0);  
  
  $token = "<TOKEN>";
              
  $url = "https://api.clashofclans.com/v1/players/" . urlencode($tag);
      
  $ch = curl_init($url);            
  $headr = array();    
  $headr[] = "Accept: application/json";    
  $headr[] = "Authorization: Bearer ".$token;
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headr);    
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);    
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);    
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
  $res = curl_exec($ch);  
  $data = json_decode($res, true);    
  curl_close($ch);   
  //echo json_encode($data);
  $clan =$data['clan'];
  $league = $data['league'];
  $achievements = $data['achievements'];
  $labels = $data['labels'];
  $troops = $data['troops'];
  $heroes = $data['heroes'];
  $damlamalar = $data['spells'];
  
  function hero($hero){
   if($hero == "Barbarian King"){
    $qahramon = '<img src="images/0.png" style="width: 150px;">';
   }elseif($hero == "Archer Queen"){
    $qahramon = '<img src="images/1.png" style="width: 150px;">';
   }elseif($hero == "Grand Warden"){
    $qahramon = '<img src="images/2.png" style="width: 150px;">';
   }elseif($hero == "Battle Machine"){
    $qahramon = '<img src="images/3.png" style="width: 150px;">';
   }elseif($hero == "Royal Champion"){
    $qahramon = '<img src="images/4.png" style="width: 150px;">';
   }
   return  $qahramon;
  }
  function askar($askar){
    if($askar == "Barbarian"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/1/13/Vignettes1-D-A-T-R-D-300px.png/200px-Vignettes1-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Archer"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/b/b8/Vignettes2-D-A-T-R-D-300px.png/200px-Vignettes2-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Goblin"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/0/04/Vignettes4-D-A-T-R-D-300px.png/200px-Vignettes4-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Giant"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/f/fd/Vignettes3-D-A-T-R-D-300px.png/200px-Vignettes3-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Wall Breaker"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/f/fb/Vignettes5-D-A-T-R-D-300px.png/200px-Vignettes5-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Balloon"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/5/52/Vignettes6-D-A-T-R-D-300px.png/200px-Vignettes6-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Wizard"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/1/12/Vignettes7-D-A-T-R-D-300px.png/200px-Vignettes7-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Healer"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/4/46/Vignettes8-D-A-T-R-D-300px.png/200px-Vignettes8-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Dragon"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/9/9a/Vignettes9-D-A-T-R-D-300px.png/200px-Vignettes9-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "P.E.K.K.A"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/e/e7/Vignettes10-D-A-T-R-D-300px.png/200px-Vignettes10-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Minion"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/9/92/Vignettes11-D-A-T-R-D-300px.png/200px-Vignettes11-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Hog Rider"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/8/86/Vignettes12-D-A-T-R-D-300px.png/200px-Vignettes12-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Valkyrie"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/2/22/Vignettes13-D-A-T-R-D-300px.png/200px-Vignettes13-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Golem"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/7/77/Vignettes14-D-A-T-R-D-300px.png/200px-Vignettes14-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Witch"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/c/c0/Vignettes15-D-A-T-R-D-300px.png/200px-Vignettes15-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Lava Hound"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/f/fc/Vignettes16-D-A-T-R-D-300px.png/200px-Vignettes16-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Bowler"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/a/ab/Vignettes16a-D-A-T-R-D-300px.png/200px-Vignettes16a-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Baby Dragon"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/7/7b/Vignettes16b-D-A-T-R-D-300px.png/200px-Vignettes16b-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Miner"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/f/f0/Vignettes16c_D-A-T-R-D_300px.png/200px-Vignettes16c_D-A-T-R-D_300px.png" style="width: 100px;">';
   }elseif($askar == "Super Barbarian"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/2/27/Vignettes-super_barbare-D-A-T-R-D-300px.png/200px-Vignettes-super_barbare-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Super Archer"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/1/1f/Vignettes_super-archer-D-A-T-R-D-300px.png/200px-Vignettes_super-archer-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Super Wall Breaker"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/3/32/Vignettes-super_sapeur-D-A-T-R-D-300px.png/200px-Vignettes-super_sapeur-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Super Giant"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/e/ea/Vignettes-super_geant-D-A-T-R-D-300px.png/200px-Vignettes-super_geant-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Raged Barbarian"){
    $askar = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/2/27/Raged_Barbarian_info.png/revision/latest/scale-to-width-down/340?cb=20170927155033" style="width: 100px;">';
   }elseif($askar == "Sneaky Archer"){
    $askar = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/a/ac/Sneaky_Archer_info.png/revision/latest/scale-to-width-down/340?cb=20170927154621" style="width: 100px;">';
   }elseif($askar == "Beta Minion"){
    $askar = '<img src="https://coc.guide/static/imgs/troop/gargoyle2.png" style="width: 100px;">';
   }elseif($askar == "Boxer Giant"){
    $askar = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/1/17/Boxer_Giant_info.png/revision/latest/scale-to-width-down/340?cb=20170613191751" style="width: 100px;">';
   }elseif($askar == "Bomber"){
    $askar = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/2/21/Bomber_info.png/revision/latest/scale-to-width-down/340?cb=20170927155412" style="width: 100px;">';
   }elseif($askar == "Super P.E.K.K.A"){
    $askar = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/9/96/Super_P.E.K.K.A_info.png/revision/latest?cb=20170927160041" style="width: 100px;">';
   }elseif($askar == "Cannon Cart"){
    $askar = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/4/4c/Cannon_Cart_info.png/revision/latest/scale-to-width-down/150" style="width: 100px;">';
   }elseif($askar == "Drop Ship"){
    $askar = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/3/3d/Drop_Ship1.png/revision/latest/scale-to-width-down/150" style="width: 100px;">';
   }elseif($askar == "Baby Dragon"){
    $askar = '<img src="images/1.png" style="width: 100px;">';
   }elseif($askar == "Night Witch"){
    $askar = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/1/10/Night_Witch_info.png/revision/latest/scale-to-width-down/150" style="width: 100px;">';
   }elseif($askar == "Wall Wrecker"){
    $askar = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/d/d9/Wall_Wrecker3.png/revision/latest" style="width: 100px;">';
   }elseif($askar == "Battle Blimp"){
    $askar = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/b/b9/Battle_Blimp3.png/revision/latest?cb=20180605201226" style="width: 100px;">';
   }elseif($askar == "Yeti"){
    $askar = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/5/56/Yeti_Info.png/revision/latest/scale-to-width-down/150" style="width: 100px;">';
   }elseif($askar == "Sneaky Goblin"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/d/d9/Vignettes-gobelin_furtif-D-A-T-R-D-300px.png/200px-Vignettes-gobelin_furtif-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Ice Golem"){
    $askar = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/1/14/Ice_Golem_info.png/revision/latest/scale-to-width-down/150" style="width: 100px;">';
   }elseif($askar == "Electro Dragon"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/e/e6/Vignettes-Electrodragon-D-A-T-R-D-300px.png/200px-Vignettes-Electrodragon-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Stone Slammer"){
    $askar = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/0/0b/Stone_Slammer1.png/revision/latest/scale-to-width-down/150" style="width: 100px;">';
   }elseif($askar == "Inferno Dragon"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/d/dd/Vignettes_Dragon-de-lenfer_-D-A-T-R-D-300px.png/200px-Vignettes_Dragon-de-lenfer_-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Super Valkyrie"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/2/22/Vignettes13-D-A-T-R-D-300px.png/200px-Vignettes13-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Super Witch"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/7/7e/Vignettes_Super-sorciere_-D-A-T-R-D-300px.png/200px-Vignettes_Super-sorciere_-D-A-T-R-D-300px.png" style="width: 100px;">';
   }elseif($askar == "Hog Glider"){
    $askar = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/2/2d/Hog_Glider_info.png/revision/latest/scale-to-width-down/150" style="width: 100px;">';
   }elseif($askar == "Siege Barracks"){
    $askar = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/a/a4/Siege_Barracks1.png/revision/latest/scale-to-width-down/150" style="width: 100px;">';
   }elseif($askar == "Headhunter"){
    $askar = '<img src="https://wiki.clashofclans.fr/images/thumb/1/1f/Vignettes_Chasseuse-tete_D-A-T-R-D-300px.png/200px-Vignettes_Chasseuse-tete_D-A-T-R-D-300px.png" style="width: 100px;">';
   }
   return $askar;
  }
  function damlama($damlama){
    if($damlama == "Lightning Spell"){
     $damlama = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/c/c0/Lightning_Spell_info.png/revision/latest?cb=20200622111459" style="width: 100px;">';
    }elseif($damlama == "Healing Spell"){
     $damlama = '<img src="https://lh3.googleusercontent.com/proxy/i8VKKvVyVa6ceCX0F-BQXDpyJ3tPusFcSe6-psnhAcLMlOpWzwVeU6wcQQg7rVQPs7mIMVkEI62l0fPcvGM9HonwH3g6DydFhgq6GcXl3YvH8Xrw4w" style="width: 100px;">';
    }elseif($damlama == "Rage Spell"){
     $damlama = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/8/8a/Rage_Spell_info.png/revision/latest/scale-to-width-down/340?cb=20171008204108" style="width: 100px;">';
    }elseif($damlama == "Jump Spell"){
     $damlama = '<img src="https://lh3.googleusercontent.com/proxy/S_agNU9oaeZwfaiSuIUejeUC17hEHMx8iV1lbxxHdrI2eEGJnF_JLjWdVM_mHgFnZgXerIPnvm1VUxJScpNKUpqP01Ye02HNtUAuFb04Ag" style="width: 100px;">';
    }elseif($damlama == "Freeze Spell"){
     $damlama = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/e/ef/Freeze_Spell_info.png/revision/latest?cb=20180627210930" style="width: 100px;">';
    }elseif($damlama == "Poison Spell"){
     $damlama = '<img src="https://vignette.wikia.nocookie.net/clashofclansconception/images/4/49/Poison_Spell_info.png/revision/latest/scale-to-width-down/340?cb=20160114012831" style="width: 100px;">';
    }elseif($damlama == "Earthquake Spell"){
     $damlama = '<img src="https://static.wixstatic.com/media/442691_8b5e1296e161494fa522e5bb049da91e.png/v1/fill/w_240,h_253,al_c,lg_1,q_85/442691_8b5e1296e161494fa522e5bb049da91e.webp" style="width: 100px;">';
    }elseif($damlama == "Haste Spell"){
     $damlama = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/b/be/Haste_Spell_info.png/revision/latest?cb=20171008204612" style="width: 100px;">';
    }elseif($damlama == "Clone Spell"){
     $damlama = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/9/91/Clone_Spell_info.png/revision/latest/scale-to-width-down/340?cb=20200913194701" style="width: 100px;">';
    }elseif($damlama == "Skeleton Spell"){
     $damlama = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/0/0f/Skeleton_Spell_info.png/revision/latest?cb=20181211010022" style="width: 100px;">';
    }elseif($damlama == "Bat Spell"){
     $damlama = '<img src="https://vignette.wikia.nocookie.net/clashofclans/images/3/3d/Bat_Spell_info.png/revision/latest/scale-to-width-down/150" style="width: 100px;">';
    }
    return $damlama;
   }
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
                <td><?php echo askar($troop['name']);?></td>
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
                <td><?php echo hero($heroes['0']['name']);?></td>
                <td><b><?=$heroes['0']['name']?></b></td>
                <td> <?=$heroes['0']['level']?> </td>
                <td><?=$heroes['0']['maxLevel']?></td>
                <td> <?=$heroes['0']['village']?></td>
              </tr>
             <? } ?>
             <?php if($heroes['1']){?>
              <tr class="dark-row ">
                <td><?php echo hero($heroes['1']['name']);?></td>
                <td><b><?=$heroes['1']['name']?></b></td>
                <td> <?=$heroes['1']['level']?> </td>
                <td><?=$heroes['1']['maxLevel']?></td>
                <td> <?=$heroes['1']['village']?></td>
              </tr>
             <? } ?>
             <?php if($heroes['2']){?>
              <tr class="dark-row ">
               <td><?php echo hero($heroes['2']['name']);?></td>
                <td><b><?=$heroes['2']['name']?></b></td>
                <td> <?=$heroes['2']['level']?> </td>
                <td><?=$heroes['2']['maxLevel']?></td>
                <td> <?=$heroes['2']['village']?></td>
              </tr>
             <? } ?>
             <?php if($heroes['3']){?>
              <tr class="dark-row ">
                <td><?php echo hero($heroes['3']['name']);?></td>
                <td><b><?=$heroes['3']['name']?></b></td>
                <td> <?=$heroes['3']['level']?> </td>
                <td><?=$heroes['3']['maxLevel']?></td>
                <td> <?=$heroes['3']['village']?></td>
              </tr>
             <? } ?>
             <?php if($heroes['4']){?>
              <tr class="dark-row ">
                <td><?php echo hero($heroes['4']['name']);?></td>
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
               <td><b><?=damlama($damlama['name'])?></td>
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