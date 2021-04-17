<?php
// Criação da classe usuário
class Usuario {

    // Chamando a váriavel global $pdo (do arquivo de "conexao.php").
    global $pdo;
  
    /**
     * Função pública para verificar se o login é existente ou não.
     * Estamos tratando o usuário como objeto para multiplos acesso utilizando
     * $_SESSION do PHP. 
     * É passado dois parametros que é o "$user" que é definido pelo email e 
     * o "$pass" onde entra a senha do usuário.
     */
    public function verificaLogin($user, $pass){
        $sql = "SELECT * FROM ususarios WHERE email = :user and senha = :pass";
        $sql = $stmt->prepare($sql);
        $sql->bindParam(":user", $user);
        $sql->bindParam(":pass", $pass);
        $sql->execute();

        // Ele verifica se a linha do usuário existe no banco de dados.
        if($sql->rowCount() > 0) {
            $dados = $sql->fetch(); // atribui a lista em uma váriavel.

            // Verifica se o "id" é maior que zero para salvar na sessão.
            if ($dados["id"] > 0) {
                $_SESSION["cliente_id"] = $dados["id"]; // salva o "id" do cliente na sessão.
                $_SESSION["cliente_nome"] = $dados["nome"];// salva o "nome" do cliente na sessão.
                $_SESSION["cliente_estado"] = $dados["estado"];// salva o "estado"¹ do cliente na sessão.
                return true;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
}

/**
 * ¹O estado do cliente é salvo para a verificação dos logins da loja, que o estado está salvo
 * no banco de dados como um estado inexistente no Brasil, Nisso já tendo um "filtro" 
 * de quem seria funcionario, loja ou cliente.  
 */