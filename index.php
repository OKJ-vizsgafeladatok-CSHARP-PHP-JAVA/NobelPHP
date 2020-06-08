<?php
require_once'Nobel.php';
include 'Beolvas.php';

$a= Beolvas::beolvasas();
$iNobel="";
$szerv=array();

foreach ($a as $item) {
        if($item->teljesNev()=="Arthur B. McDonald"){
            echo '3. feladat: '.$item->getTipus()."<br>";
        }
        if($item->getTipus()=="irodalmi"){
            if($item->getEvszam()==2017){
                $iNobel=$item->teljesNev();
            }
        }
        if($item->getVezeteknev()==""&&$item->getEvszam()>1989){
            $szerv[]=$item->getEvszam().': '.$item->getKeresztnev();
        }
}
echo "4. feladat: ".$iNobel."<br>";
echo "5. feladat: <br>";
$behuzas="&nbsp&nbsp&nbsp&nbsp&nbsp";

foreach ($szerv as $key=>$value) {
    echo $behuzas.$value.'<br>';
}
echo "6. feladat: <br> ";
foreach ($a as $item) {
    if(strpos($item->teljesNev(), "Curie")){
        echo $behuzas.$item->getEvszam().": ".$item->teljesNev()."(".$item->getTipus().")<br>";
    }
}

//7. feladat
echo'7. feladat: <br>';
$stat=array();
foreach ($a as $item) {
    $stat[]=$item->getTipus();
}
//print_r($stat);//value-ban vannak a típusok
$stat= array_count_values($stat);
foreach ($stat as $key => $value) {
    echo $behuzas.$key.$behuzas.$value." db<br>";
}
//8. feladat: 
echo "8. feladat: orvosi.txt";
$fajlba="";
$orvosi=array();
foreach ($a as $item) {
    if($item->getTipus()=="orvosi"){
        $orvosi[$item->teljesNev()]=$item->getEvszam();
    }
}
//print_r($orvosi);
asort($orvosi);
//print_r($orvosi);
foreach ($orvosi as $key => $value) {
    $fajlba.=$value.":".$key."\n";
}

$myFile= fopen("orvosi.txt", "w");
fwrite($myFile, $fajlba);
