<script>
    //variable global
    let datepicker = $('.datepicker'),
        form_add = $('#form_add'),
        from = $('#from'),
        to = $('#to');

    $(document).ready(function() {
        datepicker.datepicker({
            dateFormat: 'dd-mm-yy',
            buttonImageOnly: true,
            buttonImage: 'calendar.gif',
            buttonText: 'Calendar'
        });
    });
</script>