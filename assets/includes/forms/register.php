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
                    <div id="regAlert">
                        
                    </div>
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
                        <div id="passError" class="text-danger font-weight-bold"></div>
                    </div>

                    <div class="form-group">
                        <input type="submit" value="إنشاء الحساب" class="btn btn-primary btn-lg btn-block myBtn" id="register-btn">
                    </div>

                </form>
            </div>

        </div>
    </div>
</div>