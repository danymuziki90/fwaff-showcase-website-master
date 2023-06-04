<?php include "header.php"; ?>
<!-- ***** Welcome Area Start ***** -->
<section id="home" class="section welcome-area bg-overlay overflow-hidden d-flex align-items-center ">
  <div class="container">
    <div class="row align-items-center">
      <!-- Welcome Intro Start -->
      <div class="col-12 col-md-7">
        <?php
                        $rr=mysqli_query($con,"SELECT * FROM static");
                        $r = mysqli_fetch_row($rr);
                        $stitle = $r[1];
                        $stext=$r[2];
                    ?>

        <div class="welcome-intro">
          <h1 class="text-white" data-aos="fade-up">Why Fort Worth Africa Funeral Foundation?</h1>
          <p class="text-white my-4  " data-aos="fade-up">Our mission is to make sure that opportunity to be part of our
            community should
            rip
            benefit that comes with it. Such as personal grow, be educated in financial literacy, etc.</p>
          <!-- Buttons -->
          <div class="button-group" data-aos="fade-up">
            <a href="about.php" class="btn btn-bordered-white">Read More</a>
            <a href="contact.php" class="btn btn-bordered-white d-none d-sm-inline-block">Contact Us</a>
          </div>
        </div>
      </div>

      <div class="col-12 col-md-5" data-aos="fade-up">
        <!-- Welcome Thumb -->

      </div>
    </div>
  </div>
  <!-- Shape Bottom -->
  <div class="shape shape-bottom ">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 100" preserveAspectRatio="none" fill="#FFFFFF">
      <path class="shape-fill" d="M421.9,6.5c22.6-2.5,51.5,0.4,75.5,5.3c23.6,4.9,70.9,23.5,100.5,35.7c75.8,32.2,133.7,44.5,192.6,49.7
        c23.6,2.1,48.7,3.5,103.4-2.5c54.7-6,106.2-25.6,106.2-25.6V0H0v30.3c0,0,72,32.6,158.4,30.5c39.2-0.7,92.8-6.7,134-22.4
        c21.2-8.1,52.2-18.2,79.7-24.2C399.3,7.9,411.6,7.5,421.9,6.5z"></path>
    </svg>
  </div>
</section>
<!-- ***** Welcome Area End ***** -->

<!-- ***** Promo Area Start ***** -->
<section class="section promo-area pt-5" data-aos="fade-up">
  <div class="containerr  container">


    <div class="card " data-aos="fade-up">
      <img src="./assets/img/about/concept.JPG" alt="" class="headerr">

      <div class=" concept  text-center ">
        <h2>Concept</h2>
        <p>Our mission is to make sure that everyone that get the opportunity to be part of our community should
          rip
          the
          benefit that comes with it. Such as personal grow, be educated in financial literacy, etc.
        <div class="button-group pb-2" data-aos="fade-up">
          <a href="about.php" class="btn btn-bordered-white ">Learn More</a>
        </div>
        </p>
      </div>
    </div>

    <div class="card " data-aos="fade-up">

      <img src="./assets/img/about/mission.JPG" alt="" class="headerr">

      <div class=" concept  text-center">
        <h2>FWAFF’s long term mission</h2>
        <p>
          We have seen how people come to America and loose they are way in the process. Which I myself is one of
          them. And that is one of the thing that we will mostly focus about
        <div class="button-group" data-aos="fade-up">
          <a href="about.php" class="btn btn-bordered-white ">Learn More</a>
        </div>
        </p>
      </div>
    </div>

    <div class="card" data-aos="fade-up">
      <img src="./assets/img/about/opportinuty.JPG" alt="" class="headerr">

      <div class=" concept  text-center">
        <h2>Opportunities</h2>
        <p>
          The problem that we face now in our community is luck of information and guidance and that’s what FWAFF
          is
          bring to our community.
        <div class="button-group" data-aos="fade-up">
          <a href="about.php" class="btn btn-bordered-white ">Learn More</a>
        </div>
        </p>

      </div>
    </div>
  </div>

</section>



