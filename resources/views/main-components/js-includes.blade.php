<script src="{{ asset('js/jquery-3.7.0.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.bundle.js') }}"></script>
<script src="{{ asset('js/jasny-bootstrap.min.js') }}"></script>
<script src="{{ asset('js/font-awesome_6.4.2_js_all.min.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
{!! Toastr::message() !!}
<script src="{{ asset('js/toastify.js') }}"></script>
<script src="{{ asset('js/select2.min.js') }}"></script>
@yield('extra-js')

<script>
    $(document).ready(function() {
        // ----------------------------
        $("#e1").select2({
            tags: true,
            tokenSeparators: [',', ' '],
            placeholder: 'Enter Tags and Seperate with Comma',
        });
        // ----------------------------
        $('#flexSwitchCheckChecked').on('change', function() {
            if ($(this).is(':checked')) {
                $('#privacyLabel').text('Public');
            } else {
                $('#privacyLabel').text('Private');
            }
        });
        // ---------------------------
        document.addEventListener('profile-updated', function() {
            $('#profileModal').modal('hide');
        });
        // ---------------------------

    });
</script>
