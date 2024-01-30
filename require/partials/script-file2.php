<script src="../../require/partials/assets/libs/wow.js/wow.min.js"></script>
<script src="../../require/partials/assets/libs/tobii/js/tobii.min.js"></script>
<script src="../../require/partials/assets/libs/tiny-slider/min/tiny-slider.js"></script>
<script src="../../require/partials/assets/libs/gumshoejs/gumshoe.min.js"></script>
<script src="../../require/partials/assets/libs/jarallax/jarallax.min.js"></script>
<script src="../../require/partials/assets/libs/feather-icons/feather.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="../../require/partials/assets/js/plugins.init.js"></script>
<script src="../../require/partials/assets/js/app.js"></script>

<script>
  <?php
  if (isset($_REQUEST["a"])) {
    $text = addslashes($_REQUEST["a"]);
    echo "window.onload = function() {
      Swal.fire({
        title: '{$text}',
        text: '',
        icon: 'success',
        confirmButtonText: 'ตกลง'
      });
    };";
  }
  ?>
</script>
