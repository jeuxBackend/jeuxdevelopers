<script>
    window.onscroll = function () {
        myFunction();
      };

      function myFunction() {
        if (
          document.documentElement.scrollTop > 5 ||
          document.body.scrollTop > 5
        ) {
          document.getElementById("navbar-expand-lg").classList.add("position-fix");
        } else {
          document.getElementById("navbar-expand-lg").classList.remove("position-fix");
        }
      }
</script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap/bootstrap.poper.min.js') }}"></script>
<script src="{{ asset('assets/js/jquery/jquery.js') }}"></script>

