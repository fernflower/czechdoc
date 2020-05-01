<?php
    // include i18n class and initialize it
    require_once '../vendor/philipp15b/php-i18n/i18n.class.php';
    $i18n = new i18n('lang/lang_{LANGUAGE}.ini', 'langcache', 'ru');
    # XXX FIXME A quick hack to set default language to ru as fallback is not working for me
    $_SESSION['lang'] = 'ru';
    // Parameters: language file path, cache dir, default language (all optional)

    // init object: load language files, parse them if not cached, and so on.
    $i18n->init();
?><!DOCTYPE html>
<html>
<head>

<title>CzechDoc</title>

<!---- META ---->

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="Anna Viatkina (orig) and Inessa Vasilevskaya (support&refactor)">
<meta name="apple-mobile-web-app-capable" content="yes">
<meta name="apple-mobile-web-app-status-bar-style" content="black">

<!---- LINKS ---->


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
<link rel="stylesheet" href="static/css/custom.css">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400&display=swap" rel="stylesheet">

<!---- FAVICON ---->
<link rel="icon" type="image/png" sizes="128x128" href="static/pics/favicon_128x128.png">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="theme-color" content="#ffffff">

<!-- font awesome -->
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
<script src="https://kit.fontawesome.com/f02cc162e3.js" crossorigin="anonymous"></script>


</head>
<body>

        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <div class="dismiss-wrap">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
                </div>
            </div>
            <ul class="list-unstyled components">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php"><span class="sidebar_hover_link"><?php echo L::menu_home?></span><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#o_nas"><span class="sidebar_hover_link"><?php echo L::menu_about?></span><span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#anketa"><span class="sidebar_hover_link"><?php echo L::menu_form?></span></a>
                    </li>
                    <li id="contact_button" class="nav-item">
                        <a class="nav-link" href="#ustav"><span class="sidebar_hover_link"><?php echo L::menu_charter?></span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="vrachom_v_chexii.php"><span class="sidebar_hover_link"><?php echo L::menu_howto?></span></a>
                    </li>
                    <li id="contact_button" class="nav-item">
                        <a class="nav-link" href="#kontakty"><span class="sidebar_hover_link"><?php echo L::menu_contacts?></span></a>
                    </li>
            </ul>
        </nav>
        <!-- Page Content  -->


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <div class="container-fluid">
          <button type="button" id="sidebarCollapse" class="btn btn-info">
              <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand" href="index.php">
              <img src="static/pics/logo.png" class="logo">
          </a>
          <div class="row navbar-brand">
              <div class="flag"><a href="/?lang=ru"><img class="flag" src="static/pics/russia_flag.svg"></a></div>
              <div class="flag"><a href="/?lang=en"><img class="flag" src="static/pics/Flag_of_the_United_Kingdom.svg"></a></div>
              <!-- <div class="flag"><a href="/?lang=cs"><img class="flag" src="static/pics/Flag_of_the_Czech_Republic.svg"></a></div> -->
          </div>
      </div>
    </nav>

<div class="hero-image"></div>

<div class="container">
<h1 class="first-header"><?php echo L::organization?></h1>
    <div class="logo-header">
        <img src="static/pics/doktorcechov.png">
    </div>
    <div class="blue-container">
    <div id="o_nas"></div>
    <h3><span class="h3_underline"><?php echo L::about_title?></span></h3>
        <div class="row">
            <div class="col-md-12">
                <div class="inside_darkblue_container">
                    <p><?php echo L::about_p1?></p>
                    <p><?php echo L::about_p2?></p>
                    <p><?php echo L::about_p3?></p>
                    <p><?php echo L::about_p4?></p>
                </div>
            </div>
        </div>
    </div>
    <div class="blue-container">
    <div id="o_nazvanii"></div>
    <h3><span class="h3_underline"><?php echo L::why_about?></span></h3>
        <div class="row">
            <div class="col-md-12">
                <div class="inside_darkblue_container">
                    <p><?php echo L::why_title?></p>
                    <p><?php echo L::why_p1?></p>
                    <p><?php echo L::why_p2?></p>
                    <p><?php echo L::why_p3?></p>
                    <p><?php echo L::why_p4?></p>
                </div>
            </div>
        </div>
    </div>
