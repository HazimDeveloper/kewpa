
<?php
	//include connection file 
	include_once("db.php");
	 
	// initilize all variable
	$params = $columns = $totalRecords = $data = array();

	$params = $_REQUEST;

	//define index of column
	$columns = array( 
		0 =>'id',
		1 =>'blok', 
		2 => 'aras',
		3 => 'lokasi',
		4 => 'kod_ruang',
		5 => 'cap',
		5 => 'tahun',
		6 => 'jenis',
		7 => 'cod_jenis',
		8=> 'no_index',
		9=> 'id_unit'
	);

	$where = $sqlTot = $sqlRec = "";

	// getting total number records without any search
	$sql = "SELECT * FROM `inventori` ";
	$sqlTot .= $sql;
	$sqlRec .= $sql;


 	$sqlRec .=  " ORDER BY id";

	$queryTot = mysqli_query($link, $sqlTot) or die("database error:". mysqli_error($link));


	$totalRecords = mysqli_num_rows($queryTot);

	$queryRecords = mysqli_query($link, $sqlRec) or die("error to fetch inventori data");

	//iterate on results row and create new index array of data
	while( $row = mysqli_fetch_row($queryRecords) ) { 
		$data[] = $row;
	}	

	$json_data = array(
			"draw"            => 1,   
			"recordsTotal"    => intval( $totalRecords ),  
			"recordsFiltered" => intval($totalRecords),
			"data"            => $data   // total data array
			);

	echo json_encode($json_data);  // send data as json format
?>
	