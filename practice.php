<?php
echo 'hello php!' .PHP_EOL;
$a=3 ;
$b=7 ;
echo $a+$b .PHP_EOL;
$array_month = array("1月","2月","3月","4月","5月"."6月","7月","8月","9月","10月","11月","12月");
echo $array_month[6] .PHP_EOL;
$hello = "Hello" ;
$name = "タケル";
$world = "'s World!";
echo $hello,$name,$world >PHP_EOL;
$tech_boost="tech";
$tech_boost .=" boost";
echo $tech_boost .PHP_EOL;
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
echo $calender_2018["December"] .PHP_EOL;
//php・laravel 03課題はここからです
$name="根守武尊";
if ($name=="根守武尊"){
  echo "私は根守武尊です" .PHP_EOL;
}else{
  echo "あなたの名前ではありません" .PHP_EOL;
}
$total=0;
echo $total .PHP_EOL;
for($i=1;$i<=10000;$i++){
  $total +=$i;
}
echo $total .PHP_EOL;
$fruits=array("りんご","バナナ","オレンジ","いちご","もも");
foreach($fruits as $fruit){
  echo "要素は". $fruit .PHP_EOL;
}
$start=1;
$end = 100;
for($i=$start; $i<=$end; $i++){
  if($i % 5 == 0){
    echo $i .PHP_EOL;
  }
}
//php・laravel　04課題はここからです。
function mul($number){
  $result=$number*2;
  return $result;
}
echo mul(4) .PHP_EOL;

function f($a,$b){
    $result_1=$a+$b;
    return $result_1;
  }
echo f(3,4) .PHP_EOL;

$arr=array(1,3,5,7,9,);
function mul_2($arr){
  $total=$arr[0]*$arr[1]*$arr[2]*$arr[3]*$arr[4];
  return $total;
}
echo mul_2($arr) .PHP_EOL;  

function max_array($arr){
  $max_number=$arr[0];
  foreach($arr as $a){
    if($max_number<$a){
      $max_number=$a;
    }
  }
  return $max_number;
}
echo max_array($arr) .PHP_EOL;
