<?php session_start();
define('index', true);
?>
<?php include ("connect.php");?>
<html>
<head>
  <title>Статистика регистрации на Всероссийскую олимпиаду школьников "Миссия выполнима. Твое призвание - финансист"</title>
</head>
<body>
  <b>  <p align="center" style="font-size:20px">
      Статистика регистрации на Всероссийскую олимпиаду школьников "Миссия выполнима. Твое призвание - финансист"
    </p></b>
        <?php
  mysql_query ("set_client='utf8'");//Следующие 4 строки решают проблему с кодировкой.
  mysql_query ("set character_set_results='utf8'");
  mysql_query ("set collation_connection='utf8_general_ci'");
  mysql_query ("SET NAMES utf8");
  $result = mysql_query("SELECT * FROM profile");
  $row = mysql_fetch_assoc($result);
  $num = mysql_num_rows($result);
  $rad = mysql_query("SELECT * FROM profile WHERE Region = '1' OR Region = '01'");
  $rad1 = mysql_num_rows($rad);
  $rba = mysql_query("SELECT * FROM profile WHERE Region = '2' OR Region = '02' OR Region = '102'");
  $rba1 = mysql_num_rows($rba);
  $rbu = mysql_query("SELECT * FROM profile WHERE Region = '3' OR Region = '03' OR Region = '103'");
  $rbu1 = mysql_num_rows($rbu);
  $ral = mysql_query("SELECT * FROM profile WHERE Region = '4' OR Region = '04'");
  $ral1 = mysql_num_rows($ral);
  $rda = mysql_query("SELECT * FROM profile WHERE Region = '5' OR Region = '05'");
  $rda1 = mysql_num_rows($rda);
  $rin = mysql_query("SELECT * FROM profile WHERE Region = '6' OR Region = '06'");
  $rin1 = mysql_num_rows($rin);
  $rkb = mysql_query("SELECT * FROM profile WHERE Region = '7' OR Region = '07'");
  $rkb1 = mysql_num_rows($rkb);
  $rka = mysql_query("SELECT * FROM profile WHERE Region = '8' OR Region = '08'");
  $rka1 = mysql_num_rows($rka);
  $rkc = mysql_query("SELECT * FROM profile WHERE Region = '9' OR Region = '09'");
  $rkc1 = mysql_num_rows($rkc);
  $rkr = mysql_query("SELECT * FROM profile WHERE Region = '10'");
  $rkr1 = mysql_num_rows($rkr);
  $rko = mysql_query("SELECT * FROM profile WHERE Region = '11'");
  $rko1 = mysql_num_rows($rko);
  $rme = mysql_query("SELECT * FROM profile WHERE Region = '12'");
  $rme1 = mysql_num_rows($rme);
  $rmo = mysql_query("SELECT * FROM profile WHERE Region = '13' OR Region = '113'");
  $rmo1 = mysql_num_rows($rmo);
  $rsa = mysql_query("SELECT * FROM profile WHERE Region = '14'");
  $rsa1 = mysql_num_rows($rsa);
  $rso = mysql_query("SELECT * FROM profile WHERE Region = '15'");
  $rso1 = mysql_num_rows($rso);
  $rta = mysql_query("SELECT * FROM profile WHERE Region = '16' OR Region = '116'");
  $rta1 = mysql_num_rows($rta);
  $rty = mysql_query("SELECT * FROM profile WHERE Region = '17'");
  $rty1 = mysql_num_rows($rty);
  $rud = mysql_query("SELECT * FROM profile WHERE Region = '18'");
  $rud1 = mysql_num_rows($rud);
  $rha = mysql_query("SELECT * FROM profile WHERE Region = '19'");
  $rha1 = mysql_num_rows($rha);
  $rch = mysql_query("SELECT * FROM profile WHERE Region = '20' OR Region = '95'");
  $rch1 = mysql_num_rows($rch);
  $rcv = mysql_query("SELECT * FROM profile WHERE Region = '21' OR Region = '121'");
  $rcv1 = mysql_num_rows($rcv);
  $kal = mysql_query("SELECT * FROM profile WHERE Region = '22'");
  $kal1 = mysql_num_rows($kal);
  $kkr = mysql_query("SELECT * FROM profile WHERE Region = '23' OR Region = '93' OR Region = '123'");
  $kkr1 = mysql_num_rows($kkr);
  $kks = mysql_query("SELECT * FROM profile WHERE Region = '24' OR Region = '84' OR Region = '88' OR Region = '124'");
  $kks1 = mysql_num_rows($kks);
  $kpr = mysql_query("SELECT * FROM profile WHERE Region = '25' OR Region = '125'");
  $kpr1 = mysql_num_rows($kpr);
  $kst = mysql_query("SELECT * FROM profile WHERE Region = '26' OR Region = '126'");
  $kst1 = mysql_num_rows($kst);
  $kha = mysql_query("SELECT * FROM profile WHERE Region = '27'");
  $kha1 = mysql_num_rows($kha);
  $oam = mysql_query("SELECT * FROM profile WHERE Region = '28'");
  $oam1 = mysql_num_rows($oam);
  $oar = mysql_query("SELECT * FROM profile WHERE Region = '29'");
  $oar1 = mysql_num_rows($oar);
  $oas = mysql_query("SELECT * FROM profile WHERE Region = '30'");
  $oas1 = mysql_num_rows($oas);
  $obe = mysql_query("SELECT * FROM profile WHERE Region = '31'");
  $obe1 = mysql_num_rows($obe);
  $obr = mysql_query("SELECT * FROM profile WHERE Region = '32'");
  $obr1 = mysql_num_rows($obr);
  $ovl = mysql_query("SELECT * FROM profile WHERE Region = '33'");
  $ovl1 = mysql_num_rows($ovl);
  $ovo = mysql_query("SELECT * FROM profile WHERE Region = '34' OR Region = '134'");
  $ovo1 = mysql_num_rows($ovo);
  $ovg = mysql_query("SELECT * FROM profile WHERE Region = '35'");
  $ovg1 = mysql_num_rows($ovg);
  $ovr = mysql_query("SELECT * FROM profile WHERE Region = '36' OR Region = '136'");
  $ovr1 = mysql_num_rows($ovr);
  $oiv = mysql_query("SELECT * FROM profile WHERE Region = '37'");
  $oiv1 = mysql_num_rows($oiv);
  $oir = mysql_query("SELECT * FROM profile WHERE Region = '38' OR Region = '85' OR Region = '138'");
  $oir1 = mysql_num_rows($oir);
  $oka = mysql_query("SELECT * FROM profile WHERE Region = '39' OR Region = '91'");
  $oka1 = mysql_num_rows($oka);
  $okl = mysql_query("SELECT * FROM profile WHERE Region = '40'");
  $okl1 = mysql_num_rows($okl);
  $kka = mysql_query("SELECT * FROM profile WHERE Region = '41'");
  $kka1 = mysql_num_rows($kka);
  $oke = mysql_query("SELECT * FROM profile WHERE Region = '42' OR Region = '142'");
  $oke1 = mysql_num_rows($oke);
  $oki = mysql_query("SELECT * FROM profile WHERE Region = '43'");
  $oki1 = mysql_num_rows($oki);
  $oko = mysql_query("SELECT * FROM profile WHERE Region = '44'");
  $oko1 = mysql_num_rows($oko);
  $oku = mysql_query("SELECT * FROM profile WHERE Region = '45'");
  $oku1 = mysql_num_rows($oku);
  $okr = mysql_query("SELECT * FROM profile WHERE Region = '46'");
  $okr1 = mysql_num_rows($okr);
  $ole = mysql_query("SELECT * FROM profile WHERE Region = '47'");
  $ole1 = mysql_num_rows($ole);
  $oli = mysql_query("SELECT * FROM profile WHERE Region = '48'");
  $oli1 = mysql_num_rows($oli);
  $oma = mysql_query("SELECT * FROM profile WHERE Region = '49'");
  $oma1 = mysql_num_rows($oma);
  $omo = mysql_query("SELECT * FROM profile WHERE Region = '50' OR Region = '90' OR Region = '150' OR Region = '190' OR Region = '750'");
  $omo1 = mysql_num_rows($omo);
  $omu = mysql_query("SELECT * FROM profile WHERE Region = '51'");
  $omu1 = mysql_num_rows($omu);
  $oni = mysql_query("SELECT * FROM profile WHERE Region = '52' OR Region = '152'");
  $oni1 = mysql_num_rows($oni);
  $ono = mysql_query("SELECT * FROM profile WHERE Region = '53'");
  $ono1 = mysql_num_rows($ono);
  $onv = mysql_query("SELECT * FROM profile WHERE Region = '54' OR Region = '154'");
  $onv1 = mysql_num_rows($onv);
  $oom = mysql_query("SELECT * FROM profile WHERE Region = '55'");
  $oom1 = mysql_num_rows($oom);
  $oor = mysql_query("SELECT * FROM profile WHERE Region = '56'");
  $oor1 = mysql_num_rows($oor);
  $ool = mysql_query("SELECT * FROM profile WHERE Region = '57'");
  $ool1 = mysql_num_rows($ool);
  $ope = mysql_query("SELECT * FROM profile WHERE Region = '58'");
  $ope1 = mysql_num_rows($ope);
  $kpe = mysql_query("SELECT * FROM profile WHERE Region = '59' OR Region = '81' OR Region = '159'");
  $kpe1 = mysql_num_rows($kpe);
  $ops = mysql_query("SELECT * FROM profile WHERE Region = '60'");
  $ops1 = mysql_num_rows($ops);
  $oro = mysql_query("SELECT * FROM profile WHERE Region = '61' OR Region = '161'");
  $oro1 = mysql_num_rows($oro);
  $ory = mysql_query("SELECT * FROM profile WHERE Region = '62'");
  $ory1 = mysql_num_rows($ory);
  $osa = mysql_query("SELECT * FROM profile WHERE Region = '63' OR Region = '163'");
  $osa1 = mysql_num_rows($osa);
  $osr = mysql_query("SELECT * FROM profile WHERE Region = '64' OR Region = '164'");
  $osr1 = mysql_num_rows($osr);
  $osh = mysql_query("SELECT * FROM profile WHERE Region = '65'");
  $osh1 = mysql_num_rows($osh);
  $osv = mysql_query("SELECT * FROM profile WHERE Region = '66' OR Region = '96' OR Region = '166' OR Region = '196'");
  $osv1 = mysql_num_rows($osv);
  $osm = mysql_query("SELECT * FROM profile WHERE Region = '67'");
  $osm1 = mysql_num_rows($osm);
  $ota = mysql_query("SELECT * FROM profile WHERE Region = '68'");
  $ota1 = mysql_num_rows($ota);
  $otv = mysql_query("SELECT * FROM profile WHERE Region = '69'");
  $otv1 = mysql_num_rows($otv);
  $oto = mysql_query("SELECT * FROM profile WHERE Region = '70'");
  $oto1 = mysql_num_rows($oto);
  $otu = mysql_query("SELECT * FROM profile WHERE Region = '71'");
  $otu1 = mysql_num_rows($otu);
  $oty = mysql_query("SELECT * FROM profile WHERE Region = '72'");
  $oty1 = mysql_num_rows($oty);
  $oul = mysql_query("SELECT * FROM profile WHERE Region = '73' OR Region = '173'");
  $oul1 = mysql_num_rows($oul);
  $och = mysql_query("SELECT * FROM profile WHERE Region = '74' OR Region = '174'");
  $och1 = mysql_num_rows($och);
  $kza = mysql_query("SELECT * FROM profile WHERE Region = '75' OR Region = '80'");
  $kza1 = mysql_num_rows($kza);
  $oya = mysql_query("SELECT * FROM profile WHERE Region = '76'");
  $oya1 = mysql_num_rows($oya);
  $mos = mysql_query("SELECT * FROM profile WHERE Region = '77' OR Region = '97' OR Region = '99' OR Region = '177' OR Region = '197' OR Region = '199' OR Region = '777'");
  $mos1 = mysql_num_rows($mos);
  $spb = mysql_query("SELECT * FROM profile WHERE Region = '78' OR Region = '98' OR Region = '178'");
  $spb1 = mysql_num_rows($spb);
  $eao = mysql_query("SELECT * FROM profile WHERE Region = '79'");
  $eao1 = mysql_num_rows($eao);
  $rkr = mysql_query("SELECT * FROM profile WHERE Region = '82'");
  $rkr1 = mysql_num_rows($rkr);
  $nao = mysql_query("SELECT * FROM profile WHERE Region = '83'");
  $nao1 = mysql_num_rows($nao);
  $hmao = mysql_query("SELECT * FROM profile WHERE Region = '86' OR Region = '186'");
  $hmao1 = mysql_num_rows($hmao);
  $cao = mysql_query("SELECT * FROM profile WHERE Region = '87'");
  $cao1 = mysql_num_rows($cao);
  $ynao = mysql_query("SELECT * FROM profile WHERE Region = '89'");
  $ynao1 = mysql_num_rows($ynao);
  $sev = mysql_query("SELECT * FROM profile WHERE Region = '92'");
  $sev1 = mysql_num_rows($sev);
  $r=mysql_query("SELECT DISTINCT Region FROM profile");
  $r1=mysql_num_rows($r);
  $r5=mysql_query("SELECT Region, COUNT( Region ) FROM profile GROUP BY Region HAVING COUNT( Region ) >5");
  $r51=mysql_num_rows($r5);
  ?>
  <?php
