<script>
    //GLOBAL VARIABEL
    let form_add = $('#form_add'),
        password_lama = $('#password_lama'),
        password_baru = $('#password_baru'),
        password_baru_confirm = $('#password_baru_confirm');

    $(document).ready(function() {
        form_add.on('submit', function(e) {
            e.preventDefault();
            Swal.fire({
                icon: 'question',
                title: 'Update Password?',
                showCancelButton: true,
                confirmButtonText: `Update`,
            }).then((result) => {
                if (result.isConfirmed) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Success',
                        text: 'Update Password Berhasil'
                    }).then(function(result) {
                        if (result.isConfirmed) {
                            window.location.reload();
                        }
                    });
                }
            });
        });
    });
</script>