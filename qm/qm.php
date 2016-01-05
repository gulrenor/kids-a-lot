<?php
//prepare variables
//$qm = htmlspecialchars($_POST['qm']);
$qm = ($_POST['qm']);
$active = $_POST['active'];

$messageFile = 'qm.json';

$qmData = json_encode(array('qm' => $qm, 'active' => $active));
$qmDataWrite = print_r($qmData, true);

//Open file for reading/writing, and perform write
$writeHandle = fopen($messageFile, 'w');
if ($writeHandle) {
	fwrite($writeHandle, $qmDataWrite);
	fclose($writeHandle);
};

echo $qmData;
//return
?>
