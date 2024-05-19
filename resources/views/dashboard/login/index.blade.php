<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<style>
    /*--
Author: W3layouts
Author URL: http://w3layouts.com
--*/

/* reset code */
html {
    scroll-behavior: smooth;
}

body,
html {
    margin: 0;
    padding: 0;
    color: #585858;
}

* {
    box-sizing: border-box;
    font-family: 'Kumbh Sans', sans-serif;
}

/*  wrapper */
.wrapper {
    width: 100%;
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
}

@media (min-width: 576px) {
    .wrapper {
        max-width: 540px;
    }
}

@media (min-width: 768px) {
    .wrapper {
        max-width: 720px;
    }
}

@media (min-width: 992px) {
    .wrapper {
        max-width: 960px;
    }
}

@media (min-width: 1200px) {
    .wrapper {
        max-width: 1140px;
    }
}

/*  /wrapper */

.d-grid {
    display: grid;
}

button,
input,
select {
    -webkit-appearance: none;
    outline: none;
}

button,
.btn,
select {
    cursor: pointer;
}

a {
    text-decoration: none;
}

h1,
h2,
h3,
h4,
h5,
h6,
p,
ul,
ol {
    margin: 0;
    padding: 0;
}

body {
    background: #f1f1f1;
    margin: 0;
    padding: 0;
}

form,
fieldset {
    border: 0;
    padding: 0;
    margin: 0;
}

img {
    max-width: 100%;
}

/*-- //Reset-Code --*/

/*-- form styling --*/
.signinform {
    padding: 40px 40px;
    justify-content: center;
    display: grid;
    grid-template-rows: 1fr auto 1fr;
    align-items: center;
    min-height: 100vh;
}

input[type="text"],
input[type="email"],
input[type="Password"] {
    font-size: 17px;
    font-weight: 500;
    color: #999;
    text-align: left;
    padding: 14px 15px 12px 35px;
    width: 100%;
    display: inline-block;
    box-sizing: border-box;
    border: none;
    outline: none;
    background: transparent;
    letter-spacing: .5px;
}

.input-group {
    margin-bottom: 25px;
    padding: 0px 0px;
    border-bottom: 1px solid #e5e5e5;
    position: relative;
}

.btn-block {
    display: block;
    width: 50%;
    margin: 0 auto;
}

.btn:active {
    outline: none;
}

.btn-primary {
    color: #fff;
    background-color: #9146ff;
    margin-top: 30px;
    outline: none;
    width: 100%;
    padding: 15px 15px;
    cursor: pointer;
    font-size: 18px;
    font-weight: 600;
    border-radius: 6px;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    -ms-border-radius: 6px;
    -o-border-radius: 6px;
    border: none;
    text-transform: capitalize;
}


.btn-primary:hover {
    background-color: #7d32eb;
    color: #fff;
}

.form-row.bottom {
    display: flex;
    justify-content: space-between;
}

.form-row .form-check input[type="checkbox"] {
    display: none;
}

.form-row .form-check input[type="checkbox"]+label:before {
    border-radius: 3px;
    border: 1px solid #e2e2e2;
    color: transparent;
    content: "\2714";
    display: inline-block;
    height: 18px;
    margin-right: 5px;
    transition: 0.2s;
    vertical-align: inherit;
    width: 18px;
    text-align: center;
    line-height: 20px;
}

.form-row .form-check input[type="checkbox"]:checked+label:before {
    background-color: #9146ff;
    border-color: #9146ff;
    color: #fff;
}

.form-row .form-check input[type="checkbox"]+label {
    cursor: pointer;
    color: #888;
}

.w3_info h2 {
    display: inline-block;
    font-size: 25px;
    line-height: 35px;
    margin-bottom: 20px;
    font-weight: 600;
    color: #3b3663;
}

.w3_info h4 {
    display: inline-block;
    font-size: 15px;
    padding: 8px 0px;
    color: #444;
    text-transform: capitalize;
}


a.btn.btn-block.btn-social.btn-facebook {
    display: block;
    width: 100%;
    padding: 10px 0px;
    text-align: center;
    font-size: 16px;
    font-weight: 600;
}

h1 {
    text-align: center;
    font-size: 40px;
    font-weight: 500;
    color: #3b3663;
}

