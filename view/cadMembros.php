<?php 

session_start();

require '../autoload.php';

if(!isset($_SESSION['logon']) && empty($_SESSION['logon'])){

  header("Location:login.php");
  exit;
      
}


$membroC = new MembroController();



?>
<!-- header start -->
<?php include_once 'header.php'; ?>
<!--header end-->



    <!-- **********************************************************************************************************************************************************
        MAIN SIDEBAR MENU
        *********************************************************************************************************************************************************** -->
<!--sidebar start-->
<?php include_once 'menu.php'; ?>    
<!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
          <div>
              <div style="float:left">
                <h3><i class="fa fa-angle-right"></i> Membros </h3>
              </div>
              <div style="float:right">
                <a href="#fim" class="go-down">
                  <i class="fa fa-angle-down" style="font-size: 21px;"></i>
                </a>
              </div>
          </div>
          <div class="row mt">
            <div class="col-lg-12 pd-30">
              <div class="content-panel">
                
              <div class="row sc" style="width:100%">
                  <div style="float:left;width:50%">
                    &nbsp;
                  </div>
                  <div style="float:right;width:50%">
                    <div style="float:right">
                      <h4>
                        <button class="btn btn-success btn-xs" onclick="window.location.href='../view/membros.php'"><< Voltar <<</button>
                      </h4>
                    </div>
                  </div>
              </div>
              
              <section class="sc" id="unseen">
<!-- MSG -->
             <?= $_GET['display'] ? "<div style=display:".$_GET['display'].";margin-bottom:20px>Cadastro inserido!</div>" : "" ?>
