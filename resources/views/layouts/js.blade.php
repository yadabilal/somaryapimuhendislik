<script type='text/javascript' src='{{ asset('theme/new/js/jquery.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/jquery-migrate.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/bootstrap.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/jquery.themepunch.tools.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/jquery.themepunch.revolution.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/snap.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/owl.carousel.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/jquery.prettyPhoto.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/jquery.prettyPhoto.init.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/jQuery.headroom.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/headroom.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/script.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>

<script type='text/javascript' src='{{ asset('theme/new/js/extensions/revolution.extension.video.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/extensions/revolution.extension.slideanims.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/extensions/revolution.extension.actions.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/extensions/revolution.extension.layeranimation.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/extensions/revolution.extension.kenburn.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/extensions/revolution.extension.navigation.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/extensions/revolution.extension.migration.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/extensions/revolution.extension.parallax.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script type='text/javascript' src='http://maps.google.com/maps/api/js?sensor=false&amp;language=en&amp;ver=4.5'></script>
<script type='text/javascript' src='{{ asset('theme/new/js/gmap3.min.js?'.\Carbon\Carbon::now()->getTimestamp()) }}'></script>
<script>
    $('.btn-contact-form').click(function () {
        var form = $(this).closest('form');
        var array = form.serializeArray();
        const json = {};

        $.each(array, function () {
            json[this.name] = this.value || "";
        });

        var full_name = json.full_name;
        var email = json.email;
        var phone = json.phone;
        var message = json.message;

        if(full_name && email && phone && message)  {
            $.ajax({
                url: '{{route('contact')}}',
                data: json,
                type: 'POST',
                dataType: 'JSON',
                success: function (data) {
                    if(data.status == 'success') {
                        form.find('.alert-contact-form').addClass('alert-success');

                        form.find('.full_name').val('');
                        form.find('.email').val('');
                        form.find('.phone').val('');
                        form.find('.message').val('');
                    }else {
                        form.find('.alert-contact-form').addClass('alert-danger');
                    }

                    form.find('.alert-contact-form').text(data.message);
                },
                error: function () {
                    form.find('.alert-contact-form').addClass('alert-danger');
                    form.find('.alert-contact-form').text("Beklenmedik bir hata meydana geldi!");
                }
            });

        }else {
            form.find('.alert-contact-form').addClass('alert-danger');
            form.find('.alert-contact-form').text('Lütfen tüm alanları doldurunuz!');
        }

        return false;
    });
    $('.button-subscribe').click(function () {
        $('.alert-subscribe').removeClass('alert-success');
        $('.alert-subscribe').removeClass('alert-danger');

        var form = $(this).closest('form');
        var array = form.serializeArray();
        const json = {};

        $.each(array, function () {
            json[this.name] = this.value || "";
        });

        var email = json.email;

        if(email && email.length<=150)  {
            $.ajax({
                url: '{{route('subscribe')}}',
                data: json,
                type: 'POST',
                dataType: 'JSON',
                success: function (data) {
                    if(data.status == 'success') {
                        $('.alert-subscribe').addClass('alert-success');
                        form.find('.email').val('');
                    }else {
                        $('.alert-subscribe').addClass('alert-danger');
                    }

                    $('.alert-subscribe').text(data.message);
                },
                error: function () {
                    $('.alert-subscribe').addClass('alert-danger');
                    $('.alert-subscribe').text("Beklenmedik bir hata meydana geldi!");
                }
            });

        }else {
            $('.alert-subscribe').addClass('alert-danger');
            $('.alert-subscribe').text('Lütfen tüm alanları doğru bir şekilde doldurunuz!');
        }

        return false;
    });
</script>
