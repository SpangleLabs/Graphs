<?

for($a=0;$a<$var['Data_ranges'];$a++) {

imagefilledrectangle($img,$var['Data_X1'][$a],$var['Data_Y1'][$a],$var['Data_X2'][$a],$var['Data_Y2'][$a]-1,$datac_bcol[$a]);

for($b=0;$b<$conf_bar_olwidth;$b++) {
imageline($img,$var['Data_X1'][$a],$var['Data_Y1'][$a],$var['Data_X2'][$a],$var['Data_Y1'][$a],$datac_ocol[$a]);
imageline($img,$var['Data_X1'][$a],$var['Data_Y1'][$a],$var['Data_X1'][$a],$var['Data_Y2'][$a]-1,$datac_ocol[$a]);
imageline($img,$var['Data_X2'][$a],$var['Data_Y1'][$a],$var['Data_X2'][$a],$var['Data_Y2'][$a]-1,$datac_ocol[$a]);

if($var['Data_X1'][$a]<$var['Data_X2'][$a]) { $var['Data_X1'][$a]++; }
if($var['Data_X2'][$a]>$var['Data_X1'][$a]) { $var['Data_X2'][$a]--; }
if($var['Data_Y1'][$a]<($var['Data_Y2'][$a]-1)) { $var['Data_Y1'][$a]++; }
}

}

?>