<div class="anketa" id="anketa">
    <h3><span class="h3_black_underline"><?php echo L::registration_title?></span></h3>
    <form id="contact-form" method="post" action="" role="form">
        <div class="row">
            <div class="col-md-6">
                <div class="row" id="contact-row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_name"><?php echo L::registration_name_and_surname?></label>
                            <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="<?php echo L::registration_name_and_surname_error?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_name_translit"><?php echo L::registration_name_latin?></label>
                            <input id="form_name_translit" type="text" name="name_translit" class="form-control" placeholder="" required="required" data-error="<?php echo L::registration_name_latin_error?>" pattern="[A-Za-z][A-Za-z ]*">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_date"><?php echo L::registration_birth_date?></label>
                            <input id="form_date" type="date" name="dateOfBirth" class="form-control" placeholder="" required="required" data-error="<?php echo L::registration_birth_date_error?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_email">E-mail</label>
                            <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="<?php echo L::registration_email_error?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_citizenship"><?php echo L::registration_citizenship?></label>
                            <input id="form_citizenship" type="text" name="citizenship" class="form-control" placeholder="" required="required" data-error="<?php echo L::registration_citizenship_error?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_phone"><?php echo L::registration_telephone?></label>
                            <input id="form_phone" type="tel" name="phone" class="form-control" placeholder="" required="required" data-error="<?php echo L::registration_telephone_error?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!--<h3>Дополнительные информации:</h3>-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_school"><?php echo L::registration_school?></label>
                            <input id="form_school" type="text" name="school" class="form-control" placeholder="" required="required" data-error="<?php echo L::registration_school_error?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_graduation"><?php echo L::registration_graduation?></label>
                            <input id="form_graduation" type="month" name="graduation" class="form-control" placeholder="" required="required" data-error="<?php echo L::registration_graduation_error?>" min="1950-01" value="1950-01">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_specialization"><?php echo L::registration_specialization?></label>
                            <input id="form_specialization" type="text" name="specialization" class="form-control" placeholder="" required="required" data-error="<?php echo L::registration_specialization_error?>">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <label for="form_work"><?php echo L::registration_if_working?><br>-<?php echo L::registration_place_specialization?></label>
                            <input id="form_work" type="text" name="work" class="form-control" placeholder="">
                            <div class="help-block with-errors"></div>
                        </div>
                    </div>
                </div>
                <div class="radio-buttons">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_approbacia" class="radio-label"><?php echo L::registration_approbation?></label>
                                    <input id="approbacia-on" class="toggle toggle-left" name="approbacia" value="false" type="radio">
                                    <label for="approbacia-on" class="btn-radio"><?php echo L::registration_yes1?></label>
                                    <input id="approbacia-off" class="toggle toggle-right" name="approbacia" value="true" type="radio" checked>
                                    <label for="approbacia-off" class="btn-radio"><?php echo L::registration_no1?></label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="form_attestacia" class="radio-label"><?php echo L::registration_attestation?></label>
                                    <input id="attestacia-on" class="toggle toggle-left" name="attestacia" value="false" type="radio">
                                    <label for="attestacia-on" class="btn-radio"><?php echo L::registration_yes1?></label>
                                    <input id="attestacia-off" class="toggle toggle-right" name="attestacia" value="true" type="radio" checked>
                                    <label for="attestacia-off" class="btn-radio"><?php echo L::registration_no1?></label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <hr>
    <h6><?php echo L::donation_title?></h6>
    <h6><?php echo L::donation_agreement_p1?><br>
        <?php echo L::donation_agreement_p2?><br>
        <?php echo L::donation_agreement_p3?><br>
        <?php echo L::donation_agreement_p4?>
    </h6>
    <!-- <div class="form&#45;group col&#45;md&#45;12"> -->
    <!--     <div class="form&#45;group"> -->
    <!--         <div class="g&#45;recaptcha" data&#45;sitekey="6LdsebwUAAAAAKtQBTvLm4QUgDWPUr3T&#45;nF6ZyiK" data&#45;callback="verifyRecaptchaCallback" data&#45;expired&#45;callback="expiredRecaptchaCallback"></div> -->
    <!--         <input class="form&#45;control d&#45;none" data&#45;recaptcha="true" required data&#45;error="Пожалуйста выполните Капча"> -->
    <!--         <div class="help&#45;block with&#45;errors captcha"></div> -->
    <!--     </div> -->
    <!-- </div> -->
    <div class="col-md-12" id="submit-button">
        <input type="submit" class="btn btn-success btn-send" value="Отправить">
    </div>
    <div class="messages"></div>