<!-- ***** Blog Area Start ***** -->
<section id="portfolio" class="portfolio-area overflow-hidden ptb_100 pb-4">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-7" data-aos="fade-up">
        <!-- Section Heading -->
        <div class="section-heading text-center">
          <h2>our recent articles</h2>
        </div>
      </div>
    </div>
    <!-- Portfolio Items -->
    <div class="row items" data-aos="fade-up">

      <?php
				   $q="SELECT * FROM  blog ORDER BY id DESC LIMIT 3";


                    $r123 = mysqli_query($con,$q);

                    while($ro = mysqli_fetch_array($r123))
                    {

                        $id="$ro[id]";
                        $port_title="$ro[blog_title]";
                        $port_desc="$ro[blog_desc]";
                        $port_detail="$ro[blog_detail]";
                        $ufile="$ro[ufile]";

                        print "
                        <div class='col-12 col-sm-6 col-lg-4 portfolio-item' data-groups='['marketing','development']'>
                        <!-- Single Case Studies -->
                        <div class='single-case-studies'>
                            <!-- Case Studies Thumb -->
                            <a href='portdetail.php?id=$id'>
                                <img src='dashboard/uploads/blog/$ufile' alt=''>
                            </a>
                            <!-- Case Studies Overlay -->
                            <a href='portdetail.php?id=$id' class='case-studies-overlay'>
                                <!-- Overlay Text -->
                                <span class='overlay-text text-center p-3'>
                                    <h3 class='text-white mb-3'>$port_title</h3>
                                    <p class='text-white'>$port_desc.</p>
                                </span>
                            </a>
                        </div>
                        <div>
                            <a href='portdetail.php?id=$id'>
                                <h3 class='mb-3'>$port_title</h3>
                                <p>$port_desc.</p>
                            </a>
                        </div>
                        </div>
                        ";
                    }
                ?>

    </div>
    <div class="row justify-content-center" data-aos="fade-up">
      <a href="new.php" class="btn  btn-bordered mt-4">View More</a>
    </div>
  </div>
</section>
<!-- ***** Blog Area End ***** -->

<!-- ***** Price Plan Area Start ***** -->

<!-- ***** Price Plan Area End ***** -->

<!-- ***** Team Area Start ***** -->
<section id="review" class="section review-area bg-overlay pt-2 pb-4 ">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-7">
        <!-- Section Heading -->


        <div class="section-heading  text-center m-4" data-aos="fade-up">
          <h2 class="text-white">Our Team</h2>
          <p class="text-white  d-sm-block mt-4">We have a wonderfull team of wonderfull
            persons with great personnality and great integrity, take a tour to see them below.</p>
        </div>
      </div>
    </div>

    <div class="row" data-aos="fade-up">
      <div class="client-reviews owl-carousel" data-aos="fade-up">

        <div class="cardd" data-aos="fade-up">
          <img src="./assets/img/team/serge.JPG" alt="" class="cardimg">
          <div class=" conceptt text-center">
            <h2>SERGE</h2>
            <P>President</P>
          </div>
        </div>

        <div class="cardd" data-aos="fade-up">
          <img src="./assets/img/team/suzy.JPG" alt="" class="cardimg">
          <div class=" conceptt  text-center">
            <h2>SUZY</h2>
            <p>Vice President</p>
          </div>
        </div>

        <div class="cardd" data-aos="fade-up">
          <img src="./assets/img/team/ahadi.JPG" alt="" class="cardimg">
          <div class=" conceptt  text-center">
            <h2>AHADI</h2>
            <p>Communication and Affairs</p>
          </div>
        </div>

        <div class="cardd" data-aos="fade-up">
          <img src="./assets/img/team/espoir.JPG" alt="" class="cardimg">
          <div class=" conceptt text-center">
            <h2>ESPOIR</h2>
            <p>Representative</p>
          </div>
        </div>

        <div class="cardd" data-aos="fade-up">
          <img src="./assets/img/team/esther.JPG" alt="" class="cardimg">
          <div class=" conceptt  text-center">
            <h2>ESTHER</h2>
            <p>Event Organizer</p>
          </div>
        </div>

        <div class="cardd" data-aos="fade-up">
          <img src="./assets/img/team/Petro.JPG" alt="" class="cardimg">
          <div class=" conceptt text-center">
            <h2>PETRO</h2>
            <p>Treasure
            </p>
          </div>
        </div>



      </div>

    </div>
  </div>
</section>
<!-- ***** Review Area End ***** -->

