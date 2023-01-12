<!doctype html>
<html lang="en">
<?php get_header(); ?>
<body>
     <!-- Start DEMO HTML (Use the following code into your project)-->
     <div id="mySlider"></div>
     <div id="sliderNav">
         <div id="sliderPrev" onclick="prevSlide();"><i class="fa fa-chevron-left"></i></div>
         <div id="sliderNext" onclick="nextSlide();"><i class="fa fa-chevron-right"></i></div>
     </div>    
  <!-- END EDMO HTML (Happy Coding!)-->

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-fixed-top navbar-expand-lg navbar-light">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Navbar brand -->
            <a class="navbar-brand" style="margin-left: 20%; size: 20px;">

            <img src="<?php echo get_template_directory_uri().'/assets/images/logo-white.png';?>"
                    id="total-logo-white" width="50" alt="Rastrek">


                <img id="rastrek-logo-white" src="<?php echo get_template_directory_uri().'/assets/images/logo-white-200x56-rastrek.png';?>" width="200" alt="Rastrek"></a>
            <!-- <a class="dropdown-item" href="#"><img src="assets/logo.png" width="55" alt="Rastrek"></a> -->
            <!-- Toggle button -->

            <button class="navbar-toggler" type="button" data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left links -->
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 right">
                    <li class="nav-item" id="navbar-rastrek-section">
                        <a id="section-navbar-rastrek" class="nav-link active">Rastrek</a>
                    </li>
                    <li class="nav-item" id="navbar-licenciamento-section">
                        <a id="section-navbar-licenciamento" class="nav-link">Total</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#preco">Preço</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#instalacao">Instalação </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#agenda">Contato</a>
                    </li>
                    <li class="nav-item" style="margin-right:250px;">
                        <a class="nav-link" href="#agenda">Localização</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->


    <!-- NEW SLIDESHOW -->


    <!-- section abas serviços -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="text-align: center;">
                    <h2>Serviços</h2>
                </div>
                <p>&nbsp;</p>
                <p>&nbsp;</p>
                <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-4" style="text-align: center;">
                        <button id="select-section-rastrek" class="btn btn-warning active"
                            style="border-radius: 50%; padding: 5%;">
                            <i class="fa-solid fa-map-location-dot fa-2x" style="color: black;"></i>
                            <br>

                        </button>
                        <p style="font-size: 18px; color: black; font-weight: 600; padding: 3%;">
                            RASTREAMENTO </p>
                    </div>
                    <div class="col-md-4" style="text-align: center;">
                        <button id="select-section-licenciamento" class="btn btn-warning"
                            style="border-radius: 50%; padding: 5%;">
                            <i class="fa-solid fa-car fa-2x" style="color: black;"></i>
                            <br>

                        </button>
                        <p style="font-size: 18px; color: black; font-weight: 600; padding: 3%;">
                            LICENCIAMENTO E <br> FINANCIAMENTO
                        </p>
                    </div>
                    <div class="col-md-2"></div>
                </div>
            </div>
        </div>

    </section>
    <!-- SECTION RASTREK -->
    <section id="section-rastrek">
        <div class="container">
            <p style="padding: 5%;">
            <p class="brasil-roubado"><strong> No Brasil, um veículo é roubado a cada minuto.
                </strong>

            </p>
            <p style="font-size: 18px;">
                Proteja seu patrimônio com o sistema <span class="bg-warning">Rastrek</span>.
                Com ele você monitora em tempo real a sua localização via satélite, com opção de bloqueio da ignição.

                Seja para automóveis, motocicletas, furgões ou caminhões, tenha total controle na palma da sua mão pelo
                celular. </p>
            </p>


            <div class="d-flex" id="servicos" style="height: 100px;color: transparent;">
                <div class="vr"></div>
            </div>

            <!-- CARDS SECTION -->

            <section class="cards">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3">

                        <div class="card card-section">
                            <div class="card-content" style="text-align: center;"><i
                                    class="fa-solid fa-map-location-dot fa-4x"
                                    style="padding: 10%; color: #FFB500;"></i>
                                <h5 class="card-title">
                                    Rastreamento e Monitoramento
                                </h5>
                                <p>
                                    Monitore e rastreie seu veículo 24 horas por dia através da plataforma Rastrek no
                                    seu
                                    celular
                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">

                        <div class="card card-section">
                            <div class="card-content" style="text-align: center;"><i
                                    class="fa-solid fa-satellite-dish fa-4x" style="padding: 10%; color: #FFB500;"></i>
                                <h5 class="card-title">
                                    Telemetria Veicular
                                </h5>
                                <p>
                                    Controle e gerencie o seu veículo com KMs percorridos, tempo de percurso, locais de
                                    parada.
                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex" style="height: 100px;color: transparent;">
                    <div class="vr"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <div class="card card-section">
                            <div class="card-content" style="text-align: center;"><i class="fa-solid fa-clock fa-4x"
                                    style="padding: 10%; color: #FFB500;"></i>
                                <h5 class="card-title">
                                    Informações em
                                    Tempo Real
                                </h5>
                                <p>
                                    Monitore seu veículo em tempo real como velocidade, ignição, local.
                                    <br>
                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-section">
                            <div class="card-content" style="text-align: center;"><i
                                    class="fa-sharp fa-solid fa-earth-americas fa-4x"
                                    style="padding: 10%; color: #FFB500;"></i>
                                <h5 class="card-title">
                                    Em todo Brasil
                                </h5>
                                <p>
                                    Nossos serviços têm cobertura em todo território nacional e você pode controlar de
                                    qualquer
                                    lugar do mundo.
                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-section">
                            <div class="card-content" style="text-align: center;"><i class="fa-solid fa-tractor fa-4x"
                                    style="padding: 10%; color: #FFB500;"></i>
                                <h5 class="card-title">
                                    Rastreamento Agrícola
                                </h5>
                                <p>
                                    Importe e exporte talhões em KML/KMZ e tenha a gestão das suas máquinas em nossa
                                    plataforma.
                                </p>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-1"></div>

                </div>


            </section>
            <!-- END CARDS -->




            <div class="d-flex" style="height: 250px;color: transparent;">
                <div class="vr"></div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-4" id="como-funciona">
                    <div class="d-flex" style="height: 100px;color: transparent;">
                        <div class="vr"></div>
                    </div>
                    <h4 style="text-align: center; ">Como Funciona?</h4>
                    <p>
                        Com uma interface simples, você pode acompanhar em tempo real a localização do seu veículo
                        usando o
                        celular. Se ocorrer algum problema, você tem a opção de bloquear a ignição do seu veículo, além
                        de
                        obter
                        vários alertas como ignição ligada ou desligada, movimento, velocidade e vários outros.
                        Se você emprestou seu carro, ou é usado por terceiros - saiba onde ele está em tempo real.

                        Mesmo que não aconteça uma ação <span class="danger">criminosa</span>, você pode monitorar a
                        localização
                        do seu veículo a qualquer
                        momento, esteja ele sendo conduzido por funcionários, amigos ou parentes.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/botao-panico.png';?>" alt="Preço" style="width: 100%">
                </div>
            </div>


            <div class="d-flex" style="height: 100px;color: yellow;;">
                <div class="vr"></div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/coffecup.png';?>" alt="Preço" style="width: 100%;">
                </div>

                <div class="col-md-4" id="preco">
                    <div class="d-flex" style="height: 100px;color: yellow;">
                        <div class="vr"></div>
                    </div>
                    <h4>Quanto Custa?</h4>
                    <p>
                        Por apenas <span class="bg-warning">R$49,90</span> você terá seu patrimônio protegido. Isso
                        equivale
                        a
                        R$1,66 por dia. Menos que um
                        cafezinho por dia, você terá controle e proteção do seu veículo.

                        Algumas seguradoras reduzem o preço do seguro caso o sistema de rastreamento e bloqueio esteja
                        instalado. Consulte sua seguradora!
                    </p>
                </div>
                <div class="col-md-2">
                </div>
            </div>
            <div class="d-flex" style="height: 100px;color: transparent;">
                <div class="vr"></div>
            </div>
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-4" id="instalacao">
                    <div class="d-flex" style="height: 100px;color: yellow;">
                        <div class="vr"></div>
                    </div>
                    <h4 id="instalacao">Como é feita a instalação?</h4>
                    <p>
                        De uma forma rápida e pouco invasiva no seu veículo, o rastreador é instalado e o cadastro no
                        sistema é
                        realizado.
                        Em cerca de meia hora todo o sistema estará em pleno funcionamento. Saia da loja protegendo a si
                        e
                        ao
                        seu patrimônio em menos de 30 minutos.
                    </p>
                </div>
                <div class="col-md-4">
                    <img src="<?php echo get_template_directory_uri().'/assets/images/shaking-hands.png';?>" alt="Preço" style="width: 100%;">
                </div>


                <div class="col-md-2">
                </div>
            </div>
            <div class="d-flex" style="height: 100px;color: transparent;">
                <div class="vr"></div>
            </div>


        </div>
    </section>



    <!-- SECTION LICENCIAMENTO -->
    <div id="section-licenciamento" style="display: none;">
        <div class="container">
            <p style="padding: 5%;">
            <p class="brasil-roubado"><strong> Dirija Tranquilo! <br>
                    Dividimos seu IPVA em 12X!
                </strong>

            </p>
            <p style="font-size: 18px;">
                Na Total Serviços você pode parcelar seu licenciamento, IPVA, Multas e Transferência em até 12 vezes com
                Cartão de Crédito ou qualquer débito referente ao veículo, como Dívida Ativa.</p>
            </p>
            <div class="d-flex" id="servicos" style="height: 100px;color: transparent;">
                <div class="vr"></div>
            </div>

            <section class="cards">
                <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-3">

                        <div class="card card-section">
                            <div class="card-content" style="text-align: center;">

                                <h5 class="card-title">
                                    <br>
                                    Transferência de Veículos

                                </h5>
                            </div>
                            <p></p>
                        </div>
                    </div>
                    <div class="col-md-3">

                        <div class="card card-section">
                            <div class="card-content" style="text-align: center;">
                                <h5 class="card-title">
                                    <br>
                                    Parcelamento de Multas e IPVA

                                </h5>
                                <p>

                                </p>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="d-flex" style="height: 100px;color: transparent;">
                    <div class="vr"></div>
                </div>
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-3">
                        <div class="card card-section">
                            <div class="card-content" style="text-align: center;">
                                <h5 class="card-title">
                                    <br>
                                    Licenciamento

                                </h5>
                                <p>

                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-section">
                            <div class="card-content" style="text-align: center;">
                                <h5 class="card-title">
                                    <br>
                                    Emplacamento
                                </h5>
                                <p>
                                </p>

                            </div>

                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="card card-section">
                            <div class="card-content" style="text-align: center;">
                                <h5 class="card-title">
                                    <br>
                                    Placa Mercosul
                                </h5>
                                <p>
                                </p>

                            </div>

                        </div>
                    </div>

                    <div class="col-md-1"></div>

                </div>

                <div>
                    <div class="row">
                        <div class="col-md-3"></div>
                        <div class="col-md-6" style="padding: 5%; text-align: justify; width: 100%;">
                            <p style=" font-size: 18px;">
                                Quanto custa nossos serviços? A nossa taxa de administração, honorários com despachantes
                                e
                                custos com as administradoras de cartão de crédito corresponde a menos da metade de
                                todos os
                                custos que você possuir inerentes ao licenciamento e multas e você paga em 12 vezes no
                                cartão de
                                crédito.
                            </p>
                            <p style=" font-size: 18px;">
                                <span class="bg-danger">Atenção:</span> É possível que ocorram outras cobranças de
                                débitos no RENAVAM informado, após o
                                pagamento efetuado pelo Despachante. São débitos que, por motivos diversos, não
                                constavam no sistema bancário no momento da contratação dos serviços. Estes débitos
                                geralmente se referem a multas de trânsito do sistema RENAINF, multas de outros Estados,
                                IPVA em dívida ativa, etc. Para estes casos, se houver interesse, o usuário poderá
                                adquirir um novo serviço para a quitação destes outros débitos.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>



    <!-- FALE CONOSCO SECTION -->
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <p>&nbsp;</p>

    <section id="agenda" style="background-color:#FFB500; padding: 5%; width: auto;">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-3">



                <p>
                    Tel¹.:
                    <button class="btn">

                        <a href="https://wa.me/5571991816353" target="_blank" rel="noopener">
                            <i class="fab fa-whatsapp"></i>
                            71 9 9181-6353
                        </a>
                    </button>
                </p>

                <p>Tel².:
                    <button class="btn">
                        <a href="https://wa.me/5571992021415" target="_blank" rel="noopener">
                            <i class="fab fa-whatsapp"></i>
                            71 9 9202-1415
                        </a>
                    </button>
                </p>
                <p>
                    Tel³.:
                    <button class="btn">
                        <i class="fa fa-phone" aria-hidden="true"></i> <a> 71 3450-2006</a>
                    </button>
                </p>
                <p>E-mail: <button class="btn"> <a href="mailto:carlos@ipvatotal.com.br">
                            carlos@ipvatotal.com.br <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        </a></button></br>
                </p>
            </div>
            <div class="col-md-3">
                <p>Stock Center, Loja 3A , Imbuí.
                <p>Av. Luiz Viana 2489. ( em frente a estação Metrô do
                    Imbui - Sentido Rodoviária) </p>
                <p>Salvador - Bahia - CEP 41730-101</p>
                </p>
                <p>&nbsp;</p>
                <p><strong>HORÁRIO DE FUNCIONAMENTO</strong>
                <p>SEGUNDA A SEXTA
                <p>Das 8h às 17h00
                </p>
            </div>

            <div class="row" style="text-align: center;">

                <div class="col-md-12">

                    <img style="width: 25%;" src="<?php echo get_template_directory_uri().'/assets/images/localizacao1.jpeg';?>" alt="Localização">
                    <img style="width: 25%;" src="<?php echo get_template_directory_uri().'/assets/images/localizacao2.jpeg';?>"alt="Localização">
                </div>

            </div>
    </section>

    <?php wp_footer(); ?>
</body>

</html>