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

    <!-- My JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="js/libreria.js" type="text/javascript"></script>
    <script src="js/index.js" type="text/javascript"></script>
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

    <section id="sondaggio" class="container">
        <div><h1>Sondaggio Informatico</h1></div>
    </section>

    <section id="formReg" class="container">
        <form action="dati.php" method="get">
            <div><h3>Dati anagrafici</h3></div>
            <div>
                <div class="form-group row">
                    <label for="txtCognome" class="col-sm-2 col-form-label lblCod">Cognome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="txtCognome" name="txtCognome" placeholder="Cognome">
                    </div>
                    <label for="txtNome" class="col-sm-2 col-form-label lblCod">Nome</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control form-control-lg" id="txtNome" name="txtNome" placeholder="Nome">
                    </div>
                </div>
            </div>
            <hr>

            <div><h3>Formazione attuale</h3></div>
            <div>
                <div class="form-check">
                    <input class="form-check-input" style="height:22px; width:22px; vertical-align: middle;margin-right: 10px" type="radio" id="radMedia" name="radScuola" value="media"><label for="radMedia" class="lblCod">Scuola media</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" style="height:22px; width:22px; vertical-align: middle;margin-right: 10px" type="radio" id="radSup" name="radScuola" value="superiore"><label for="radSup" class="form-check-label lblCod">Scuola superiore</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" style="height:22px; width:22px; vertical-align: middle;margin-right: 10px" type="radio" id="radUni" name="radScuola" value="universita"><label for="radUni" class="form-check-label lblCod">Università</label>
                </div>
            </div>
            <hr>

            <div><h3>Preferenze ambiti di sviluppo</h3></div>
            <div class="form-check">
                <input class="form-check-input" style="height:22px; width:22px; vertical-align: middle;margin-right: 10px"  type="checkbox" value="PHP - jQuery - Ajax" id="php" name="chkSviluppo[]">
                <label class="form-check-label lblCod" for="php">
                    PHP - jQuery - Ajax
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" style="height:22px; width:22px; vertical-align: middle;margin-right: 10px" type="checkbox" value="Node - jQuery" id="node" name="chkSviluppo[]">
                <label class="form-check-label lblCod" for="node">
                    Node - jQuery
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" style="height:22px; width:22px; vertical-align: middle;margin-right: 10px" type="checkbox" value="Express - Angular" id="express" name="chkSviluppo[]">
                <label class="form-check-label lblCod" for="express">
                    Express - Angular
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" style="height:22px; width:22px; vertical-align: middle;margin-right: 10px" type="checkbox" value="Asp.Net - jQuery" id="asp" name="chkSviluppo[]">
                <label class="form-check-label lblCod" for="asp">
                    Asp.Net - jQuery
                </label>
            </div>
            <hr>

            <h3>Provincia di residenza</h3>
            <select class="form-select form-select-lg" name="cboResidenza">
                <option value="Cuneo">Cuneo</option>
                <option value="Torino">Torino</option>
                <option value="Savona">Savona</option>
                <option value="Aosta">Aosta</option>
            </select>
            <hr>

            <h3>Interessi</h3>
            <select name="cboInteressi[]" class="form-select form-select-lg" multiple size="3">
                <option value="lettura">Lettura</option>
                <option value="sport">Sport</option>
                <option value="birra">Birra artigianale</option>
                <option value="musica">Musica</option>
                <option value="videogame">Videogame</option>
            </select>
            <hr>

            <div class="row">
                <div class="col-sm-6">
                    <input type="submit" value="Invia dati" id="btnInvia" class="btn btn-primary btn-lg" style="width: 100%">
                    <!--<br><input type="submit" formaction="registrazione.php" formmethod="get" value="Invia"/>-->
                </div>
                <div class="col-sm-6">
                    <input type="reset" value="Reset Form" id="btnReset" class="btn btn-warning btn-lg" style="width: 100%">
                </div>
            </div>
        </form>
    </section>
    <hr>

    <section id="assicurazioni" class="container">
        <div><h1>Gestione Assicurazioni</h1></div>
    </section>

    <section id="formReg" class="container">
        <form action="dati.php" method="post">
            <div><h3>Inserimento filiale assicurativa</h3></div>
            <div class="form-group row">
                <label for="txtCodIns" class="col-sm-3 col-form-label lblCod">Codice Sede</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-lg" id="txtCodIns" name="txtCodIns" placeholder="Codice Sede">
                </div>
                <label for="txtNomeIns" class="col-sm-3 col-form-label lblCod">Nome Sede</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-lg" id="txtNomeIns" name="txtNomeIns" placeholder="Nome Sede">
                </div>
                <label for="txtResp" class="col-sm-3 col-form-label lblCod">Responsabile</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-lg" id="txtResp" name="txtResp" placeholder="Responsabile">
                </div>
                <label for="txtCittaIns" class="col-sm-3 col-form-label lblCod">Città</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-lg" id="txtCittaIns" name="txtCittaIns" placeholder="Città">
                </div>
                <label for="txtCodTipoIns" class="col-sm-3 col-form-label lblCod">Tipo assicurazione</label>
                <div class="col-sm-9">
                    <input type="text" class="form-control form-control-lg" id="txtCodTipoIns" name="txtCodTipoIns" placeholder="Codice tipo assicurazione">
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-sm-6">
                    <input type="submit" value="Invia dati" id="btnInvia" class="btn btn-primary btn-lg" style="width: 100%">
                    <!--<br><input type="submit" formaction="registrazione.php" formmethod="get" value="Invia"/>-->
                </div>
                <div class="col-sm-6">
                    <input type="reset" value="Reset Form" id="btnReset" class="btn btn-warning btn-lg" style="width: 100%">
                </div>
            </div>
        </form>
    </section>
</body>

</html>