<!--====== Contact Area Start ======-->
<section id="contact" class="contact-area pt-5  pb-5">
  <div class="container">
    <div class="row justify-content-between align-items-center" data-aos="fade-up">
      <div class="col-12 col-lg-5">
        <!-- Section Heading -->
        <div class="section-heading text-center " data-aos="fade-up">
          <h2><?php print $contact_title ?></h2>
          <p class="d-none d-sm-block mt-4" data-aos="fade-up">If you have a question, comment or idea, please fill in
            the form or call us
            and
            we will get back to you as soon as posssible</p>
        </div>
        <!-- Contact Us -->
        <div class="contact-us" data-aos="fade-up">
          <ul>
            <!-- Contact Info -->
            <li class="contact-info color-1 bg-hover active hover-bottom text-center p-5 m-3">
              <span><i class="fas fa-mobile-alt fa-3x"></i></span>
              <a class="d-block my-2" href="tel:+1(817)350-9970">
                <h3>+1(817)350-9970</h3>
              </a>

            </li>
            <!-- Contact Info -->
            <li class="contact-info color-3 bg-hover active hover-bottom text-center p-5 m-3" data-aos="fade-up">
              <span><i class="fas fa-envelope-open-text fa-3x"></i></span>
              <a class="d-none d-sm-block my-2" href="mailto:administration@fwaff.org">
                <h3>administration@fwaff.org</h3>
              </a>
              <a class="d-block d-sm-none my-2" href="mailto:administration@fwaff.org">
                <h3>administration@fwaff.org</h3>
              </a>

            </li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-lg-6 pt-4 pt-lg-0">
        <!-- Contact Box -->
        <div class="contact-box text-center" data-aos="fade-up">
          <!-- Contact Form -->
          <?php
                             $status = "OK"; //initial status
                            $msg="";
                                    if(ISSET($_POST['save'])){
                            $name = mysqli_real_escape_string($con,$_POST['name']);
                            $email = mysqli_real_escape_string($con,$_POST['email']);
                            $phone = mysqli_real_escape_string($con,$_POST['phone']);
                            $message = mysqli_real_escape_string($con,$_POST['message']);

                            if ( strlen($name) < 5 ){
                            $msg=$msg."Name Must Be More Than 5 Char Length.<BR>";
                            $status= "NOTOK";}
                            if ( strlen($email) < 9 ){
                            $msg=$msg."Email Must Be More Than 10 Char Length.<BR>";
                            $status= "NOTOK";}
                            if ( strlen($message) < 10 ){
                                $msg=$msg."Message Must Be More Than 10 Char Length.<BR>";
                                $status= "NOTOK";}

                            if ( strlen($phone) < 8 ){
                            $msg=$msg."Phone Must Be More Than 8 Char Length.<BR>";
                            $status= "NOTOK";}

                            if($status=="OK")
                            {


                            // =================================================================================
                            // CHANGE TO THE COMPANY MAIL HERE (THE ONE WHICH WILL BE RECEIVING THE CONTACT FORM)
                            // =================================================================================
                            $recipient="mail@company.com";

                            $formcontent="NAME:$name \n EMAIL: $email  \n PHONE: $phone  \n MESSAGE: $message";

                            $subject = "New Enquiry from FWAFF Website";
                            $mailheader = "From: noreply@fwaff.com \r\n";
                            $result= mail($recipient, $subject, $formcontent);

                                    if($result){
                                            $errormsg= "
                            <div class='alert alert-success alert-dismissible alert-outline fade show'>
                                            Enquiry Sent Successfully. We shall get back to you ASAP.
                                                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                                </div>
                            "; //printing error if found in validation

                                    }
                                }

                                    elseif ($status!=="OK") {
                                        $errormsg= "
                            <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                                ".$msg." <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button> </div>"; //printing error if found in validation


                                }
                                else{
                                        $errormsg= "
                                    <div class='alert alert-danger alert-dismissible alert-outline fade show'>
                                            Some Technical Glitch Is There. Please Try Again Later Or Ask Admin For Help.
                                            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
                                            </div>"; //printing error if found in validation


                                    }
                                        }
                                        ?>
          <?php
                            if($_SERVER['REQUEST_METHOD'] == 'POST')
                                                    {
                                                    print $errormsg;
                                                    }
                            ?>

          <form action="" method="post" enctype="multipart/form-data" data-aos="fade-up">
            <div class="row">
              <div class="col-12">
                <div class="form-group">
                  <input type="text" class="form-control" name="name" placeholder="Name" required="required">
                </div>

                <div class="form-group">
                  <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                </div>
                <div class="form-group">
                  <input type="text" class="form-control" name="phone" placeholder="Phone" required="required">
                </div>
              </div>
              <div class="col-12">
                <div class="form-group">
                  <textarea class="form-control" name="message" placeholder="Message" required="required"></textarea>
                </div>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-bordered active btn-block mt-3" name="save"><span
                    class="text-white pr-3"><i class="fas fa-paper-plane"></i></span>Send Message</button>
              </div>
            </div>
          </form>
          <p class="form-message"></p>
        </div>
      </div>
    </div>
  </div>
</section>
<!--====== Contact Area End ======-->



<?php include "footer.php"; ?>