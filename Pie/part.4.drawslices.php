<?

$temp['Add_angle'] = $conf_start_angle;
for($a=0;$a<$var['Data_ranges'];$a++) {
imagefilledarc($img,$var['Slice_centreX'][$a],$var['Slice_centreY'][$a],$var['Pie_slice_length'],$var['Pie_slice_length'],$var['Slice_start'][$a],$var['Slice_end'][$a],$datac_scol[$a],IMG_ARC_PIE);
$temp['Slice_startX'] = $var['Slice_centreX'][$a]+(($var['Pie_slice_length']/2)*cos(deg2rad($temp['Add_angle'])));
$temp['Slice_startY'] = $var['Slice_centreY'][$a]+(($var['Pie_slice_length']/2)*sin(deg2rad($temp['Add_angle'])));
$temp['Add_angle'] += $var['Angle'][$a];
$temp['Slice_endX'] = $var['Slice_centreX'][$a]+(($var['Pie_slice_length']/2)*cos(deg2rad($temp['Add_angle'])));
$temp['Slice_endY'] = $var['Slice_centreY'][$a]+(($var['Pie_slice_length']/2)*sin(deg2rad($temp['Add_angle'])));
imageline($img,$var['Slice_centreX'][$a],$var['Slice_centreY'][$a],$temp['Slice_startX'],$temp['Slice_startY'],$confc_line);
imageline($img,$var['Slice_centreX'][$a],$var['Slice_centreY'][$a],$temp['Slice_endX'],$temp['Slice_endY'],$confc_line);
imagearc($img,$var['Slice_centreX'][$a],$var['Slice_centreY'][$a],$var['Pie_slice_length'],$var['Pie_slice_length'],$var['Slice_start'][$a],$var['Slice_end'][$a],$confc_line);


}



?>