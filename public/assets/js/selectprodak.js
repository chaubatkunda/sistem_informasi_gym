$(document).ready(function () {
	$(".paket-chek").on("click", function () {
		const chkds = $("input[name='chek-paket']:checkbox");
		if (chkds.is(":checked")) {
			$(".form-paket").show();
		} else {
			$(".form-paket").hide();
		}
	});
	$(".fasil-chek").on("click", function () {
		const chkds = $("input[name='chek-fasil']:checkbox");
		if (chkds.is(":checked")) {
			$(".form-fasil").show();
		} else {
			$(".form-fasil").hide();
		}
	});

	$(".chek-transfer").on("click", function () {
		const chkds = $("input[name='chek-transfer']:checkbox");
		if (chkds.is(":checked")) {
			$(".form-jenis-bayar").show();
		} else {
			$(".form-jenis-bayar").hide();
		}
	});
	$(".chek-rusak").on("click", function () {
		const chkrsk = $("input[name='chek-rusak']:checkbox");
		if (chkrsk.is(":checked")) {
			$(".form-tglrusak").show();
			$(".form-tgl").show();
		} else {
			$(".form-tglrusak").hide();
		}
	});
});
