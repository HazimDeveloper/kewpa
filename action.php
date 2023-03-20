<!DOCTYPE html>
<html>
<head>
<title>UITM TERENGGANU</title>
<meta charset="UTF-8">

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

</head>

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
        <li><a href="export.php">KEWPA.14</a></li>
      </ul>
    </li>
    <li><a href="logout.php">LOGOUT</a></li>
  </ul>
</nav>

<br><br>
<br><br>

<body style="margin: 10% 5%;">


  <div>

                    <a class="font-bold float-left" href="add.php">Add
                        New</a>


                </div>
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
        include('db.php');
        $query=mysqli_query($link,"select * from `kewpa`");
        while($crow=mysqli_fetch_array($query)){
          ?>
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
            <td><?php echo $crow['qty'] * $crow['kadarharga'];  ?></td>
            <td><a class="mr-20" href="edit.php?id=<?php echo $crow["id"]; ?>">Edit</a><br>
            <a href="delete.php?action=delete&id=<?php echo $crow["id"]; ?>">Delete</a></td>
          </tr>
          <?php
        }
      ?>

    <tbody>

    </tbody>
  </table>
  </div>

  
</div>
<script type="text/javascript">
$( document ).ready(function() {
$('#tab').DataTable({
         "processing": true,
         
        });
});
</script>


</body>



</html>