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