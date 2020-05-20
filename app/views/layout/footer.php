<!-- <div class="footer-copyright-area">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12">
				<div class="footer-copy-right">
					<p>Copyright © <?php echo date('Y'); ?>. All rights reserved. Template by <a href="https://colorlib.com/wp/templates/">Colorlib</a></p>
				</div>
			</div>
		</div>
	</div>
</div> -->
</div>

<!-- jquery
============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/bootstrap.min.js"></script>
<!-- wow JS
============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/wow.min.js"></script>
<!-- price-slider JS
============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/jquery-price-slider.js"></script>
<!-- meanmenu JS
============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/owl.carousel.min.js"></script>
<!-- sticky JS
============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/jquery.sticky.js"></script>
<!-- scrollUp JS
============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/jquery.scrollUp.min.js"></script>
<!-- counterup JS
============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/counterup/jquery.counterup.min.js"></script>
<script src="<?php echo base_url('public/assets/'); ?>js/counterup/waypoints.min.js"></script>
<script src="<?php echo base_url('public/assets/'); ?>js/counterup/counterup-active.js"></script>
<!-- mCustomScrollbar JS
============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url('public/assets/'); ?>js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/metisMenu/metisMenu.min.js"></script>
<script src="<?php echo base_url('public/assets/'); ?>js/metisMenu/metisMenu-active.js"></script>

<!-- chosen JS
============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/chosen/chosen.jquery.js"></script>
<script src="<?php echo base_url('public/assets/'); ?>js/chosen/chosen-active.js"></script>
<script src="<?php echo base_url('public/assets/'); ?>js/popper.min.js"></script>

<!-- select2 JS
============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/select2/select2.full.min.js"></script>
<script src="<?php echo base_url('public/assets/'); ?>js/select2/select2-active.js"></script>

<!-- data table JS
============================================ -->
<script type="text/javascript" src="<?php echo base_url('public/assets/datatables/'); ?>DataTables-1.10.20/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url('public/assets/datatables/'); ?>DataTables-1.10.20/js/dataTables.bootstrap.js"></script>

<!-- notification JS============================================-->
<script src="<?php echo base_url('public/assets/'); ?>js/notifications/Lobibox.js">
</script>
<script src="<?php echo base_url('public/assets/'); ?>js/notifications/notification-active.js"></script>

<!-- touchspin JS
============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/touchspin/jquery.bootstrap-touchspin.min.js"></script>
<script src="<?php echo base_url('public/assets/'); ?>js/touchspin/touchspin-active.js"></script>

<!-- tab JS
============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/tab.js"></script>

<!-- plugins JS
============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/plugins.js"></script>
<!-- main JS
============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/main.js"></script>
<script src="<?php echo base_url('public/assets/'); ?>js/selectprodak.js"></script>
<script src="<?php echo base_url('public/assets/'); ?>sweetalert2/sweetalert2.all.min.js"></script>
<script src="<?php echo base_url('public/assets/'); ?>js/alert.js"></script>

<!-- icheck JS
		============================================ -->
<script src="<?php echo base_url('public/assets/'); ?>js/icheck/icheck.min.js"></script>
<script src="<?php echo base_url('public/assets/'); ?>js/icheck/icheck-active.js"></script>

<!-- datapicker JS =========================================== -->
<script src="<?php echo base_url('public/assets/'); ?>js/input-mask/jasny-bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#table').DataTable();
        $('#tablef').DataTable();
    });
