<?

//Find the highest point
$var['Data_ranges'] = count($data_valu);
$var['Highest_point'] = max($data_valu);

for($a=1;$a<11;$a++) {
if($var['Highest_point']<=$a.str_repeat('0',strlen(floor($var['Highest_point']))-1)) {
$var['Vert_max'] = $a.str_repeat('0',strlen(floor($var['Highest_point']))-1);
$a=20;
}
}


//Find the X and Y coordinates for each data point.
$var['Bar_width'] = ($conf_width-$conf_padd-$conf_padd-$conf_axis_dist-(($var['Data_ranges']+1)*$conf_bar_gap))/$var['Data_ranges'];
for($a=0;$a<$var['Data_ranges'];$a++) {
$var['Data_X1'][$a] = $conf_padd+$conf_axis_dist+$conf_bar_gap+($a*($var['Bar_width']+$conf_bar_gap));
$var['Data_X2'][$a] = $var['Data_X1'][$a]+$var['Bar_width'];
$var['Data_Y1'][$a] = ($conf_height-($data_valu[$a]/$var['Vert_max'])*($var['Graph_height']-$var['Hline_height']))-$conf_padd-$conf_axis_dist;
$var['Data_Y2'][$a] = $conf_height-$conf_padd-$conf_axis_dist;
}


?>