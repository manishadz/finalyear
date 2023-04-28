<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
    $('.btn_subscribe').click(function(e) {
        e.preventDefault()
        var form = $(this).closest('form');
        var email = form.find('input[name="email"]').val();

        form.validate({
            ignore: [],
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },
            messages: {
                email: {
                    required: "Please enter a valid email address."
                }
            },
            errorElement: 'div',
            errorClass: "error-message",
        });

        if (form.valid()) {
            $.ajax({
                url: '{{ route('subscribe') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    email: email,
                },
                success: function(response) {
                    form.find('input[name="email"]').val('');
                    toastr['success'](response.message, "Subscription Notifications");
                },
                error: function(response) {
                    form.find('input[name="email"]').val('');
                    toastr['warning'](response.responseText, "Subscription Notifications");
                }
            });
        }
    });
});
</script>