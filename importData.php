<?php
// Load the database configuration file
include_once 'db.php';

$prevResult;

if(isset($_POST['importSubmit'])){
    
    // Allowed mime types
    $csvMimes = array('text/x-comma-separated-values', 'text/comma-separated-values', 'application/octet-stream', 'application/vnd.ms-excel', 'application/x-csv', 'text/x-csv', 'text/csv', 'application/csv', 'application/excel', 'application/vnd.msexcel', 'text/plain');
    
    // Validate whether selected file is a CSV file
    if(!empty($_FILES['file']['name']) && in_array($_FILES['file']['type'], $csvMimes)){
        
        // If the file is uploaded
        if(is_uploaded_file($_FILES['file']['tmp_name'])){
            
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($_FILES['file']['tmp_name'], 'r');
            
            // Skip the first line
            fgetcsv($csvFile);
            
            // Parse data from CSV file line by line
            while(($line = fgetcsv($csvFile)) !== FALSE){
                // Get row data
                $id = $line[0];
                $no_id   = $line[1];
                $tarikh_do  = $line[2];
                $id_unit  = $line[3];
                $tarikh_kerja = $line[4];
                $butir_kerja = $line[5];
                $no_kontrak = $line[6];
                $syarikat = $line[7];
                $bq = $line[8];
                $qty = $line[9];
                $unit = $line[10];
                $kadarharga = $line[11];
                $jumlah = $line[12];
                
                // Check whether member already exists in the database with the same email


           
            if($prevResult->num_rows > 0){
                    // Update member data in the database
                    $link->query("UPDATE kewpa SET id = '".$id."', no_id = '".$no_id."', tarikh_do = '".$tarikh_do."', id_unit = '".$id_unit."',tarikh_kerja = '".$tarikh_kerja."',butir_kerja = '".$butir_kerja."',no_kontrak = '".$no_kontrak."',syarikat = '".$syarikat."',bq= '".$bq."',qty = '".$qty."',unit = '".$unit."',kadarharga = '".$kadarharga."',jumlah = '".$jumlah."'" );
                }else{
                    // Insert member data in the database
                    $link->query("INSERT INTO kewpa (id, no_id, tarikh_do, id_unit, tarikh_kerja, butir_kerja, no_kontrak, syarikat, bq, qty, unit, kadarharga, jumlah) VALUES ('".$id."', '".$no_id."', '".$tarikh_do."', '".$id_unit."', '".$tarikh_kerja."', '".$butir_kerja."', '".$no_kontrak."', '".$syarikat."', '".$bq."', '".$qty."', '".$unit."','".$kadarharga."','".$jumlah."')");
                }
            }
            
            // Close opened CSV file
            fclose($csvFile);
            
            $qstring = '?status=succ';
        }else{
            $qstring = '?status=err';
        }
    }else{
        $qstring = '?status=invalid_file';
    }
}

// Redirect to the listing page
header("Location: import11.php".$qstring);