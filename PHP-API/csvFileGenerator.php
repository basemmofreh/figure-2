<?php
header('Content-Type: application/excel');
header('Content-Disposition: attachment; filename="sample.csv"');
$data = array(
        '1,Alcatel phone,6559',
        '2,Amazon alexa speaker,7894',
        '3,Access point 802n.662',
		'4,Noise cancellation microphone,4555'
);

$fp = fopen('php://output', 'w');
foreach ( $data as $line ) {
    $val = explode(",", $line);
    fputcsv($fp, $val);
}
fclose($fp);
?>