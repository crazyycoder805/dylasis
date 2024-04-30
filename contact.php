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

    <!--
      ============================
      Google Maps Section
      ============================
      -->
    <section class="map map-2">
        <iframe src="https://maps.google.com/maps?q=Pioneer%20Works&amp;t=m&amp;z=13&amp;output=embed&amp;iwloc=near"
            width="600" height="450" style="border:0;"></iframe>
    </section>
    <!--
      ============================
      Contact Info Section
      ============================
      -->
    <section class="contact-info">
        <div class="container">
            <div class="row">
                <div class="contact-panel contact-panel-4">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="contact-card">
                                <div class="contact-body">
                                    <h5 class="card-heading">How can we help?</h5>
                                    <p class="card-desc">Please feel welcome to contact our friendly reception staff
                                        with any general or medical enquiry. Our doctors will receive or return calls.
                                    </p>
                                    <form class="contactForm" method="post"
                                        action="https://demo.zytheme.com/medisch/assets/php/contact.php">
                                        <div class="row">
                                            <div class="col-12 col-md-12 col-lg-6">
                                                <input class="form-control" type="text" name="contact-name"
                                                    placeholder="Name" required="" />
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <input class="form-control" type="text" name="contact-email"
                                                    placeholder="Email" required="" />
                                            </div>
                                            <div class="col-12 col-md-6">
                                                <div class="select-holder">
                                                    <select class="form-control">
                                                        <option value="default">subject</option>
                                                        <option value="AL">how to eat healthy ?</option>
                                                        <option value="AK">wearing a mask importance </option>
                                                    </select>
                                                    <div class="badge">subject</div>
                                                </div>
                                            </div>
                                            <div class="col-12 col-md-6 col-lg-6">
                                                <input class="form-control" type="text" name="contact-phone"
                                                    placeholder="Phone" required="" />
                                            </div>
                                            <div class="col-12">
                                                <textarea class="form-control" name="contact-message" cols="30" rows="2"
                                                    placeholder="message" required=""></textarea>
                                            </div>
                                            <div class="col-12">
                                                <button
                                                    class="btn btn--secondary btn-line btn-line-before btn--block"><span
                                                        class="line"> <span> </span></span><span>submit
                                                        request</span></button>
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
                        <div class="col-12 col-lg-5 offset-lg-1 img-card-holder">
                            <div class="img-card img-card-2 bg-overlay bg-overlay-theme">
                                <div class="bg-section"><img src="assets/images/contact/2.jpg" alt="image" /></div>
                                <div class="card-content">
                                    <h3>delivering the best care for family</h3>
                                    <div>
                                        <p>With modern, busy lifestyles, it’s easy to neglect your health as you put
                                            everyone needs first. So, we’re here for your family.</p><a
                                            class="btn btn--white btn-line btn-line-after" href="#"><span>find a
                                                doctor</span><span class="line"><span></span></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End .contact-panel-->
            </div>
        </div>
    </section>
    <!--
      ============================
      Donations #1 Section
      ============================
      -->
    <section class="donations" id="donations-1">
        <div class="container">
            <div class="heading heading-4">
                <div class="row">
                    <div class="col-12 col-lg-5">
                        <h2 class="heading-title">Helping Patients From Around the Globe!!</h2>
                        <div class="img-hotspot">
                            <div class="img-hotspot-wrap">
                                <div class="img-hotspot-bg"> <img src="assets/images/background/world-map.png"
                                        alt="image" /></div>
                                <div class="img-hotspot-pointers">
                                    <div class="img-hotspot-pointer" data-spot-x="15%" data-spot-y="29%"><img
                                            src="assets/images/background/map-pointer.png" alt="pointer" />
                                        <div class="info right" data-info-x="18px" data-info-y="-97px"><span>2307
                                                Beverley Rd Brooklyn, New York 11226 U.S.</span></div>
                                    </div>
                                    <div class="img-hotspot-pointer" data-spot-x="48%" data-spot-y="48%"><img
                                            src="assets/images/background/map-pointer.png" alt="pointer" />
                                        <div class="info left" data-info-x="-160px" data-info-y="-97px"><span>2307
                                                Beverley Rd Brooklyn, New York 11226 U.S.</span></div>
                                    </div>
                                    <div class="img-hotspot-pointer" data-spot-x="68%" data-spot-y="23%"><img
                                            src="assets/images/background/map-pointer.png" alt="pointer" />
                                        <div class="info left" data-info-x="-160px" data-info-y="-97px"><span>2307
                                                Beverley Rd Brooklyn, New York 11226 U.S.</span></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 offset-lg-1">
                        <p class="paragraph">Our staff strives to make each interaction with patients clear, concise,
                            and <Br> inviting. Support them important work of Medicsh Hospital by making a <Br>
                            much-needed donation today.</p>
                        <p class="heading-desc">We will work with you to develop individualised care plans, including
                            management of chronic diseases. If we cannot assist, we can provide referrals or advice
                            about the type of practitioner you require. We treat all enquiries sensitively and in the
                            strictest confidence.</p>
                        <div class="accordion" id="accordion03">
                            <div class="card">
                                <div class="card-heading"><a class="card-link collapsed" data-hover=""
                                        data-bs-toggle="collapse" role="button" aria-expanded="false"
                                        aria-controls="collapse01-1" href="#collapse01-1">Which Plan Is Right For
                                        Me?</a></div>
                                <div class="collapse" id="collapse01-1" data-bs-parent="#accordion03">
                                    <div class="card-body">Our staff strives to make each interaction with patients
                                        clear, concise, and inviting. Support the important work of Medicsh Hospital by
                                        making a much-needed donation today. We will work with you to develop
                                        individualised care plans, including management of chronic diseases.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading"><a class="card-link collapsed" data-hover=""
                                        data-bs-toggle="collapse" role="button" aria-expanded="false"
                                        aria-controls="collapse01-2" href="#collapse01-2">Do I have to commit to a
                                        contract? </a></div>
                                <div class="collapse" id="collapse01-2" data-bs-parent="#accordion03">
                                    <div class="card-body">Our staff strives to make each interaction with patients
                                        clear, concise, and inviting. Support the important work of Medicsh Hospital by
                                        making a much-needed donation today. We will work with you to develop
                                        individualised care plans, including management of chronic diseases.</div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-heading"><a class="card-link  " data-hover="" data-bs-toggle="collapse"
                                        role="button" aria-expanded="false" aria-controls="collapse01-3"
                                        href="#collapse01-3">What Payment Methods Are Available? </a></div>
                                <div class="collapse show" id="collapse01-3" data-bs-parent="#accordion03">
                                    <div class="card-body">Our staff strives to make each interaction with patients
                                        clear, concise, and inviting. Support the important work of Medicsh Hospital by
                                        making a much-needed donation today. We will work with you to develop
                                        individualised care plans, including management of chronic diseases.</div>
                                </div>
                            </div>
                        </div><a class="btn btn--primary" href="contact.php">make a gift <i
                                class="fas fa-heart"></i></a>
                    </div>
                </div>
                <!-- End .row-->
            </div>
            <!-- End .heading-->
        </div>
        <!-- End .container-->
    </section>
    <!--
      ============================
      Footer #01
      ============================
      -->
    <?php 
    require_once 'assets/includes/footer.php';
    ?>
    </div>
    <?php 
    require_once 'assets/includes/javascript.php';
    ?>
</body>


</html>