echo date("d.m.Y");
echo "&nbsp";
echo date("H:i");
?><br><br>
<b>Уже зарегистрировались:</b><br>
Школьников:<?=$num;?><br>
<p style="font-size:18px"><b>Подробная география олимпиады</b></p>
  Количество представленных регионов:<?=$r1;?><br>
  Представленные не менее 5-ю участниками:<?=$r51;?><br><br>
  <table border="1" style="background-color:FFFFFF;border-collapse:collapse;border:1px solid #000000;color:000000;padding:5px" cellpadding="3">
    <tr><td>№ региона</td><td>Регион</td><td>Чел.</td></tr>
    <tr><td>01</td><td>Республика Адыгея</td><td><?=$rad1;?></td></tr>
    <tr><td>02, 102</td><td>Республика Башкококорстан</td><td><?=$rba1;?></td></tr>
    <tr><td>03, 103</td><td>Республика Бурятия</td><td><?=$rbu1;?></td></tr>
    <tr><td>04</td><td>Республика Алтай</td><td><?=$ral1;?></td></tr>
    <tr><td>05</td><td>Республика Дагестан</td><td><?=$rda1;?></td></tr>
    <tr><td>06</td><td>Республика Ингушетия</td><td><?=$rin1;?></td></tr>
    <tr><td>07</td><td>Кабардино-Балкарская Республика</td><td><?=$rkb1;?></td></tr>
    <tr><td>08</td><td>Республика Калмыкия</td><td><?=$rka1;?></td></tr>
    <tr><td>09</td><td>Республика Карачаево-Черкесия</td><td><?=$rkc1;?></td></tr>
    <tr><td>10</td><td>Республика Карелия</td><td><?=$rkr1;?></td></tr>
    <tr><td>11</td><td>Республика Коми</td><td><?=$rko1;?></td></tr>
    <tr><td>12</td><td>Республика Марий Эл</td><td><?=$rme1;?></td></tr>
    <tr><td>13, 113</td><td>Республика Мордовия</td><td><?=$rmo1;?></td></tr>
    <tr><td>14</td><td>Республика Саха (Якутия)</td><td><?=$rsa1;?></td></tr>
    <tr><td>15</td><td>Республика Северная Осетия-Алания</td><td><?=$rso1;?></td></tr>
    <tr><td>16, 116</td><td>Республика Татарстан</td><td><?=$rta1;?></td></tr>
    <tr><td>17</td><td>Республика Тыва</td><td><?=$rty1;?></td></tr>
    <tr><td>18</td><td>Удмуртская Республика</td><td><?=$rud1;?></td></tr>
    <tr><td>19</td><td>Республика Хакасия</td><td><?=$rha1;?></td></tr>
    <tr><td>20, 95</td><td>Чеченская Республика</td><td><?=$rch1;?></td></tr>
    <tr><td>21, 121</td><td>Чувашская Республика</td><td><?=$rcv1;?></td></tr>
    <tr><td>22</td><td>Алтайский край</td><td><?=$kal1;?></td></tr>
    <tr><td>23, 93, 123</td><td>Краснодарский край</td><td><?=$kkr1;?></td></tr>
    <tr><td>24, 84, 88, 124</td><td>Красноярский край</td><td><?=$kks1;?></td></tr>
    <tr><td>25, 125</td><td>Приморский край</td><td><?=$kpr1;?></td></tr>
    <tr><td>26, 126</td><td>Ставропольский край</td><td><?=$kst1;?></td></tr>
    <tr><td>27</td><td>Хабаровский край</td><td><?=$kha1;?></td></tr>
    <tr><td>28</td><td>Амурская область</td><td><?=$oam1;?></td></tr>
    <tr><td>29</td><td>Архангельская область</td><td><?=$oar1;?></td></tr>
    <tr><td>30</td><td>Астраханская область</td><td><?=$oas1;?></td></tr>
    <tr><td>31</td><td>Белгородская область</td><td><?=$obe1;?></td></tr>
    <tr><td>32</td><td>Брянская область</td><td><?=$obr1;?></td></tr>
    <tr><td>33</td><td>Владимирская область</td><td><?=$ovl1;?></td></tr>
    <tr><td>34, 134</td><td>Волгоградская область</td><td><?=$ovo1;?></td></tr>
    <tr><td>35</td><td>Вологодская область</td><td><?=$ovg1;?></td></tr>
    <tr><td>36</td><td>Воронежская область</td><td><?=$ovr1;?></td></tr>
    <tr><td>37</td><td>Ивановская область</td><td><?=$oiv1;?></td></tr>
    <tr><td>38, 85, 138</td><td>Иркутская область</td><td><?=$oir1;?></td></tr>
    <tr><td>39, 91</td><td>Калининградская область</td><td><?=$oka1;?></td></tr>
    <tr><td>40</td><td>Калужская область</td><td><?=$okl1;?></td></tr>
    <tr><td>41, 82</td><td>Камчатский край</td><td><?=$kka1;?></td></tr>
    <tr><td>42</td><td>Кемеровская область</td><td><?=$oke1;?></td></tr>
    <tr><td>43</td><td>Кировская область</td><td><?=$oki1;?></td></tr>
    <tr><td>44</td><td>Костромская область</td><td><?=$oko1;?></td></tr>
    <tr><td>45</td><td>Курганская область</td><td><?=$oku1;?></td></tr>
    <tr><td>46</td><td>Курская область</td><td><?=$okr1;?></td></tr>
    <tr><td>47</td><td>Ленинградская область</td><td><?=$ole1;?></td></tr>
    <tr><td>48</td><td>Липецкая область</td><td><?=$oli1;?></td></tr>
    <tr><td>49</td><td>Магаданская область</td><td><?=$oma1;?></td></tr>
    <tr><td>50, 90, 150, 190, 750</td><td>Московская область</td><td><?=$omo1;?></td></tr>
    <tr><td>51</td><td>Мурманская область</td><td><?=$omu1;?></td></tr>
    <tr><td>52, 152</td><td>Нижегородская область</td><td><?=$oni1;?></td></tr>
    <tr><td>53</td><td>Новгородская область</td><td><?=$ono1;?></td></tr>
    <tr><td>54, 154</td><td>Новосибирская область</td><td><?=$onv1;?></td></tr>
    <tr><td>55</td><td>Омская область</td><td><?=$oom1;?></td></tr>
    <tr><td>56</td><td>Оренбургская область</td><td><?=$oor1;?></td></tr>
    <tr><td>57</td><td>Орловская область</td><td><?=$ool1;?></td></tr>
    <tr><td>58</td><td>Пензенская область</td><td><?=$ope1;?></td></tr>
    <tr><td>59, 81, 159</td><td>Пермский край</td><td><?=$kpe1;?></td></tr>
    <tr><td>60</td><td>Псковская область</td><td><?=$ops1;?></td></tr>
    <tr><td>61, 161</td><td>Ростовская область</td><td><?=$oro1;?></td></tr>
    <tr><td>62</td><td>Рязанская область</td><td><?=$ory1;?></td></tr>
    <tr><td>63, 163</td><td>Самарская область</td><td><?=$osa1;?></td></tr>
    <tr><td>64, 164</td><td>Саратовская область</td><td><?=$osr1;?></td></tr>
    <tr><td>65</td><td>Сахалинская область</td><td><?=$osh1;?></td></tr>
    <tr><td>66, 96, 166, 196</td><td>Свердловская область</td><td><?=$osv1;?></td></tr>
    <tr><td>67</td><td>Смоленская область</td><td><?=$osm1;?></td></tr>
    <tr><td>68</td><td>Тамбовская область</td><td><?=$ota1;?></td></tr>
    <tr><td>69</td><td>Тверская область</td><td><?=$otv1;?></td></tr>
    <tr><td>70</td><td>Томская область</td><td><?=$oto1;?></td></tr>
    <tr><td>71</td><td>Тульская область</td><td><?=$otu1;?></td></tr>
    <tr><td>72</td><td>Тюменская область</td><td><?=$oty1;?></td></tr>
    <tr><td>73, 173</td><td>Ульяновская область</td><td><?=$oul1;?></td></tr>
    <tr><td>74, 174</td><td>Челябинская область</td><td><?=$och1;?></td></tr>
    <tr><td>75, 80</td><td>Забайкальский край</td><td><?=$kza1;?></td></tr>
    <tr><td>76</td><td>Ярославская область</td><td><?=$oya1;?></td></tr>
    <tr><td>77, 97, 99, 177, 197, 199, 777</td><td>г. Москва</td><td><?=$mos1;?></td></tr>
    <tr><td>78, 98, 178</td><td>г. Санкт-Петербург</td><td><?=$spb1;?></td></tr>
    <tr><td>79</td><td>Еврейская автономная область</td><td><?=$eao1;?></td></tr>
    <tr><td>82</td><td>Республика Крым</td><td><?=$rkr1;?></td></tr>
    <tr><td>83</td><td>Ненецкий автономный округ</td><td><?=$nao1;?></td></tr>
    <tr><td>86, 186</td><td>Ханты-Мансийский автономный округ</td><td><?=$hmao1;?></td></tr>
    <tr><td>87</td><td>Чукотский автономный округ</td><td><?=$cao1;?></td></tr>
    <tr><td>89</td><td>Ямало-Ненецкий автономный округ</td><td><?=$ynao1;?></td></tr>
    <tr><td>92</td><td>г. Севастополь</td><td><?=$sev1;?></td></tr>
  </table>
</body>
</html>
