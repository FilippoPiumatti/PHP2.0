<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Sondaggio Informatico</title>
    <!-- Favicons -->
    <link href="assets/img/hero-logo.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>

    <link href="css/index.css" rel="stylesheet">

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</head>

<body>

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div class="hero-container">
            <a href="index.html" class="hero-logo" data-aos="zoom-in"><img src="assets/img/hero-logo.png" alt=""></a>
            <h1 data-aos="zoom-in">Welcome to the TPSI PHP Course</h1>
            <h2 data-aos="fade-up">Classe 4 Info D</h2>
        </div>
    </section><!-- End Hero -->
    <section class="container">
        <h1>Registrazione effetuata correttamente </h1>
    </section>
    <section class="container" id="dati">
        <h2>Dati relativi alla Registrazione</h2>
            <p class="lblCod">
             <?php
                //<input type="submit"> è un bottone che 
                //<input type="RESET">  è un bottone che ripulisce il form
                //se si trova in un form andra a richiedere la sua attenzione
                //URL ENCODING : tipo di codifica 
                //che va a prendere le pagine php e gli passa i parametri
                //il form ha come attributo action che serve per fare una richiesta ad una pagina php
                //e ha anche  come attributo method: 
                //che specifica il tipo di richiesta (get ,post ,pach ,delete)
                //noi andremo a modificare sulla pagina php e gestirli in modo opportuno
                //potremmo inserirli attraverso query sql in un database
                // oppure possiamo semplicemente visualizzarli , tutto in base alla consegna!!
                //posso rendere i dati del mio form
                //N.B. i dati viaggiano in base al name del form!!! 
                /* http://localhost/4d/Ese02-%20Registrazione/dati.php?
                txtCognome=Piumatti&txtNome=Filippo
                &radScuola=superiore&chkSviluppo%5B%5D=PHP+-+jQuery+-+Ajax
                &cboResidenza=Cuneo&cboInteressi%5B%5D=musica
                QUESTO è L'URL DOPO IL CLICK DEL SUBMIT
                c'è un trattamento a parte per i dati sensibili
                non bisogna trasmetterli in modo visibile
                */
                /****** CODICE **** */
            if (isset($_GET["txtCognome"])&&$_GET["txtCognome"]!="") {//$_GET[""] serve per vedere se la richiesta è andata a buon fine
                 // si mette il name dell oggetto di cui vogliamo verificare
                    echo("Cognome : ".$_GET["txtCognome"]);
                }
                else {
                    echo("Campo cognome non compilato...");
                }
            ?>
            </p>
            <p class="lblCod">
                <?php
                    if (isset($_GET["txtNome"])&&$_GET["txtNome"]!="") {
                        echo("Nome : ".$_GET["txtNome"]);
                    }
                    else {
                        echo("Campo cognome non compilato...");
                    }
                ?>
            </p>
            <p class="lblCod">
                <?php
                    if (isset($_GET["radScuola"])) {
                       switch ($_GET["radScuola"]) {
                           case 'superiore':
                               echo("Formazione : Scuola Superiore di Secondo Grado");
                               break;
                           case 'media':
                                 echo("Formazione : Scuola Superiore di Primo Grado");
                               break;
                            case 'superiore':
                                echo("Formazione : Percorso Universitario");
                               break;
                       }
                       //echo("Formazione : ".$_GET["radScuola"]);
                    }
                    else {
                        echo("Nessuna Formazione Attuale Selezionata");
                    }
                ?>
            </p>
            <p class="lblCod"> Preferenza ambiti di sviluppo: 
                    <?php
                        if(isset($_GET["chkSviluppo"])){
                            $preferenze = $_GET["chkSviluppo"];
                            //chkSviluppo è un vettore che contiene più value
                            foreach ($preferenze as $valPreferenze) {
                                echo("<p style='margin-left : 50px'>" . $valPreferenze . "</p>");
                            }
                        }else {
                            echo("Nessuna Preferenza Di Sviluppo Selezionata...");
                        }
                    ?>
            </p>
            <p class="lblCod"> Provincia di Residenza: 
                    <?php
                        if (isset($_GET["cboResidenza"])) {
                            echo($_GET["cboResidenza"]);
                        }
                        else {
                            echo("Nessuna Provincia Di Residenza Selezionata..");
                        }
                    ?>
                    
            </p>
            <p class="lblCod"> Interessi Personali: 
                    <?php
                        if (isset($_GET["cboInteressi"])) {
                           $interessi = $_GET["cboInteressi"];
                           foreach ($interessi as $int) {
                               echo("<p class='lblCod' style='margin-left : 50px'>" . $int . "</p>");
                           }
                        }
                    ?>
            </p>
    </section>
    <section class="container">
        <form action="index.php" method="get">
            <input type='submit' value="Back To Home" class="btn btn-primary">
        </form>
    </section>
</body> 

