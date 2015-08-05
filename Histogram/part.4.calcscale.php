<?

//Find the highest points
for($a=0;$a<$var['Data_ranges'];$a++) {
$var['Bar_height'][$a] = $data_valu[$a]/($data_higx[$a]-$data_lowx[$a]);
}

$var['Highest_Ypoint'] = max($var['Bar_height']);
$var['Highest_Xpoint'] = max($data_higx);

for($a=1;$a<11;$a++) {
if($var['Highest_Ypoint']<=$a.str_repeat('0',strlen(floor($var['Highest_Ypoint']))-1)) {
$var['Vert_Ymax'] = $a.str_repeat('0',strlen(floor($var['Highest_Ypoint']))-1);
$a=20;
}}
for($a=1;$a<11;$a++) {
if($var['Highest_Xpoint']<=$a.str_repeat('0',strlen(floor($var['Highest_Xpoint']))-1)) {
$var['Hor_Xmax'] = $a.str_repeat('0',strlen(floor($var['Highest_Xpoint']))-1);
$a=20;
}}



//Find the X and Y coordinates for each data point.
for($a=0;$a<$var['Data_ranges'];$a++) {
$var['Data_X1'][$a] = $conf_padd+$conf_axis_dist+$conf_padd+($data_lowx[$a]/$var['Hor_Xmax']*($var['Graph_width']-$var['Vline_width']));
$var['Data_X2'][$a] = $conf_padd+$conf_axis_dist+$conf_padd+($data_higx[$a]/$var['Hor_Xmax']*($var['Graph_width']-$var['Vline_width']));
$var['Data_Y1'][$a] = ($conf_height-($var['Bar_height'][$a]/$var['Vert_Ymax'])*($var['Graph_height']-$var['Hline_height']))-$conf_padd-$conf_axis_dist;
$var['Data_Y2'][$a] = $conf_height-$conf_padd-$conf_axis_dist;
}


?>