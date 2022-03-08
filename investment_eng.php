<?php

 function getprice($url)
    {
        $steamapicall=file_get_contents($url);
        if($steamapicall[33]==",")                         //Replacement of , with . so that Euro Values can be shown. if you just gonna use USD, you dont need that check
        {
          $priceget = mb_substr($steamapicall, 32,4);
          $priceget[1]='.';
        }

        else if($steamapicall[34]==",")
        {
          $priceget = mb_substr($steamapicall, 32,5);
          $priceget[2]='.';
        }

        else if($steamapicall[36]==",")
        {
          $priceget = mb_substr($steamapicall, 32,6);
          $priceget[3]='.';
        }

        else
        {
          echo "Some case is worth more then 100 EUR. BLAME IT ON WARY";
        }
        return $priceget;
    }
//Definition of the Cases Class (class Kisten)
class Kisten {
  public $name;
  public $quantity;
  public $price;

  public function print()
   {
        echo "Name of the Case: ".$this->name.PHP_EOL."Current Price: ".(($this->price)*($this->quantity)).PHP_EOL;
        sleep(2);
        return (($this->price)*($this->quantity));
   }

    public function __construct(string $name, string $url, int $quantity)
    {
      $this->name=$name;
      $this->price=getprice($url);
      $this->quantity=$quantity;
    }
}
   $sum=0;
  $rmr2020l=new Kisten("RMR 2020 Legends", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=2020%20RMR%20Legends", 220);
  $sum += $rmr2020l->print();

  $rmr2020ch=new Kisten("RMR 2020 Challengers", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=2020%20RMR%20Challengers", 220);
  $sum += $rmr2020ch->print();

  $rmr2020co=new Kisten("RMR 2020 Contenders", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=2020%20RMR%20Contenders", 81);
  $sum += $rmr2020co->print();

  echo "Sum of RMR Capsules: ".$sum.PHP_EOL.PHP_EOL;

  $cases=0.00;


  //Syntax of Classes: Name of case, API call link to case, quantity
  $horizon=new Kisten("Horizon Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Horizon%20Case", 742);
  $cases += $horizon->print();

  $prisma=new Kisten("Prisma Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Horizon%20Case", 518);
  $cases += $prisma->print();

  $spec2=new Kisten("Specture 2 Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Spectrum%202%20Case",436);
  $cases += $spec2->print();

  $chroma2=new Kisten("Chroma 2 Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Chroma%202%20Case", 368);
  $cases += $chroma2->print();

  $dz=new Kisten("Danger Zone Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Danger%20Zone%20Case", 273);
  $cases += $dz->print();

  $prisma2=new Kisten("Prisma 2 Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Prisma%202%20Case", 241);
  $cases += $prisma2->print();

  $chroma3=new Kisten("Chroma 3 Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Chroma%203%20Case", 217);
  $cases += $chroma3->print();

  $clutch=new Kisten("Clutch Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Clutch%20Case", 218);
  $cases += $clutch->print();

  $gamma2=new Kisten("Gamma 2 Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Gamma%202%20Case", 154);
  $cases += $gamma2->print();

  $brokenfang = new Kisten("Broken Fang Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Operation%20Broken%20Fang%20Case", 49);
  $cases += $brokenfang -> print();

  $fracture = new Kisten("Fracture Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Fracture%20Case", 15);
  $cases += $fracture -> print();

  $phoenix = new Kisten("Operation Phoenix Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Operation%20Phoenix%20Weapon%20Case", 6);
  $cases += $phoenix -> print();

  $cs20=new Kisten("CS20 Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=CS20%20Case", 4);
  $cases += $cs20 -> print();

  $breakout=new Kisten("Operation Breakout Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Operation%20Breakout%20Weapon%20Case", 3);
  $cases += $breakout -> print();

  $revolvo=new Kisten("Revolver Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Revolver%20Case", 3);
  $cases += $revolvo -> print();

  $shadow= new Kisten("Shadow Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Shadow%20Case", 3);
  $cases += $shadow -> print();

  $wildfire=new Kisten("Operation Wildfire Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Operation%20Wildfire%20Case", 3);
  $cases += $wildfire -> print();

  $gloves=new Kisten("Glove Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Glove%20Case", 3);
  $cases += $gloves->print();

  $snakebite=new Kisten("Snakebite Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Snakebite%20Case", 5);
  $cases += $snakebite->print();

  $chroma1=new Kisten ("Chroma 1 Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Chroma%20Case", 2);
  $cases += $chroma1->print();

  $falchion=new Kisten("Falchion Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Falchion%20Case", 1);
  $cases += $falchion->print();

  $sw=new Kisten("Shattered Web Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Shattered%20Web%20Case", 1);
  $cases += $sw->print();

  $wc3=new Kisten("Weapon Case 3", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=CS%3AGO%20Weapon%20Case%203",1);
  $cases += $wc3->print();

  $wc2=new Kisten("Weapon Case 2", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=CS%3AGO%20Weapon%20Case%202",1);
  $cases += $wc2->print();

//  $wc1=new Kisten("Weapon Case 1", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=CS%3AGO%20Weapon%20Case",1);
//  $cases += $wc2->print();

//  $dnn=new Kisten("Dreams & Nightmares Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Dreams%20%26%20Nightmares%20Case", 0);
//  $cases += $dnn->print();

//  $riptide=new Kisten("Operation Riptide Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Operation%20Riptide%20Case", 0);
//  $cases += $riptide->print();

//    $hydra=new Kisten("Operation Hydra Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Operation%20Hydra%20Case",1);
//    $cases += $hydra->print();

//    $spec1=new Kisten("Spectrum Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Spectrum%20Case",0);
//    $cases += $spec1->print();

//    $gamma1=new Kisten("Gamma Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Gamma%20Case", 0);
//    $cases += $gamma1->print();

//    $vanguard=new Kisten("Operation Vanguard Weapon Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Operation%20Vanguard%20Weapon%20Case", 0);
//    $cases += $vanguard->print();

//  $esports2014=new Kisten("eSports 2014 Summer Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=eSports%202014%20Summer%20Case", 0);
//  $cases += $esports2014->print();

//  $esports2013=new Kisten("eSports 2013 Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=eSports%202013%20Case", 0);
//  $cases += $esports2013->print();

//  $esports2013winter=new Kisten("eSports 2013 Winter Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=eSports%202013%20Winter%20Case", 0);
//  $cases += $esports2013winter->print();

//  $bravo=new Kisten("Operation Bravo Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Operation%20Bravo%20Case", 0);
//  $cases += $bravo->print();

//  $huntsman=new Kisten("Huntsman Weapon Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Huntsman%20Weapon%20Case", 0);
//  $cases += $huntsman->print();

//  $winteroffensive=new Kisten("Winter Offensive Weapon Case", "https://steamcommunity.com/market/priceoverview/?appid=730&currency=3&market_hash_name=Winter%20Offensive%20Weapon%20Case", 0);
//  $cases += $winteroffensive->print();

  $sum += $cases;

  echo "Sum of Case Investments: ".$cases.PHP_EOL;
  echo "Sum with RMR Investments: ".$sum.PHP_EOL;



?>
