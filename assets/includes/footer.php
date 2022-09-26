</div>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" integrity="sha512-bnIvzh6FU75ZKxp0GXLH9bewza/OIw6dLVh9ICg0gogclmYGguQJWl8U30WpbsGTqbIiAwxTsbe76DErLq5EDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/js/bootstrap.bundle.min.js" integrity="sha512-igl8WEUuas9k5dtnhKqyyld6TzzRjvMqLC79jkgT3z02FvJyHAuUtyemm/P/jYSne1xwFI06ezQxEwweaiV7VA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.min.js" integrity="sha512-LW9+kKj/cBGHqnI4ok24dUWNR/e8sUD8RLzak1mNw5Ja2JYCmTXJTF5VpgFSw+VoBfpMvPScCo2DnKTIUjrzYw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $(document).ready(function() {
        $('#register-link').click(function() {
            $('#login-box').hide();
            $('#register-box').show();
        });
        $('#login-link').click(function() {
            $('#register-box').hide();
            $('#login-box').show();
        });
        $('#forgot-link').click(function() {
            $('#login-box').hide();
            $('#forgot-box').show();
        });
        $('#back-link').click(function() {
            $('#forgot-box').hide();
            $('#login-box').show();
        });

        // register ajax request
        $('#register-btn').click(function(e) {
            if ($('#register-form')[0].checkValidity()) {
                e.preventDefault();
                $('#register-btn').val('...جاري التسجيل');
                if ($('#rpassword').val() != $('#cpassword').val()) {
                    $('#passError').text('* كلمة السر غير متطابقة');
                    $('#register-btn').val('إنشاء الحساب');
                } else {
                    $('#passError').text('');
                    $.ajax({
                        url: 'assets/includes/action.php',
                        method: 'post',
                        data: $('#register-form').serialize() + '&action=register',
                        success: function(response) {
                            $('#register-btn').val('إنشاء الحساب');
                            if (response == 'register') {
                                window.location = 'home.php';
                            } else {
                                $('#regAlert').html(response);
                            }
                        }
                    });
                }
            }
        });

        //login ajax request
        $('#login-btn').click(function(e) {
            if ($('#login-form')[0].checkValidity()) {
                e.preventDefault();

                $('#login-btn').val('...جاري التسجيل');
                $.ajax({
                    url: 'assets/includes/action.php',
                    method: 'post',
                    data: $('#login-form').serialize() + '&action=login',
                    success: function(response) {
                        $('#login-btn').val('تسجيل الدخول');
                        if ($.trim(response) == 'login') {
                            window.location = 'home.php';
                        } else {
                            $('#loginAlert').html(response);
                        }
                    }
                });
            }
        });
    });
</script>
</body>

</html>