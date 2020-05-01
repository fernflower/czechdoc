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
<script src="https://kit.fontawesome.com/f02cc162e3.js"></script>


</head>
<body>

        <!-- Sidebar  -->
        <nav id="sidebar">
            <div id="dismiss">
                <span class="icon-bar top-bar"></span>
                <span class="icon-bar middle-bar"></span>
                <span class="icon-bar bottom-bar"></span>
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
              <!-- <div class="flag"><a href="/?lang=en"><img class="flag" src="static/pics/Flag_of_the_United_Kingdom.svg"></a></div> -->
              <!-- <div class="flag"><a href="/?lang=cs"><img class="flag" src="static/pics/Flag_of_the_Czech_Republic.svg"></a></div> -->
          </div>
      </div>
    </nav>

<div class="hero-image"></div>

<div class="container">
    <h1 class="first-header_vrachom"><?php echo L::howto_2stages?></h1>
    <br>
    <div id="o_nas"></div>
    <div class="container container_wrapper">
        <div class="row">
            <div class="col-md-6">
                <h5><span class="h5_black_underline">1. <?php echo L::howto_nostrification?></span></h5>
                <p style="padding: 5%;"><?php echo L::howto_nostrification_explained?></p>
            </div>
            <div class="col-md-6">
                <h5><span class="h5_black_underline">2. <?php echo L::howto_approbation?></span></h5>

                <p style="padding: 5%;"><?php echo L::howto_approbation_explained?></p>
            </div>
        </div>
    </div>
<div class="steps_wrap">
    <div class="left_step_wrap">
        <div class="row">
            <div class="col-6">
                <h5><?php echo L::howto_step?> 1.</h5>
                <p><?php echo L::howto_nostrification?></p><br><br>
            </div>
            <div class="col-6">
                <img src="static/pics/arrow_right_down.svg">
            </div>
        </div>
    </div>
    <div class="right_step_wrap">
        <div class="row">
            <div class="col-6">
                <img src="static/pics/arrow_left_down.svg">
            </div>
            <div class="col-6">
                <h5><?php echo L::howto_step?> 2.</h5>
                <p><?php echo L::howto_approbation_apply?></p><br>
            </div>
        </div>
    </div>
    <div class="left_step_wrap">
        <div class="row">
            <div class="col-6">
                <h5><?php echo L::howto_step?> 3.</h5>
                <p>1. <?php echo L::howto_approbation_exam_part?></p>
            </div>
            <div class="col-6">
                <img src="static/pics/arrow_right_down.svg">
            </div>
        </div>
    </div>
    <div class="right_step_wrap">
        <div class="row">
            <div class="col-6">
                <img src="static/pics/arrow_left_down.svg">
            </div>
            <div class="col-6">
                <h5><?php echo L::howto_step?> 4.</h5>
                <p>2. <?php echo L::howto_approbation_exam_part?></p>
            </div>
        </div>
    </div>
    <div class="left_step_wrap">
        <div class="row">
            <div class="col-6">
                <h5><?php echo L::howto_step?> 5.</h5>
                <p>3. <?php echo L::howto_approbation_exam_part?></p>
            </div>
            <div class="col-6">
                <img src="static/pics/arrow_right_down.svg">
            </div>
        </div>
    </div>
    <div class="right_step_wrap" style="margin-bottom: 0px">
        <div class="row">
            <div class="col-6">

            </div>
            <div class="col-6">
                <h5><?php echo L::howto_step?> 6.</h5>
                <p style="margin-bottom: 0px"><?php echo L::howto_final?></p>
            </div>
        </div>
    </div>