.w3_info {
    box-sizing: border-box;
    padding: 3em 3.5em;
    width: 450px;
    background: #fff;
    box-shadow: 2px 9px 49px -17px rgba(0, 0, 0, 0.1);
}


.w3l-form-info {
    margin: 40px 0;
}


.w3_info p {
    padding-bottom: 30px;
    text-align: center;
}

p.account,
p.account a {
    text-align: center;
    padding-top: 20px;
    padding-bottom: 0px;
    font-size: 16px;
    color: #888;
}

p.account a {
    color: #9146ff;
}

p.account a:hover {
    text-decoration: underline;
}

a.forgot {
    color: #3b3663;
    margin-top: 2px;
}

a.forgot:hover {
    text-decoration: underline;
}

h3.w3ls {
    margin: 10px 0px;
    padding-left: 60px;
}

h3.agileits {
    padding-left: 10px;
}

.container {
    max-width: 890px;
    margin: 0 auto;
}

.input-group i.fa,
.input-group i.fas {
    font-size: 16px;
    vertical-align: middle;
    box-sizing: border-box;
    float: left;
    width: 6%;
    margin-top: 13px;
    text-align: center;
    color: #999;
    opacity: .5;
    position: absolute;
    left: 0;
}

h5 {
    text-align: center;
    margin: 10px 0px;
    font-size: 15px;
    font-weight: 600;
    color: #000;
}

.footer p {
    text-align: center;
    font-size: 18px;
    line-height: 28px;
    color: #777;
}

.footer p a {
    color: #9146ff;
}

.footer p a:hover {
    text-decoration: underline;
}

p.continue {
    margin-top: 25px;
    padding: 0;
    margin-bottom: 20px;
    color: #999;
    opacity: .8;
}

p.continue span {
    position: relative;
}

p.continue span:before {
    position: absolute;
    content: '';
    height: 1px;
    background: #999;
    width: 89%;
    left: -100%;
    top: 5px;
    opacity: .5;
}

p.continue span:after {
    position: absolute;
    content: '';
    height: 1px;
    background: #999;
    width: 89%;
    right: -100%;
    top: 5px;
    opacity: .5;
}

.social-login {
    display: grid;
    grid-auto-flow: column;
    grid-gap: 15px;
    margin-bottom: 10px;
    justify-content: center;
}

.facebook {
    width: 46px;
    height: 46px;
    line-height: 46px;
    border-radius: 50%;
    text-align: center;
    font-size: 15px;
    color: #fff;
    background: #3b5998;
}
span.fab{
    line-height: 46px;
}
.facebook:hover {
    background: #3b5998;
    color: #fff;
}
.twitter {
    width: 46px;
    height: 46px;
    line-height: 46px;
    border-radius: 50%;
    text-align: center;
    font-size: 15px;
    color: #fff;
    background: #1da1f2;
}

.twitter:hover {
    background: #1da1f2;
    color: #fff;
}

.google {
    width: 46px;
    height: 46px;
    line-height: 46px;
    border-radius: 50%;
    text-align: center;
    font-size: 15px;
    color: #fff;
    background: #ea4335;
}

.google:hover {
    background: #ea4335;
    color: #fff;
}
.facebook:hover,.twitter:hover,.google:hover  {
    opacity: .8;
}
::-webkit-input-placeholder {
    /* Edge */
    color: #aaa;
}

:-ms-input-placeholder {
    /* Internet Explorer 10-11 */
    color: #aaa;
}

::placeholder {
    color: #aaa;
}

/** Responsive **/
@media screen and (max-width: 1440px) {}


@media screen and (max-width: 991px) {
    .w3_info h2 {
        font-size: 24px;
    }

    h1 {
        font-size: 35px;
    }
}

@media screen and (max-width: 900px) {
}

@media screen and (max-width: 800px) {
    .w3_info h2 {
        font-size: 23px;
    }

    .w3l-form-info {
        flex-direction: column;
    }

    .w3l_form {
        order: 2;
    }

    .container {
        max-width: 550px;
    }

}


@media screen and (max-width: 736px) {
    .w3_info h2 {
        font-size: 22px;
    }
}

@media screen and (max-width: 667px) {
    .w3_info {
        padding: 3em 3em;
    }

    .w3l-form-info {
        margin: 20px 0 30px;
    }
}

