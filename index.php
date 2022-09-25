<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UMS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.2/css/bootstrap.min.css" integrity="sha512-rt/SrQ4UNIaGfDyEXZtNcyWvQeOq0QLygHluFQcSjaGB04IxWhal71tKuzP6K8eYXYB6vJV4pHkXcmFGGQ1/0w==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
    <div class="container">
        <!-- Login Form Start -->
        <div class="row justify-content-center wrapper" id="login-box">
            <div class="col-lg-10 my-auto">
                <div class="card-group myShadow">
                    <div class="card justify-content-center rounded-right myColor p-4">
                        <h1 class="text-center font-weight-bold text-white">👋مرحبا بك</h1>
                        <hr class="my-3 bg-light myHr">
                        <p class="text-center font-weight-bolder text-light lead">
                            سجل الآن و ابدأ رحلتك معنا
                        </p>
                        <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="register-link">التسجيل</button>
                    </div>
                    <div class="card rounded-left p-4" style="flex-grow: 1.4;">
                        <h1 class="text-center font-weight-bold text-primary">تسجيل الدخول لحسابك</h1>
                        <hr class="my-3">
                        <form action="#" method="POST" class="px-3" id="login-form">
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="far fa-envelope fa-lg"></i>
                                    </span>
                                </div>
                                <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="البريد الإلكتروني" required>
                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="fas fa-key fa-lg"></i>
                                    </span>
                                </div>
                                <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="كلمة السر" required>
                            </div>
                            <div class="form-group">
                                <div class="custom-control custom-checkbox float-left">
                                    <input type="checkbox" name="rem" class="custom-control-input" id="custom-check">
                                    <label for="custom-check" class="custom-control-label">تذكرني</label>
                                </div>
                                <div class="form-group float-right">
                                    <a href="#" id="forgot-link">نسيت كلمة السر؟</a>
                                </div>
                                <div class="clearfix"></div>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="تسجيل الدخول" class="btn btn-primary btn-lg btn-block myBtn" id="login-btn">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Login Form End -->

        <!-- Register Form Start -->
        <div class="row justify-content-center wrapper" id="register-box" style="display:none;">
            <div class="col-lg-10 my-auto">
                <div class="card-group myShadow">
                    <div class="card justify-content-center rounded-left myColor p-4">
                        <h1 class="text-center font-weight-bold text-white">اهلا بعودتك</h1>
                        <hr class="my-3 bg-light myHr">
                        <p class="text-center font-weight-bolder text-light lead">
                            يرجي تسجيل الدخول
                        </p>
                        <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="login-link">تسجيل الدخول</button>
                    </div>
                    <div class="card rounded-right p-4" style="flex-grow: 1.4;">
                        <h1 class="text-center font-weight-bold text-primary">أنشاء حساب جديد</h1>
                        <hr class="my-3">
                        <form action="#" method="POST" class="px-3" id="register-form">
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="far fa-user fa-lg"></i>
                                    </span>
                                </div>
                                <input type="text" name="name" id="name" class="form-control rounded-0" placeholder="الإسم بالكامل" required>
                            </div>
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="far fa-envelope fa-lg"></i>
                                    </span>
                                </div>
                                <input type="email" name="email" id="remail" class="form-control rounded-0" placeholder="البريد الإلكتروني" required>
                            </div>

                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="fas fa-key fa-lg"></i>
                                    </span>
                                </div>
                                <input type="password" name="password" id="rpassword" class="form-control rounded-0" placeholder="كلمة السر" required minlength="5">
                            </div>

                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="fas fa-key fa-lg"></i>
                                    </span>
                                </div>
                                <input type="password" name="cpassword" id="cpassword" class="form-control rounded-0" placeholder="تأكيد كلمة السر" required minlength="5">
                            </div>

                            <div class="form-group">
                                <input type="submit" value="إنشاء الحساب" class="btn btn-primary btn-lg btn-block myBtn" id="register-btn">
                            </div>

                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Register Form End -->

        <!-- Forgot Password Form Start-->
        <div class="row justify-content-center wrapper" id="forgot-box" style="display:none;">
            <div class="col-lg-10 my-auto">
                <div class="card-group myShadow">
                    <div class="card justify-content-center rounded-left myColor p-4">
                        <h1 class="text-center font-weight-bold text-white">إعادة تعيين كلمة السر</h1>
                        <hr class="my-3 bg-light myHr">

                        <button class="btn btn-outline-light btn-lg align-self-center font-weight-bolder mt-4 myLinkBtn" id="back-link">الرجوع</button>
                    </div>
                    <div class="card rounded-right p-4" style="flex-grow: 1.4;">
                        <h1 class="text-center font-weight-bold text-primary">هل نسيت كلمة السر؟</h1>
                        <hr class="my-3">
                        <p class="lead text-center text-secondary">لإعادة تعيين كلمة السر من فضلك اكتب بريدك الإلكتروني</p>
                        <form action="#" method="POST" class="px-3" id="forgot-form">
                            <div class="input-group input-group-lg form-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text rounded-0">
                                        <i class="far fa-envelope fa-lg"></i>
                                    </span>
                                </div>
                                <input type="email" name="email" id="femail" class="form-control rounded-0" placeholder="البريد الإلكتروني" required>
                            </div>

                            <div class="form-group">
                                <input type="submit" value="تعيين كلمة سر جديدة" class="btn btn-primary btn-lg btn-block myBtn" id="forgot-btn">
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
        <!-- Forgot Password Form End-->

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
        });
    </script>
</body>

</html>