<?php
/**
 * Classe é feita para começar a sessão do usuário e fazer a conexão
 * com o MYSQLI para o banco de dados MySQL
 *
 * PHP version 7
 *
 * @category Conexão
 * @package  Default
 * @author   Giovanni Neves Sadauscas <gionneves@gmail.com>
 * @license  Guerreiros games
 * @link     http//localhost/
 */

 
$conn = new mysqli('localhost', 'guerreiro', '', 'dbguerra');

if (!$conn) {
    echo 'Connetion erro: ' . mysqli_connect_error();
}
