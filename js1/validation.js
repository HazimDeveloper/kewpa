function validate() {
	var valid = true;
	$(".info").html('');

	if (!$("#blok").val()) {
		$("#blok-info").html("required.");
		valid = false;
	}
	if (!$("#aras").val()) {
		$("#aras-info").html("required.");
		valid = false;
	}
	if (!$("#lokasi").val()) {
		$("#lokasi-info").html("required.");
		valid = false;
	}
	if (!$("#kod_ruang").val()) {
		$("#kod_ruang-info").html("required.");
		valid = false;
	}
	if (!$("#cap").val()) {
		$("#cap-info").html("required.");
		valid = false;
	}
	if (!$("#tahun").val()) {
		$("#tahun-info").html("required.");
		valid = false;
	}
	if (!$("#jenis").val()) {
		$("#jenis-info").html("required.");
		valid = false;
	}
	if (!$("#cod_jeis").val()) {
		$("#cod_jenis-info").html("required.");
		valid = false;
	}
	if (!$("#no_index").val()) {
		$("#no_index-info").html("required.");
		valid = false;
	}
	if (!$("#id_unit").val()) {
		$("#id_unit-info").html("required.");
		valid = false;
	}
	return valid;
}