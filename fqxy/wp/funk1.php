<?php


function calc($m,$n,$x){
  $errors=array(
    '被除数不能为零',
    '负数没有平方根'
  );
  switch($x){
    case 'add':
      $t=bcadd($m,$n);
      break;
    case 'sub':
      $t=bcsub($m,$n);
      break;
    case 'mul':
      $t=bcmul($m,$n);
      break;
    case 'div':
      if($n!=0){
        $t=bcdiv($m,$n);
      }else{
        return $errors[0];
      }
      break;
    case 'pow':
      $t=bcpow($m,$n);
      break;
    case 'mod':
      if($n!=0){
        $t=bcmod($m,$n);
      }else{
        return $errors[0];
      }
      break;
    case 'sqrt':
      if($m>=0){
        $t=bcsqrt($m);
      }else{
        return $errors[1];
      }
      break;
  }
$t=preg_replace("/\..*0+$/",'',$t);
  

return $t;
 
}
/*用法举例*/
//echo calc('11111111111111111111111111111111110','10','add');
//方法:
//calc(参数1参数2,参数3);
//参数3指定运算方法:add加,sub减,mul乖,div除,pow幂,mod取模,sqrt求算术平方根


?>




