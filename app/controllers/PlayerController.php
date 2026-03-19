<?php 
namespace app\controllers;

use app\core\Controller;
use app\database\ConnectionFactory;
use DateTimeImmutable;
use PDO;

class PlayerController extends Controller {

    public PDO $connection;

    public function __construct()
    {
        $this->connection = ConnectionFactory::getConnection();
    }

    public function getAll() {

        $stm = $this->connection->prepare("SELECT * FROM players");
        $stm->execute();

        $data['list'] = $stm->fetchAll();

        //$data['list'] = ['Neymar', 'Bebeto', 'Gabigol', 'Cebola'];

        $this->view('players/players_list', $data);
    }

    public function getPlayer(){

        $data['date'] = new DateTimeImmutable();
        $data['jogador'] = ['Neymar', '36', 'Meia Atacante']; 

        $this->view('players/players_show', $data);

    }

    public function createPlayer(){
        print 'create player called';
    }

    public function savePlayer(){
        print 'create player called';
    }

    public function testRedirect(){
        $this->redirect("http://google.com");
    }

} 