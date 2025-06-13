<?php 
ob_start();
require_once '../backend/handlers/job-application-handler.php';

$response = ob_get_clean();

// Just output what the handler echoed
echo $response;

?>