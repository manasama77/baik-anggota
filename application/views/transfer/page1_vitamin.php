<script src="public/js/html5-qrcode.min.js"></script>
<script>
    function onScanSuccess(qrMessage) {
        // handle the scanned code as you like
        console.log(`QR matched = ${qrMessage}`);
        window.location.href = "<?= site_url(); ?>transfer2";
    }

    function onScanFailure(error) {
        // handle scan failure, usually better to ignore and keep scanning
        console.warn(`QR error = ${error}`);
    }

    let html5QrcodeScanner = new Html5QrcodeScanner(
        "reader", {
            fps: 10,
            qrbox: 250
        }, /* verbose= */ true);
    html5QrcodeScanner.render(onScanSuccess, onScanFailure);
</script>