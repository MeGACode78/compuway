<?php
include ('swf/cabecalho_&a.php');
?>
    <!-- Header -->
    <header>
        <div class="intro-text">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
              <!-- Slide One - Set the background image for this slide in the line below -->
              <div class="carousel-item active" style="background-size: 100% 100%; background-image: url('swf/img/slide/1.png');"></div>
              <!-- Slide Two - Set the background image for this slide in the line below -->
              <div class="carousel-item" style="background-size: 100% 100%; background-image: url('swf/img/slide/2.png')"></div>
              <!-- Slide Three - Set the background image for this slide in the line below -->
              <div class="carousel-item" style="background-size: 100% 100%; background-image: url('swf/img/slide/3.png')"></div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
    </header>

    <!-- Services -->
    <section style="background-color: #fafafa;" id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h3 class="section-heading text-uppercase"><font color="#663898">O que oferecemos?</font></h3>
            <br>
          </div>
        </div>
        <div class="row text-center">
          <div class="col-md-3">
            <span class="fa-stack fa-4x">
                <img src="swf/img/oferecimentos/oferecemos1.png">
            </span>
            <br><br>
            <p class="text-muted">+ de 500 cursos</p>
          </div>
          <div class="col-md-3">
            <span class="fa-stack fa-4x">
                <img src="swf/img/oferecimentos/oferecemos2.png">
            </span>
            <br><br>
            <p class="text-muted">Campanhas Publicitárias</p>
          </div>
          <div class="col-md-3">
            <span class="fa-stack fa-4x">
                <img src="swf/img/oferecimentos/oferecemos3.png">
            </span>
            <br><br>
            <p class="text-muted">Treinamentos e Suporte</p>
          </div>
          <div class="col-md-3">
            <span class="fa-stack fa-4x">
                <img src="swf/img/oferecimentos/oferecemos4.png">
            </span>
            <br><br>
            <p class="text-muted">Material Didático exclusivo</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Portfolio Grid -->
    <section class="bg-light" id="portfolio" style="background-color: #fff!important;">
      <div class="container">
        <div class="row">
          <div class="col-lg-12" style="text-align:left;">
              <h3 class="section-heading"><font color="#663898"> Aqui você não em só um <br>CURSO, tem uma PROFISSÃO...</font></h3><br>
          </div>
        </div>
        <div class="row">
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <h4>Tecnologia da <br>Informação</h4>
                    <h6>Saiba Mais...</h6>
                </div>
              </div>
                <img style="width: 100%;" class="img-fluid" src="swf/img/portfolio/tecnologia.png" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#operador">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                    <h4>Operador de <br>Telemarketing</h4>
                    <h6>Saiba Mais...</h6>
                </div>
              </div>
                <img style="width: 100%;" class="img-fluid" src="swf/img/portfolio/atendente.png" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <h4>Web Designer</h4>
                    <h6>Saiba Mais...</h6>
                </div>
              </div>
                <img style="width: 100%;" class="img-fluid" src="swf/img/portfolio/web.png" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <h4>Programador de <br>Sistemas</h4>
                    <h6>Saiba Mais...</h6>
                </div>
              </div>
                <img style="width: 100%;" class="img-fluid" src="swf/img/portfolio/programador.png" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#criacao">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <h4>Criação de Games</h4>
                    <h6>Saiba Mais...</h6>
                </div>
              </div>
                <img style="width: 100%;" class="img-fluid" src="swf/img/portfolio/criacao-games.png" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <h4>Montagem e <br>Manutenção</h4>
                    <h6>Saiba Mais...</h6>
                </div>
              </div>
                <img style="width: 100%;" class="img-fluid" src="swf/img/portfolio/montagem-manutencao.png" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <h4>Informática para <br>Crianças</h4>
                    <h6>Saiba Mais...</h6>
                </div>
              </div>
                <img style="width: 100%;" class="img-fluid" src="swf/img/portfolio/informatica-crianca.png" alt="">
            </a>
          </div>
          <div class="col-md-3 col-sm-6 portfolio-item">
            <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
              <div class="portfolio-hover">
                <div class="portfolio-hover-content">
                  <h4>Todos os Cursos</h4>
                    <h6>Saiba Mais...</h6>
                </div>
              </div>
                <img style="width: 100%;" class="img-fluid" src="swf/img/portfolio/todos.png" alt="">
            </a>
          </div>
        </div>
      </div>
    </section>

    <!-- About -->
    <section style="background-color: #e8e6e6; border-bottom: 5px solid rgba(102, 56, 152, 1);" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">QUEM SOMOS?</h2>
            <hr>
            <br><br>
          </div>
        </div>
        <div class="row">
	      	<div class="col-lg-12">
	            <center>
	            	<font size="4"><b>A Compuway nasceu de um sonho e cresceu superando os desafios com muita força de vontade.</b></font>
	            	<br><br>
	            	<font size="4">Hoje damos inicio à carreira profissional e <b>abrimos portas para o futuro</b> promissor de nossos alunos. Através de <br>nossos cursos eles começam sua caminhada por um mundo repleto de possibilidade.</font>
	            	<br><br>
	            	<font size="4">Com <b>experiencia de mais de 40 anos</b> a Compuway oferece <b>o melhor sistema interativo</b> para cursos de<br>
	            	 Informática, Profissionalizantes, Melhor Idade e Kids. Possui <b>mais de 100 Unidades</b> em todo país e <b>1.000.000<br> alunos formados</b> na rede.</font>
	            	 <br><br>
	            	 <font size="4">A Compuway vem de encontro a necessidade do caráter pessoal e profissional de mercado, <b>visando o crescimento de quem aceitar o desafio de nunca parar de aprender!</b></font>
	            	 <br><br>
	            	 <font size="4">Com <b>modelo completamente interativo e prático</b> nossa empresa disponibiliza acima de tudo atenção e urgência na tarefa de tornar os utentes de cada área o melhor ! <b>Venha para a Compuway !</b></font>
	            	 <br><br>
	            	 <iframe class="video" src="https://www.youtube.com/embed/t_5DHKgDvMU" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
	            	 <br><br>
	            	 <div class="container" id="baixo">
	            	 	<div class="row">
                                    <div class="col-md-3"></div>
                                    <div class="col-md-6">
                                            <div class="outro">
                                                    <a href="#" style="text-decoration: none; color: white;">Faça parte dessa família, faça contato AGORA!</a>
                                            </div>
                                    </div>
                                    <div class="col-md-3"></div>
	            	 	</div>
	            	 </div>
	        	</center>
	      	</div>
        </div>
      </div>
    </section>

    <!-- Team -->
    <section style="background-image: url('swf/img/fundo/metodologia.png');" class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h3 class="section-heading text-uppercase text-white">METODOLOGIA DE ENSINO</h3>
            <p><font color="white" size="4">Nosso <b>sistema de ensino interativo é moderno e eficiente</b>. Ela foi desenvolvida pelos melhores profissionais do<br> mercado e possui <b>cursos que atendem diversos públicos</b>, desde crianças até pessoas que vivem a melhor <br>idade. Nossos cursos preparam aqueles que querem <b>iniciar uma carreira</b> ou buscam <b>qualificação para <br>crescerem profissionalmente</b>. Conheça algumas de nossas vantagens:</font></p>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5">
              <img src="swf/img/fundo/metodologia2.png" id="img2">
          </div>
          <div class="col-sm-7">
            <iframe class="video2" src="https://player.vimeo.com/video/204159089" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
            <br>
            <p class="text-white">Agora que conhece um pouco de nossa metodologia de ensino, que tal coloca-lá em prática? <b><a href="#" style="color: white;"><u><font size="4">Clique aqui</font></u></a></b> e solicite uma demonstração.</p>
          </div>
        </div>
      </div>
    </section>

    <!-- Contact -->
    <section id="contato">
        <div style="background: #fafafa;">
            <div class="container">
                <div class="row">
                    <div style="padding-top: 40px; text-align: left; " class="col-md-8">
                        <h2>Contato:</h2>
                        <h3>Entre em contato com nosso time!</h3>
                    </div>
                    <div class="col-md-4">
                        <center><img src="swf/img/team/contato.png"></center>
                    </div>
                    <div class="clearfix"></div>
                </div>
            </div>
        
            <div class="container">
                <div class="row text-center">
                  <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <img style="border-radius: 50%;" src="swf/img/team/endereco.png">
                    </span>
                    <font color="orange"> <p>Endereço</p></font>
                    <a>Matriz Compuway<br>Avenida 5, 725 - Centro<br>Orlândia/SP</a>
                  </div>
                  <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <img style="border-radius: 50%;" src="swf/img/team/horario.png">
                    </span>
                    <font color="orange"> <p>Horário de Atendimento</p></font>
                    <a>Segunda à Sexta: 08hrs às 17hrs</a>
                  </div>
                  <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <img style="border-radius: 50%;" src="swf/img/team/telefone.png">
                    </span>
                    <font color="orange"> <p>Telefone</p></font>
                    <a>(16) 3821-9500</a>
                  </div>
                  <div class="col-md-3">
                    <span class="fa-stack fa-4x">
                        <img style="border-radius: 50%;" src="swf/img/team/email.png">
                    </span>
                    <font color="orange"> <p>Email</p></font>
                    <a>comercial@compuway.com.br</a>
                  </div>
                </div>
          </div>
      </div>
    </section>

    <footer style="margin-top: 20px; margin-bottom: 20px; color: white; height: auto; background-image: url('swf/img/fundo/rodape_laranja.png');">
      <div class="container">
        <div class="row">
          <div class="col-md-8">
            <h6 class="font_6" style="font-size:28px;"><span style="font-size:28px;"><span style="font-family:reklamescriptw00-medium,cursive;">venha fazer parte da R</span></span><span style="font-size:34px;"><span style="font-family:reklamescriptw00-medium,cursive;">ede Compuway</span></span></h6>
            <h2 class="font_2"><span style="font-family:reklamescriptw00-medium,cursive;"><span style="font-size:36px;">aqui você tem tudo para </span><span style="font-size:44px;">CRESCER</span></span></h2>

          </div>
          <div style="text-align: center;" class="col-md-4">
            <button class="btn-created">Solicitar Contato</button>
          </div>
        </div>
      </div>
    </footer>

    <!-- Footer -->
    

    <!-- Portfolio Modals -->

    <!-- Modal 1 -->
    <div class="portfolio-modal modal fade" id="operador" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <div style="border: 3px solid orange;" class="container"></div>
                  <div class="container">
                    <h3>Operador de Telemarketing</h3>
                  </div>
                  <div style="border: 3px solid orange;" class="container"></div>
                  <p class="item-intro text-muted"><b>O Operador de Telemarketing é uma das profissões mais requisitadas hoje em dia.<br> Com o crescimento do setor de vendas e atendimento aos clientes, existe a necessidade de se modernizar a forma de contatar o público.</b></p>
                  <img style="width: 100%; height: 100%;" class="img-fluid d-block mx-auto" src="swf/img/portfolio/atendente.png" alt="">
                  <p>Com o intuito de valorizar as relações com seus clientes, as empresas modernizaram<br> e diversificaram algumas estratégias para transmitir informação, efetuar pesquisas,<br> oferecer produtos e serviços, da forma mais eficiente e objetiva possível – investir em<br> um operador de telemarketing qualificado.</p>
                  <p>O mercado para esse profissional é amplo, porém exige inúmeras habilidades.<br> Pessoas que desejam trabalhar com operador de telemarketing deve possuir<br> autoconfiança, criatividade, dedicação, postura ética, boa comunicação, facilidade<br> para digitar entre outras.</p>
                  <h3><b>Cursos Aplicáveis:</b></h3>
                  <ul class="list-inline">
                    <li>Digitação</li>
                    <li>Marketing Pessoal</li>
                    <li>Atendimento ao Cliente</li>
                    <li>Operador de Telemarketing</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Fechar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 2 -->
    <div class="portfolio-modal modal fade" id="criacao" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <div style="border: 3px solid orange;" class="container"></div>
                  <div class="container">
                    <h3>Criação de Games</h3>
                  </div>
                  <div style="border: 3px solid orange;" class="container"></div>
                  <p class="item-intro text-muted"><b>A indústria bilionária de desenvolvimento de jogos está se desenvolvendo<br> rapidamente no Brasil. Seguindo esta nova tendência há  uma grande procura por<br> profissionais qualificados.</b></p>
                  <img style="width: 100%; height: 100%;" class="img-fluid d-block mx-auto" src="swf/img/portfolio/criacao-games.png" alt="">
                  <p>O Brasil já está entre os maiores países no desenvolvimento de games, e talvez esta<br> é a área tecnologia mais ascendente no momento com ótimos salários.</p>
                  <p>O mercado necessita de profissionais qualificados, visto que os recursos e<br> ferramentas tecnológicas aumentam a cada dia. Como o objetivo de criar profissionais<br> para atender este grande mercado a Compuway desenvolveu cursos que explicam<br> passo a passo as etapas da criação de games.</p>
                  <p>Através dos módulos apresentados o aluno Compuway irá aprender: Java, XNA e C#,<br> tendo assim uma base sólida para ingressar no mercado de trabalho.</p>
                  <p>O que era diversão, se tornou uma grande fonte de renda. Venha conhecer nossos cursos.</p>
                  <h3><b>Cursos Aplicáveis:</b></h3>
                  <ul class="list-inline">
                    <li>Digitação</li>
                    <li>Marketing Pessoal</li>
                    <li>Atendimento ao Cliente</li>
                    <li>Operador de Telemarketing</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Fechar</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 3 -->
    <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="swf/img/portfolio/03-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Finish</li>
                    <li>Category: Identity</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 4 -->
    <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="swf/img/portfolio/04-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Lines</li>
                    <li>Category: Branding</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 5 -->
    <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="swf/img/portfolio/05-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Southwest</li>
                    <li>Category: Website Design</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Modal 6 -->
    <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="close-modal" data-dismiss="modal">
            <div class="lr">
              <div class="rl"></div>
            </div>
          </div>
          <div class="container">
            <div class="row">
              <div class="col-lg-8 mx-auto">
                <div class="modal-body">
                  <!-- Project Details Go Here -->
                  <h2 class="text-uppercase">Project Name</h2>
                  <p class="item-intro text-muted">Lorem ipsum dolor sit amet consectetur.</p>
                  <img class="img-fluid d-block mx-auto" src="swf/img/portfolio/06-full.jpg" alt="">
                  <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                  <ul class="list-inline">
                    <li>Date: January 2017</li>
                    <li>Client: Window</li>
                    <li>Category: Photography</li>
                  </ul>
                  <button class="btn btn-primary" data-dismiss="modal" type="button">
                    <i class="fa fa-times"></i>
                    Close Project</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
include('swf/rodape.php');