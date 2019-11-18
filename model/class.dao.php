<?php
require_once('init.php');
require_once('class.hash.php');
//session_start();
Class Dao{

   protected $mysql;

   public function conexao(){
       //cria um objeto da classe Mysqli e efetua conexao com BD;
       $this->mysql = new mysqli(BD_SERVIDOR, BD_USUARIO, BD_SENHA, BD_BANCO);
        if($this->mysql->connect_error){
            //se verdadeiro retorna o erro gerado no mysql
            die("Falha de conexão: ". $this->mysql->connect_error);
        }

   }

   public function getFuncionarios(){
        //guarda o comando SQL na variavel $query
        $query = "SELECT * FROM empresa";
        //$result recebe o retorno do metodo query do objeto $mysql
        //a variavel $query é passada como parametro no metodo query do objeto $mysql
        $result = $this->mysql->query($query);
        //num_rows analisa a quantidade de linhas retornadas na consulta SQL
        if($result->num_rows > 0){
            //Obtem a proxima linha do result $row recebe essa linha
            //cada linha $row se comporta como array
            while($row = $result->fetch_array()){
                //monta -se as linhas e colunas da tabela que sera exibida usando tags HTML
                echo '
                
                <div class="col-md-6 col-lg-6 col-xl-4 p-3">
                  <div class="card border-info">
                    <div class="card-body">

                      <img class="img-fluid d-block mb-3 mx-auto rounded-circle" src="https://static.pingendo.com/img-placeholder-2.svg" width="150">';
                      echo '<h2>' . $row['nome'] . "</h2>
                      <br>
                      <p class='text-uppercase'>" . $row['vaga'] . '</p>';

                      if(isset($_SESSION['usuario'])){
                      echo '<h2>' . $row['cidade'] . '</h2>';  
                      

                      echo'
                      <div class="mt-3 text-center">
                        <button type="button" class="btn btn-info mx-1 text-dark" data-toggle="modal" data-target="#siteInf' . $row['id_emp'] . '">Informações </button>
                        
                        <!-- Modal descrição vaga-->
                        <div class="modal fade" id="siteInf' . $row['id_emp'] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                          <div class="modal-dialog" role="document">

                            <div class="modal-content">

                              <div class="modal-header">

                                <h5 class="modal-title" bg-success id="exampleModalLabel">ATENÇÃO</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                  <span aria-hidden="true">&times;</span>
                                </button>

                              </div>

                              <div class="modal-body">
                                <h3>' . $row['descricao'] . '</h3>
                              </div>

                              <div class="modal-footer">
                                <button type="button" class="btn btn-info" data-dismiss="modal">Fechar</button>
                              </div>

                            </div>

                          </div>

                        </div>

                        <button type="button" class="btn btn-success mx-1 text-dark" data-toggle="modal" data-target="#siteCad"> Candidatar-se </button>
                      </div>';
                  
                      if($_SESSION['usuario'] == "admin@etec.com"){
                      echo '<!-- Botão para acionar modal -->
                      <div class="mt-3 mr-3 text-center">
                        <button type="button" class="btn btn-danger mx-1 text-dark" data-toggle="modal" data-target="#modalExemplodel' . $row['id_emp'] . '">Deletar</button>
                
                        <button type="button" class="btn btn-warning mx-1 text-dark" data-toggle="modal" data-target="#modalExemplo' . $row['id_emp'] . '">Editar</button>             
                      </div>
                            
                            <!-- Modal deletar vaga-->
                            <div class="modal fade" id="modalExemplodel' . $row['id_emp'] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                              <div class="modal-dialog" role="document">

                                <div class="modal-content">

                                  <div class="modal-header">

                                    <h5 class="modal-title" bg-success id="exampleModalLabel">ATENÇÃO</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                      <span aria-hidden="true">&times;</span>
                                    </button>

                                  </div>

                                  <div class="modal-body">
                                    Você tem Certeza que deseja apagar a vaga? <h3>  Nº' . $row['id_emp'] . ' - ' . $row['nome'] . '</h3>
                                  </div>

                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-info" data-dismiss="modal">Fechar</button>
                                    <a href="../controller/ControllerFunc.php?id_emp=' . $row['id_emp'] . '" class="btn btn-danger font-weight-bold">APAGAR</a>
                                  </div>

                                </div>

                              </div>

                            </div>
                            
                          
                          <!-- Modal alterar a vaga -->
                          <div class="modal fade" id="modalExemplo' . $row['id_emp'] . '" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

                            <div class="modal-dialog" role="document">

                              <div class="modal-content">

                                <div class="modal-header">
                                  <h5 class="modal-title" bg-success id="exampleModalLabel">EDITAR - Vagas</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>

                                <div class="modal-body">
                                  <form class="form-horizontal" action="../controller/ControllerFunc.php" method="POST">

                                    <div class="form-group text-left">
                                        <label class="control-label col-sm-4" for="id_emp">ID: </label>

                                        <div class="col-sm-12">
                                          <input type="text" class="form-control" id="id_emp" name="id_emp" value="' . $row['id_emp'] . '">
                                        </div>

                                    </div>

                                    <div class="form-group text-left">
                                        <label class="control-label col-sm-4" for="nome">Nome: </label>

                                        <div class="col-sm-12">
                                          <input type="text" class="form-control" id="nome" name="nome" value="' . $row['nome'] . '">
                                        </div>

                                    </div>

                                    <div class="form-group text-left">
                                        <label class="control-label col-sm-4" for="cidade">Cidade: </label>

                                        <div class="col-sm-12"> 
                                          <input type="text" class="form-control" id="cidade" name="cidade" value="' . $row['cidade'] . '">
                                        </div>

                                    </div>

                                    <div class="form-group text-left">
                                        <label class="control-label col-sm-4" for="descricao">Descrição: </label>

                                        <div class="col-sm-12"> 
                                          <input type="text" class="form-control" id="descricao" name="descricao" value="' . $row['descricao'] . '">
                                        </div>

                                    </div>

                                    <div class="form-group text-left">
                                        <label class="control-label col-sm-4" for="vaga">Vaga: </label>

                                        <div class="col-sm-12"> 
                                          <input type="text" class="form-control" id="vaga" name="vaga" value="' . $row['vaga'] . '">
                                        </div>

                                    </div>

                                    <div class="form-group text-left">
                                        <label class="control-label col-sm-4" for="remuneracao">Remuneração: </label>

                                        <div class="col-sm-12"> 
                                          <input type="text" class="form-control" id="remuneracao" name="remuneracao" value="' . $row['remuneracao'] . '">
                                          <input type="hidden" id="_update" name="_update" value="_update">
                                        </div>

                                    </div>

                                    <div class="form-group"> 

                                        <div class="col-sm-offset-2 col-sm-12 text-center">

                                          <a href="servico.php">
                                            <button class="btn btn-info">Voltar</button>
                                          </a>
                                          <button type="submit" class="btn btn-success font-weight-bold">Atualizar</button>

                                        </div>

                                    </div>

                                  </form>

                                </div>

                                <div class="modal-footer">
                                  <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                                </div>

                              </div>

                            </div>
                            
                          </div>';

                        }
                    }
                  echo '</div>
                  ';
                  /*
                  if($_SESSION['usuario'] == "admin@etec.com"){
                    echo $row['id_emp'];
                  }else{
                    echo '<div></div>';
                  }*/
                    echo '
                </div>
              </div>';
            }
        }
        else{
            //se não retornar nenhuma linha do consulta SQL exibe a mensagem abaixo.
            echo "<tr>Dados não encontrados</tr>";
        }
        
   }

public function insertFunc($nome,$cidade,$remuneracao,$area,$logo,$vaga,$descricao){
    $stmt = $this->mysql->prepare("INSERT INTO empresa (nome, cidade, remuneracao, area, logo, vaga, descricao) VALUES (?,?,?,?,?,?,?)");
    $stmt->bind_param("sssssss",$nome,$cidade,$remuneracao,$area,$logo,$vaga,$descricao);
    if( $stmt->execute() == TRUE){
        header('Location: ../view/servicos.php');
    }else{
        header('Location: ../view/error.php');
    }

}
public function insertAluno($nome,$sobrenome,$email,$telefone,$cidade,$curso, $curriculo, $senha, $rm, $data_nasc){
    $hash = new Hash();
    $senha = $hash->pwd_hash($senha);
  $stmt = $this->mysql->prepare("INSERT INTO aluno (nome, sobrenome, email, telefone, cidade, curso, curriculo, senha, rm, data_nasc) VALUES (?,?,?,?,?,?,?,?,?,?)");
    $stmt->bind_param("ssssssssss",$nome,$sobrenome,$email,$telefone,$cidade,$curso, $curriculo, $senha, $rm, $data_nasc);
    if( $stmt->execute() == TRUE){
        header('Location: ../view/login.php');
    }else{
        header('Location: ../view/index.php');
    }

}
public function updateEmpresa($id_emp,$nome,$cidade,$descricao,$vaga,$remuneracao){
    $stmt = $this->mysql->prepare("UPDATE empresa SET nome=?,  cidade=?, descricao=?, vaga=?, remuneracao=? WHERE id_emp=?");
    $stmt->bind_param("ssssss",$nome,$cidade,$descricao,$vaga,$remuneracao,$id_emp);
    if( $stmt->execute() == TRUE){
        header('Location: ../view/servicos.php');
    }else{
        header('Location: ../view/servicos.php');
    }

}

public function getFuncId($id){
    $result = $this->mysql->query(
        "SELECT * FROM empresa WHERE id_emp = '" . $id . "'"
        );
    if($result->num_rows > 0){
        while($row = $result->fetch_array()){
            $array[] = $row;
        }
        return $array;
    }else{
        return $erro = false;
    }

}

public function loginUser($email, $senha){
  /*$senha_cript = sha1($senha);
  $query1 = "SELECT * FROM funcionario WHERE email='$email' AND senha='$senha_cript'";*/
  $query1 = "SELECT * FROM aluno WHERE email='$email'";
  $result = $this->mysql->query($query1);
  $check = $result->fetch_assoc();
  if(isset($check))
  {
      
      if(password_verify($senha, $check['senha'])){
      $_SESSION['nome'] = $check['nome'];
      $_SESSION['usuario'] = $check['email'];
      header('Location: ../view/servicos.php');
     
      }
      else{
      $_SESSION['nao_autenticado'] = "Inválidos";
      header('Location: ../view/login.php');
      }
  }
  else{
      $_SESSION['nao_autenticado'] = "Inválidos";
      header('Location: ../view/servicos.php');
      
  }
}
public function delete_emp($id){
    if($this->mysql->query("DELETE FROM empresa WHERE id_emp = '" . $id . "'")){
        header('Location: ../view/servicos.php');
    }
}
    public function insertToken($token,$email){
        $stmt = $this->mysql->prepare("UPDATE aluno SET token = ?  WHERE email = ?");
        $stmt->bind_param("ss",$token,$email);
        if( $stmt->execute() == TRUE){
            header('Location: ../view/login.php');
        }else{
            header('Location: ../view/index.php');
        }

    }

    public function insertNewPassword($token,$senha){
        $senha = sha1($senha);
        $stmt = $this->mysql->prepare("UPDATE aluno SET senha = ?  WHERE token = ?");
        $stmt->bind_param("ss",$senha,$token);
        if( $stmt->execute() == TRUE){
            header('Location: ../view/login.php');
        }else{
            header('Location: ../view/index.php');
        }

    }
}
