<script>
    function getConfirmation() {
        var result = document.getElementById("result");
        var form = document.getElementById("form");
        form.onclick = function() {
         var check = confirm("هل أنت متأكد من رغبتك في حذف البيانات؟");
         if (check == true) {
            return true;
         } else {
            return false;
         }
      }
    }
</script>
