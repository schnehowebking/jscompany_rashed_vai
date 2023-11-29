<!-- BEGIN: Vendor JS-->
<script src="{{ asset(mix('assets/vendor/libs/jquery/jquery.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/popper/popper.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/bootstrap.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/hammer/hammer.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/i18n/i18n.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/libs/typeahead-js/typeahead.js')) }}"></script>
<script src="{{ asset(mix('assets/vendor/js/menu.js')) }}"></script>
<script src="{{ asset('frontend/js/iziToast.js') }}"></script>
@yield('vendor-script')
<!-- END: Page Vendor JS-->
<!-- BEGIN: Theme JS-->
<script src="{{ asset(mix('assets/js/main.js')) }}"></script>

<!-- END: Theme JS-->
<!-- Pricing Modal JS-->
@stack('pricing-script')
<!-- END: Pricing Modal JS-->
<!-- BEGIN: Page JS-->
@include('vendor.lara-izitoast.toast')
@yield('page-script')
<!-- END: Page JS-->
@stack('modals')
<script>
    $(document).ready(function() {
      $("input[type='file']").on("change", function() {
        var fileInput = $(this);
        var image = $(this).attr("image");
        if (fileInput.prop('files')[0]) {
          $("#"+image+"").attr("src", window.URL.createObjectURL(fileInput.prop('files')[0]));
        }
      })
      $(".account-image-reset").on("click", function() {
        var image = $(this).attr("image");
        var input = $(this).attr("input");
        $("img#"+image+"").attr("src", "https://via.placeholder.com/150");
        $("input#"+input+"").val("");
      })
  })
</script>
@livewireScripts
<script src="{{asset(mix('js/alpine.js'))}}"></script>