<!-- FORM -->
              <form action="../controller/MembroController.class.php?<?= isset($_GET['ID']) && !empty($_GET['ID']) ? 'acao=edit&ID='.$_GET['ID'].'' : 'acao=insert' ?>" method="post" enctype="multipart/form-data">
              
              <!-- BarTitle -->
              <div class="bartitle">
                <strong>
                  <p class="name-bartitle">Informações principais</p>
                </strong>
              </div>
              <!-- END BarTitle -->
               
                <!-- NOME -->
                    <div class="row rowForm">
                        <div class="col-md-9">
                            <label class="input-group-text" for="inputGroupSelect01">Nome:</label>
                            <input type="text" name="NOME" class="form-control" id="NOME" placeholder="Seu Nome" data-rule="minlen:4" data-msg="Insira seu nome!" value="<?= isset($_GET['NOME']) ? $_GET['NOME'] : "" ?>" required>
                        </div>
                    </div>
                <!-- END NOME -->
                <!-- FOTO -->
                <div class="row rowForm">
                  <div class="text-center" style="float:right; position: absolute; right: 4%; top: 4%">
                      <img style="width: 150px; height: 150px; line-height: 50px" src="<?= isset($_GET['CFOTO']) ? $_GET['CFOTO'] : '../assets/img/users/avatar.png' ?>" class="preview-img avatar img-circle img-thumbnail" alt="Sem imagem cadastrada!">
                      <br>
                      <div style="margin-top:10px; font-size: 12px">
                        <input type="file" name="fileUpload" class="text-center center-block file-upload file-chooser file-button" accept="image/*" hidden>
                      </div>

                  </div>
                </div>

                <!-- END FOTO-->
                <!-- CODMEMBRO -->
                <div class="row rowForm">
                              <div class="text-center" style="float:right; position: absolute; right: 2%; top: 15%">
                                <div class="form-group" style="width:100%">
                                    <div style="float:center; width:60%">
                                        <div style="text-align:center">
                                            <label class="input-group-text" for="inputGroupSelect01">Código de Membro</label>
                                        </div>
                                        <div class="form-group">
                                          <strong>
                                            <input type="text" style="text-align:center" name="CODMEMBRO" class="form-control" id="CODMEMBRO" data-rule="minlen:6" maxlength="6" placeholder="Código" value="<?= isset($_GET['CODMEMBRO']) ? $_GET['CODMEMBRO'] : "" ?>">
                                          </strong>
                                        </div>
                                      </div>
                                </div>   
                             </div>
                </div>
                <!-- END CODMEMBRO -->
                <!-- SEXO -->
                    <div class="row rowForm">
                        <div class="col-md-2">
                                <label class="input-group-text" for="inputGroupSelect01">Sexo:</label>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="SEXO" id="inlineRadio1" value="M" <?= isset($_GET['SEXO']) && $_GET['SEXO'] == 'M' ? 'checked' : '' ?> required>
                                  <label class="form-check-label" for="inlineRadio1">Masculino</label>
                                </div>
                                <div class="form-check form-check-inline">
                                  <input class="form-check-input" type="radio" name="SEXO" id="inlineRadio2" value="F" <?= isset($_GET['SEXO']) && $_GET['SEXO'] == 'F' ? 'checked' : '' ?> required>
                                  <label class="form-check-label" for="inlineRadio2">Feminino</label>
                                </div>
                        </div>
                      </div>
                <!-- END SEXO -->
                <!-- NASC -->
                <div class="row rowForm">
                        <div class="col-md-3">
                                <label class="input-group-text" for="inputGroupSelect01">Data de nascimento:</label>
                                <div class='input-group date' id='datetimepicker10'>
                                    <input class="form-control" size="16" type="date" name="NASC" id="NASC" placeholder="ex: 19/02/1990" value="<?= isset($_GET['NASC']) ? $_GET['NASC'] : "" ?>" required>
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar">
                                            </span>
                                        </span>
                                </div>
                        </div>
                      </div>
                <!-- END NASC -->     
                <!-- NAT -->
                <div class="row rowForm">
                        <div class="col-md-9">
                                <label class="input-group-text" for="inputGroupSelect01">Naturalidade:</label>
                                <div class="form-group" style="width:100%">
                                    <div style="float:left;width:80%">
                                      <input type="text" name="NAT" class="form-control" id="NAT" placeholder="Naturalidade (Cidade)" data-rule="naturalidade" data-msg="Informe sua naturalidade!" value="<?= isset($_GET['NAT']) ? $_GET['NAT'] : "" ?>" >
                                    </div>
                                    <div style="float:right;width:13%">
                                          <input type="text" name="NAT_UF" class="form-control" id="NAT_UF" placeholder="UF" data-rule="maxlen:2" data-msg="UF" maxlength="2" value="<?= isset($_GET['NAT_UF']) ? $_GET['NAT_UF'] : "" ?>">
                                    </div>
                                </div>
                        </div>
                      </div>
                <!-- END NAT -->
                <!-- NAC -->
                <div class="row rowForm">
                        <div class="col-md-9">
                                <label class="input-group-text" for="inputGroupSelect01">Nacionalidade:</label>
                                <div class="form-group">
                                  <input type="text" name="NAC" class="form-control" id="NAC" placeholder="Nacionalidade" data-rule="nacionalidade" data-msg="Informe sua nacionalidade!" value="<?= isset($_GET['NAC']) ? $_GET['NAC'] : "" ?>">
                                </div>
                        </div>
                      </div>
                <!-- END NAC -->
                <!-- ESTADO CIVIL -->
                <div class="row rowForm">
                        <div class="col-md-9">
                              <label class="input-group-text" for="inputGroupSelect01">Estado Civil</label>
                              <div class="form-group">
                                <select class="custom-select btn btn-default dropdown-toggle" id="inputGroupSelect02" name="ESTCV">
                                    <option value="">........Selecione...........</option>
                                    <option value="SOLTEIRO" <?= isset($_GET['ESTCV']) && $_GET['ESTCV'] === 'SOLTEIRO' ? 'selected' : '' ?>>Solteiro(a)</option>
                                    <option value="CASADO" <?= isset($_GET['ESTCV']) && $_GET['ESTCV'] === 'CASADO' ? 'selected' : '' ?>>Casado(a)</option>
                                    <option value="DIVORCIADO" <?= isset($_GET['ESTCV']) && $_GET['ESTCV'] === 'DIVORCIADO' ? 'selected' : '' ?>>Divórciado(a)</option>
                                    <option value="VIUVO" <?= isset($_GET['ESTCV']) && $_GET['ESTCV'] === 'VIUVO' ? 'selected' : '' ?>>Viúvo(a)</option>
                                    <option value="OUTROS" <?= isset($_GET['ESTCV']) && $_GET['ESTCV'] === 'OUTROS' ? 'selected' : '' ?>>Outros</option>
                                </select>
                              </div>
                              
                        </div>
                      </div>
                <!-- END ESTADO CIVIL -->
                <!-- CONJUGE -->
                <div class="row rowForm">
                        <div class="col-md-9">
                              <label class="input-group-text" for="inputGroupSelect01">Cônjuge:</label>
                              <div class="form-group">
                                <input type="text" name="CONJUGE" class="form-control" id="CONJUGE" placeholder="Nome do Cônjunge (Se houver)" data-rule="minlen:4" data-msg="Insira o nome do seu cônjunge!" value="<?= isset($_GET['CONJUGE']) ? $_GET['CONJUGE'] : "" ?>">
                            </div>
                              
                        </div>
                      </div>
                <!-- END CONJUGE -->
                <!-- DT_CASAMENTO -->
                <div class="row rowForm">
                        <div class="col-md-4">
                              <label class="input-group-text" for="inputGroupSelect01">Data de casamento:</label>
                              <div class="form-group" style="width:70%">
                                    <div class='input-group date' id='datetimepicker10'>
                                    <input class="form-control" size="16" type="date" name="DT_CASAMENTO" id="DT_CASAMENTO" placeholder="ex: 19/02/1990" value="<?= isset($_GET['DT_CASAMENTO']) ? $_GET['DT_CASAMENTO'] : "" ?>">
                                        <span class="input-group-addon">
                                            <span class="glyphicon glyphicon-calendar">
                                            </span>
                                        </span>
                                    </div>
                              </div>
                              
                        </div>
                      </div>
                <!-- END DT_CASAMENTO -->
                <!-- MAE -->
                <div class="row rowForm">
                        <div class="col-md-9">
                              <label class="input-group-text" for="inputGroupSelect01">Mãe:</label>
                              <div class="form-group">
                                <input type="text" name="MAE" class="form-control" id="MAE" placeholder="Nome da Mãe" data-rule="minlen:4" data-msg="Insira o nome da sua mãe!" value="<?= isset($_GET['MAE']) ? $_GET['MAE'] : "" ?>">
                              </div>
                              
                        </div>
                      </div>
                <!-- END MAE -->
                <!-- PAI -->
                <div class="row rowForm">
                        <div class="col-md-9">
                              <label class="input-group-text" for="inputGroupSelect01">Pai:</label>
                              <div class="form-group">
                                <input type="text" name="PAI" class="form-control" id="PAI" placeholder="Nome do Pai" data-rule="minlen:4" data-msg="Insira o nome do seu pai!" value="<?= isset($_GET['PAI']) ? $_GET['PAI'] : "" ?>">
                              </div>
                              
                        </div>
                      </div>
                <!-- END PAI -->
                <!-- RG - CPF -->
                <div class="row rowForm">
                        <div class="col-md-9">
                              
                              <div class="form-group" style="width:50%; float:left">
                                  <div>
                                    <label class="input-group-text" for="inputGroupSelect01"">RG:</label>
                                  </div>
                                  <div style="float:left;width:78%">
                                      <input type="tel" name="RG" class="form-control" id="RG" placeholder="RG (Só números)" data-rule="minlen:4" data-msg="Insira seu número de RG!" maxlength="7" value="<?= isset($_GET['RG']) ? $_GET['RG'] : "" ?>">
                                  </div>
                                  <div style="float:right;width:20%">
                                      <input type="text" name="UF_RG" class="form-control" id="UF_RG" placeholder="UF" data-rule="maxlen:2" data-msg="UF de seu RG!" maxlength="2" value="<?= isset($_GET['UF_RG']) ? $_GET['UF_RG'] : "" ?>">
                                  </div>
                              </div>

                              
                              <div class="form-group" style="width:45%; float:left; margin-left: 35px">
                                  <div>
                                    <label class="input-group-text" for="inputGroupSelect01">CPF:</label>
                                  </div>
                                  <div class="form-group" style="width:100%">
                                    <div style="float:left;width:100%">
                                        <input type="tel" name="CPF" class="form-control" id="CPF" placeholder="CPF (Só número)" data-rule="minlen:4" data-msg="Insira seu número de CPF!" maxlength="11" value="<?= isset($_GET['CPF']) ? $_GET['CPF'] : "" ?>">
                                    </div>
                                  </div>
                              </div>
                        </div>
                      </div>
                      <!-- END RG - CPF -->
                      <!-- TITULO -->
                      <div class="row rowForm">
                              <div class="col-md-9">
                                    <label class="input-group-text" for="inputGroupSelect01">Título:</label>
                                    <div class="form-group" style="width:100%" >
                                        <div style="float:left;width:60%">
                                            <input type="tel" name="TIT_NUM" class="form-control" id="TIT_NUM" placeholder="Título (Só números)" data-rule="minlen:4" data-msg="Insira seu número de RG!" maxlength="12" value="<?= isset($_GET['TIT_NUM']) ? $_GET['TIT_NUM'] : "" ?>">
                                        </div>
                                        <div style="float:right;width:20%">
                                            <input type="tel" name="TIT_SEC" class="form-control" id="TIT_SEC" placeholder="Seção" data-rule="maxlen:4" data-msg="Seção do Título!" maxlength="4" value="<?= isset($_GET['TIT_SEC']) ? $_GET['TIT_SEC'] : "" ?>">
                                        </div>
                                        <div style="float:right;width:20%">
                                            <input type="tel" name="TIT_ZONA" class="form-control" id="TIT_ZONA" placeholder="Zona" data-rule="maxlen:3" data-msg="Zona do Título!" maxlength="3" value="<?= isset($_GET['TIT_ZONA']) ? $_GET['TIT_ZONA'] : "" ?>">
                                        </div>
                                    </div>
                                    
                              </div>
                      </div>
                      <!-- END TITULO -->
                      <!-- CNH -->
                      <div class="row rowForm">
                              <div class="col-md-9">
                                    <label class="input-group-text" for="inputGroupSelect01">CNH:</label>
                                    <div class="form-group" style="width:70%">
                                        <div style="float:left;width:80%">
                                            <input type="tel" name="CNH" class="form-control" id="CNH" placeholder="CNH (Só números)" data-rule="minlen:12" data-msg="Insira seu número de CNH!" maxlength="12" value="<?= isset($_GET['CNH']) ? $_GET['CNH'] : "" ?>">
                                        </div>
                                        <div style="float:right;width:20%">
                                            <input type="text" name="CAT_CNH" class="form-control" id="CAT_CNH" placeholder="Categ." data-rule="maxlen:2" data-msg="UF de seu RG!" maxlength="2" value="<?= isset($_GET['CAT_CNH']) ? $_GET['CAT_CNH'] : "" ?>">
                                        </div>
                                    </div>
                                    
                              </div>
                      </div>
                      <!-- END CNH -->
                      <!-- ESCOLARIDADE - PROFISSAO -->
                      <div class="row rowForm">
                            <div class="col-md-8">
                                  <div style="width:50%; float: left;">
                                      <div>      
                                        <label class="input-group-text" for="inputGroupSelect01">Escolaridade:</label>
                                      </div> 
                                      <div>
                                          <select class="custom-select btn btn-default dropdown-toggle" id="inputGroupSelect02" name="ESC">
                                                  <option value="">........Selecione...........</option>
                                                  <option value="1" <?= isset($_GET['ESC']) && $_GET['ESC'] === '1' ? 'selected' : '' ?>>ALFABETIZAÇÃO</option>
                                                  <option value="2" <?= isset($_GET['ESC']) && $_GET['ESC'] === '2' ? 'selected' : '' ?>>FUNDAMENTAL - INCOMPLETO</option>
                                                  <option value="3" <?= isset($_GET['ESC']) && $_GET['ESC'] === '3' ? 'selected' : '' ?>>FUNDAMENTAL - COMPLETO</option>
                                                  <option value="4" <?= isset($_GET['ESC']) && $_GET['ESC'] === '4' ? 'selected' : '' ?>>MÉDIO - INCOMPLETO</option>
                                                  <option value="5" <?= isset($_GET['ESC']) && $_GET['ESC'] === '5' ? 'selected' : '' ?>>MÉDIO - COMPLETO</option>
                                                  <option value="6" <?= isset($_GET['ESC']) && $_GET['ESC'] === '6' ? 'selected' : '' ?>>SUPERIOR - INCOMPLETO</option>
                                                  <option value="7" <?= isset($_GET['ESC']) && $_GET['ESC'] === '7' ? 'selected' : '' ?>>SUPERIOR - COMPLETO</option>
                                                  <option value="8" <?= isset($_GET['ESC']) && $_GET['ESC'] === '8' ? 'selected' : '' ?>>ESPECIALIZAÇÃO - INCOMPLETO</option>
                                                  <option value="9" <?= isset($_GET['ESC']) && $_GET['ESC'] === '9' ? 'selected' : '' ?>>ESPECIALIZAÇÃO - COMPLETO</option>
                                                  <option value="10" <?= isset($_GET['ESC']) && $_GET['ESC'] === '10' ? 'selected' : '' ?>>MESTRADO - INCOMPLETO</option>
                                                  <option value="11" <?= isset($_GET['ESC']) && $_GET['ESC'] === '11' ? 'selected' : '' ?>>MESTRADO - COMPLETO</option>
                                                  <option value="12" <?= isset($_GET['ESC']) && $_GET['ESC'] === '12' ? 'selected' : '' ?>>DOUTORADO - INCOMPLETO</option>
                                                  <option value="13" <?= isset($_GET['ESC']) && $_GET['ESC'] === '13' ? 'selected' : '' ?>>DOUTORADO - COMPLETO</option>
                                                  <option value="14" <?= isset($_GET['ESC']) && $_GET['ESC'] === '14' ? 'selected' : '' ?>>PÓS-DOUTORADO - INCOMPLETO</option>
                                                  <option value="15" <?= isset($_GET['ESC']) && $_GET['ESC'] === '15' ? 'selected' : '' ?>>PÓS-DOUTORADO - COMPLETO</option>
                                            </select>
                                      </div>  
                                  </div>
                                  
                                  <div style="width:50%; float: left;">
                                      <div>
                                        <label class="input-group-text" for="inputGroupSelect01">Profissão:</label>
                                      </div>    
                                      <div>      
                                        <input type="text" name="PROF" class="form-control" id="PROF" placeholder="Profissão" data-rule="minlen:4" data-msg="Insira sua profissão!" value="<?= isset($_GET['PROF']) ? $_GET['PROF'] : "" ?>">
                                      </div>
                                  </div>
                            </div>   
                      </div>
                      <!-- END ESCOLARIDADE - PROFISSAO -->
                      <div class="bartitle middle-bartitle">
                        <strong><p class="name-bartitle"> Endereço </p></strong>
                      </div>
                      <!-- ENDEREÇO -->
                      <div class="row rowForm">
                              <div class="col-md-9">
                                    <label class="input-group-text" for="inputGroupSelect01">Endereço:</label>
                                    <div class="form-group" style="width:100%">
                                    <div class="form-group">
                                      <input type="text" name="ENDERECO" class="form-control" id="ENDERECO" placeholder="Endereço" data-rule="minlen:4" data-msg="Insira seu endereço!" value="<?= isset($_GET['ENDERECO']) ? $_GET['ENDERECO'] : "" ?>">
                                    </div>
                                    </div>
                                    
                              </div>
                      </div>
                      <!-- END ENDEREÇO -->
                      <!-- COMPLEMENTO -->
                      <div class="row rowForm">
                              <div class="col-md-9">
                                    <div class="form-group" style="width:100%">
                                      <div class="form-group">
                                        <input type="text" name="COMP_END" class="form-control" id="COMP_END" placeholder="Complemento / Ponto de Referência" data-rule="minlen:4" data-msg="Complemento de Endereço!" value="<?= isset($_GET['COMP_END']) ? $_GET['COMP_END'] : "" ?>">
                                      </div>
                                    </div>
                                    
                              </div>
                      </div>
                      <!-- END COMPLEMENTO -->
                      <!-- BAIRRO - CIDADE -->
                      <div class="row rowForm">
                              <div class="col-md-9">
                                <div class="form-group" style="width:100%">
                                  <div style="float:left; width:50%">
                                    <input type="text" name="BAIRRO" class="form-control" id="BAIRRO" placeholder="Bairro" data-rule="minlen:4" data-msg="Insira seu bairro!" value="<?= isset($_GET['BAIRRO']) ? $_GET['BAIRRO'] : "" ?>">
                                  </div>
                                  <div style="float:left; width:50%">
                                    <input type="text" name="CIDADE" class="form-control" id="CIDADE" placeholder="Cidade" data-rule="minlen:4" data-msg="Insira sua cidade!" value="<?= isset($_GET['CIDADE']) ? $_GET['CIDADE'] : "" ?>">
                                  </div>
                                </div>
                                    
                              </div>
                      </div>
                      <!-- END BAIRRO - CIDADE -->
                      <!-- UF - CEP -->
                      <div class="row rowForm">
                              <div class="col-md-9">
                                  <div class="form-group" style="width: 60%;">
                                    <div style="float:left; width:30%">
                                      <input type="text" name="UF" class="form-control" id="UF" placeholder="UF" data-rule="minlen:4" maxlength="2" data-msg="UF!" value="<?= isset($_GET['UF']) ? $_GET['UF'] : "" ?>">
                                    </div>
                                    <div style="float:left; width:70%">
                                      <input type="tel" name="CEP" class="form-control" id="CEP" placeholder="CEP" data-rule="minlen:4" data-msg="Insira seu CEP!" maxlength="8" value="<?= isset($_GET['CEP']) ? $_GET['CEP'] : "" ?>"> 
                                    </div> 
                                  </div>
                                    
                              </div>
                      </div>
                      <!-- END UF - CEP -->
                      <div class="bartitle middle-bartitle">
                        <strong>
                          <p class="name-bartitle">Contatos</p>
                        </strong>
                      </div>
                      <!-- TELEFONEs -->
                      <div class="row rowForm">
                              <div class="col-md-9">
                                <div class="form-group" style="width:100%">
                                    <div style="float:left; width:50%">
                                      <label class="input-group-text" for="inputGroupSelect01">DDD + Telefone 1 <span style="color:crimson">*Apenas números</span></label>
                                      <input type="tel" name="FONE1" class="form-control" id="FONE1" placeholder="ex: 81988776655" maxlength="11" data-rule="minlen:4" data-msg="Insira seu telefone!" value="<?= isset($_GET['FONE1']) ? $_GET['FONE1'] : "" ?>">
                                    </div>
                                    <div style="float:left; width:50%">
                                        <label class="input-group-text" for="inputGroupSelect01">DDD + Telefone 2 <span style="color:crimson">*Apenas números</span></label>
                                      <input type="tel" name="FONE2" class="form-control" id="FONE2" placeholder="ex: 81988776655" maxlength="11" data-rule="minlen:4" data-msg="Insira seu telefone!" value="<?= isset($_GET['FONE2']) ? $_GET['FONE2'] : "" ?>">
                                    </div>
                                </div>   
                              </div>
                      </div>
                      <!-- END TELEFONEs --> 
                      <!-- E-MAIL -->
                      <div class="row rowForm">
                              <div class="col-md-9">
                                <div class="form-group">
                                  <input type="email" name="EMAIL" class="form-control" id="EMAIL" placeholder="E-mail" data-rule="minlen:4" data-msg="Insira seu e-mail!" value="<?= isset($_GET['EMAIL']) ? $_GET['EMAIL'] : "" ?>">
                                </div>
                              </div>
                      </div>
                      <!-- END E-MAIL --> 
                      <div class="bartitle middle-bartitle">
                        <strong>
                          <p class="name-bartitle">Pessoa para contato</p>
                        </strong>
                      </div>
                      <!-- PESSOA P CONTATO -->
                      <div class="row rowForm">
                              <div class="col-md-9">
                                  <div class="form-group" style="width:100%">
                                    <div style="float:left; width:55%">
                                      <label class="input-group-text" for="inputGroupSelect01">Nome</label>
                                      <input type="text" name="N_FONECT" class="form-control" id="N_FONECT" placeholder="Nome do Contato" data-msg="Insira seu telefone!" value="<?= isset($_GET['N_FONECT']) ? $_GET['N_FONECT'] : "" ?>">
                                    </div>
                                    <div style="float:left; width:45%">
                                      <label class="input-group-text" for="inputGroupSelect01" style="white-space: normal"><span style="color:crimson">*Apenas números</span></label>
                                        <input type="tel" name="FONECT" class="form-control" id="FONECT" placeholder="ex: 81988776655" maxlength="11" data-rule="minlen:4" data-msg="Insira seu telefone!" value="<?= isset($_GET['FONECT']) ? $_GET['FONECT'] : "" ?>">
                                    </div>
                                  </div>
                              </div>
                      </div>
                      <!-- END PESSOA P CONTATO --> 
                      <div class="bartitle middle-bartitle">
                        <strong>
                          <p class="name-bartitle">Informações Ministeriais</p>
                        </strong>
                      </div>
                      
                     

                      <!-- IGREJA-RECEPÇÃO -->
                      <div class="row rowForm">
                              <div class="col-md-9">
                                  <div class="form-group" style="width:100%">
                                    <div style="float:left; width:50%">
                                        <div>
                                            <label class="input-group-text" for="inputGroupSelect01">IGREJA</label>
                                        </div>
                                        <div>
                                          <select class="custom-select btn btn-default dropdown-toggle" id="inputGroupSelect02" name="IGREJA" required>
                                              <option value="">................... Selecione .....................</option>
                                              <option value="1" <?= isset($_GET['IGREJA']) && $_GET['IGREJA'] === '1' ? 'selected' : '' ?>>ADVC-SEDE</option>
                                              <option value="2" <?= isset($_GET['IGREJA']) && $_GET['IGREJA'] === '2' ? 'selected' : '' ?>>ADVC-CRUZ</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div style="float:left; width:50%">
                                        <div style="margin-left:25%">
                                            <label class="input-group-text" for="inputGroupSelect01">RECEPÇÃO</label>
                                        </div>
                                        <div style="float:right">
                                        <select class="custom-select btn btn-default dropdown-toggle" id="inputGroupSelect02" name="RECEPCAO">
                                            <option value="">................... Selecione .....................</option>
                                            <option value="1" <?= isset($_GET['RECEPCAO']) && $_GET['RECEPCAO'] === '1' ? 'selected' : '' ?>>BATISMO</option>
                                            <option value="2" <?= isset($_GET['RECEPCAO']) && $_GET['RECEPCAO'] === '2' ? 'selected' : '' ?>>ACLAMAÇÃO</option>
                                            <option value="3" <?= isset($_GET['RECEPCAO']) && $_GET['RECEPCAO'] === '3' ? 'selected' : '' ?>>TRANSFERÊNCIA</option>
                                          </select>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                      </div>
                      <!-- END IGREJA-RECEPÇÃO -->
                      
                      <!-- Teste -->
                      
                      <!-- Teste -->

                      <!-- FUNÇÕES -->
                      <div class="row rowForm">
                              <div class="col-md-9">
                                  <div class="form-group" style="width:100%">
                                    <div style="float:left; width:30%">
                                        <div>
                                          <label class="input-group-text" for="inputGroupSelect01">FUNÇÃO ECLESIÁSTICA</label>
                                        </div>
                                        <div>
                                          <select class="custom-select btn btn-default dropdown-toggle" id="inputGroupSelect02" name="FUNCECLES">
                                            <option value=""> ........ Selecione ........ </option>
                                            <option value="1" <?= isset($_GET['FUNCECLES']) && $_GET['FUNCECLES'] === '1' ? 'selected' : '' ?>>CONGREGADO</option>
                                            <option value="2" <?= isset($_GET['FUNCECLES']) && $_GET['FUNCECLES'] === '2' ? 'selected' : '' ?>>MEMBRO</option>
                                            <option value="3" <?= isset($_GET['FUNCECLES']) && $_GET['FUNCECLES'] === '3' ? 'selected' : '' ?>>AUXILIAR</option>
                                            <option value="4" <?= isset($_GET['FUNCECLES']) && $_GET['FUNCECLES'] === '4' ? 'selected' : '' ?>>DIÁCONO</option>
                                            <option value="5" <?= isset($_GET['FUNCECLES']) && $_GET['FUNCECLES'] === '5' ? 'selected' : '' ?>>PRESBÍTERO</option>
                                            <option value="6" <?= isset($_GET['FUNCECLES']) && $_GET['FUNCECLES'] === '6' ? 'selected' : '' ?>>EVANGELISTA</option>
                                            <option value="7" <?= isset($_GET['FUNCECLES']) && $_GET['FUNCECLES'] === '7' ? 'selected' : '' ?>>PASTOR</option>
                                          </select>
                                        </div>
                                    </div>
                                    <div style="float:left; width:30%">
                                        <div style="margin-left:10%">
                                            <label class="input-group-text" for="inputGroupSelect01"> FUNÇÃO ADMINISTRATIVA </label>
                                        </div>
                                        <div style="float:left; margin-left:10%">
                                            <select class="custom-select btn btn-default dropdown-toggle" id="inputGroupSelect02" name="FUNCADM">
                                              <option value=""> ........ Selecione ........ </option>
                                              <option value="1" <?= isset($_GET['FUNCADM']) && $_GET['FUNCADM'] === '1' ? 'selected' : '' ?>>MEMBRO DO CONSELHO</option>
                                              <option value="2" <?= isset($_GET['FUNCADM']) && $_GET['FUNCADM'] === '2' ? 'selected' : '' ?>>1º TESOUREIRO</option>
                                              <option value="3" <?= isset($_GET['FUNCADM']) && $_GET['FUNCADM'] === '3' ? 'selected' : '' ?>>2º TESOUREIRO</option>
                                              <option value="4" <?= isset($_GET['FUNCADM']) && $_GET['FUNCADM'] === '4' ? 'selected' : '' ?>>1º SECRETÁRIO</option>
                                              <option value="5" <?= isset($_GET['FUNCADM']) && $_GET['FUNCADM'] === '5' ? 'selected' : '' ?>>2º SECRETÁRIO</option>
                                              <option value="6" <?= isset($_GET['FUNCADM']) && $_GET['FUNCADM'] === '6' ? 'selected' : '' ?>>VICE-PRESIDENTE</option>
                                              <option value="7" <?= isset($_GET['FUNCADM']) && $_GET['FUNCADM'] === '7' ? 'selected' : '' ?>>PRESIDENTE</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div style="float:right; width:30%">
                                        <div>
                                            <label class="input-group-text" for="inputGroupSelect01">2ª FUNÇÃO ADMINISTRATIVA </label>
                                        </div>
                                        <div style="float:right">
                                          <select class="custom-select btn btn-default dropdown-toggle" id="inputGroupSelect02" name="FUNCADM2">
                                            <option value=""> ........ Selecione ........ </option>
                                            <option value="1" <?= isset($_GET['FUNCADM2']) && $_GET['FUNCADM2'] === '1' ? 'selected' : '' ?>>MEMBRO DO CONSELHO</option>
                                            <option value="2" <?= isset($_GET['FUNCADM2']) && $_GET['FUNCADM2'] === '2' ? 'selected' : '' ?>>1º TESOUREIRO</option>
                                            <option value="3" <?= isset($_GET['FUNCADM2']) && $_GET['FUNCADM2'] === '3' ? 'selected' : '' ?>>2º TESOUREIRO</option>
                                            <option value="4" <?= isset($_GET['FUNCADM2']) && $_GET['FUNCADM2'] === '4' ? 'selected' : '' ?>>1º SECRETÁRIO</option>
                                            <option value="5" <?= isset($_GET['FUNCADM2']) && $_GET['FUNCADM2'] === '5' ? 'selected' : '' ?>>2º SECRETÁRIO</option>
                                            <option value="6" <?= isset($_GET['FUNCADM2']) && $_GET['FUNCADM2'] === '6' ? 'selected' : '' ?>>VICE-PRESIDENTE</option>
                                            <option value="7" <?= isset($_GET['FUNCADM2']) && $_GET['FUNCADM2'] === '7' ? 'selected' : '' ?>>PRESIDENTE</option>
                                          </select>
                                        </div>
                                    </div>
                                  </div>
                              </div>
                      </div>
                      <!-- END FUNÇÕES -->
                      <!-- BATISMO - CONVERSAO -->
                      <div class="row rowForm">
                              <div class="col-md-10">
                                <div class="form-group" style="width:100%">
                                    <div style="float:left; width:30%">
                                      <div>
                                          <label>Data de Batismo</label>
                                      </div>
                                      <div class="form-group">
                                          <div class='input-group date' id='datetimepicker10'>
                                          <input class="form-control" size="16" type="date" name="BAT" id="BAT" placeholder="ex: 19/02/1990" value="<?= isset($_GET['BAT']) ? $_GET['BAT'] : "" ?>">
                                              <span class="input-group-addon">
                                                  <span class="glyphicon glyphicon-calendar">
                                                  </span>
                                              </span>
                                          </div>
                                      </div>
                                    </div>
                                    <div style="float:left; width:30%">
                                      &nbsp;
                                    </div>
                                    <div style="float:left; width:30%">
                                        <div>
                                          <label>Data da Conversão</label>
                                        </div>
                                        <div class="form-group" style="width:100%">
                                                <div class='input-group date' id='datetimepicker10'>
                                                <input class="form-control" size="16" type="date" name="CV" id="CV" placeholder="ex: 19/02/1990" value="<?= isset($_GET['CV']) ? $_GET['CV'] : "" ?>">
                                                    <span class="input-group-addon">
                                                        <span class="glyphicon glyphicon-calendar">
                                                        </span>
                                                    </span>
                                                </div>
                                        </div>
                                    </div>
                                </div>   
                              </div>
                      </div>
                      <!-- END BATISMO - CONVERSAO -->
                      <div id="fim" style="text-align:center;margin-top:60px;margin-bottom:40px"><strong>------------------------------------------------------------------------------------ FIM ----------------------------------------------------------------------------------------</strong></div>
                            
                            <!--<input type="hidden" name="SUCESS" value="true">-->

                            <!-- -->
                            <div class="btn col-md-10" style="padding:0px;width:100%">
                              <input style="width:15%" type="submit" class="btn btn-large btn-success" value="Salvar Cadastro">
                            </div>
                            
                                      
              </form>
            
<!-- END FORM -->
                    
                      
                     
                              
                            


                            
                            <div class="sent-message">&nbsp;</div>

                            

                          
                        
                      <!-- /row -->


                      <!-- /row -->
                    
                    <!-- /wrapper -->
                  </section>
              </div>
              <!-- /content-panel -->
            </div>
            <!-- /col-lg-4 -->
          </div>
        
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <script type="text/javascript">
                /*
                $(document).ready(function() {
                
                var readURL = function(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.avatar').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
                }

                $(".file-upload").on('change', function(){
                    readURL(this);
                });
                });

                */

                const $ = document.querySelector.bind(document);

                const previewImg = $('.preview-img');
                const fileChooser = $('.file-chooser');
                const fileButton = $('.file-button');

                fileButton.onclick = () => fileChooser.click();

                fileChooser.onchange = e => {
                    const fileToUpload = e.target.files.item(0);
                    const reader = new FileReader();
                    reader.onload = e => previewImg.src = e.target.result;
                    reader.readAsDataURL(fileToUpload);
                };

        
    </script>
    
<!--footer start-->
<?php include_once 'footer.php'; ?>
<!--footer end-->