</div>
    <div class="detailed_steps_wrap">
        <div class="blue-small-container">
            <h3><span class="h3_underline">1. <?php echo L::step1_title?></span></h3>
        </div>
            <ul>
                <li>
                    <p><?php echo L::step1_p1?></p>
                    <a href="https://cuni.cz/UK-6582.html" style="text-decoration: underline; font-weight: 400;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;">cuni.cz</span></a>
                </li>
                <br>
                <li>
                    <p><?php echo L::step1_p2?></p>
                </li>
                <li>
                    <p><?php echo L::step1_p3?></p>
                    <a href="https://cuni.cz/UK-8289.html?fbclid=IwAR1a1TKL-8Qn5vdPqA5rxEKaqpJnQU97osTSCsTy0Pxx-fNtFueA2I-yLGI" style="text-decoration: underline; font-weight: 400;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;"><?php echo L::step1_examples?></span></a>
                </li>
            </ul>
        <hr>
        <div class="container">
            <h5><?php echo L::step1_1application?></h5>
                <p><?php echo L::step1_example_resides?><a href="https://cuni.cz/UK-6582-version1-zadost_nova_celkova_final_form.pdf" style="text-decoration: underline;"><?php echo L::step1_official_website?></a> <?php echo L::step1_karlov?></p>
            <hr>
            <h5><?php echo L::step1_2attachments?></h5>
            <p><?php echo L::step1_all_translated?> <b><?php echo L::step1_court?></b> <?php echo L::step1_translator?></p>
            <ul>
                <li><?php echo L::step1_li1?></li>
                <li><?php echo L::step1_li2?></li>
                <li><?php echo L::step1_li3?></li>
                <li><?php echo L::step1_li4?></li>
                <li><?php echo L::step1_li5?></li>
                <li><?php echo L::step1_li6?></li>
            </ul>
            <hr>
            <h5><?php echo L::step1_3send?></h5>
            <ul>
                <li><?php echo L::step1_li7?></li>
                <li><?php echo L::step1_li8?><div class="address_wrap">Rektorát Univerzity Karlovy <br>Ovocný trh č.5<br>116 36<br> Praha</div></li>
            </ul>
            <hr>
            <h5><?php echo L::step1_4pay?></h5>
            <ul>
                <li><?php echo L::step1_li9?></li>
                <li><?php echo L::step1_li10?></li>
                <li><?php echo L::step1_li11?></li>
            </ul>
            <hr>
            <h5 id="vazhno"><?php echo L::important?></h5>
            <hr>
            <ul>
                <li><?php echo L::step1_li12?></li>
                <li><?php echo L::step1_li13?></li>
                <li><?php echo L::step1_li14?></li>
                <li><?php echo L::step1_li15?></li>
                <li><?php echo L::step1_li16?></li> <br><br>
                <a href="https://cuni.cz/UK-6582-version1-uk_585_version1_seznamstatu201.doc" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;">Seznam států</span></a><br><br>
                </li>
                <li><?php echo L::step1_li17?></li>
            </ul>
        </div>
        <br>
        <div class="blue-small-container">
        <h3><span class="h3_underline">2. <?php echo L::howto_approbation?></span></h3>
        </div>

        <ul>
            <li><?php echo L::step2_li1?></li>
            <li><?php echo L::step2_li2?>
                <ol class="sub-list">
                    <li><?php echo L::step2_li3?></li>
                    <li><?php echo L::step2_li4?></li>
                    <li><?php echo L::step2_li5?></li>
                </ol>
            </li>
            <li><?php echo L::step2_li6?></li>
            <div class="sub_li">
                <p><?php echo L::step2_p1?></p>
                <p><?php echo L::step2_p2?></p>
                <p><?php echo L::step2_p3?></p>
                <p><?php echo L::step2_p4?></p>
                <p><?php echo L::step2_p5?></p>
            </div>
        </ul>
        <hr>
        <div class="container">
        <h5><?php echo L::step2_title_1apply?></h5>
            <ul>
		<li><?php echo L::step2_li7?> <a href="https://www.ipvz.cz/lekari-zubni-lekari-farmaceuti/aprobacni-zkousky/terminy-jednotlivych-casti-aprobacni-zkousek" style="text-decoration: underline;"><?php echo L::step2_li7_here?></a></li>
                <li><?php echo L::step2_li8?>
                    <br><br>
                <a href="https://www.ipvz.cz/seznam-souboru/4734-zadost-o-uznani-zpusobilosti-k-vykonu-zdravotnickeho-povolani-a-vykonani-aprobacni-zkousky-2-2018.doc" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;">Žádost o uznání způsobilosti k výkonu zdravotnického povolání a vykonání aprobační zkoušky</span></a><br><br>
                </li>
                <li><?php echo L::step2_li9?>
                    <ol class="sub-list">
                        <li><?php echo L::step2_li10?></li>
                        <li><?php echo L::step2_li11?></li>
                        <li><?php echo L::step2_li12?></li>
                        <li><?php echo L::step2_li13?></li>
                        <li><a href="https://www.mzcr.cz/Soubor.ashx?souborID=39900&typ=application/pdf&nazev=Doklad_o_zdravotn%C3%AD_zp%C5%AFsobilosti_.pdf" style="text-decoration: underline; padding-left: 3%;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;">Doklad o zdravotní způsobilosti</span></a></li>
                        <li><?php echo L::step2_li14?></li>
                        <li><?php echo L::step2_li15?></li>
                        <li><?php echo L::step2_li16?></li>
                        <li><?php echo L::step2_li17?></li>
                    </ol>
                </li>
                <li><?php echo L::step2_li18?></li>
                <li><?php echo L::step2_li19?>
                    <div class="address_wrap">
                    Ministerstvo zdravotnictví<br>
                    Odbor vědy a lékařských povolání<br>
                    Palackého nám. 4<br>
                    128 01<br>Praha 2</div><br>
                    <?php echo L::step2_li20?>
                </li>
                <br><br>
                <li><?php echo L::step2_li21?></li>
            </ul>
            <hr>
            <h5><?php echo L::step2_title_2tests?></h5>
            <ul>
                <li><?php echo L::step2_li22?></li>
                <li><?php echo L::step2_li23?></li>
                <li><?php echo L::step2_li24?></li>
                <li><?php echo L::step2_li25?></li>
                <li><?php echo L::step2_li26_part1?> <b><?php echo L::step2_li26_part2?></b> <?php echo L::step2_li26_part3?></li>
                <li><?php echo L::step2_li27?></li>
                <li><?php echo L::step2_li28?></li>
                <li><?php echo L::step2_li29?></li>
                <li><?php echo L::step2_li30?></li>
                <li><?php echo L::step2_li31?></li>
                <li><?php echo L::step2_li32?></li>
                <li><?php echo L::step2_li33?></li>
            </ul>
            <hr>
            <h5><?php echo L::step2_title_3practical?></h5>
            <p><?php echo L::step2_p6?></p><br>
            <p><?php echo L::step2_p7?></p>
            <a href="http://www.mzcr.cz/Odbornik/obsah/akreditace-pro-odbornou-praxi-v-ramci-prakticke-casti-aprobacni-zkousky_3816_3.html" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;">Akreditace pro odbornou práci v rámci praktické části aprobační zkoušky</span></a><br><br>
            <ul>
                <li><?php echo L::step2_li34?></li>
                <li><?php echo L::step2_li35?></li>
                <li><?php echo L::step2_li36?></li>
                <li><?php echo L::step2_li37?></li>
                <li><?php echo L::step2_li38?><br><br>
                    <a href="https://www.mzcr.cz/Soubor.ashx?souborID=39892&typ=application/msword&nazev=ozn%C3%A1men%C3%AD_o_zah%C3%A1jen%C3%AD_praktick%C3%A9_%C4%8D%C3%A1sti.doc" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;"><?php echo L::step2_application_here?></span></a><br><br></li>
                <li><?php echo L::step2_li39?></li>
                <li><?php echo L::step2_li40?><br><br>
                    <a href="https://www.mzcr.cz/Soubor.ashx?souborID=23520&typ=application/pdf&nazev=Vzory%20př%C3%ADpadových%20studi%C3%AD%20(všeobecné%20lékařstv%C3%AD,%20zubn%C3%AD%20lékařstv%C3%AD,%20farmacie).pdf" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;"><?php echo L::step2_examples?></span></a><br><br>
                </li>
                <li><?php echo L::step2_li41?><br><br>
                    <a href="https://www.mzcr.cz/Soubor.ashx?souborID=39892&typ=application/msword&nazev=ozn%C3%A1men%C3%AD_o_zah%C3%A1jen%C3%AD_praktick%C3%A9_%C4%8D%C3%A1sti.doc" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;"><?php echo L::step2_application_here?></span></a>
                    <br><br>
                </li>
                <li><?php echo L::step2_li42?></li>
            </ul>
            <h5><?php echo L::step2_title_4oral?></h5>
            <p><?php echo L::step2_p8?></p>
            <ul>
                <li><?php echo L::step2_li43?></li>
                <li><?php echo L::step2_li44?></li>
                <li><?php echo L::step2_li45?><br><br>
                    <a href="https://www.mzcr.cz/dokumenty/aprobacni-zkousky_1784_952_3.html" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;">Aprobační zkoušky</span></a>
                    <br><br></li>
                <li><?php echo L::step2_li46?></li>
                <li><?php echo L::step2_li47?></li>
                <li><?php echo L::step2_li48?></li>
                <li><?php echo L::step2_li49?></li>
                <li><?php echo L::step2_li50?></li>
            </ul>
            <hr>
            <h5 id="vazhno"><?php echo L::important?></h5>
            <hr>
            <ul>
                <li><?php echo L::step2_li51?><br><br>
                    <a href="https://www.mzcr.cz/Soubor.ashx?souborID=39893&typ=application/msword&nazev=Formul%C3%A1%C5%99_pro_omluvy_jednotliv%C3%BDch_%C4%8D%C3%A1st%C3%AD_AZ.doc" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;"><?php echo L::step2_application_here?></span></a>
                    <br><br>
                </li>
                <li><?php echo L::step2_li52?><br><br>
                <a href="https://www.mzcr.cz/dokumenty/aprobacni-zkousky_1784_952_3.html" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;"><?php echo L::step2_ministry_of_health?></span></a>
                    <br>
                <a href="https://www.ipvz.cz/lekari-zubni-lekari-farmaceuti/aprobacni-zkousky/zakladni-informace-o-aprobacnich-zkouskach" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;"><?php echo L::step2_post_grad_institution?></span></a>
                </li>
            </ul>
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


<!---- JS ---->

<!-- javascript -->

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

<!-- bootstrap -->

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

 <!-- custom scripts -->

<script src="static/js/contact.js"></script>


<!-- jQuery -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
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
