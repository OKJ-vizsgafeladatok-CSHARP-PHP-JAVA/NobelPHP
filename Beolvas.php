<?php
require_once 'Nobel.php';

class Beolvas {

    private static $filenev="nobel.csv";
//    private static $tomb=array();//Ha ide teszem bele az adatokat, akkor utána nem érem el, mert privát 
    
    public static function beolvasas(){
        $tomb=array();
        try{
          $fajl= file_get_contents(self::$filenev);
          $sorok=explode("\n", $fajl);
          array_shift($sorok);
          for ($i = 0; $i < count($sorok); $i++) {
            if(!empty($sorok[$i])){
                $split= explode(";",$sorok[$i]);
                if(count($split)==4){
                    $o=new Nobel($split[0], $split[1], $split[2], substr($split[3], 0,strlen($split[3])-1));
                    $tomb[]=$o;
                }else{//ez JAVA-ban problémát okozott, hogy a vállalatoknál a vezetéknév üresen maradt. Itt nem gond, 
//                    $o=new Nobel($split[0], $split[1], $split[2], "");
//                    self::$tomb[]=$o;
//                    die(print_r($o)."<br>3 tagú<br><br>");
                }
            }
            else{
//                echo 'üres sor '.$i;
            }
            }   
        } catch (Exception $ex) {
            die("hiba a beolvasásnál"+$ex);
        }
      
        return $tomb;
    }//endofbeolvas
    
}
