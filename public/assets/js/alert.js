$(document).ready(function () {
	// Tamabah Member
	const flashData = $(".flash-data").data("flashdata");
	if (flashData) {
		Swal.fire({
			title: "Member Baru",
			text: flashData,
			icon: "success"
		});
	}

	// Hapus Member
	$(".tombol-hapusm").on("click", function (e) {
		console.log("Berhasil");

		e.preventDefault();
		const href = $(this).attr("href");
		// console.log(href);
		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: "btn btn-custon-three btn-success",
				cancelButton: "btn btn-custon-three btn-danger"
			},
			buttonsStyling: false
		});

		swalWithBootstrapButtons
			.fire({
				title: "Yakin",
				text: "Data ini Akan Dihapus?",
				icon: "warning",
				showCancelButton: true,
				confirmButtonText: "Ya!",
				cancelButtonText: "Tidak!",
				reverseButtons: true
			})
			.then(result => {
				if (result.value) {
					document.location.href = href;
				} else if (
					/* Read more about handling dismissals below */
					result.dismiss === Swal.DismissReason.cancel
				) {
					swalWithBootstrapButtons.fire("Batal", "Menghapus Data", "error");
				}
			});
	});

	// Tambah Detail Paket
	const flashDetail = $(".flash-detail").data("flashdetail");
	if (flashDetail) {
		Swal.fire({
			title: "Isi Paket",
			text: flashDetail,
			icon: "success"
		});
	}

	// Hapus Detail Paket
	$(".tombol-hapus-detail").on("click", function (e) {
		// console.log('Berhasil');
		e.preventDefault();
		const href = $(this).attr("href");
		// console.log(href);
		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: "btn btn-custon-three btn-success",
				cancelButton: "btn btn-custon-three btn-danger"
			},
			buttonsStyling: false
		});

		swalWithBootstrapButtons
			.fire({
				title: "Yakin",
				text: "Data ini Akan Dihapus?",
				icon: "warning",
				showCancelButton: true,
				confirmButtonText: "Ya!",
				cancelButtonText: "Tidak!",
				reverseButtons: true
			})
			.then(result => {
				if (result.value) {
					document.location.href = href;
				} else if (
					/* Read more about handling dismissals below */
					result.dismiss === Swal.DismissReason.cancel
				) {
					swalWithBootstrapButtons.fire("Batal", "Menghapus Data", "error");
				}
			});
	});

	// Hapus Menu Utama
	$(".tombol-hapustdk").on("click", function (e) {
		e.preventDefault();
		const href = $(this).attr("href");
		Swal.fire({
			icon: "warning",
			title: "Paket Ini Tidak Bisa Dihapus",
			text: "Hapus dahulu isi paketnya"
			// footer: '<a href>Why do I have this issue?</a>'
		});
	});

	// Tambah Detail Paket
	const flashPaket = $(".flash-paket").data("flashpaket");
	if (flashPaket) {
		Swal.fire({
			title: "Paket",
			text: flashPaket,
			icon: "success"
		});
	}
	// Tambah Fasilitas
	const flashFasilitas = $(".flash-fasilitas").data("flashfasilitas");
	if (flashFasilitas) {
		Swal.fire({
			title: "Fasilitas",
			text: flashFasilitas,
			icon: "success"
		});
	}
	// Tambah Senam
	const flashSenam = $(".flash-senam").data("flashsenam");
	if (flashSenam) {
		Swal.fire({
			title: "Senam",
			text: flashSenam,
			icon: "success"
		});
	}

	// Hapus Detail Paket
	$(".tombol-hapus-senam").on("click", function (e) {
		// console.log('Berhasil');
		e.preventDefault();
		const href = $(this).attr("href");
		// console.log(href);
		const swalWithBootstrapButtons = Swal.mixin({
			customClass: {
				confirmButton: "btn btn-custon-three btn-success",
				cancelButton: "btn btn-custon-three btn-danger"
			},
			buttonsStyling: false
		});

		swalWithBootstrapButtons
			.fire({
				title: "Yakin",
				text: "Jenis Senam ini Akan Dihapus?",
				icon: "warning",
				showCancelButton: true,
				confirmButtonText: "Ya!",
				cancelButtonText: "Tidak!",
				reverseButtons: true
			})
			.then(result => {
				if (result.value) {
					document.location.href = href;
				} else if (
					/* Read more about handling dismissals below */
					result.dismiss === Swal.DismissReason.cancel
				) {
					swalWithBootstrapButtons.fire("Batal", "Menghapus Data", "error");
				}
			});
	});


});
