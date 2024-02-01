
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include __DIR__ .'/../assets/css/common/global_css_cdn.php';
    ?>
</head>
<body>
    
    <div class="container-fluid p-0 sidebar_container" style="overflow:hidden;">
        <div class="row sidebar_row">
            <div class="sidebar">

                    <div class="side_logo">
                        <div class="logo_side">
                        <img src="../assets/media/images/sidebar_page_images/white-logo.png" alt="no logo image" class="logo_left_img object_fit_contain"> 
                        </div>
                        <div class="close_btn">
                         <ion-icon name="close"></ion-icon>
                          </div>
                    </div>
                    <div class="menu">
                        <div class="menu_items">

                            <div class="item">
                                <a href="#">
                                    <ion-icon name="desktop-outline"></ion-icon>
                                    Dashboard
                                </a>
                            </div>
                            
                            <div class="item">
                                <a href="#">
                                <ion-icon name="ticket"></ion-icon>
                                    Tickets
                                </a>
                            </div>
                            
                            <div class="item">
                                <a href="#">
                                 <ion-icon name="people"></ion-icon>
                                    Users
                                </a>
                            </div>
                        </div>
                        <div class="user_profile_container">
                            <div class="user_profile">
                                <div class="user_img">
                                 <img class="object_fit_cover" src="../assets/media/images/sidebar_page_images/user.png" alt="no image">
                                </div>
                                <div class="user_name">
                                    <a href="#">Boss</a>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>
    </div>
<?php
    include __DIR__ .'/../assets/js/common/global_js_cdn.php';
    ?>
   
</body>
</html>