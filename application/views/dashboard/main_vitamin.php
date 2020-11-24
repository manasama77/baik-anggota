<script>
    //global variable
    let comingsoon = $('.comingsoon');
    $(document).ready(function() {
        comingsoon.on('click', function(e) {
            e.preventDefault();
            Swal.fire({
                position: 'top-end',
                icon: 'info',
                title: 'Akan segera hadir',
                showConfirmButton: false,
                timer: 1500
            })
        });
    });
</script>