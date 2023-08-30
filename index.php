


<section class="luxary-trip-contact section-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-2"> </div>
                <div class="col-md-8">
                    <div class="wrapper">
                        <h3 class="contact-title text-uppercase fw-600 color-22 pos-relative playfair d-inline">Contact Us</h3>
                        <div class="abform-area clearfix pos-relative">
                            <form action="#" method="POST">
                                <div class="abinput-group name float-left">

                                    <input type="text" name="name" id="name3" placeholder="Name">
                                </div>
                                <div class="abinput-group phone float-left">

                                    <input type="tel" name="phone" id="phone3" placeholder="Mobile Number" maxlength="10" onkeypress='if((event.keyCode < 46) || (event.keyCode > 57)) event.returnValue = false'>
                                </div>

                                <div class="abinput-group email float-left">

                                    <input type="email" name="email" id="email3" placeholder="Email ID">
                                </div>

                                <div class="abinput-group subject float-left">

                                    <input type="text" name="subject" id="sub3" placeholder="Subject">
                                </div>


                                <div class="abinput-group msg">

                                    <textarea name="message" id="msg3" placeholder="Message"></textarea>
                                </div>
                                <button type="submit" class="text-uppercase fw-700 color-ff">Send Message</button>
                            </form>
                            <!--/form-->
                        </div>
                    </div>
                </div>
                <div class="col-md-2"> </div>
            </div>
            <!--/col-->
        </div>
    </div>
</section>

<?php
if ((isset($_POST['name']) && !empty($_POST['name']))
    &&   (isset($_POST['phone']) && !empty($_POST['phone']))
    && (isset($_POST['email']) && !empty($_POST['email']))
    && (isset($_POST['subject']) && !empty($_POST['subject']))
) {
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    //$subject = "";
    $message = $_POST['message'];

    $to = $email;
    $from = $email;
    $fromName = $name;


    $htmlContent .= ' 
    <html> 
    <head> 
        <title>Welcome</title> 
    </head> 
    <body> 
        <hr>
        <h2>Dear ' . $name . '</h2> <br>
        <h3>Thank you</h3> 
        <h5>Regards</h3> 

    </body> 
    </html>';

    // Set content-type header for sending HTML email 
    $headers = "MIME-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    // Additional headers 
    $headers .= 'From: ' . $fromName . '<' . $from . '>' . "\r\n";

    // Send email 
    if (mail($to, $subject, $htmlContent, $headers)) {
        echo 'Email has sent successfully.';
    } else {
        echo 'Email sending failed.';
    }

}

?>
