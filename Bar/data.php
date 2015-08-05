<?

$a=0;
while(isset($_GET['Name'.$a])) {
$data_name[$a] = $_GET['Name'.$a];
$data_valu[$a] = $_GET['Valu'.$a];
$data_ocol[$a] = array($_GET['Ocol'.$a.'R'],$_GET['Ocol'.$a.'G'],$_GET['Ocol'.$a.'B']);
$data_bcol[$a] = array($_GET['Bcol'.$a.'R'],$_GET['Bcol'.$a.'G'],$_GET['Bcol'.$a.'B']);

$a++;
}



//$data_name[0] = 'Examplestan';
//$data_valu[0] = '100';
//$data_ocol[0] = array(000,000,000);
//$data_bcol[0] = array(255,000,000);

//$data_name[1] = 'Bobland';
//$data_valu[1] = '58';
//$data_ocol[1] = array(000,000,000);
//$data_bcol[1] = array(000,255,000);

//$data_name[2] = 'Daveia';
//$data_valu[2] = '12';
//$data_ocol[2] = array(000,000,000);
//$data_bcol[2] = array(000,000,255);

//$data_name[3] = 'Fredstadt';
//$data_valu[3] = '129.4';
//$data_ocol[3] = array(255,255,255);
//$data_bcol[3] = array(000,000,000);



?>