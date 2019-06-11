<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="ICAN online e-learning website for ICAN students.">
    <meta name="keywords" content="ICAN, Account, Accounting, Lecture, e-Learning">
    <meta name="author" content="Uwem slim Udoh">


    <!-- favicon links-->
    <link rel="shortcut icon" href="images/favicon/favicon.png">
    <link rel="apple-touch-icon" sizes="57x57" href="images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="images/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192"  href="images/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="images/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="images/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon/favicon-16x16.png">
    <link rel="manifest" href="images/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>ICANLECTURES.COM - Contact Us</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css" >

    <!-- style sheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/slider.css">
    <link rel="stylesheet" type="text/css" href="css/modal.css">


    <!-- font-awesome -->
    <link rel="stylesheet" href="font/css/font-awesome.min.css">

    <!-- font -->
    <link href="https://fonts.googleapis.com/css?family=Exo+2" rel="stylesheet">



    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    <div class="overlay">


        <?php
          include "inc/navin.php";
        ?>

        <div class="contact-banner">
          <div class="container">
            <div class="row">
              <div class="col-md-2">
                <img src="images/contact.png" alt="">
              </div>
              <div class="col-md-10">
                <h4 style="color:#fff">
                  <a href="index.php">HOME</a> <i class="fa fa-arrows-h"></i> CONTACT US
                </h4>
              </div>
            </div>
          </div>
        </div>


         <div class="section-4">
        <div class="container section4-bg" style="height: 100%;min-height: 500px;">
          <div class="row" style="padding: 0 20px;">
            <div class="col-md-12 text-center">
              <h2>CONTACT US</h2>
            </div>




            <div class="col-md-12">
              Hi, already an ICANLECTURES.COM student? Do you have questions, suggestions, or issues about a specific course? Please send it to info@icanlectures.com.

              Not a student yet and have a general question about ICANLECTURES.COM? Please visit our FAQ’s. Still need help or want to give us general feedback (which we want), contact us below.
            </div>
            <div class="row">
              <div class="col-md-6">


                <div class="contact-box">

                  <div class="col-md-12 text-center">
                    <h4>SEND US A MESSAGE</h4>
                  </div>

                  <form method="post" action="">

                    <div class="contact-div">
                      <div class="contact-icon">
                        <img src="images/contname.png" alt="">
                      </div>
                      <div class="contact-input">
                        <input type="text" name="" class="contactinput" placeholder="Full name" required>
                      </div>
                    </div>

                    <div class="contact-div">
                      <div class="contact-icon">
                        <img src="images/contmail.png" alt="">
                      </div>
                      <div class="contact-input">
                        <input type="text" name="" class="contactinput" placeholder="Email" id="email" onblur="contactEmailValidate()" required>
                      </div>
                    </div>
                    <div class="text-center" id="err-email" style="font-size: 10px;color: red;"></div>

                    <div class="contact-div">
                      <div class="contact-icon">
                        <img src="images/contphone.png" alt="">
                      </div>
                      <div class="contact-input">
                        <input type="text" name="" class="contactinput" placeholder="Phone" id="phone" onblur="contactPhoneValidate()" required>
                      </div>
                    </div>
                    <div class="text-center" id="err-phone" style="font-size: 10px;color: red;"></div>

                    <textarea class="contact-text"  placeholder="Enter message"></textarea>

                    <div class="contact-div">
                      <input type="submit" name="" class="contact-btn">
                    </div>

                  </form>


                </div>
              </div>
              <div class="col-md-6">


                <div class="contact-box">

                  <div class="col-md-12 text-center">
                    <h4>CONTACT US</h4>
                  </div>

                  <div class="connect">
                    <div class="connect-icon">
                      <img src="images/location.png" alt="">
                    </div>
                    <div class="connect-text">
                      3rd Floor, Engineering Building, 1, Engineering Close, NEC Building, Off Idowu Taylor Street, Victoria Island, Lagos, Nigeria.
                    </div>
                  </div>

                  <div class="connect">
                    <div class="connect-icon">
                      <img src="images/contemail.png" alt="">
                    </div>
                    <div class="connect-text">
                      info@icancertifications.com
                    </div>
                  </div>

                  <div class="connect">
                    <div class="connect-icon">
                      <img src="images/phone.png" alt="">
                    </div>
                    <div class="connect-text">
                      (+234)-1-013429741<br>
                      (+234)-1-013429741
                    </div>
                  </div>

                </div>

              </div>
            </div>

          </div>

        </div>
      </div>

      <?php
        include "inc/footer.php";
      ?>
