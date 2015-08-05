<?
if(!isset($_GET['T'])) { header('Content-type: image/png'); }
include('config.php');
$dataset = $_GET['D'];
include('data'.$dataset.'.php');

//Parts here
include('part.1.makeimg.php');
include('part.2.calcangles.php');
include('part.3.calcslices.php');
include('part.4.drawslices.php');
include('part.5.drawkey.php');

if(isset($_GET['T'])) {
echo('<pre>');
print_r($var);
print_r($temp);
echo('</pre>');
}


if(!isset($_GET['T'])) { imagepng($img); }
imagedestroy($img);
?>