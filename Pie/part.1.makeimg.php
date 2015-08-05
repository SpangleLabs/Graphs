<?

$img = imagecreate($conf_width,$conf_height);

$confc_back = imagecolorallocate($img,$confca_back[0],$confca_back[1],$confca_back[2]);
$confc_line = imagecolorallocate($img,$confca_line[0],$confca_line[1],$confca_line[2]);
$confc_keyb = imagecolorallocate($img,$confca_keyb[0],$confca_keyb[1],$confca_keyb[2]);
$confc_text = imagecolorallocate($img,$confca_text[0],$confca_text[1],$confca_text[2]);

$var['Data_ranges'] = count($data_name);
for($a=0;$a<$var['Data_ranges'];$a++) {
$datac_scol[$a] = imagecolorallocate($img,$data_scol[$a][0],$data_scol[$a][1],$data_scol[$a][2]);
}

imagefill($img,0,0,$confc_back);


?>