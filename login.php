<!DOCTYPE html>
<html dir="ltr" lang="en-US">


<?php 
require_once 'assets/includes/head.php';
?>

<body>
    <?php 
require_once 'assets/includes/preloader.php';
?>

    <?php require_once 'assets/includes/navbar.php'; ?>

    <br /><br /><br /><br /><br /><br /><br /><br />
    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="contact-panel contact-panel-4">
                    <div class="row">
                        <div class="col-md">
                            <div class="contact-card">
                                <div class="contact-body">

                                    <form class="contactForm" method="post"
                                        action="https://demo.zytheme.com/medisch/assets/php/contact.php">
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-lg-6">
                                                <input class="form-control" type="text" id="usrename" name="usrename"
                                                    placeholder="Username" required="" />
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <input class="form-control" type="password" name="password"
                                                    id="password" placeholder="Password" required="" />
                                            </div>


                                            <div class="col-12">
                                                <button
                                                    class="btn btn--secondary btn-line btn-line-before btn--block"><span
                                                        class="line"> <span> </span></span><span>Login</span></button>
                                            </div>
                                            <div class="col-12">
                                                <div class="contact-result"></div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                                <!-- End .contact-body-->
                            </div>
                        </div>

                    </div>
                </div>
                <!-- End .contact-panel-->
            </div>
        </div>
    </section>
    <br /><br /><br />
    <?php 
    require_once 'assets/includes/footer.php';
    ?>
    </div>
    <?php 
    require_once 'assets/includes/javascript.php';
    ?>
</body>


</html>