<? 
$host = "site.com.br";
$port = "1552";
$service_name = "SERVICENAME";

$tns = " 
	(DESCRIPTION =
		(ADDRESS_LIST =
			(ADDRESS = 
				(PROTOCOL = TCP)
				(HOST = $host)
				(PORT = $port)
			)
		)
		(CONNECT_DATA =
			(SERVICE_NAME = $service_name)
		)
	)
";
$db_username = "USERNAME";
$db_password = "PASSWORD";

try{
    $conn_prodata = new PDO("oci:dbname=".$tns. ";charset=UTF8",$db_username,$db_password);
}catch(PDOException $e){
    echo ($e->getMessage());
}

?>