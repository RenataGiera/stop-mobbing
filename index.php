<?php
$subjectPrefix = '[Contato via Site]';
$emailTo = 'renatagiera@gmail.com';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $message  = stripslashes(trim($_POST['form-mensagem']));
    $pattern  = '/[\r\n]|Content-Type:|Bcc:|Cc:/i';


    if($message){
        $subject = "Pytanie do prowadzacego";
        $body = "Pytanie: $message";

        $headers  = 'MIME-Version: 1.1' . PHP_EOL;
        $headers .= 'Content-type: text/html; charset=utf-8' . PHP_EOL;
        $headers .= "From: stop-mobing.co.uk@" . PHP_EOL;
        $headers .= "X-Mailer: PHP/". phpversion() . PHP_EOL;

        mail($emailTo, $subject, $body, $headers);
        $emailSent = true;

    } else {
        $hasError = true;
    }
}
?>
<!DOCTYPE html>
<html lang="pl"><head>
    <meta http-equiv="content-Type" content="text/html;charset=ISO-8859-2"> 
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Polish Psychologists' Association zaprasza na bezpłatne seminarium: Ty też masz prawo do szacunku w pracy ">
    <meta name="author" content="renatagiera.eu">

   <!-- <link rel="icon" href="http://getbootstrap.com/favicon.ico"> -->
    <title> STOP nękaniu w pracy</title>
    <link href='https://fonts.googleapis.com/css?family=Raleway&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Gentium+Basic:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Oswald:400,700&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="./dist/css/bootstrap.css">
      
    <!-- Custom styles for this template -->
    <link href="./dist/css/style.css" rel="stylesheet">

   
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

    
  <!--
  <nav id="navbar" class="navbar nopadding">
    <ul class="nav nav-pills">
     <li><a class="center-block" role="button" href="http://www.apsik.co.uk/index.php/24-czytelnia-apsik-a/wywiady/188-masz-prawo-miec-prawo">Media o nas </a></li> 
      <li><a role="button" href="#question">Zadaj pytanie prowadzącemu</a></li>
      <li><a role="button" href="#">Kontakt</a></li> 
    </ul>
  </nav>
  -->
              
  <header class="header-top">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 header-img">
                   <div class="bgimage-inside">
                      <h1 class="bgimage-inside-h1 text-center"><span> Akcja  Antymobbingowa </span> </h1>
                      <div class="h1-small text-center"><span>Masz Prawo Mieć Prawo</span></div>
                   </div>                 
            </div>
       </div>
   </div>      
  </header>
      
  <div class="container">     
      <section class="row bg">                
            <div class="col-lg-12 text-center">
                <div class="header-p1">
                    <strong>Polish Psychologists' Association</strong><br /> zaprasza na bezpłatne seminarium z udziałem  prawników z kancelarii <span class="nowrap">KL LAW Ltd.</span> oraz psycholog Agnieszki M. Zieleniec-Dixon </div>
                    <h3>Ty też masz prawo do szacunku w pracy</h3>
                    <div class="header-p2">Piątek 16.10.2015, <span class="nowrap">godz: 19.00 - 21.00</span></div> 
                    <div class="header-p3">POSK, 2 piętro, restauracja “Łowiczanka” <br />
                        238-246 King Street, <span class="nowrap">W6 0RF London</span>
                    </div>
                    <a href="https://www.eventbrite.com/e/masz-prawo-miec-prawo-tickets-18916103575"><button type="submit" class="rezwerwacja btn btn-web btn-lg">Zarezerwuj miejsce </button></a> 
            </div>     
      </section>
      
      <section class="row video bg-margin">  
           <div class="col-lg-12"><h2>Sytuacje Tobie znane?</h2></div> 
                <div class="clearfix col-md-6 video-margin">
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe src="https://www.youtube.com/embed/_ON3gQRnKTM"></iframe>
                    </div>
                </div>   
           <div class="col-md-6 video-margin1">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/R8lbSwT8mA4"></iframe>
                </div>
           </div> 
           <div class="clearfix col-md-6 video-margin">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/mcPbgiK3mLE"></iframe>
                </div>
           </div>   
           <div class="col-md-6 video-margin1">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe src="https://www.youtube.com/embed/k3u47-vTaOw"></iframe>
                </div>
           </div>       
      </section>
          
      <section class="w-schedule bg-margin row">
          <div class="col-lg-12">
              <h2>O seminarium</h2>
              
              <p>Jeżeli MÓWISZ NIE nękaniu i dyskryminacji, to zapraszamy Cię na seminarium połączone z panelem dyskusyjnym z udziałem ekspertów w dziedzinie prawa i psychologii. Mówiąc STOP nękaniu w miejscu pracy sprawiasz, że dbasz nie tylko o siebie, ale również o swoich współpracowników.</p>
              
              <p>Seminarium poprowadzi prawnik Marcin Kozik.</p>
    
              <p>W panelu dyskusyjnym wezmą udział prawnicy Marcin Kozik i Magdalena Łappa oraz psycholog Agnieszka M. Zieleniec- Dixon.</p>
              
              <h4>Podczas seminarium zostaną poruszone następujące zagadnienia:</h4> 
                    <ul>
                        <li>Co to jest mobbing i dyskryminacja?  </li>
                        <li>Instrumenty ochrony przed dyskryminacją w miejscu pracy  </li>
                        <li>Jakie zadośćuczynienie, jakie odszkodowanie </li>
                        <li>Indywidualne przypadki zgłoszone przez uczestników </li>               
                    </ul>
              Sesja zostanie zamknięta pytaniami od publiczności. 
                
              <h2>Nasi goście</h2>
              <h4>Marcin Kozik</h4>
                
              <p> Absolwent Wydziału Prawa Uniwersytetu Gdańskiego (2008) oraz Wydziału Prawa Nottingham Trent University (2010). Dyrektor kancelarii KL Law Ltd., z siedzibą w St Albans. Od blisko 7 lat specjalizuje się w reprezentowaniu przedsiębiorców i osób fizycznych przed trybunałami pracy oraz Trybunałem Apelacyjnym, zwłaszcza w zakresie niesłusznego zwolnienia i dyskryminacji w zatrudnieniu. Zajmuje się także projektowaniem i opiniowaniem umów handlowych. Obecnie przygotowuje pracę doktorską z zakresu europejskiego prawa pracy. </p>
               
              <h4>Magdalena Łappa</h4>
                
              <p> Absolwentka Wydziału Prawa University of Westminster (2014), obecnie jest w trakcie uczęszczania na Legal Practice Course na tym samym uniwersytecie. Poprzednio Pani Łappa pracowała w zawodzie tłumacza, tłumacząc zarówno na rozprawach sądowych jak i konferencjach unijnych oraz specjalizowała się w tłumaczeniach prawniczych i medycznych. Dyrektorka kancelarii KL Law Ltd., specjalizuje się w prowadzeniu spraw z zakresu prawa pracy, zwłaszcza w zakresie niesłusznego zwolnienia i dyskryminacji. </p>
              
              <h4>Agnieszka M. Zieleniec-Dixon</h4>
    
              <p>Psycholog, terapeuta, executive coach. Absolwentka Uniwersytetu Jagiellońskiego i londyńskiego Tavistock Consulting. W PPA od 2012 roku jest dyrektorem ds. rozwoju, a od listopada 2014 pełni funkcję przewodniczącej rady PPA.</p>
                
            </div>      
      </section>
      
      <section class="row w-question bg-margin" id="question">
            <div class="col-lg-12">
                <h2>Zadaj anonimowe pytanie prowadzącemu:</h2>
                            
                <?php if(!empty($emailSent)): ?>
                    <div class="alert-success text-center alert-question">Dziękujemy. Twoje pytanie zostało wysane. </div>                        
                <?php else: ?>                 
                <?php if(!empty($hasError)): ?>             
                    <div class="alert-danger alert-question">Upss. Nie wpisałeś pytania.</div>              
                <?php endif; ?>  
                
                <form action="<?php echo $_SERVER['REQUEST_URI']; ?>#question" id="contact-form" role="form" method="post">               
                    <textarea id="form-mensagem" name="form-mensagem" class="form-control" rows="7" placeholder="Wpisz twoje pytanie"></textarea>
                    <div class="send-btn"><button type="submit" class="btn btn-web btn-lg">Wyślij pytanie</button></div>
                </form>
               <?php endif; ?>
           </div>                     
      </section>
    
      <section class="logo bg-margin row">
          <div class="col-md-6 nopadding">
              <img src="./dist/images/l1.jpg" class="img-responsive center-block" alt="Patroni">
          </div>
          
          <div class="col-md-6 nopadding">
              <img src="./dist/images/l2.jpg" class="img-responsive center-block" alt="Patroni">
          </div>
       </section>   
  </div> <!-- /container -->
      
  <footer>
      <div class="container">
          <div class="row">
              <div class="col-sm-6 copyright text-center">
                   © Masz Prawo Mieć Prawo 2015
              </div>
              <div class="col-sm-6 designed text-center">
                   Designed by: <a href="http://renatagiera.eu/" target="_blank">RG</a>
              </div>
          </div>
      </div>
   
  </footer>

    


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="./dist/js/bootstrap.min.js"></script>
   

</body></html>