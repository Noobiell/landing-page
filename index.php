<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- BOOTSTRAP CSS-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- JQUERY -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js" integrity="sha512-pHVGpX7F/27yZ0ISY+VVjyULApbDlD0/X0rgGbTqCE7WFW5MezNTWG/dnhtbBuICzsd0WQPgpE4REBLv+UqChw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <!--SLICK SLIDER-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" integrity="sha512-wR4oNhLBHf7smjy0K4oqzdWumd+r5/+6QO/vDda76MW5iug4PT7v86FoEkySIJft3XA0Ae6axhIvHrqwm793Nw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <!--FONTAWESOME-->
    <script src="https://kit.fontawesome.com/59f636855b.js" crossorigin="anonymous"></script>

    <!--SWEETALERT-->
    <script src="//cdn.jsdelivr.net/npm/sweetalert2/dist/sweetalert2.min.js"></script>

    <!--Tema Padrão-->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-minimal/minimal.css">

    <link rel="shortcut icon" href="assets/img/logo_vermelha.png" type="image/x-icon">
    <title>Imposto de Renda</title>
</head>

<body>

    <nav class="navbar navbar-expand-md fixed-top py-3">

        <div class="container d-flex justify-content-end">

            <button class="navbar-toggler float-end btnMenu" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                <i class="fa-solid fa-bars"></i>
            </button>

            <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">

                <div class="offcanvas-header">
                    <h5 class="offcanvas-title" id="offcanvasNavbarLabel">Menu</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>

                <div class="offcanvas-body">
                    <ul class="navbar-nav justify-content-end flex-grow-1 pe-5">
                        <li class="nav-item">
                            <a class="nav-link fw-bold" aria-current="page" href="#inicio">Início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#noticias">Prazo de pagamento</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#quem_declara">Quem declara</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#documentos">Documentação</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fw-bold" href="#processo">Acompanhar processo</a>
                        </li>
                    </ul>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link btn btnOutlinePreto btnLigarHeader" href="#">Ligar</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <article class="bannerInicio mb-5 py-5" id="inicio">
        <div class="container-fluid telaDisp">

            <div class="row telaDisp">

                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center">
                    <h1 class="tituloPag">Precisa de ajuda com seu imposto de renda?</h1>
                    <p>Descomplique a sua vida, fale agora mesmo com um de nossos especialístas no assunto! Você não paga nada para entrar em contato!</p>

                    <div class="mt-4 d-flex flex-column flex-md-row gap-3 w-100 mb-5">
                        <a href="#" target="_blank" class="btn btnPreto">Falar com um especialista <i class="fa-solid fa-angle-right"></i></a>
                        <button type="button" class="btn btnOutlinePreto" data-bs-toggle="modal" data-bs-target="#modalCadastro">Tenho interesse <i class="fa-solid fa-angle-right"></i></button>
                    </div>
                </div>

                <div class="col-lg-6 d-flex flex-column justify-content-center align-items-center position-relative">

                    <img src="assets/img/boneco.png" alt="boneco banner" class="img-fluid">
                    <img src="assets/img/icon_graph_1.png" class="grafico1" alt="grafico 1">
                    <img src="assets/img/icon_graph_2.png" class="grafico2" alt="grafico 2">

                </div>

            </div>

        </div>
    </article>


    <article class="container-fluid mb-5 py-5" id="noticias">

        <section class="row d-flex gap-3 justify-content-around align-content-stretch">

            <div class="col-md-4 bgCard1">

                <div class="containerCard border">

                    <div>
                        <div class="text-center">
                            <img src="assets/img/calendario_cartoon.png" alt="Imagem calendario" class="img-fluid imagemBanner" loading="lazy">
                        </div>

                        <div class="text-center px-3">
                            <h6>Calendario de pagamento</h6>
                            <p>Não perda o prazo para a declaração do seu imposto de renda! Saiba mais sobre as datas clicando no botão abaixo!</p>
                        </div>
                    </div>

                    <div>
                        <a class="btn btnCard" href="#" target="_blank">Saiba mais <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>


            <div class="col-md-4  bgCard1">

                <div class="containerCard border">

                    <div>
                        <div class="text-center">
                            <img src="assets/img/saco_de_dinheiro2.png" alt="Imagem calendario" class="img-fluid imagemBanner" loading="lazy">
                        </div>

                        <div class="text-center px-3">
                            <h6>restituição via Pix</h6>
                            <p>O contribuinte que utilizar a declaração pré-preenchida ou optar por receber a restituição via Pix, chave CPF – única permitida – terá prioridade no recebimento do valor devido, após as já previstas em lei</p>
                        </div>
                    </div>

                    <div>
                        <a class="btn btnCard" href="#" target="_blank">Saiba mais <i class="fa-solid fa-arrow-right"></i></a>
                    </div>
                </div>

            </div>

        </section>

    </article>

    <article class="container-fluid mb-5 py-5" id="quem_declara">

        <section class="row">

            <div class="col-lg-6">

                <img src="assets/img/mulher_feliz_cartoon.png" alt="cartoon mulher pulando feliz" class="img-fluid" loading="lazy">

            </div>


            <div class="col-lg-6">

                <h1>Afinal, quem deve declarar imposto de renda?</h1>

                <p>Deve declarar o Imposto de Renda em 2023 o cidadão residente no Brasil que recebeu rendimentos tributáveis acima de R$ R$ 28.559,70 em 2022, ou cerca de R$ 2.380 por mês, incluindo salários, aposentadorias, pensões e aluguéis; que recebeu rendimento isento, não tributável ou tributado exclusivamente na fonte acima de R$ 40 mil; e que obteve, em qualquer mês, ganho de capital na alienação de bens ou direitos sujeito à incidência do Imposto.</p>

                <div class="mt-4">
                    <a href="#" target="_blank" class="btn btnPreto">Descobra agora <i class="fa-solid fa-angle-right"></i></a>
                </div>

            </div>

        </section>

    </article>


    <article class="container-fluid py-5" id="documentos">

        <div class="row mb-3">
            <h1>Documentações necessárias</h1>
        </div>

        <section class="row">

            <div class="col-12" id="documentacao">

                <div class="mx-2 bgCard1">

                    <div class="containerDocumentacao">
                        <span>1.</span>
                        <h6>Informe de rendimento</h6>
                        <p>RG, CPF, Comprovante de residencia e dados bancários</p>
                    </div>
                </div>

                <div class="mx-2 bgCard1">
                    <div class="containerDocumentacao">
                        <span>2.</span>
                        <h6>Informe de rendimento</h6>
                        <p>A empresa deve fornecer</p>
                    </div>
                </div>

                <div class="mx-2 bgCard1">
                    <div class="containerDocumentacao">
                        <span>3.</span>
                        <h6>Documentos dos dependentes</h6>
                        <p>O CPF é obrigatório</p>
                    </div>
                </div>

                <div class="mx-2 bgCard1">
                    <div class="containerDocumentacao">
                        <span>4.</span>
                        <h6>Informe financeiros e de aplicações ou extrato de aplicações </h6>
                        <p>Fornecidos pelo banco</p>
                    </div>
                </div>

                <div class="mx-2 bgCard1">
                    <div class="containerDocumentacao">
                        <span>5.</span>
                        <h6>Comprovante de despesas médicas</h6>
                        <p>Nome, endereço, CPF ou CNPJ do prestador, data e assinatura do médico caso nao seja uma nota fiscal</p>
                    </div>
                </div>

                <div class="mx-2 bgCard1">
                    <div class="containerDocumentacao">
                        <span>6.</span>
                        <h6>Comprovande de despesas com ensino</h6>
                        <p>Faculdade, Escola, etc.</p>
                    </div>
                </div>

                <div class="mx-2 bgCard1">
                    <div class="containerDocumentacao">
                        <span>7.</span>
                        <h6>Extrato de previdência privada</h6>
                    </div>
                </div>

                <div class="mx-2 bgCard1">
                    <div class="containerDocumentacao">
                        <span>8.</span>
                        <h6>Documentação do plano de saúde</h6>
                    </div>
                </div>

                <div class="mx-2 bgCard1">
                    <div class="containerDocumentacao">
                        <span>9.</span>
                        <h6>Documentação de imóveis e veículo</h6>
                        <p>inclusive financiados</p>
                    </div>
                </div>

                <div class="mx-2 bgCard1">
                    <div class="containerDocumentacao">
                        <span>10.</span>
                        <h6>Recibos de pagamento ou recebimento de aluguel</h6>
                    </div>
                </div>

                <div class="mx-2 bgCard1">
                    <div class="containerDocumentacao">
                        <span>11.</span>
                        <h6>Recibo de doações</h6>
                    </div>
                </div>

                <div class="mx-2 bgCard1">
                    <div class="containerDocumentacao">
                        <span>12.</span>
                        <h6>Documentação da empresa</h6>
                        <p>Contrato social das empresas as quais é sócio.</p>
                    </div>
                </div>

                <div class="mx-2 bgCard1">
                    <div class="containerDocumentacao">
                        <span>13.</span>
                        <h6>Documentação de consórcios contemplados ou não</h6>
                    </div>
                </div>

                <div class="mx-2 bgCard1">
                    <div class="containerDocumentacao">
                        <span>14.</span>
                        <h6>Extrato do carnê-leão, caso seja autônomo</h6>
                    </div>
                </div>

            </div>

        </section>
    </article>


    <article class="container" id="processo">

        <section class="row">

            <div class="col-md-6 d-flex flex-column justify-content-center align-items-center">

                <h1>Como acompanhar sua declaração do Imposto de Renda?</h1>

                <p>Após finalizar sua declaração, é possível consultar o processamento entrando no portal do GovBR, acessando o <a href="https://cav.receita.fazenda.gov.br/autenticacao/login/index/11" target="_blank">e-CAC</a>. Feito isso, vá até a opção “Meu Imposto de Renda”. Lá, você tem acesso ao status de sua declaração com a Receita, além de acompanhar a liberação de sua restituição ou emitir suas guias de imposto, caso seja apurado IR a pagar.</p>

                <p>Para acessar o portal será necessário ter um certificado digital ou criar um código de acesso. Para isso, você precisará informer seus dois últimos números de recibo da declaração de IRPF, caso não possua, a senha pode ser gerada em um posto da Receita Federal.</p>

                <a class="btn btnPreto w-100 mt-3" href="#" target="_blank"><i class="fa-brands fa-whatsapp"></i> Entrar em contato</a>

            </div>

            <div class="col-md-6">

                <img src="assets/img/avatar_duvida.png" alt="Avatar representando dúvidas" class="img-fluid">

            </div>

        </section>

    </article>

    <footer class="container-fluid">

        <section class="row">

            <div class="col-12 text-center mb-4">
                Logo
            </div>

            <div class="col-12 mb-4">

                <div class="d-flex flex-row gap-4 flex-wrap justify-content-center text-center">

                    <a href="#inicio" class="linkFooter">Início</a>
                    <a href="#noticias" class="linkFooter">Prazo de pagamento</a>
                    <a href="#quem_declara" class="linkFooter">Quem declara</a>
                    <a href="#documentos" class="linkFooter">Documentação</a>
                    <a href="#processo" class="linkFooter">Acompanhar processo</a>

                </div>

            </div>


            <div class="col-12 mb-5">

                <div class="d-flex flex-row gap-5 flex-wrap justify-content-center text-center">

                    <a href="#" class="linkFooter fs-2" target="_blank"><i class="fa-brands fa-whatsapp"></i></a>
                    <a href="#" class="linkFooter fs-2" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="linkFooter fs-2" target="_blank"><i class="fa-brands fa-facebook"></i></a>

                </div>

            </div>

            <div class="col-12 text-center">
                <span class="copyFooter">Copyright © 2023 Perez Barros Contabilidade</span>
            </div>


        </section>

    </footer>


    <!--MODAL CADASTRO-->
    <div class="modal fade" id="modalCadastro" tabindex="-1" aria-labelledby="modalCadastroLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="modalCadastroLabel">Queremos te conhecer melhor</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div><!--Fim header-->
                <div class="modal-body">
                    <form id="contato">
                        <div class="container-fluid">
                            <div class="row">
                                <div class="col-12">
                                    <div class="mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control inputContato" name="nome" id="nome" placeholder="Seu nome">
                                            <label for="nome"><i class="fa-solid fa-user"></i>&nbsp;&nbsp; Nome completo</label>
                                        </div>
                                    </div>

                                    <div class="mb-3">
                                        <div class="form-floating">
                                            <input type="text" class="form-control inputContato" name="celular" id="celular" placeholder="Seu Celular" inputmode="numeric" maxlength="14">
                                            <label for="celular"><i class="fa-solid fa-phone"></i>&nbsp;&nbsp; Celular</label>
                                        </div>
                                    </div>

                                    <div class="mb-2">
                                        <div class="form-floating">
                                            <input type="email" class="form-control inputContato" name="email" id="email" placeholder="Seu E-mail">
                                            <label for="email"><i class="fa-solid fa-envelope"></i>&nbsp;&nbsp; E-mail</label>
                                        </div>
                                    </div>

                                    <div class="mb-3 text-center">
                                        <span id="avisoFormulario"></span>
                                    </div>

                                    <div>

                                        <button class="btn btnPreto w-100" type="submit">Enviar&nbsp;&nbsp; <i class="fa-solid fa-chevron-right"></i></button>

                                    </div>

                                </div><!--Fim col-->
                            </div><!--Fim row-->
                        </div><!--Fim container-->
                    </form>
                </div><!--Fim body-->
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="assets/js/index.js"></script>
    <script>
        window.importo = new ImpostoRenda
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>