<?

$img = imagecreate($conf_width,$conf_height);

$confc_back = imagecolorallocate($img,$confca_back[0],$confca_back[1],$confca_back[2]);
$confc_axis = imagecolorallocate($img,$confca_axis[0],$confca_axis[1],$confca_axis[2]);
$confc_grid = imagecolorallocate($img,$confca_grid[0],$confca_grid[1],$confca_grid[2]);
$confc_text = imagecolorallocate($img,$confca_text[0],$confca_text[1],$confca_text[2]);

$var['Data_ranges'] = count($data_lowx);
for($a=0;$a<$var['Data_ranges'];$a++) {
$datac_ocol[$a] = imagecolorallocate($img,$data_ocol[$a][0],$data_ocol[$a][1],$data_ocol[$a][2]);
$datac_bcol[$a] = imagecolorallocate($img,$data_bcol[$a][0],$data_bcol[$a][1],$data_bcol[$a][2]);
}

imagefill($img,0,0,$confc_back);


?>
