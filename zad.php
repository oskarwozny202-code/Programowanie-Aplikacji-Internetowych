
<?php
$data = mktime(0, 0, 0, 7, 28, 2008);
$teraz = time();

$sekundy = $teraz - $data;

echo "Żyjesz już " . $sekundy . " sekund.";
?>
