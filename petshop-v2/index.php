<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PetShop</title>

    <!--REFERENCIAS-->
    <!-- Chamando o arquivo CSS-->
    <link rel="stylesheet" href="./css/styles.css">

    <!--ICONE PAGINA WEB-->
    <link rel="shortcut icon" type="image/png" href="https://cdn-icons-png.flaticon.com/512/3047/3047928.png" />

    <!-- BOOSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--Habilitar a fonte-->
    <link rel="stylesheet" href=https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css>

    <!--Habilitar os ícones-->
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.0.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <!--DEIXA TODA PÁGINA RESPONSIVA-->
    <div class="container-fluid">
        <!--INICÍO DO MENU SUPERIOR-->
           
        <nav class=" navbar navbar-expand-lg navbar-light" style="background-color:#FBE292">
            <a class="navbar-brand" href="index.html"><i class="fa-solid fa-shield-dog fa-2xl" style="color:#FFAC42;"
                    alt="" width="30" height="24" class="d-inline-block align-text-top"></i>
                <a class="navbar-brand" href="index.html">PETSHOP</a>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav ms-auto mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.html">Inicío</a>
                        </li>
                        
                        <li class="nav-item">
                            <a href="meusDados.php" rel="" class="nav-link">
                                <i class="fa-solid fa-user"></i>
                                <span class="visuallyhidden">Meus Dados</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="sobre.html">Sobre nós</a>
                        </li>
                    </ul>
                </div>
        </nav>
        <!--FIM DO MENU SUPERIOR-->

        <!--INICIO BARRA DE ATALHOS-->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FBE292;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <form class="d-flex w-100">
                    <input class="form-control me-2" type="search" placeholder="Buscar no PetShop" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Buscar</button>
                </form>
                <ul class="navbar-nav ms-auto mb-lg-">
                    <li class="nav-item">
                        <a href="carrinho.html" rel="" class="nav-link">
                            <i class="fa-solid fa-cart-shopping"></i>
                            <span class="visuallyhidden">Carrinho</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        <!--FIM BARRA DE ATALHOS-->

        <!--INICIO DO MENU SECUNDÁRIO-->
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #FBE292;">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Cachorros
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="racao.php">Ração</a></li>
                            <li><a class="dropdown-item" href="Pest_Ossos.php">Pestiscos e Ossos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Gatos
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="racaoGatos.php">Ração</a></li>
                            <li><a class="dropdown-item" href="pesticos.php">Pestiscos</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>

        <br>
        <!-- Inicio carrosel-->
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="https://static.petz.com.br/fotos/Home_Desk_1900x390_Racoes30OFF_2023_03.jpg"
                        class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://static.petz.com.br/fotos/Home_Desk_1900x390_CDSG.jpg" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="https://images.petz.com.br/fotos/Home_Desk_1900x390_Petiscos_30OFF_2023_04.jpg"
                        class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- Fim carrosel-->

        <br>

        <!-- Inicío do Slider de Produtos Recomendados-->
        <section class="produtos">
            <h5 class="produtosrecomendados">Produtos Recomendados</h5>
            <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
            <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
            <div class="product-container">
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.petz.com.br/fotos/1674144929333.jpg" class="product-thumb"
                            alt="Ração GranPlus Menu para Cães Adultos de Porte Mini Sabor Carne e Arroz">
                        <button class="card-btn">Adicionar ao carrinho</button>
                    </div>
                    <div class="product-info">
                        <h6 class="product-brand">Ração GranPlus Menu para Cães Adultos de Porte Mini Sabor Carne e
                            Arroz</h6>
                        <span class="price">R$ 123,21</span>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.petz.com.br/fotos/1674141607786.jpg" class="product-thumb"
                            alt="Ração GranPlus Gourmet para Cães Adultos de Médio e Grande Porte Sabor Ovelha e Arroz">
                        <button class="card-btn">Adicionar ao carrinho</button>
                    </div>
                    <div class="product-info">
                        <h6 class="product-brand">Ração GranPlus Gourmet para Cães Adultos de Médio e Grande Porte Sabor
                            Ovelha e Arroz</h6>
                        <span class="price">R$ 215,90</span>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.petz.com.br/fotos/1670527018557.jpg" class="product-thumb"
                            alt="Refeição Natural Zee.Dog Kitchen para Cães Adultos Sabor Carne">
                        <button class="card-btn">Adicionar ao carrinho</button>
                    </div>
                    <div class="product-info">
                        <h6 class="product-brand">Refeição Natural Zee.Dog Kitchen para Cães Adultos Sabor Carne</h6>
                        <span class="price">R$ 87,90</span>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.petz.com.br/fotos/1660142146769.jpg" class="product-thumb"
                            alt="Ração Royal Canin Shih Tzu para Cães Filhotes">
                        <button class="card-btn">Adicionar ao carrinho</button>
                    </div>
                    <div class="product-info">
                        <h6 class="product-brand">Ração Royal Canin Shih Tzu para Cães Filhotes</h6>
                        <span class="price">R$ 71,70</span>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.petz.com.br/fotos/1660162896325.jpg" class="product-thumb"
                            alt="Ração Royal Canin Maxi para Cães Adultos de Porte Grande 15kg">
                        <button class="card-btn">Adicionar ao carrinho</button>
                    </div>
                    <div class="product-info">
                        <h6 class="product-brand">Ração Royal Canin Maxi para Cães Adultos de Porte Grande 15kg</h6>
                        <span class="price">R$ 430,75</span>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.petz.com.br/fotos/1627911682289.jpg" class="product-thumb"
                            alt="Biscoito Pedigree Biscrok Marrobone para Cães Adultos Sabor Carne">
                        <button class="card-btn">Adicionar ao carrinho</button>
                    </div>
                    <div class="product-info">
                        <h6 class="product-brand">Biscoito Pedigree Biscrok Marrobone para Cães Adultos Sabor Carne</h6>
                        <span class="price">R$ 23,69</span>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.petz.com.br/fotos/1628688439545.jpg" class="product-thumb"
                            alt="Biscoito Petz Clássico para Cães Adultos">
                        <button class="card-btn">Adicionar ao carrinho</button>
                    </div>
                    <div class="product-info">
                        <h6 class="product-brand">Biscoito Petz Clássico para Cães Adultos</h6>
                        <span class="price">R$ 29,98</span>
                    </div>
                </div>
                <div class="product-card">
                    <div class="product-image">
                        <img src="https://images.petz.com.br/fotos/1628688628512.jpg" class="product-thumb"
                            alt="Biscoito Petz Clássico para Cães Filhotes - 300g">
                        <button class="card-btn">Adicionar ao carrinho</button>
                    </div>
                    <div class="product-info">
                        <h6 class="product-brand">Biscoito Petz Clássico para Cães Filhotes - 300g</h6>
                        <span class="price">R$ 14,99</span>
                    </div>
                </div>
            </div>
    </div>
    </div>
    </section>

    <script src="script.js"></script>
    <!-- FIM do Slider de Produtos Recomendados-->

    <!-- Inicío do Slider de Produtos Recomendados-->
    <section class="produtos">
        <h5 class="produtosrecomendados">Marcas Recomendadas</h5>
        <button class="pre-btn"><img src="images/arrow.png" alt=""></button>
        <button class="nxt-btn"><img src="images/arrow.png" alt=""></button>
        <div class="product-container">
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.petz.com.br/fotos/1658429301983.jpg" class="product-thumb" alt="Golden">
                </div>
                <div class="product-info">
                    <h6 class="product-brand">Golden</h6>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.petz.com.br/fotos/1660162896325.jpg" class="product-thumb"
                        alt="RoyalCanin">
                </div>
                <div class="product-info">
                    <h6 class="product-brand">Royal Canin</h6>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.petz.com.br/fotos/1674495639326.jpg" class="product-thumb" alt="Hill">
                </div>
                <div class="product-info">
                    <h6 class="product-brand">Hill's</h6>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.petz.com.br/fotos/1627397695513.jpg" class="product-thumb"
                        alt="Nestlé Purina Pro Plan">
                </div>
                <div class="product-info">
                    <h6 class="product-brand">Nestlé Purina Pro Plan</h6>
                </div>
            </div>
        </div>
    </section>

    <!-- FIM do Slider de Produtos Recomendados-->

    <!-- Criação do Foolder/Rodapé-->
    <footer>
        <div id="footer_content">
            <div id="footer_contacts">
                <h1>PetShop</h1>
                <p>Só quem é apaixonado por animais sabe: a relação de amor e cumplicidade que temos com nossos
                    bichinhos de estimação é um vínculo único! Por essa razão, não medimos esforços para oferecer o que
                    há de melhor para trazer ainda mais alegria e qualidade de vida. Rações, acessórios e brinquedos
                    estão na nossa listinha de prioridades; e tudo isso você encontra em nosso Pet Shop online.</p>

                <div id="footer_social_media">
                    <a class="footer-link" id="instagram">
                        <i class="fa-brands fa-instagram"></i>
                    </a>

                    <a class="footer-link" id="facebook">
                        <i class="fa-brands fa-facebook-f"></i>
                    </a>

                    <a class="footer-link" id="whatsapp">
                        <i class="fa-brands fa-whatsapp"></i>
                    </a>
                </div>
            </div>

            <ul class="footer-list">
                <li>
                    <h3>Institucional</h3>
                </li>
                <li>
                    <a href="sobre.html" class="footer-link">Sobre o PetShop</a>
                </li>
                <li>
                    <a>Trabalhe Conosco</a>
                </li>
                <li>
                    <a>Canal de Denúncias</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Nossas Políticas</h3>
                </li>
                <li>
                    <a>Entrega e Frete</a>
                </li>
                <li>
                    <a>Pagamento e Reembolso</a>
                </li>
                <li>
                    <a>Trocas e Devoluções</a>
                </li>
                <li>
                    <a>Campanhas e Promoções</a>
                </li>
                <li>
                    <a>Política de Privacidade</a>
                </li>
            </ul>

            <ul class="footer-list">
                <li>
                    <h3>Atendimento</h3>
                </li>
                <li>
                    <a ">Meus Pedidos</a>
                </li>
                <li>
                    <a >Meu Cadastro</a>
                </li>
                <li>
                    <a >Fale Conosco</a>
                </li>
                <li>
                    <a >Ouvidoria</a>
                </li>
            </ul>

            <div id=" footer_subscribe">
                        <h5>Cadastre-se e receba nossas promoções e novidades antes de todo mundo.</h5>

                        <div id="input_group">
                            <input type="email" id="email">
                            <button>
                                <i class="fa-regular fa-envelope"></i>
                            </button>
                        </div>
        </div>
        </div>

        <div id="footer_copyright">
            &#169
            2023 Todos os direitos reservados
        </div>
    </footer>
    </div>
    <!-- JS-->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
        integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
        integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
        crossorigin="anonymous"></script>

    
        <script>
            // Verifique o estado de login ao carregar a página
            window.addEventListener('load', function() {
              var isLoggedIn = localStorage.getItem('isLoggedIn');
        
              if (isLoggedIn === 'true') {
                // Usuário está logado, exiba a opção "Meus Dados" no menu
                var meuDadosLink = document.getElementById('meu-dados-link');
                meuDadosLink.style.display = 'block';
              }
            });
          </script>

</body>

</html>
