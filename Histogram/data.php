<?
$a=0;
while(isset($_GET['Lowx'.$a])) {
$data_lowx[$a] = $_GET['Lowx'.$a];
$data_higx[$a] = $_GET['Higx'.$a];
$data_valu[$a] = $_GET['Valu'.$a];
$data_ocol[$a] = array($_GET['Ocol'.$a.'R'],$_GET['Ocol'.$a.'G'],$_GET['Ocol'.$a.'B']);
$data_bcol[$a] = array($_GET['Bcol'.$a.'R'],$_GET['Bcol'.$a.'G'],$_GET['Bcol'.$a.'B']);

$a++;
}



//$data_lowx[0] = 0;
//$data_higx[0] = 16;
//$data_valu[0] = 9;
//$data_ocol[0] = array(000,000,000);
//$data_bcol[0] = array(255,000,000);

//$data_lowx[1] = 16;
//$data_higx[1] = 25;
//$data_valu[1] = 37;
//$data_ocol[1] = array(000,000,000);
//$data_bcol[1] = array(000,255,000);

//$data_lowx[2] = 25;
//$data_higx[2] = 40;
//$data_valu[2] = 5;
//$data_ocol[2] = array(000,000,000);
//$data_bcol[2] = array(000,000,255);

//$data_lowx[3] = 40;
//$data_higx[3] = 65;
//$data_valu[3] = 1;
//$data_ocol[3] = array(000,000,000);
//$data_bcol[3] = array(255,000,255);


?>