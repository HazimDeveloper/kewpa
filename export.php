<!DOCTYPE html>
<html>
  <head>
    <title>UITM TERENGGANU</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.6.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous"> -->

    <link href="https://cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css" rel="stylesheet">
    <!-- <link href="pages1/bootstrap.min.css" rel="stylesheet"> -->
    <!-- <link href="pages1/dataTables.bootstrap.css" rel="stylesheet"> -->
    <!-- <link href="pages1/dataTables.responsive.css" rel="stylesheet"> -->

    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.css"/> -->
    <!-- use the latest version -->
    <!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"/> -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script> -->
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css"/> -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script> -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script> -->
<!-- <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script> -->

<!-- <script lang="javascript" src="https://cdn.sheetjs.com/xlsx-latest/package/dist/xlsx.full.min.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdn.datatables.net/r/dt/jq-2.1.4,jszip-2.5.0,pdfmake-0.1.18,dt-1.10.9,af-2.0.0,b-1.0.3,b-colvis-1.0.3,b-html5-1.0.3,b-print-1.0.3,se-1.0.1/datatables.min.js"></script> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css"> -->
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
<!-- <script src="export.js"></script> -->
<!-- <script type="text/javascript" src="tableExport/jquery.base64.js"></script> -->
<!-- <script src="js/export.js"></script> -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.22/css/jquery.dataTables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.6.4/css/buttons.dataTables.min.css"/>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/dataTables.buttons.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.flash.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/buttons/1.6.4/js/buttons.html5.min.js"></script> -->

  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  
  <link rel="stylesheet" href="stylee45.css">
  <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">
</head>
    <style>
      h1 {text-align: center;}
    </style>
<body>
  
  <h1>UiTM</h1>


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
<div class="btn-group pull-right" id="btn btn-dark">

</div>
  <br><br>
  <br><br>

    <div class="mytable">
      
    <input type="button" value="PDF" onclick="Export()" >
      <table class="" id="tab" style="border: 1px black solid;">
      <div id="export-btn" class="btn btn-dark" ></div>
        <thead>
              <tr>
                  <th>Bil</th>
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
              while($crow=mysqli_fetch_array($query)) {
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
                  <td>
                    <a class="mr-20" href="edit.php?id=<?php echo $crow["id"]; ?>">Edit</a><br>
                    <a href="delete.php?action=delete&id=<?php echo $crow["id"]; ?>">Delete</a>
                  </td>
                </tr>
            <?php
              }
            ?>
      </table>
    </div>
<!-- jQuery --><script src="https://code.jquery.com/jquery-3.6.3.min.js" integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.1.22/pdfmake.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>

<script type="text/javascript">
        function Export() {
            html2canvas(document.getElementById('tab'), {
                onrendered: function (canvas) {
                    var data = canvas.toDataURL();
                    var docDefinition = {
                        content: [{
                            image: data,
                            width: 500
                        }]
                    };
                    pdfMake.createPdf(docDefinition).download("Table.pdf");
                }
            });
        }
    </script>
<script type="text/javascript">
  
  $(document).ready(function() {
  
    $("#tab").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel","print", "colvis"]
    }).buttons().container().appendTo('#export-btn');
  })

</script>

</body>



</html>