</form>
    </div>
    <hr id="afterform-hr">
    <div id="ustav"></div>
    <div class="other_links">
        <div id="vrachom_v_chechii"></div>
        <h3><span class="h3_black_underline"><?php echo L::howto_title?></span></h3>
    <div class="work-link">
        <a href="vrachom_v_chexii.html"><?php echo L::howto_main_steps?><img src="static/pics/arrow_right_white.svg" id="steps-arrow"></a>
        <br>
    </div>
        <hr id="aftervrachom-hr">
        <h3><span class="h3_black_underline"><?php echo L::howto_rules?></span></h3>
    <div class="word_document">
        <a href="static/documents/stanovy_dc.docx"><p><i class="word fas fa-file-word"></i><?php echo L::howto_docx?></p></a>
    </div>
    </div>
</div>
    <div id="kontakty"></div>
<footer>
    <div class="container">
    <h3><span class="h3_white_underline"><?php echo L::contacts?></span></h3>
        <div class="row">
    <div class="col-12">
        <a href="mailto:info@czechdoc.cz">info@czechdoc.cz</a>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <a href="#donate" data-toggle="collapse" role="button" aria-expanded="false"><?php echo L::donation_requisites?><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
	<div class="collapse" id="donate">
	    <div class="card card-body bg-dark text-center">
		<p><?php echo L::donation_technical_reasons?></p>
		<p><?php echo L::donation_number?></p>
		<p><?php echo L::donation_owner?></p>
            </div>
	</div>
        <hr class="white_hr">
        <div class="row social_row">
        <div class="col-12">
            <a href="https://www.facebook.com/czechdoc/"><i class="fab fa-facebook"></i></a>
            <a href="https://www.instagram.com/czechdoc/"><i class="fab fa-instagram"></i></a>
            </div>
        </div>

    </div>

</footer>



<!-- javascript -->



<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

 <!-- custom scripts -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/1000hz-bootstrap-validator/0.11.9/validator.min.js" integrity="sha256-dHf/YjH1A4tewEsKUSmNnV05DDbfGN3g7NMq86xgGh8=" crossorigin="anonymous"></script>
<script src="static/js/contact.js"></script>
<script src='https://www.google.com/recaptcha/api.js'></script>


<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>


<script type="text/javascript">
    $(document).ready(function () {
        $("#sidebar").mCustomScrollbar({
            theme: "minimal"
        });

        $('#dismiss, .overlay').on('click', function () {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });
        $('.components>li, .overlay').on('click', function () {
            $('#sidebar').removeClass('active');
            $('.overlay').removeClass('active');
        });

        $('#sidebarCollapse').on('click', function () {
            $('#sidebar').addClass('active');
            $('.overlay').addClass('active');
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });
</script>
    <script>
    $('#sidebar>ul>li>a').on('click', function(){
        $('#sidebar').collapse('hide');
});
    </script>
</body>
</html>
