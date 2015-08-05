<?

$var['Total_value'] = array_sum($data_valu);
for($a=0;$a<$var['Data_ranges'];$a++) {
$var['Angle'][$a]=($data_valu[$a]/$var['Total_value'])*360;
if($var['Angle'][$a]==0) {
//$var['Angle'][$a]=0.1;
}
}


?>