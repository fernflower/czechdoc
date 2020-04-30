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
              <!-- <div class="flag"><a href="/?lang=en"><img class="flag" src="static/pics/gb_flag.svg"></a></div> -->
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
            <h5 id="vazhno"><?php echo L::step1_important?></h5>
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
        <h3><span class="h3_underline">2. Апробация</span></h3>
        </div>

        <ul>
            <li>
                Это подтверждение врачебной квалификации, которое проводит Министерство Здравоохранения и Институт последипломного  образования.
            </li>
            <li>
            Апробация включает в себя три части:
                <ol class="sub-list">
                    <li>Тест по специальности (лечебное дело - для врачей/стоматология - для стоматологов/фармация - для провизоров) + тест по организации здравоохранения.</li>
                    <li>Практическая часть - шестимесячная стажировка в лечебном учреждении</li>
                    <li>Устный экзамен</li>
                </ol>
            </li>
            <li>Основная информация:</li>
            <div class="sub_li">
                <p>Экзамены проходят на чешском языке</p>
                <p>Подать заявление на прохождение апробации можно только после получения нострификации</p>
                <p>Состав комиссии на устный экзамен определяется Министерством здравоохранения и Врачебными Палатами</p>
                <p>Подать заявление на прохождении апробации можно только 4 раза. После четвертой неудачной попытки претендент не может больше подать заявление на признание врачебного диплома в Чешской республике.</p>
                <p>После подачи заявления на первую часть апробационного экзамена необходимо в течение 30 месяцев успешно сдать все экзамены, завершив процесс апробации, иначе попытка отмечается как неуспешная.</p>
            </div>
        </ul>
        <hr>
        <div class="container">
        <h5>Шаг 1. Подача заявления на апробацию.</h5>
            <ul>
		<li>Подача заявления осуществляется не позднее, чем за 3 месяца до начала экзаменов. Термины можно найти <a href="https://www.ipvz.cz/lekari-zubni-lekari-farmaceuti/aprobacni-zkousky/terminy-jednotlivych-casti-aprobacni-zkousek" style="text-decoration: underline;">здесь</a></li>
                <li>Заявление можно скачать здесь:
                    <br><br>
                <a href="https://www.ipvz.cz/seznam-souboru/4734-zadost-o-uznani-zpusobilosti-k-vykonu-zdravotnickeho-povolani-a-vykonani-aprobacni-zkousky-2-2018.doc" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;">Žádost o uznání způsobilosti k výkonu zdravotnického povolání a vykonání aprobační zkoušky</span></a><br><br>
                </li>
                <li>К заявлению необходимо приложить:
                    <ol class="sub-list">
                        <li>заверенную переведенную копию диплома</li>
                        <li>заверенную копию нострификации</li>
                        <li>копию разрешения на работу (если имеется)</li>
                        <li>справку от врача об отсутствии противопоказаний для работы врачом</li>
                        <li><a href="https://www.mzcr.cz/Soubor.ashx?souborID=39900&typ=application/pdf&nazev=Doklad_o_zdravotn%C3%AD_zp%C5%AFsobilosti_.pdf" style="text-decoration: underline; padding-left: 3%;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;">Doklad o zdravotní způsobilosti</span></a></li>
                        <li>справку о несудимости из страны, гражданином которой Вы являетесь</li>
                        <li>копию загранпаспорта или паспорта (паспорт только для государств, где не выдаются загранпаспорта, например Республика Беларусь). Копию паспорта НЕ НУЖНО заверять</li>
                        <li>заверенная копия свидетельства о браке или справка о смене фамилии (в случае смены фамилии)</li>
                        <li>гербовые марки на 2000 крон (можно купить на любой чешской почте, называется "kolková známka")</li>
                    </ol>
                </li>
                <li>Справка от врача и справка о несудимости должны быть не старше 3 месяцев, копии должны быть заверены у нотариуса и у судебного переводчика.</li>
                <li>После этого документы отсылаются на адрес:
                <div class="address_wrap">
                Ministerstvo zdravotnictví<br>
                Odbor vědy a lékařských povolání<br>
                Palackého nám. 4<br>
                128 01<br>Praha 2</div><br>
                По этому же адресу можно подать документы лично.
                </li>
                <br><br>
                <li>ВАЖНО: Оригиналы документов не возвращают, поэтому посылайте заверенные копии</li>
            </ul>
            <hr>
            <h5>Шаг 2. После получение приглашения на первую часть экзаменов Вас ждут тесты:</h5>
            <ul>
                <li>Оплату производить лучше в день экзамена в кассе Института последипломного образования. Первая попытка - 3000 крон, вторая 4000 крон, третью и последняя 6000 крон.</li>
                <li>Тесты проводятся на компьютере. </li>
                <li>Тест по специальности (лечебное дело - для врачей / стоматология - для стоматологов / фармация - для провизоров) включает 120 вопросов, продолжительность 2 часа</li>
                <li>Тест по организации здравоохранения включает 50 вопросов, продолжительность 50 минут</li>
                <li>Тесты проводятся <b>ТОЛЬКО</b> на чешском языке, оба теста проходят в один день</li>
                <li>Тесты многоответные, то есть правильных вариантов может быть несколько. Засчитываются только те вопросы, где отмечены ВСЕ правильные варианты.  </li>
                <li>Для успешного прохождения необходимо набрать 70% по каждому тесту</li>
                <li>Результат теста вы получите сразу же</li>
                <li>После успешно сданного теста вам автоматически по почте придет подтверждение, что вы можете приступать к практической части.</li>
                <li>При неуспешной сдаче теста, можно попросить посмотреть ошибки “žádost o nahlíduti do chyb”. Это необходимо сделать НЕ ВЫХОДЯ ИЗ КАБИНЕТА, где проходило тестирование. Вы сможете увидеть только вопросы на которые Вы ответили неправильно. Правильные ответы показаны не будут. Такой возможности нет у тех, кто набрал менее 50%.</li>
                <li>При неуспешной сдаче теста по специальности, Вас не допустят ко второму тесту по организации здравоохранения</li>
                <li>Официальной базы к подготовке к тестам нет. Вероятные вопросы обсуждаются в некоторых группах в социальных сетях.</li>
            </ul>
            <hr>
            <h5>Шаг 3. Практическая часть апробационного экзамена </h5>
            <p>это 6 месячная стажировка в больнице, ординации или аптеке со специальным разрешение (akreditované pracoviště pro absolvování praktické části aprobační zkoušky).</p><br>
            <p>Список учреждений, которые получили специальное разрешение для прохождения практики в рамках апробации постоянно обновляется на сайте Министерства Здравоохранения</p>
            <a href="http://www.mzcr.cz/Odbornik/obsah/akreditace-pro-odbornou-praxi-v-ramci-prakticke-casti-aprobacni-zkousky_3816_3.html" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;">Akreditace pro odbornou práci v rámci praktické části aprobační zkoušky</span></a><br><br>
            <ul>
                <li>Практическую часть можно пройти ТОЛЬКО в этих учреждения</li>
                <li>Практика длится 6 месяцев при полной 40-часовой рабочей неделе </li>
                <li>Практику необходимо искать САМОСТОЯТЕЛЬНО</li>
                <li>При прохождении практики у Вас будет аттестованный врач, который будет контролировать Вашу работу (školitel). Он же имеет право идти с Вами на устный экзамен, НЕОБХОДИМО заранее известить Министерство здравоохранения о его присутствии на экзамене</li>
                <li>После начала практики необходимо послать подтверждение в Министерство Здравоохранения о том, что Вы приступили к практике.<br><br>
                <a href="https://www.mzcr.cz/Soubor.ashx?souborID=39892&typ=application/msword&nazev=ozn%C3%A1men%C3%AD_o_zah%C3%A1jen%C3%AD_praktick%C3%A9_%C4%8D%C3%A1sti.doc" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;">Заявление здесь</span></a><br><br></li>
                <li>Практическая часть у врачей проходит на 5 отделениях: терапия, хирургия, реанимация, педиатрия, гинекология + одно из вышеперечисленных по Вашему выбору.</li>
                <li>В течение практики необходимо подготовить 5 историй болезней. Истории могут быть по любой специальности. Одну из историй (на выбор экзаменатора) необходимо будет защитить на устном экзамене. <br><br>
                    <a href="https://www.mzcr.cz/Soubor.ashx?souborID=23520&typ=application/pdf&nazev=Vzory%20př%C3%ADpadových%20studi%C3%AD%20(všeobecné%20lékařstv%C3%AD,%20zubn%C3%AD%20lékařstv%C3%AD,%20farmacie).pdf" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;">Примеры историй болезни</span></a><br><br>
                </li>
                <li>Минимально за 3 месяца перед началом устных экзаменов необходимо послать заявление о том, что Вы хотите приступить к устной части<br><br>
                    <a href="https://www.mzcr.cz/Soubor.ashx?souborID=39892&typ=application/msword&nazev=ozn%C3%A1men%C3%AD_o_zah%C3%A1jen%C3%AD_praktick%C3%A9_%C4%8D%C3%A1sti.doc" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;">Заявление здесь</span></a>
                    <br><br>
                </li>
                <li>После успешной защиты практической части, Министерство выдает подтверждение о пройденной практической части, которое действительно 5 лет</li>
            </ul>
            <h5>Шаг 4. Устная часть экзамена.</h5>
            <p>Обязательным условием допуска к устной части являются действительные тесты (30 месяцев от успешной сдачи) и успешно засчитанная практика. </p>
            <ul>
                <li>Оплата производится в кассе в день сдачи экзамена. Первая попытка 4000 крон, вторая 6000 крон, 3 и последняя 9000 крон)</li>
                <li>Устный экзамен проходит на чешском языке.</li>
                <li>Вопросы к экзамену  и литература есть на сайте Министерства здравоохранения - в самом низу страницы<br><br>
                    <a href="https://www.mzcr.cz/dokumenty/aprobacni-zkousky_1784_952_3.html" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;">Aprobační zkoušky</span></a>
                    <br><br></li>
                <li>На экзамене может присутствовать врач, который Вас обучал в течение практики (školitel)</li>
                <li>Экзамен у врачей проходит по четырем дисциплинам  (гинекология, педиатрия, хирургия, терапия) и разделен на 2 части, то есть между двумя дисциплинами у Вас будет перерыв для подготовки. Сданные части экзамена засчитываются (ТОЛЬКО У ВРАЧЕЙ), стоматологи и провизоры при неуспехе хотя бы у одной дисциплины должны пересдавать все.</li>
                <li>Стоматологи сдают 6 дисциплин (хирургическая, терапевтическая, детская и ортопедическая стоматология, пародонтология, ортодонтия), провизоры тоже 6 дисциплин (фармакология, фармакогнозия, фарм.химия, контроль лекарств, социальная фармация она же легислатива, фарм.технология). </li>
                <li>После сдачи устного экзамена Вы получите по почте подтверждение от Министерства здравоохранения, что Вы получили полное подтверждение диплома “odborná způsobilost”.</li>
                <li>При неуспешной сдаче, Вам необходимо снова подать заявление на прохождение устной части. </li>
            </ul>
            <hr>
            <h5 id="vazhno">В А Ж Н О!</h5>
            <hr>
            <ul>
                <li>Если по форс-мажорным обстоятельствам Вы не можете попасть на экзамен, Вам необходимо послать в Министерство здравоохранения заявление о невозможности присутствовать на экзамене, иначе попытка Вам засчитается как неудачная.<br><br>
                    <a href="https://www.mzcr.cz/Soubor.ashx?souborID=39893&typ=application/msword&nazev=Formul%C3%A1%C5%99_pro_omluvy_jednotliv%C3%BDch_%C4%8D%C3%A1st%C3%AD_AZ.doc" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;">Заявления здесь</span></a>
                    <br><br>
                </li>
                <li>Официальные источники информации:<br><br>
                <a href="https://www.mzcr.cz/dokumenty/aprobacni-zkousky_1784_952_3.html" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;">Министерство здравоохранения Чешской Республики</span></a>
                    <br>
                <a href="https://www.ipvz.cz/lekari-zubni-lekari-farmaceuti/aprobacni-zkousky/zakladni-informace-o-aprobacnich-zkouskach" style="text-decoration: underline;"><img src="static/pics/arrow_right.svg" class="arrow-right"><span style="padding-left: 3%;">Институт последипломного образования</span></a>
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
