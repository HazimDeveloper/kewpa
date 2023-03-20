<?php
include 'db.php';
// $database = new DataSource();
if (isset($_POST["submit"])) {
    // $paramType = 'sssdiissis';
    
    $no_id = $_POST["no_id"];
    $tarikh_do = $_POST["tarikh_do"];
        $id_unit = $_POST["id_unit"];
        $tarikh_kerja = $_POST["tarikh_kerja"];
        $butir_kerja = $_POST["butir_kerja"];
        $no_kontrak =$_POST["no_kontrak"];
        $syarikat =$_POST["syarikat"];
        $bq =$_POST["bq"];
        $qty = $_POST["qty"];
        $unit = $_POST["unit"];
        $kadarharga = $_POST["kadarharga"];

        $jumlah = $qty * $kadarharga;
        $sql = "INSERT INTO `kewpa`(`id`, `no_id`, `tarikh_do`, `id_unit`, `tarikh_kerja`, `butir_kerja`, `no_kontrak`, `syarikat`, `bq`, `qty`, `unit`, `kadarharga`, `jumlah`) VALUES ('','$no_id','$tarikh_do','$id_unit','$tarikh_kerja','$butir_kerja','$no_kontrak','$syarikat','$bq','$qty','$unit','$kadarharga','$jumlah')";
        
       $result = mysqli_query($link,$sql);
    // $result = $database->insert($sql, $paramType, $paramValue);
    if (!$result) {
        $message = "problem in Adding to database. Please Retry.";
    } else {
        header("Location:action.php");
    }
}
?>
<html>
<head>

<link href="css1/style.css" type="text/css" rel="stylesheet" />
<link href="css1/form.css" type="text/css" rel="stylesheet" />
<script src="https://code.jquery.com/jquery-2.1.1.min.js"
    type="text/javascript"></script>
<script src="./js/validation.js1" type="text/javascript"></script>
</head>
<body>
    <div class="phppot-container tile-container text-center">
        <form name="inventori" method="post" action="" id="inventori"
            onClick="return validate();">
            <?php if(! empty($message)){?>
            <div class="error">
                <?php echo $message;?>
                </div><?php }?>
            <h1>Add Record</h1>
            <div class="row">
                <label class="text-left">No. DO: <span id="no_id-info"
                    class="validation-message"></span></label><input
                    type="text" name="no_id" id="no_id"
                    class="full-width ">
            </div>
            <div class="row">
                <label class="text-left">Tarikh DO: <span id="tarikh_do-info"
                    class="validation-message"></span></label> <input
                    type="text" name="tarikh_do" id="tarikh_do"
                    class="full-width ">
            </div>
            <div class="row">
                <label class="text-left">No ID Unit: <span
                    id="id_unit-info" class="validation-message"></span></label><input
                    type="text" name="id_unit" id="id_unit"
                    class="full-width ">
            </div>
            <div class="row">
                <label class="text-left">Tarikh Kerja: <span id="tarikh_kerja-info"
                    class="validation-message"></span></label><input
                    type="text" name="tarikh_kerja" id="tarikh_kerja"
                    class="full-width">
            </div>
            <div class="row">
                <label class="text-left">Butir Kerja: <span
                    id="butir_kerja-info" class="validation-message"></span></label><input
                    type="text" name="butir_kerja" id="butir_kerja"
                    class="full-width ">
            </div>
            <div class="row">
                <label class="text-left">No Kontrak: <span
                    id="no_kontrak-info" class="validation-message"></span></label><input
                    type="text" name="no_kontrak" id="no_kontrak"
                    class="full-width ">
            </div>
            <div class="row">
                <label class="text-left">Syarikat: <span
                    id="syarikat-info" class="validation-message"></span></label><input
                    type="text" name="syarikat" id="syarikat"
                    class="full-width ">
            </div>
            <div class="row">
                <label class="text-left">BQ/JKH: <span
                    id="bq_jenis-info" class="validation-message"></span></label><input
                    type="text" name="bq" id="bq"
                    class="full-width ">
            </div>
            <div class="row">
                <label class="text-left">Quantity: <span
                    id="qty_index-info" class="validation-message"></span></label><input
                    type="text" name="qty" id="qty"
                    class="full-width ">
            </div>
            <div class="row">
                <label class="text-left">Unit: <span
                    id="unit-info" class="validation-message"></span></label><input
                    type="text" name="unit" id="unit"
                    class="full-width ">
            </div>
            <div class="row">
                <label class="text-left">Kadar Harga: <span
                    id="kadarharga-info" class="validation-message"></span></label><input
                    type="text" name="kadarharga" id="kadarharga"
                    class="full-width ">
            </div>
            <div class="row">
                <!-- <label class="text-left">Jumlah: <span
                    id="jumlah-info" class="validation-message"></span></label><input
                    type="text" name="jumlah" id="jumlah"
                    class="full-width ">
            </div> -->
            <div class="row">
                <input type="submit" name="submit" id="btnAddAction"
                    class="full-width " value="Add" />
            </div>
        </form>
    </div>
</body>
</html>