<?
require_once("dompdf_config.inc.php");

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, "http://localhost/NTG2/precios.php"); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
$html = curl_exec($ch); 
curl_close($ch);  
 
$dompdf = new DOMPDF();
$dompdf->set_paper('a4', 'portrait'); // 11.05
$dompdf->load_html($html);
$dompdf->render();

$dompdf->stream("cdnr.pdf");

//$aGuardar = "/home/dominio/domains/dominio.com.ar/public_html/documentacion-datos/".$_GET['p']."/ClausulaDeNoRep.pdf";
//file_put_contents($aGuardar, $dompdf->output());

?>
