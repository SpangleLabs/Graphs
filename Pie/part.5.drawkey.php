<?

//Draw box around key in axis colour
imagerectangle($img,$conf_width-$conf_pad-1,$conf_pad,$conf_width-$conf_pad-$conf_key_width,$conf_height-$conf_pad-1,$confc_keyb);

//Draw key title
$temp['Keytitle_X'] = ($conf_width-$conf_pad-1)-($conf_key_width/2)-((strlen($conf_keytitle)*imagefontwidth($conf_font_size))/2);
imagestring($img,$conf_font_size,$temp['Keytitle_X'],$conf_pad+$conf_key_pad,$conf_keytitle,$confc_text);

//Draw key entries
$temp['Key_Yspace'] = ($conf_height-$conf_pad-$conf_pad-imagefontheight($conf_font_size))/($var['Data_ranges']+1);
for($a=0;$a<$var['Data_ranges'];$a++) {
$temp['Keyentry_Y'] = ($temp['Key_Yspace']*($a+1))+$conf_pad+imagefontheight($conf_font_size);
$temp['Keyentry_X'] = $conf_width-$conf_pad-$conf_key_width+$conf_key_pad;
imagefilledrectangle($img,$temp['Keyentry_X'],$temp['Keyentry_Y']-($conf_keybox_width/2),$temp['Keyentry_X']+$conf_keybox_width,$temp['Keyentry_Y']+($conf_keybox_width/2),$datac_scol[$a]);
imagerectangle($img,$temp['Keyentry_X'],$temp['Keyentry_Y']-($conf_keybox_width/2),$temp['Keyentry_X']+$conf_keybox_width,$temp['Keyentry_Y']+($conf_keybox_width/2),$confc_keyb);
imagestring($img,$conf_font_size,$temp['Keyentry_X']+$conf_keybox_width+$conf_keyboxtext_padd,$temp['Keyentry_Y']-(imagefontheight($conf_font_size)/2),$data_name[$a],$confc_text);

}

?>