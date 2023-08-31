<!DOCTYPE html>
<html lang="en">

<head>
    <!--required meta tags-->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Contact Us - Unique Infra Projects is the best land promoters in tamilnadu | Unique Infra Projects.</title>
    <meta name="description" content="Unique Infra Projects is the best best land promoters in tamilnadu. Unique Infra Projects reaches unlimited values in a short period of time. Unique Infra Projects is one of the leading land promoters in tamilnadu.">
    <meta name="keywords" content="Unique Infra Projects , Land promoters, Building contractor.">
    <meta name="author" content="Unique Infra Projects">


</head>

<body>

    <div class="main-wrapper bg-blac">
        


        <!--header section end-->


        <!--page header section start-->
        <section class="page-header position-relative overflow-hidden ptb-120 bg-dark" style="background: url('assets/img/page-header-bg.svg')no-repeat bottom left">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
                        <h1 class="display-5 fw-bold">Contact Us</h1>
                    </div>
                </div>
                <div class="bg-circle rounded-circle circle-shape-3 position-absolute bg-dark-light right-5"></div>
            </div>
        </section>
        <!--page header section end-->

        <!--contact us promo section start-->
        <section class="contact-promo ptb-30">
            <div class="container">


                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6 mt-4 mt-lg-0">
                        <div class="contact-us-promo p-2 bg-white rounded-custom custom-shadow text-center d-flex flex-column h-100">
                            <h4 class="py-3">Unique Infra Projects</h4>
                            <div class="row">
                                <div class="col-md-3">
                                    <span class="fad fa-location-circle fa-3x text-primary"></span>
                                </div>
                                <div class="col-md-9">
                                    <div class="contact-promo-info mb-4">
                                        <h5>Contact</h5>
                                        <p>Unique Infra Projects, Annai Tower, Plot No. 12, RKV Nagar, No.1 Tollgate, Trichy - 621 216.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <span class="fad fa-envelope fa-3x text-primary"></span>
                                </div>
                                <div class="col-md-9">
                                    <div class="contact-promo-info mb-4">
                                        <h5>Email Us</h5>
                                        <p><strong>info@uniqueinfraprojects.com</strong></p>
                                        <p><strong>uniqueinfraprojects.in@gmail.com</strong></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-3">
                                    <span class="fad fa-globe fa-3x text-primary"></span>
                                </div>
                                <div class="col-md-9">
                                    <div class="contact-promo-info mb-4">
                                        <h5>Reach Us</h5>
                                        <p><strong>www.uniqueinfraprojects.com</strong></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="col-lg-5 col-md-6 mt-4 mt-lg-0">
                        <h4 class="py-3">CONTACT US</h4>
                        <form id="contact" class="register-form">
                            <div class="row">
                                <div class="col-sm-6">
                                    <label for="firstName" class="mb-1">First name <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="name" class="form-control" id="firstName" required placeholder="First name" aria-label="First name">
                                    </div>
                                </div>
                                <div class="col-sm-6 ">
                                    <label for="lastName" class="mb-1">Subject</label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="subject" class="form-control" id="subject" placeholder="Subject" aria-label=Subject>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="phone" class="mb-1">Phone <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="text" name="phone" class="form-control" id="phone" required placeholder="Phone" aria-label="Phone">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <label for="email" class="mb-1">Email<span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <input type="email" name="email" class="form-control" id="email" required placeholder="Email" aria-label="Email">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <label for="yourMessage" class="mb-1">Message <span class="text-danger">*</span></label>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control" name="message" id="yourMessage" required placeholder="How can we help you?" style="height: 120px"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Get in Touch</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!--contact us promo section end-->

    </div>


    <!--build:js-->
    <script type="text/javascript">
        $("#contact").submit(function(e) {
            e.preventDefault();
            var formdata = $(this);
            $.ajax({

                url: 'contact.php',
                type: 'POST',
                data: formdata.serialize(),
                cache: false,
                success: function(reply) {
                    alert(reply);
                }

            });
            return false;
        });
    </script>

    <!--endbuild-->
</body>

</html>
