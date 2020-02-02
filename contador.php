<?php

require_once('pluginsphp/functions.php');

$consecutivo = getFormatoConteo(true);
$result['consecutivo'] = $consecutivo;

echo json_encode($result);
