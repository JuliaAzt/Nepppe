<div class="container">
  <div class="row my-4">
        <!--<div class="col-lg-4">
          <img class="img-fluid" src="img/logomarca.png">
        </div>-->
        <div class="col-lg-12" align="justify"> <!--style="background-color: #F5F5F5;-->
          
          <h4><center>Núcleo de Estudos e Pesquisas em Políticas Públicas de Educação   <img class="dado" src="<?php echo base_url('/assets/frontend/img/dado.png') ?>"></img></center></h4>
          <p>
            O Núcleo de Estudos e Pesquisas em Políticas Públicas de Educação (NEPPPE) foi criado em 2017, quando, também, foi certificado pelo Diretório de Pesquisas do CNPq. Vincula-se à Linha de Pesquisa “Formação de Professores, Instituições e História da Educação – (FPIHE)”, do Programa de Pós-Graduação em Educação da Universidade Federal de Ouro Preto.
          </p>
          <p> 
            O Núcleo conta com pesquisadores da própria Instituição e de outras Universidades, no formato de parcerias interinstitucionais. Além disso, congrega discentes pós-graduandos, graduandos, egressos de graduação e profissionais da educação das redes públicas de 
            ensino, da região denominada Inconfidentes. <br>
          </p>
          <p>
            O NEPPPE tem por finalidades desenvolver pesquisas em Políticas Públicas de Educação, assim como fomentar estudos relativos a essa área. Ademais, busca-se produzir e difundir conhecimento em torno da temática, estruturar um repositório de pesquisas e trabalhos acerca de Políticas Educacionais e contribuir para a sustentação do Programa de Pós-Graduação em Educação da UFOP.
          </p>
        </div>
    </div>
 </div>

 <div class="container">
    <div class="row">
          <div class="col-md-4 mb-4">
            <div class="card card-tamanho h-60">
              <div class="card-body">
                <h5 class="card-title card-titulo-colorido"><center>Nossas pesquisas</center></h5>
                <p class="card-text" align="justify">Dedicam-se ao desenvolvimento de pesquisas que investiguem a governança educacional, Nova Gestão Pública e Educação, Permeabilidade estatal nas políticas educacionais, Sociologia Relacional e atores políticos na área educacional e Ciclo de Políticas Públicas de Educação. </p>
              </div>
              <div class="card-footer">
                <div align="center">
                    <a href="<?php echo site_url('pesquisas')?>" class="btn btn-primary center-block" style="color: #ffffff; background-color: #790505; border-color: #790505";>Ir para pesquisas</a>
                  </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-4 -->
          <div class="col-md-4 mb-4">
            <div class="card card-tamanho h-60">
              <div class="card-body">
                <h5 class="card-title card-titulo-colorido"><center>Base de dados</center></h5>
                <p class="card-text" align="justify">​Censo Escolar-INEP, Indicadores Educacionais-INEP, Medida de Base Governista-Basômetro e Radar Parlamentar, Indicadores Municipais-MUNIC/IBGE, Mapa Organizações da Sociedade Civil-IPEA, CEPIM, Planos Municipais de Educação</p>
              </div>
              <div class="card-footer">
                <div align="center">
                  <a href="<?php echo site_url('basedados')?>" class="btn btn-primary center-block" style="color: #ffffff; background-color: #790505; border-color: #790505";>Ir para Base de Dados</a>
                  </div>
              </div>
            </div>
          </div>
          <!-- /.col-md-4 -->
          <div class="col-md-4 mb-4">
            <div class="card card-tamanho h-60">
              <div class="card-body">
                <h5 class="card-title card-titulo-colorido"><center>Repositório</center></h5>
                <p class="card-text" align="justify">Artigos, Teses e Dissertações cujas temáticas circunscrevem-se a Nova Gestão Pública, Governança Educacional, Permeabilidade Estatal, Sociologia Relacional, Terceiro Setor e Educação.</p>
              </div>
              <div class="card-footer">
                <div align="center">
                    <a href="<?php echo site_url('repositorio')?>" class="btn btn-primary" style="color: #ffffff; background-color: #790505; border-color: #790505;">Ir para repositório</a>
                  </div>
              </div>
            </div>
          </div>
    </div>
  </div>
  <div class="container">
    
    <div class="col-12">
            <div id="carouselExampleIndicators" class="border border-light carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">

            <?php  
                  $cont=2;
                  foreach ($eventos as $evento) {
                    if ($cont==2){    
              ?>
        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $evento->id; ?>" class="active"></li>

                <?php 
                    $cont=1; 
                    }else{
                ?>    
           <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $evento->id; ?>"></li>
                  <?php   
                    }}
                  ?>
                  
                  
                  
                </ol>
                <div class="carousel-inner" role="listbox">
                      <?php  
                  $cont=2;
                  foreach ($eventos as $evento) {
                    if ($cont==2){    
                  ?>
                  
                    <div class="carousel-item active boxer">

                    <img class="d-block imgcarrousel" src="http://www.ufop.br/sites/default/files/styles/topo_da_not_cia/public/ichs.png?itok=LzYvatsY" alt="Imagem">
                    <div class="grupo">
                        <div class="conteudo">
                              <h4><?php echo $evento->titulo; ?></h4>
                              <a class="" href="<?php echo $evento->link; ?>" >
                                  <button  id="link" class="btn btn-neppe">Acessar</button>
                              </a> 
                        </div>
                      
                    </div>
                  </div>
                <?php 
                    $cont=1; 
                    }else{
                    	$aleatorio=0;
                    	$aleatorio = rand(1, 5);

                ?>    
                        <div class="carousel-item boxer">

                    <?php if($aleatorio == 1){  ?>
                    <img class="d-block imgcarrousel" src="<?php echo base_url('/assets/frontend/img/eventos/evento_1.jpg') ?>" alt="Imagem">
                    <?php }else if($aleatorio == 2){  ?>
                    <img class="d-block imgcarrousel" src="<?php echo base_url('/assets/frontend/img/eventos/evento_2.jpg') ?>" alt="Imagem">
                    <?php }else if($aleatorio == 3){  ?>
                    <img class="d-block imgcarrousel" src="<?php echo base_url('/assets/frontend/img/eventos/evento_3.jpg') ?>" alt="Imagem">
                    <?php }else if($aleatorio == 4){  ?>
                    <img class="d-block imgcarrousel" src="<?php echo base_url('/assets/frontend/img/eventos/evento_4.jpg') ?>" alt="Imagem">
                    <?php }else if($aleatorio == 5){  ?>
                    <img class="d-block imgcarrousel" src="<?php echo base_url('/assets/frontend/img/eventos/evento_5.jpg') ?>" alt="Imagem">
                    <?php } ?>
                    <div class="grupo">
                        <div class="conteudo">
                              <h4><?php echo $evento->titulo; ?></h4>
                              <a class="" href="<?php echo $evento->link; ?>" >
                                  <button  id="link" class="btn btn-neppe">Acessar</button>
                              </a> 
                        </div>
                      
                    </div>
                  </div>                  <?php   
                    }}
                  ?>
               

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
 <br><br><br><br>
      </div>
     
  <div class="col-12">
              <div class="col-md-12 mb-12">
        <div class="card h-60">
          <div class="card-footer">
            <h5 class="card-title"><center>Links úteis</center></h5>
            <p class="card-text" align="justify">
              
              
            
              <ul class="list-group">
                <li class="list-group-item-neppe d-flex justify-content-between align-items-center">ABAVE - Associação Brasileira de Avaliação Educacional
                    <a href="http://ixreuniao.abave.org.br/" target="_blank"><span class="btn btn-neppe badge-pill">Acessar</span></a>
                </li>
                <li class="list-group-item-neppe d-flex justify-content-between align-items-center">ANPAE - Associação Nacional de Política e Administração da Educação
                    <a href="http://www.anpae.org.br/website/" target="_blank"><span class="btn btn-neppe badge-pill">Acessar</span></a>
                </li>
                <li class="list-group-item-neppe d-flex justify-content-between align-items-center">ANPEd - Associação Nacional de Pós-Graduação e Pesquisa em Educação
                    <a href="http://www.anped.org.br/" target="_blank"><span class="btn btn-neppe badge-pill">Acessar</span></a>
                </li>
                <li class="list-group-item-neppe d-flex justify-content-between align-items-center">Portal de Periódicos CAPES
                    <a href="http://www.periodicos.capes.gov.br/" target="_blank" ><span class="btn btn-neppe badge-pill">Acessar</span></a>
                </li>
                <li class="list-group-item-neppe d-flex justify-content-between align-items-center">ANPOCS - Associação Nacional de Pós-Graduação e Pesquisa em Ciências Sociais
                    <a href="http://www.anpocs.com" target="_blank"><span class="btn btn-neppe badge-pill">Acessar</span></a>
                </li>
                 <li class="list-group-item-neppe d-flex justify-content-between align-items-center">INEP
                    <a href="http://portal.inep.gov.br/indicadores-educacionais" target="_blank"><span class="btn btn-neppe badge-pill">Acessar</span></a>
                </li>
                 <li class="list-group-item-neppe d-flex justify-content-between align-items-center">Mapa da Sociedade Civil Organizada-IPEA
                    <a href="https://mapaosc.ipea.gov.br/" target="_blank" ><span class="btn btn-neppe badge-pill">Acessar</span></a>
                </li>
                 <li class="list-group-item-neppe d-flex justify-content-between align-items-center">MUNIC/IBGE
                    <a href="https://ww2.ibge.gov.br/home/estatistica/economia/perfilmunic/default.shtm"><span class="btn btn-neppe badge-pill">Acessar</span></a>
                </li>
                 <li class="list-group-item-neppe d-flex justify-content-between align-items-center">IBGE/Estados
                    <a href="https://ww2.ibge.gov.br/estadic2014/" target="_blank" ><span class="btn btn-neppe badge-pill">Acessar</span></a>
                </li>
                 <li class="list-group-item-neppe d-flex justify-content-between align-items-center">Laboratório de Dados Educacionais
                    <a href="https://dadoseducacionais.c3sl.ufpr.br/#/" target="_blank"><span class="btn btn-neppe badge-pill">Acessar</span></a>
                </li>
                <li class="list-group-item-neppe d-flex justify-content-between align-items-center">GIAR/UFMG
                    <a href="http://www.giars.ufmg.br/?r=site/index_pt" target="_blank"><span class="btn btn-neppe badge-pill">Acessar</span></a>
                </li>
                <li class="list-group-item-neppe d-flex justify-content-between align-items-center">REIPPE
                    <a href="https://redereippe.wixsite.com/reippe" target="_blank"><span class="btn btn-neppe badge-pill">Acessar</span></a>
                </li>
                <li class="list-group-item-neppe d-flex justify-content-between align-items-center">Programa de Pós-Graduação em Educação da UFOP
                    <a href="http://posedu.ufop.br/" target="_blank"><span class="btn btn-neppe badge-pill">Acessar</span></a>
                </li>
                <li class="list-group-item-neppe d-flex justify-content-between align-items-center">Plataforma Lattes
                    <a href="http://lattes.cnpq.br/" target="_blank"><span class="btn btn-neppe badge-pill">Acessar</span></a>
                </li>
              </ul>
            </p>
          </div>
        </div>
      </div>
    </div>
</div>    
<br><br>