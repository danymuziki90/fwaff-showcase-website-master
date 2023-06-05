<?php include "header.php"; ?>
<!-- ***** Breadcrumb Area Start ***** -->
<section class="section breadcrumb-areaa overlay-dark d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Breamcrumb Content -->
        <div class="breadcrumb-content d-flex flex-column align-items-center text-center">
          <h2 class="text-white text-uppercase mb-3">About Us</h2>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Breadcrumb Area End ***** -->

<!-- ***** About Area Start ***** -->



<section class="section about-area ">
  <div class="container">
    <div class='  sm:pt-20 justify-between items-center w-full max-h-full md:max-w-[1240px] mx-auto  '>
      <img src="assets/img/about/GQLR6101.JPG" alt="" class="groupimg">
      <h1 class='ffort1' data-aos="fade-up">Fort Worth
        African Funeral Foundation</h1>

      <p class='text-lg md:text-3xl md:pt-10' data-aos="fade-up"> Our mission here is to provide guidance to
        our
        community, Support in any situation, Personal growth, educational etc... Which is crucial to adapt in
        this
        country. And that is what FWAYG want to provide for our community</p>
    </div>

    <h2 class='ffort10 font-bold font-bold text-3xl py-2 text-[#000000] ' data-aos="fade-up">FWAFF Concept</h2>
    <p class='text-lg  md:text-xl' data-aos="fade-up"> We have seen how people come to America and loose
      they are
      way
      in the process. Which I myself is one of them. And that is one of the thing that we will mostly focus
      about,
      helping
      others by :<br />
      -Provide guidance in the ways that our community has gain knowledge for the shot period that we have been
      here.
      <br />
      -We will guide our community in different ways of life.

    </p>

    <h2 class='ffort10 font-bold font-bold text-3xl py-2 text-[#000000]  ' data-aos="fade-up">FWAFF’s long term mission
    </h2>
    <p class='text-lg  md:text-xl' data-aos="fade-up">
      Our mission is to make sure that everyone that get the opportunity to be part of our community should rip
      the
      benefit that comes with it. Such as personal grow, be educated in financial literacy, etc. <br /> Most of
      us that
      come here get influence by the wrong people and that change the course of our lives.
      <br /> <span class='text-blue-400'>FWAFF</span> want to change that in our community : <br /> <br />
      <span>
        - We will provide personal growth physically and mentally to our community. <br />
        - We will guide our community on the road of success. <br />
        - We will provide educational support to young, adult, and parents.
      </span>
    </p>

    <h2 class='ffort10 font-bold   text-3xl py-2 text-[#000000] ' data-aos="fade-up">Opportunities</h2>
    <p class='mb-10 text-lg  md:text-xl' data-aos="fade-up">
      The problem that we face now in our community is luck of information and guidance and that’s what <span
        class='text-blue-400 font-bold'> FWAFF</span> is bring to our community.
      <span>One of the problem that we have is adaptation. <br />
        The second problem is financial literacy
        The third problem is personal growth
        We are the proof living of our community and young motivated individuals that want to see our community
        successes.
      </span>

    </p>
  </div>
</section>


<!-- ***** About Area End ***** -->

<!--====== Contact Area Start ======-->
<section id="contact " class="contact-area ptb_100 ">
  <div class="container border-2 pt-5 " data-aos="fade-up">
    <div class="row justify-content-between align-items-center " data-aos="fade-up">
      <div class="col-12 col-lg-5">
        <!-- Section Heading -->
        <div class="section-heading text-center mb-3">
          <h2><?php print $contact_title ?></h2>
          <p class="d-none d-sm-block mt-4">If you have a question, comment or idea, please fill in the form or
            call us
            and
            we will get back to you as soon as posssible</p>
        </div>
        <!-- Contact Us -->
        <div class="contact-us">
          <ul>
            <!-- Contact Info -->
            <li class="contact-info color-1 bg-hover active hover-bottom text-center p-5 m-3">
              <span><i class="fas fa-mobile-alt fa-3x"></i></span>
              <a class="d-block my-2" href="tel:+1(817)350-9970">
                <h3>+1(817)350-9970</h3>
              </a>

            </li>
            <!-- Contact Info -->
            <li class="contact-info color-3 bg-hover active hover-bottom text-center p-5 m-3">
              <span><i class="fas fa-envelope-open-text fa-3x"></i></span>
              <a class="d-none d-sm-block my-2" href="mailto:administration@fwaff.org">
                <h3>administration@fwaff.org</h3>
              </a>
              <a class="d-block d-sm-none my-2" href="administration@fwaff.org">
                <h3>administration@fwaff.org</h3>
              </a>

            </li>
          </ul>
        </div>
      </div>
      <div class="col-12 col-lg-6 pt-4 pt-lg-0">
        <!-- Contact Box -->
        <div class="contact-box text-center">
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
                            $recipient="administration@fwaff.org";

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

          <form action="" method="post" enctype="multipart/form-data">
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