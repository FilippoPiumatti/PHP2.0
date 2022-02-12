<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Es1 PHP</title>
</head>
<body id="page-top">
    <h1>Prima pagina PHP</h1>
    *<!-- inizio php-->
    <?php
    //punto e virgola obbiligatorio
    echo("Prima stringa scritta da un comando PHP");//stampa su pagina qualsiasi cosa
    $num = 15;//classica dichiarazione di una variablie
    echo("<h2>Valore della variabile numero = $num</h2>");//non si concatena, 
    //si mette direttamente la variabile, se voglio concateNARE LO METTO SOTTO
    echo("<h2>Valore della variabile concatenando = ".$num."</h2>");
    ?>
    <div class="container-fluid">

        <div class="row m-5">
            
            <div class="col-lg-8 mx-auto bg-warning"><!--mxauto  = margin: 0px auto;-->
            <h1>Vettore Numerico</h1>
                <h3>
                    <?php
                        $vet = array(10);//DICHIARAZIONE DI UN VETTORE IN PHP
                        $vet[0] = 1;
                        $vet[1] = 15;
                        $vet[2] = $num;
                        $vet[9] = 111;
                        //serve per vedere se una variabile è settata, 
                        //se non e settata vol dire che o non e stata dichiarfta, 
                        //oppure ce stato un errore di caricamento della pagina
                        if(isset($vet)){
                            //scorrimento di un vettore
                            //per ogni elemento di vet assegno il suo valore a value
                            foreach($vet as $value){
                                echo($value."<br/>");//gestisce solo gli elementi presenti
                                //quelli undefined li lascia perdere
                            }
                            if (isset($vet[5])) {
                                echo("vet[5] = ".$vet[5]);
                            }else{
                                echo("La posizione 5 non è istanziata...");
                            }
                            
                        }
                        
                    ?><!--N:B ANCHE SE DICHIARO DUE TAG PHP, SARA SEMRPE UN CODICE UNICO!!!
                    QUINDI POSSO PRENDERE ANCHE LE VARIABILI DI QUELLO PRECEDENTE, AD ES NUM-->
                </h3>
            </div>
            <div class="col-lg-4 mx-auto">
                <h1>FUNZIONI</h1>
                <?php
                    /*le variabili in php NON SONO GLOBALI
                    glielo dobbiamo ricordare
                    quindi prima gli mettiamo davanti il prefisso GLOBAL
                    */ 
                    $nome = "Paperino";
                    visualizza1($nome);
                    function visualizza1($nome){
                        echo("Nome selezionato v1: " .$nome."<br/>");
                    }

                    visualizza2();
                    function visualizza2(){
                        global $nome;
                        echo("Nome selezionato v2: " .$nome);
                    }
                ?>
            </div>
        </div>
       <div class="row m-5">
             <div class="col lg-6 bg-primary p-5">
                    <h1>FUNZIONI CHE RESTITUISCONO DEI VALORI</h1>

                    <?php
                        $int1 = 10;
                        $int2 = 15;
                        $ModificaDaGlobal =  0;
                        $somma1 = 0;
                        $somma2 = GetSomma($int1,$int2,$somma1);

                        echo("la somma restituita dalla funzione vale : $somma2");
                        echo("<br/>La somma passata per referenza vale: ".$somma1);
                        echo("<br/>La seguente variabile ModificheDaGLobal modificata in modo globale vale: " .$ModificaDaGlobal);

                        function GetSomma($a,$b,&$somma1){//passiamo somma1 per referenza 
                            $som = $a + $b;
                            $somma1 = $som*2;
                            global $ModificaDaGlobal;
                            $ModificaDaGlobal += 5;
                            return $som;
                        }
                    ?>

             </div>
             <div class="col lg-6 bg-dark text-white p-5">
                    <h1>IMPLODE AND EXPLODE PHP</h1>
                    <h4>
                         <?php
                            echo("vet[0] = $vet[0]");
                            echo("<br> Implode di vet: " .implode($vet," - "));// la implode 
                            //serve per metter in riga elementi di un vettore
                            echo("<br/>Explode<br/>");
                            $str = "una stringa a caso";
                            $VetStr = explode(" ",$str);//contrario dell explode, porta il vettore a capo
                            foreach ($VetStr as $item) {
                                echo($item."<br/>");
                            }
                            /** Esempi di dichiarazione di vettori */
                            $vect1 = array();
                            $vect2 = [];
                            $vect3 = array('a','b','c');

                            //implodo vect3
                            echo("<br/>" .implode($vect3,"/"));
                            //push
                            array_push($vect3,$vet[0],$vet[1]); // == array.push();
                            echo("<br/> Dopo il push: <br>" .implode($vect3,"/"));
                            //pop
                            array_pop($vect3);
                            echo("<br/> Dopo il pop: <br>" .implode($vect3,"/"));
                            //sum
                            echo("<br>Somma di vet1: <br>".array_sum($vet));
                          ?>
                    </h4>
              </div>
       </div>
         <div class="row m-5">
              <div class="col-lg-12 bg-light">
                    <h2>VETTORI ASSOCIATIVI</h2>
                        <?php
                        //vettori associativi in php
                            $age = array();

                            $age["Peter"] = 35;
                            $age["Jessica"] = 20;
                            $age["Joe"] = 68;
                            echo("CON IL FOR<br>");
                            foreach ($age as $val) {
                                echo("<br>".key($age) ." età: ".$val);
                            }
                            echo("<br>CON IL WHILE<br>");
                            while($eta = current($age))//la funzione current prende l' elemento corrente
                            {
                                echo("<br>" .key($age)." anni " .$eta);
                                next($age);//passa al successivo elemento del vettore
                            }
                        ?>
              </div>
         </div>
    </div>
    <!--fine php-->
    <!--di default il web service cerca un file denominato index.php
    , 
    se c'è lo apre direttamente
    , 
    //altrimenti ti mostra le varie scelte di file
    come a d esempio un file denominatyo index1.php-->

    <footer class="bg-black small text-center">
        <div class="container">
            <h3>Copyright &copy; 4D Info 2022</h3>
        </div>
    </footer>
</body>
</html>
