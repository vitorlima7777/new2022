<div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3>200</h3>

                <p>Cont. Horizonte</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>150</h3>

                <p>Pacajus</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3>10</h3>

                <p>Usuários</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h3>350</h3>

                <p>Contatos</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        344
        <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Ultimos contatos</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body p-0">
              <table class="table table-sm">
                <thead>
                  <tr>
                    <th>Perfil</th>
                    <th>Nome</th>
                    <th>Telefone</th>
                    <th>E-mail</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $select="SELECT*FROM tbContato ORDER BY idcontato DESC LIMIT 5";
                try{
                  $resultado=$conect->prepare($select);
                  $resultado->execute();
                  $contar=$resultado->rowCount();
                  if($contar>0){
                   while($show=$resultado->FETCH(PDO::FETCH_OBJ)){

                  ?>
                  <tr>
                    <td><img style="width: 60px; border-radius: 100%;" src="img/foto1.jpg"></td>
                    <td>
                      <?php echo $show->nomeContato; ?>
                    </td>
                    <td>
                    <?php echo $show->telefoneContato; ?>
                    </td>
                    <td>
                    <?php echo $show->emailContato; ?>
                    </td>
                  </tr>
                  <?php
                   } 
                  }else{
                    echo"Contatos não Existentes!";
                  }
                  }catch(PDOException $e){
                  echo'<strong> ERRO DE PDO= </strong>'.$e->getMessage();
                }
                  ?>
                  
                </tbody>
              </table>
              227
              <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Cadastrar contato</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPassword1">Nome</label>
                    <input name="nome" type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite o nome de contato...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPassword1">Telefone</label>
                    <input name="telefone" type="text" class="form-control" id="exampleInputPassword1" placeholder="Digite seu telefone...">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputEmail1">Endereço de E-mail</label>
                    <input name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o endereço de e-mail...">
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInputFile">Foto do contato</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input name="foto" type="file" class="custom-file-input" id="exampleInputFile">
                        <label class="custom-file-label" for="exampleInputFile">Upload da foto</label>
                      </div>
                      
                    </div>
                  </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button name="btnCContato" type="submit" class="btn btn-primary">Cadastrar Contato</button>
                </div>
              </form>
              <?php 
                  include_once('config/conexao.php');
                  if(isset($_POST['btnCContato'])){
                    $nome=$_POST['nome'];
                    $telefone=$_POST['telefone'];
                    $email=$_POST['email'];
                    $foto=$_POST['foto'];
                    $cadastro="INSERT INTO tbContato(nomeContato,telefoneContato,emailContato,fotoContato) VALUES(:nome,:telefone,:email,:foto)";                   try{
                      $result=$conect-> prepare ($cadastro);
                      $result->bindParam(':nome',$nome,PDO::PARAM_STR);
                      $result->bindParam(':telefone',$telefone,PDO::PARAM_STR);
                      $result->bindParam(':email',$email,PDO::PARAM_STR);
                      $result->bindParam(':foto',$foto,PDO::PARAM_STR);
                      $result->execute();

                      $contar=$result->rowCount();
                      if($contar>0){
                        echo"Contato Cadastrado";
                      }else{
                        echo"Contato Não Cadastrado";
                      }
                    }catch (PDOException $e){
                      echo"<strong> ERRO DE CADASTRO PDO = </strong>". $e->getMessage();
                    }
                  }
              ?>
            </div>
          </div>