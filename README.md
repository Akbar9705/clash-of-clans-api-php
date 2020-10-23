# CLash of Clans API php
The simplest Clash of Clans library for information about the Clan and its members.
 
Usage instruction
* Type the token into the config.php file (You can get the token at https://developer.clashofclans.com/#/account).

Code
To get clan information
$clantag is the id number of the clan. (do not write #)
```
require_once ("yadro.php");
$clash = new ClashofClans();
$data = $clash->clans($clantag);
```
returns $data as an array

Get user information:
$tag is the user's id number. (do not write #)
```
require_once ("yadro.php");
$clash = new ClashofClans();
$data = $clash->players($tag);
```
returns $data as an array
# [link to running code](https://uzhackersw.uz/modul/clashofclans/)
# Don't forget to click the asterisk if you find it useful :)

# CLash of Clans API php
Klan va uning a'zolari haqida ma'lumot olish uchun eng oddiy Clash of Clans kutubxonasi.

Foydalanish bo'yicha ko'rsatma
* TOKENni config.php fayliga kiriting (Siz https://developer.clashofclans.com/#/account manzilidan olishingiz mumkin).
Kodlar 
Klan haqida ma'lumot olish uchun
$clantag bu clanning id raqami # (panjara)ni yozmang.
```
require_once ("yadro.php");
$clash = new ClashofClans();
$data = $clash->clans($clantag);
```
$data sizga massiv ko`rinishida javobni qaytaradi

Foydalanuvchi haqida ma'lumot olish:
$tag - foydalanuvchining ID raqami # (panjara)ni yozmang.
```
require_once ("yadro.php");
$clash = new ClashofClans();
$data = $clash->players($tag);
```
$data sizga massiv ko`rinishida javobni qaytaradi

# [ishlab turgan kodga havola](https://uzhackersw.uz/modul/clashofclans/)
# Agar sizga foydali bo'lsa, yulduzcha tugmachasini bosishni unutmang :)
![index](https://raw.githubusercontent.com/akbarali1/clash-of-clans-api-php/master/index.png)
![clans](https://raw.githubusercontent.com/akbarali1/clash-of-clans-api-php/master/clans.png)
![players](https://raw.githubusercontent.com/akbarali1/clash-of-clans-api-php/master/players.png)