</script>
<!-- Detail Instruktur -->
<script>
    $(document).ready(function() {
        $('.btn-paket').on('click', function() {
            $('.table-paket').show();
            $('.table-fasilitas').hide();
        });
        $('.btn-fasilitas').on('click', function() {
            $('.table-paket').hide();
            $('.table-fasilitas').show();
        });

        $('.select-fasilitas').on('change', function() {
            var idfas = $(this).val();
            $.ajax({
                url: '<?php echo base_url('detfas'); ?> ',
                type: 'post',
                dataType: 'json',
                data: {
                    idfas: idfas
                },
                success: function(data) {
                    if (idfas != 0) {
                        $('.nama-fas').val(data.fasilitas);
                        $('.harga-fas').val(data.harga);
                    } else {
                        $('.nama-fas').val('');
                        $('.harga-fas').val('');
                    }
                }
            });
            return false;
        });

        $('.select-member').on('change', function() {
            var idmem = $(this).val();
            $.ajax({
                url: '<?php echo base_url('detmember') ?>',
                type: 'post',
                dataType: 'json',
                data: {
                    idmem: idmem
                },
                success: function(data) {
                    if (idmem != 0) {
                        $('.lebel-idMember').val(data.id_member);
                    } else {
                        $('.lebel-idMember').val('');
                    }
                    // console.log(idmem);
                }
            });
            return false;
        });

        $('.chek-validasi').on('click', function() {
            var idTrans = $(this).data('validasi');
            // console.log(idTrans);
            $.ajax({
                url: '<?php echo base_url('chek-validasi'); ?>',
                type: 'POST',
                data: {
                    idTrans: idTrans
                },
                success: function() {
                    document.location.href = "<?php echo base_url('transaksiPaket'); ?>";
                }
            });
        });
        $('.chek-validasibelump').on('click', function() {
            var idBelum = $(this).data('validbelum');
            console.log(idBelum);
            $.ajax({
                url: '<?php echo base_url('chek-valbelum'); ?>',
                type: 'POST',
                data: {
                    idBelum: idBelum
                },
                success: function() {
                    document.location.href = "<?php echo base_url('transaksiPaket'); ?>";
                }
            });
        });
        $('.chek-validasiya').on('click', function() {
            var idValidya = $(this).data('validasiya');
            // console.log(idValidya);
            $.ajax({
                url: '<?php echo base_url('chekValbelumya'); ?>',
                type: 'POST',
                data: {
                    idValidya: idValidya
                },
                success: function() {
                    document.location.href = "<?php echo base_url('transaksiPeriodeFasilitas'); ?>";
                }
            });
        });
        $('.chek-validasibelum').on('click', function() {
            var idValidtidak = $(this).data('validtidak');
            // console.log(idValidya);
            $.ajax({
                url: '<?php echo base_url('chekValtidak'); ?>',
                type: 'POST',
                data: {
                    idValidtidak: idValidtidak
                },
                success: function() {
                    document.location.href = "<?php echo base_url('transaksiPeriodeFasilitas'); ?>";
                }
            });
        });

        $(".btn-rusak").on("click", function(e) {
            e.preventDefault();
            Swal.fire({
                icon: "warning",
                title: "Fasilitas ini Rusak",
                text: "Tidak Bisa Disewakan?"
                // footer: '<a href>Why do I have this issue?</a>'
            });
        });
        $(".btn-user-beli").on("click", function(e) {
            e.preventDefault();
            Swal.fire({
                icon: "error",
                title: "Tidak Bisa Membeli Paket ini",
                text: "Silahkan Daftar Duluh Sebagai Member"
                // footer: '<a href>Why do I have this issue?</a>'
            });
        });

        $(".btn-aktif").on("click", function() {
            var aktif = $(this).data('aktif');
            var id = $(this).data('membera');
            $.ajax({
                url: "<?php echo base_url('aktif-ya'); ?>",
                type: "post",
                data: {
                    id: id,
                    aktif: aktif
                },
                success: function() {
                    document.location.href = "<?php echo base_url('member'); ?>";
                }
            });
        });
        $(".btn-tidakaktif").on("click", function() {
            var tidak = $(this).data('tidakaktif');
            var id = $(this).data('membert');
            $.ajax({
                url: "<?php echo base_url('aktif-tidak'); ?>",
                type: "post",
                data: {
                    id: id,
                    tidak: tidak
                },
                success: function() {
                    document.location.href = "<?php echo base_url('member'); ?>";
                }
            });
        });
    });
</script>

<script>
    $(document).ready(function() {
        $("#kuota").on("change", function() {
            const kt = $(this).val();
            if (kt == 2) {
                $('.kuota1').show();
                $('.kuota2').hide();
            } else if (kt == 3) {
                $('.kuota1').show();
                $('.kuota2').show();
            } else {
                $('.kuota1').hide();
                $('.kuota2').hide();
            }
        });
    });
</script>
<script>
    $(document).ready(function() {
        // Toltip
        $(function() {
            $('[data-toggle="tooltip"]').tooltip();
        });
    });
</script>
<script>
    $(function() {
        var key = document.getElementById('cari');
        var tabel = document.getElementById('table-member');
        // var notabel = document.getElementById('notable-member');

        key.addEventListener('keyup', function() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState == 4 && xhr.status == 200) {
                    tabel.innerHTML = xhr.responseText;
                }
            }
            xhr.open('GET', '<?php echo base_url('cari.member?key='); ?>' + key.value, true);
            xhr.send();
        });

    });
</script>
</body>



</html>