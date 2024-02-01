<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include __DIR__ .'/assets/css/common/global_css_cdn.php';
    ?>
</head>
<body>
    
    <div class="container-fluid p-0 login-page-container" style="overflow:hidden;">
        <div class="row">
            <div class="card-container col-lg-7 d-flex align-items-center justify-content-center min-vh-100">
                <div class="card">
                    <div class="card-title text-center">
                        <h2 class="card-header">Login</h2>
                        <div class="underline"></div>
                    </div>
                    <form action="" method="post" class="login-form"  enctype="multipart/form-data" id="login_form" autocomplete="off" novalidate="novalidate">
                        <div class="form-group mb-3 input-group " >
                            <label for="Email">Email <span class="required">*</span></label>
                            <input type="email" name="email" data-name="Email" id="email" class="form-input email-input" placeholder="Enter Email">
                            <p>Enter the valid mail id</p>
                        </div>
                        <div class="form-group mb-3 input-group ">
                            <label for="password">Password <span class="required">*</span></label>
                            <input type="password" name="password" data-name="Password" id="password" class="form-input password-input" placeholder="Enter Password">
                            <p>Enter the valid password</p>
                        </div>
                        <div class=" input-group">
                            <label class="showLabel">
                            <input type="checkbox" id="show"> 
                            Show Password
                            </label>
                        </div>
                        <div class="button-div text-center mt-5">
                            <input type="submit" class="primary_button bright-text" id="submit-button" name="submit" value="Login">
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-5 d-lg-block d-none" style="max-height:100vh;">
<img class="elephant-img" src="assets/media/images/login_page_media/login_page_images/elephant.png" alt="elephant-image">
                
            </div>
        </div>
    </div>
<?php
    include __DIR__ .'/assets/js/common/global_js_cdn.php';
    ?>
   


</body>
</html>