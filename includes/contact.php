<?php
if (isset($_POST['contactFormSubmit'])) {
    $name = $_POST['name'];
    $subject = $_POST['subject'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];
    $subject = 'Website Feedback';

    $msg = "<table width='100%' cellpadding='3' border='0'><tr><td>Name</td><td>" . $name . "</td></tr><tr><td>Subject</td><td>" . $subject . "</td></tr><tr><td>Email</td><td>" . $email . "</td></tr><tr><td>Comment</td><td>" . $comment . "</td></tr></table>";
    if (sendEmail(SITE_EMAIL, $subject, $msg, $email, $email)) {
        $email_sent = true;
    } else {
        $email_error = true;
    }
}
?>
<?php
                if ($email_sent) {
                    ?>
                    <div style="position: absolute;
                         right: 0;
                         z-index: 9;
                         width: 260px;
                         top: 56px;
                         " class="alert alert-success" class="close" data-dismiss="alert" aria-label="Close">Email Sent Successfully.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php
                } elseif ($email_error) {
                    ?>
                    <div style="position: absolute;
                         right: 0;
                         z-index: 9;
                         width: 260px;
                         top: 56px;
                         " class="alert alert-danger" class="close" data-dismiss="alert" aria-label="Close">Email Not sent.<button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php } ?>
<div class="amr-section-19">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="googlemap">  
                    <?php echo $pageShortContents; ?>
                </div><!--googlemap-->

            </div><!--Col-12-->



            <div class="col-md-8">
                <div class="contact-form-sdmt">

                    <h2 class="section_title_black">Share your words</h2>

                    <form role="form" action="" data-ajax="1" method="POST" class="form-footer">
                        <div class="col-md">
                            <label class="label">Name</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" name="name" class="form-control" placeholder="Username" required="" title="Please Fill out this Field">
                            </div>
                        </div>

                        <div class="col-md">
                            <label class="label">Email</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input type="email" class="form-control" name="email" id="suscribe_email" placeholder="Email" title="Ex: name@company.com" required="">
                            </div>
                        </div>


                        <div class="col-md">
                            <label class="label">Subject</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                                <input type="text" name="subject" class="form-control" placeholder="subject">
                            </div>
                        </div>

                        <div class="col-md">
                            <label class="label">Message</label>

                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-comment"></i></span>
                                <textarea class="form-control ht-auto" rows="6" name="content" id="suscribe_message" placeholder="Message" required=""></textarea>
                            </div>
                        </div>


                        <div class="col-md">
                            <button type="submit" name="contactFormSubmit" class="btn-ultra" data-loading-text="Sending..."> Send
                            </button>

                        </div>


                    </form>
                </div><!--contact-form-sdmt-->
            </div>

            <div class="col-md-4">
                <div class="">
                    <h2 class="section_title_black">We are here</h2>

                    <div class="textwidget">
                        <?php echo $pageContents; ?>
                    </div>
                </div>

            </div><!--col-4-->


        </div><!--row-->
    </div><!--container-->
</div><!--amr-section-19-->