@media screen and (max-width: 640px) {
    h1 {
        font-size: 37px;
    }
}

@media screen and (max-width: 480px) {
    .w3l_form {
        padding: 0em;
    }

    .w3_info {
        padding: 2em 2em;
        width: 430px;
    }

    h1 {
        font-size: 34px;
    }
}

@media screen and (max-width: 415px) {

    h1 {
        font-size: 30px;
    }

    .w3_info {
        width: 380px;
    }
    .signinform {
        padding: 40px 20px;
    }
}

@media screen and (max-width: 384px) {

    .signinform {
        padding: 30px 15px;
    }
    .w3_info {
        width: 350px;
    }
    .twitter,.google,.facebook {
        width: 40px;
        height: 40px;
        line-height: 40px;
        font-size: 13px;
    }
    span.fab{
        line-height: 40px;
    }
    .social-login {
        grid-gap: 10px;
    }
    a.forgot,.form-row .form-check input[type="checkbox"]+label {
        font-size: 15px;
    }
}

@media screen and (max-width: 375px) {
    .w3_info {
        width: 335px;
        padding: 2em 1.5em;
    }
    .footer p {
        font-size: 17px;
    }
    input[type="text"], input[type="email"], input[type="Password"] {
        font-size: 16px;
    }
}

@media screen and (max-width: 320px) {
    h1 {
        font-size: 25px;
    }

    .w3_info h2 {
        font-size: 18px;
    }

    .btn-primary {
        padding: 13px 12px;
        font-size: 13px;
    }

    input[type="text"],
    input[type="email"],
    input[type="password"] {
        font-size: 13px;
    }

    .footer p {
        font-size: 13px;
    }

    .footer p a {
        font-size: 13px;
    }
}

/** /Responsive **/

/*-- //form styling --*/
    </style>

<head>
    <title>Service login form Responsive Widget Template : W3Layouts</title>

    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- Google fonts -->
    <link href="//fonts.googleapis.com/css2?family=Kumbh+Sans:wght@300;400;700&display=swap" rel="stylesheet">

    <!-- CSS Stylesheet -->
   
</head>

<body>
    <div class="signinform">
        <h1>Service Login Form</h1>
        <!-- container -->
        <div class="container">
            <!-- main content -->
            <div class="w3l-form-info">
                <div class="w3_info">
                    <h2>Login</h2>
                    <form action="#" method="post">
                        <div class="input-group">
                            <span><i class="fas fa-user" aria-hidden="true"></i></span>
                            <input type="email" placeholder="Username or Email" required="">
                        </div>
                        <div class="input-group">
                            <span><i class="fas fa-key" aria-hidden="true"></i></span>
                            <input type="Password" placeholder="Password" required="">
                        </div>
                        <div class="form-row bottom">
                            <div class="form-check">
                                <input type="checkbox" id="remenber" name="remenber" value="remenber">
                                <label for="remenber"> Remember me?</label>
                            </div>
                            <a href="#url" class="forgot">Forgot password?</a>
                        </div>
                        
                        <a class="btn btn-primary btn-block" href="{{ url('/dashboard/')  }}" >Login</a>
                    </form>
                    <p class="continue"><span>or Login with</span></p>
                    <div class="social-login">
                        <a href="#facebook">
                            <div class="facebook">
                                <span class="fab fa-facebook-f" aria-hidden="true"></span>

                            </div>
                        </a>
                        <a href="#twitter">
                            <div class="twitter">
                                <span class="fab fa-twitter" aria-hidden="true"></span>
                            </div>
                        </a>
                        <a href="#google">
                            <div class="google">
                                <span class="fab fa-google" aria-hidden="true"></span>
                            </div>
                        </a>
                    </div>
                    <p class="account">Don't have an account? <a href="#signup">Sign up</a></p>
                </div>
            </div>
            <!-- //main content -->
        </div>
        <!-- //container -->
        <!-- footer -->
        <div class="footer">
            <p>&copy; 2020 Service login form. All Rights Reserved | Design by <a href="https://w3layouts.com/"
                    target="blank">W3layouts</a></p>
        </div>
        <!-- footer -->
    </div>

    <!-- fontawesome v5-->
    <script src="js/fontawesome.js"></script>

</body>

</html>