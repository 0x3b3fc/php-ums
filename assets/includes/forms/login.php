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
                    <div id="loginAlert"></div>
                    <div class="input-group input-group-lg form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text rounded-0">
                                <i class="far fa-envelope fa-lg"></i>
                            </span>
                        </div>
                        <input type="email" name="email" id="email" class="form-control rounded-0" placeholder="البريد الإلكتروني" required value="<?php if (isset($_COOKIE['email'])) {
                                                                                                                                                        echo $_COOKIE['email'];
                                                                                                                                                    } ?>">
                    </div>
                    <div class="input-group input-group-lg form-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text rounded-0">
                                <i class="fas fa-key fa-lg"></i>
                            </span>
                        </div>
                        <input type="password" name="password" id="password" class="form-control rounded-0" placeholder="كلمة السر" required value="<?php if (isset($_COOKIE['password'])) {
                                                                                                                                                        echo $_COOKIE['password'];
                                                                                                                                                    } ?>">
                    </div>
                    <div class="form-group">
                        <div class="custom-control custom-checkbox float-left">
                            <input type="checkbox" name="rem" class="custom-control-input" id="custom-check" <?php if (isset($_COOKIE['email'])) { ?> checked <?php } ?>>
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