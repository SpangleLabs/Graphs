<?

$var['Avail_pie_width'] = $conf_width-(($conf_pad+$conf_pie_pad)*2)-$conf_key_width;
$var['Avail_pie_height'] = $conf_height-(($conf_pad+$conf_pie_pad)*2);
if($var['Avail_pie_width']<=$var['Avail_pie_height']) {
$var['Pie_width'] = $var['Avail_pie_width'];
} else {
$var['Pie_width'] = $var['Avail_pie_height'];
}

$var['Pie_centreX'] = ($var['Avail_pie_width']/2)+$conf_pad+$conf_pie_pad;
$var['Pie_centreY'] = ($var['Avail_pie_height']/2)+$conf_pad+$conf_pie_pad;

$var['Pie_slice_length'] = $var['Pie_width']-($conf_exp_dist*2);
$temp['Add_angle'] = $conf_start_angle;
for($a=0;$a<$var['Data_ranges'];$a++) {
$var['Slice_centre'][$a] = $temp['Add_angle']+($var['Angle'][$a]/2);
$var['Slice_centreX'][$a] = $var['Pie_centreX']+($conf_exp_dist*cos(deg2rad($var['Slice_centre'][$a])));
$var['Slice_centreY'][$a] = $var['Pie_centreY']+($conf_exp_dist*sin(deg2rad($var['Slice_centre'][$a])));
$var['Slice_start'][$a] = $temp['Add_angle']-0.1;
$var['Slice_end'][$a] = $temp['Add_angle']+$var['Angle'][$a];
$temp['Add_angle'] += $var['Angle'][$a];
}



?>