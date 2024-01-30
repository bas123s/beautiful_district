<script src="../../require/partials/assets/libs/wow.js/wow.min.js"></script>
<script src="../../require/partials/assets/libs/tobii/js/tobii.min.js"></script>
<script src="../../require/partials/assets/libs/tiny-slider/min/tiny-slider.js"></script>
<script src="../../require/partials/assets/libs/gumshoejs/gumshoe.min.js"></script>
<script src="../../require/partials/assets/libs/jarallax/jarallax.min.js"></script>
<script src="../../require/partials/assets/libs/feather-icons/feather.min.js"></script>
<script src="../../require/partials/assets/libs/sweetalert2/sweetalert2.all.min.js"></script>
<script src="../../require/partials/assets/libs/sweetalert2/sweetalert2.min.css"></script>
<script src="../../require/partials/assets/js/plugins.init.js"></script>
<script src="../../require/partials/assets/js/app.js"></script>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        // ตรวจสอบแท็ก a ใน URL และแสดง SweetAlert2
        var aParam = "<?php echo isset($_REQUEST['a']) ? $_REQUEST['a'] : ''; ?>";
        if (aParam) {
            Swal.fire({
                title: 'Error',
                text: decodeURIComponent(aParam),
                icon: 'error',
                confirmButtonText: 'OK'
            });
        }


    });
</script>