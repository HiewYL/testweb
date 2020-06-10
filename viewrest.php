<?php
// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "apustudent", "pwd" => "apu@tp048155", "Database" => "WebApplicationDb", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:webapplicationtp048155.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);

if(!$conn)
  {
    die("Error connection: ".sqlsrv_errors());
  }
  echo "Connection to Db: Success!";
?>
