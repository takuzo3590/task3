//課題1
<?php
function sum($max){
    $result=0;
    for($i=1;$i<=$max;$i++){
        $result=2*$i;
    }
    return $result;
}
echo sum(50);
?>

//課題2
<?php
function f($a,$b){
    $sum=$a+$b;
    return $sum;
}
echo f(10,10);
?>

//課題3
<?php
$arr=array(1,3,5,7,9);
echo $total=array_product($arr);
?>

//課題4
<?php
$number=array(1,5,2,8,14,29);
 function max_array($arr){
// とりあえず配列の最初の要素を一番大きい値とする
 $max_number = $arr[0];
 foreach($arr as $a){
     if($max_number<$a){
         $max_number=$a;
 }
 }
  return $max_number;
 }
  echo max_array($number);
 ?>
 
 //課題５
 //strip_tagsの使い方
 <?php
 $box="<h1>My Name Is ...</h1>".'<p>How are you?</p>';
 //<h1>や<p>タグを取り除く
 echo strip_tags($box);
 ?>
 
 //array_pushの使い方
 <?php
 $class=array("a","b","c");
 //要素を追加
 $many_class=array_push($class,"d","e","f");
 //追加した要素を改行して出力
 echo $many_class ."\n";
 print_r ($class);
 ?>
 
 //array_mergeの使い方
 <?php
 $person1=array("taku","saki","fuya");
 $person2=array("chiaki","kei","honoka");
 $person3=array('tsutomu',"ryu");
 //配列を結合
 $ishihara=array_merge($person1,$person2,$person3);
 print_r($ishihara);
 ?>
 
 //time,mktime,dateの使い方
 <?php
 $time1=time();
 $time2=time()+(1*24*60*60);
 //time1と$time2を比較して大きい方を表示
 if($time1<$time2){
     echo '$time2の方が大きい';
 }
 ?>
 
 <?php
 //mktimeとdateを使って指定した日時の曜日を出力する
 $day=mktime(0,0,0,3,10,1988);
 $date=date("w",$day);
 $week=[
     "月",
     "火",
     "水",
     "木",
     "金", 
     "土",
     "日"
 ];
echo $week[$date] .'曜日';
 ?>