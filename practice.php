<?php
echo 'hello php!' ;
$a=3 ;
$b=7 ;
echo $a+$b ;
$array_month = ["1月","2月","3月","4月","5月"."6月","7月","8月","9月","10月","11月","12月"];
echo [7];
$hello = "Hello" ;
$name = "タケル";
$world = "'s World!";
echo $hello,$name,$world;
$tech_boost="tech";
$tech_boost .=" boost" ;
echo $tech_boost ;
$calender_2018 = [
  "January" => "1月",
  "February" => "2月",
  "March" => "3月",
  "April" => "4月",
  "May" => "5月",
  "June" =>"6月",
  "July" => "7月",
  "August" => "8月",
  "September" => "9月",
  "October" => "10月",
  "November" => "11月",
  "December" => "12月"
];
echo $calender_2018["December"] ;
//php・laravel 03課題はここからです
$name="根守武尊";
if ($name=="根守武尊"){
  echo "私は根守武尊です";
}else{
  echo "あなたの名前ではありません";
}
$total=0;
echo $total;
for($i=1;$i<=10000;$i++){
  $total +=$i;
}
echo $total;
$fruits=array("りんご","バナナ","オレンジ","いちご","もも");
foreach($fruits as $fruit){
  echo "要素は". $fruit;
}
$start=1;
$end = 100;
for($i=$start; $i<=$end; $i++){
  if($i % 5 == 0){
    echo $i;
  }
}
