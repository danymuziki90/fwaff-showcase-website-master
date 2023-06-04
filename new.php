<?php include "header.php";?>
<section class="section breadcrumb-area overlay-dark d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <!-- Breamcrumb Content -->
        <div class="breadcrumb-content text-center">
          <h2 class="text-white text-uppercase mb-3">Our Past Publications</h2>
          <ol class="breadcrumb d-flex justify-content-center">
            <li class="breadcrumb-item"><a class="text-uppercase text-white" href="index.html">Home</a></li>

            <li class="breadcrumb-item text-white active">Our Blog</li>
          </ol>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- ***** Breadcrumb Area End ***** -->


<!-- ***** Blog Area Start ***** -->
<section id="portfolio" class="portfolio-area overflow-hidden ptb_100">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-10 col-lg-7">
        <!-- Section Heading -->
        <div class="section-heading text-center">
          <h2>Our recent articles</h2>
        </div>
      </div>
    </div>
    <!-- Portfolio Items -->
    <div class="row items ">

      <?php
				   $q="SELECT * FROM  blog ORDER BY id DESC";


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

                            <br/><br/>
                        </div>
                        </div>
                        ";
                    }
                ?>

    </div>


  </div>
</section>
<!-- ***** Blog Area End ***** -->

<!-- ***** Price Plan Area Start ***** -->

<!-- ***** Price Plan Area End ***** -->



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

<?php include "footer.php"; ?>