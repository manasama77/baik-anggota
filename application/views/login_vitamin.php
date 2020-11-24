<script src="<?= base_url(); ?>public/js/jquery.ajax-cross-origin.min.js"></script>
<script>
    // GLOBAL VARIABLE
    let cif_no = $('#cif_no'),
        nama = "",
        panggilan = "";

    $(document).ready(function() {
        $("#form_login").validate({
            errorElement: "span",
            errorClass: "help-block help-block-error text-danger",
            focusInvalid: true,
            ignore: "",
            rules: {
                cif_no: {
                    required: true,
                }
            },

            errorPlacement: function(error, element) {
                var icon = $(element).parent(".input-icon").children("i");
                icon
                    .removeClass("fa-check")
                    .addClass("fa-warning");
                icon
                    .attr("data-original-title", error.text())
                    .tooltip({
                        container: "body"
                    });
            },

            highlight: function(element) {
                $(element)
                    .closest(".form-group")
                    .removeClass("has-success")
                    .addClass("has-error");
            },

            unhighlight: function(element) {
                // revert the change done by hightlight
            },

            success: function(label, element) {
                var icon = $(element).parent(".input-icon").children("i");
                $(element)
                    .closest(".form-group")
                    .removeClass("has-error")
                    .addClass("has-success");
                icon
                    .removeClass("fa-warning")
                    .addClass("fa-check");
            },

            submitHandler: function(form) {
                $.ajaxSetup({
                    scriptCharset: "utf-8", //or "ISO-8859-1"
                    contentType: "application/json; charset=utf-8"
                });
                $.ajax({
                    url: "<?= site_url(); ?>get_data_anggota",
                    dataType: "json",
                    type: "get",
                    data: {
                        cif_no: cif_no.val(),
                    },
                    beforeSend: function() {
                        $.blockUI({
                            message: '<i class="fa fa-spinner fa-spin"></i> Proses Cek No Anggota',
                        });
                    },
                    statusCode: {
                        400: function() {
                            console.log(400);
                            Swal.fire({
                                icon: 'error',
                                title: '[400] Oops...',
                                text: 'Bad Request'
                            });
                            $.unblockUI();
                        },
                        404: function() {
                            console.log(404);
                            Swal.fire({
                                icon: 'error',
                                title: '[404] Oops...',
                                text: 'Page Not Found'
                            });
                            $.unblockUI();
                        },
                        500: function() {
                            console.log(500);
                            Swal.fire({
                                icon: 'error',
                                title: '[500] Oops...',
                                text: 'Internal Server Error'
                            });
                            $.unblockUI();
                        },
                        503: function() {
                            console.log(500);
                            Swal.fire({
                                icon: 'error',
                                title: '[503] Oops...',
                                text: 'Service Unavailable'
                            });
                            $.unblockUI();
                        },
                    }
                }).always(function(res) {
                    $.unblockUI();
                }).fail(function(res) {
                    console.log(res);

                    if (res.statusText == "error") {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Tidak terhubung dengan SIRKAH, silahkan hubungi Administrator di nomor 08561627787'
                        });
                    }
                }).done(function(res) {
                    console.log(res);
                    if (res.code == 200) {
                        nama = encodeURI(res.nama);
                        panggilan = encodeURI(res.panggilan);
                        majelis = encodeURI(res.majelis);

                        Swal.fire({
                            icon: 'success',
                            title: 'Success...',
                            text: 'Proses Login Berhasil'
                        }).then(function(res) {
                            window.location.replace(`<?= site_url(); ?>set_session/${cif_no.val()}/${nama}/${panggilan}/${majelis}`);
                        });
                    } else if (res.code == 404) {
                        Swal.fire({
                            icon: 'warning',
                            title: 'Oops...',
                            text: 'Proses Login Gagal, No Anggota Tidak Ditemukan'
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Unknown Request'
                        });
                    }
                });
            },
        });
    });
</script>