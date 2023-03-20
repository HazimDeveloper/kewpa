<?php
require_once __DIR__ . '/lib/DataSource.php';
$database = new DataSource();
include 'db.php';
if (! empty($_POST["submit"])) {
    // $paramType = 'sssdiississ';
    // $paramValue = array(

       $id = $_GET["id"];
        $no_id =$_POST["no_id"];
        $tarikh_do = $_POST["tarikh_do"];
        $id_unit = $_POST["id_unit"];
        $tarikh_kerja = $_POST["tarikh_kerja"];
        $butir_kerja = $_POST["butir_kerja"];
        $no_kontrak =$_POST["no_kontrak"];
        $syarikat = $_POST["syarikat"];
        $bq = $_POST["bq"];
        $qty = $_POST["qty"];
        $unit = $_POST["unit"];
        $kadarharga = $_POST["kadarharga"];
        $jumlah = $qty * $kadarharga;

    $sql ="UPDATE `kewpa` SET `no_id`='$no_id',`tarikh_do`='$tarikh_do',`id_unit`='$id_unit',`tarikh_kerja`='$tarikh_kerja',`butir_kerja`='$butir_kerja',`no_kontrak`='$no_kontrak',`syarikat`='$syarikat',`bq`='$bq',`qty`='$qty',`unit`='$unit',`kadarharga`='$kadarharga',`jumlah`='$jumlah' WHERE id = $id";
    
        $result = mysqli_query($link,$sql);
    // );
    // $result = $database->execute($sql, $paramType, $paramValue);
    if (! $result) {
        $message = "problem in Editing! Please Retry!";
    } else {
        header("Location:action.php");
    }
}
$sql = "SELECT * FROM kewpa WHERE id=?";
$paramType = 'i';
$paramValue = array(
   $_GET['id']
);

$result = $database->select($sql, $paramType, $paramValue);
?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css1/style.css" />
<link rel="stylesheet" type="text/css" href="css1/form.css" />
<script src="https://code.jquery.com/jquery-2.1.1.min.js"
    type="text/javascript"></script>
<script src="./js/validation.js1" type="text/javascript"></script>
</head>
<body>
    <div class="phppot-container tile-container text-center">
        <form name="kewpa" method="post" action="" id="kewpa"
            onClick="return validate();">
       <?php if(! empty($message)){?>
            <div class="error">
                <?php echo $message;?>
                </div><?php }?>
                <h1>Edit Record</h1>
            <div class="row">
                <label class="text-left">No. D.O: <span id="blok-info"
                    class="validation-message"></span></label> <input
                    type="text" name="no_id" id="no_id" class="full-width"
                    value="<?php echo $result[0]["no_id"]; ?>">
            </div>
            <div class="row">
                <label class="text-left">Tarikh D.O: <span id="aras-info"
                    class="validation-message"></span></label> <input
                    type="text" name="tarikh_do" id="tarikh_do" class="full-width"
                    value="<?php echo $result[0]["tarikh_do"]; ?>">
            </div>
            <div class="row">
                <label class="text-left">No. ID Unit: <span
                    id="lokasi-info" class="validation-message"></span></label><input
                    type="text" name="id_unit" id="id_unit"
                    class="full-width"
                    value="<?php echo $result[0]["id_unit"]; ?>">
            </div>
            <div class="row">
                <label class="text-left">Tarikh Kerja: <span id="kod_ruang-info"
                    class="validation-message"></span></label> <input
                    type="text" name="tarikh_kerja" id="tarikh_kerja"
                    class="full-width"
                    value="<?php echo $result[0]["tarikh_kerja"]; ?>">
            </div>
            <div class="row">
                <label class="text-left">Butiran Kerja: <span
                    id="cap-info" class="validation-message"></span></label><input
                    type="text" name="butir_kerja" id="butir_kerja"
                    class="full-width"
                    value="<?php echo $result[0]["butir_kerja"]; ?>">
            </div>
            <div class="row">
                <label class="text-left">No. Kontrak: <span
                    id="cap-info" class="validation-message"></span></label><input
                    type="text" name="no_kontrak" id="no_kontrak"
                    class="full-width"
                    value="<?php echo $result[0]["no_kontrak"]; ?>">
            </div>
            <div class="row">
                <label class="text-left">Syarikat: <span
                    id="tahun-info" class="validation-message"></span></label><input
                    type="text" name="syarikat" id="syarikat"
                    class="full-width"
                    value="<?php echo $result[0]["syarikat"]; ?>">
            </div>
            <div class="row">
                <label class="text-left">No. BQ/JKH: <span
                    id="jenis-info" class="validation-message"></span></label><input
                    type="text" name="bq" id="bq"
                    class="full-width"
                    value="<?php echo $result[0]["bq"]; ?>">
            </div>
            <div class="row">
                <label class="text-left">Quantity: <span
                    id="cod_jenis-info" class="validation-message"></span></label><input
                    type="text" name="qty" id="qty"
                    class="full-width"
                    value="<?php echo $result[0]["qty"]; ?>">
            </div>
            <div class="row">
                <label class="text-left">Unit: <span
                    id="no_index-info" class="validation-message"></span></label><input
                    type="text" name="unit" id="unit"
                    class="full-width"
                    value="<?php echo $result[0]["unit"]; ?>">
            </div>
            <div class="row">
                <label class="text-left">Kadar Harga: <span
                    id="id_unit-info" class="validation-message"></span></label><input
                    type="text" name="kadarharga" id="kadarharga"
                    class="full-width"
                    value="<?php echo $result[0]["kadarharga"]; ?>">
            </div>
            <!-- <div class="row">
                <label class="text-left">Jumlah: <span
                    id="id_unit-info" class="validation-message"></span></label><input
                    type="text" name="jumlah" id="jumlah"
                    class="full-width"
                    value="<?php echo $result[0]["jumlah"]; ?>">
            </div> -->
            <div class="row">
                <input type="submit" name="submit" id="btnAddAction"
                    class="full-width " value="Save" />
            </div>
        </form>
    </div>
</body>
</html>