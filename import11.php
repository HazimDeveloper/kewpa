<!DOCTYPE html>
<html>
<head>
<title>UITM TERENGGANU</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link href="page1/bootstrap.min.css" rel="stylesheet">
<link href="pages1/bootstrap.min.css" rel="stylesheet">
<link href="pages1/dataTables.bootstrap.css" rel="stylesheet">
<link href="pages1/dataTables.responsive.css" rel="stylesheet">

<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/>
 
<script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script>

<style>
h1 {text-align: center;}

</style>
</head>

<body style="margin: 10% 5%;">

<h1>UiTM</h1>

<link rel="stylesheet" href="stylee45.css">
<link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

<nav role="navigation" class="primary-navigation">
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="#">IMPORT &dtrif;</a>
      <ul class="dropdown">
        <li><a href="#">C7-INVENTORI</a></li>
        <li><a href="import11.php">KEWPA.14</a></li>
      </ul>
    </li>
    <li><a href="#">ACTION &dtrif;</a>
      <ul class="dropdown">
        <li><a href="#">C7-INVENTORI</a></li>
        <li><a href="action.php">KEWPA.14</a></li>
      </ul>
    </li>
    <li><a href="#">EXPORT &dtrif;</a>
      <ul class="dropdown">
        <li><a href="#">C7-INVENTORI</a></li>
        <li><a href="action.php">KEWPA.14</a></li>
      </ul>
    </li>
    <li><a href="logout.php">LOGOUT</a></li>
  </ul>
</nav>



<br><br>
<br>

<?php
// Load the database configuration file
include_once 'db.php';

// Get status message
if(!empty($_GET['status'])){
    switch($_GET['status']){
        case 'succ':
            $statusType = 'alert-success';
            $statusMsg = 'Data has been imported successfully.';
            break;
        case 'err':
            $statusType = 'alert-danger';
            $statusMsg = 'Some problem occurred, please try again.';
            break;
        case 'invalid_file':
            $statusType = 'alert-danger';
            $statusMsg = 'Please upload a valid CSV file.';
            break;
        default:
            $statusType = '';
            $statusMsg = '';
    }
}
?>

<!-- Display status message -->
<?php if(!empty($statusMsg)){ ?>
<div class="col-xs-12">
    <div class="alert <?php echo $statusType; ?>"><?php echo $statusMsg; ?></div>
</div>
<?php } ?>

<body>

<div class="row">
    <!-- Import link -->
    <div class="col-md-10 head">
        <div class="float-right">
            <a href="javascript:void(0);" class="btn btn-success" onclick="formToggle('importFrm');"><i class="plus"></i> Import</a>
        </div>
    </div>
    <!-- CSV file upload form -->
    <div class="col-md-10" id="importFrm" style="display: none;">
        <form action="importData.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file" />
            <input type="submit" class="btn btn-primary" name="importSubmit" value="IMPORT">
        </form>
    </div>

    <!-- Data list table --> 
   <table>
  <div class="mytable">
  <table class="cell-border" style="border: 1px solid;" id="tab">
    <thead>
            <tr>
                <th>BIL</th>
                <th>NO. DO</th>
                <th>TARIKH DO</th>
                <th>NO. ID UNIT</th>
                <th>TARIKH KERJA</th>
                <th>BUTIR KERJA</th>
                <th>NO KONTRAK/PESANAN JABATAN</th>
                <th>SYARIKAT</th>
                <th>NO BQ/JKH</th>
                <th>QUANTITY</th>
                <th>UNIT</th>
                <th>KADAR (RM)</th>
                <th>JUMLAH (RM)</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
        <?php
        // Get member rows

        $result = $link->query("SELECT * FROM kewpa ORDER BY id ASC");
        if($result->num_rows > 0){
            while($crow = $result->fetch_assoc()){
        ?>
            <tr>
            <td><?php echo $crow['id']; ?></td>
            <td><?php echo $crow['no_id']; ?></td>
            <td><?php echo $crow['tarikh_do']; ?></td>
            <td><?php echo $crow['id_unit']; ?></td>
            <td><?php echo $crow['tarikh_kerja']; ?></td>
            <td><?php echo $crow['butir_kerja']; ?></td>
            
            <td><?php echo $crow['no_kontrak']; ?></td>
            <td><?php echo $crow['syarikat']; ?></td>
            <td><?php echo $crow['bq']; ?></td>
            <td><?php echo $crow['qty']; ?></td>
            <td><?php echo $crow['unit']; ?></td>
            <td><?php echo $crow['kadarharga']; ?></td>
            <td><?php echo $crow['qty'] * $crow['kadarharga'] ?></td>
            <td><a class="mr-20" href="edit.php?id=<?php echo $crow["id"]; ?>">Edit</a><br>
            <a href="delete.php?action=delete&id=<?php echo $crow["id"]; ?>">Delete</a></td>
            </tr>
        <?php } } else { ?>
            <tr><td colspan="11">No member(s) found...</td></tr>
        <?php } ?>
        </tbody>
    </table>
</div>

<!-- Show/hide CSV upload form -->
<script>
function formToggle(ID){
    var element = document.getElementById(ID);
    if(element.style.display === "none"){
        element.style.display = "block";
    }else{
        element.style.display = "none";
    }
}
</script>

<script type="text/javascript">
// $( document ).ready(function() {
// $('#tab').DataTable({
//          "processing": true,
         
//         });
// });
$(document).ready(function () {
    $('#tab').DataTable();
});
</script>


</body>



</html>