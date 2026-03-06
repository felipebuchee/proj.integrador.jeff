<?php 
namespace app\controllers;

use app\core\Controller;
use DateTimeImmutable;

class PlayerController extends Controller {

    public function __construct()
    {
    }

    public function getAll() {
        $data['list'] = ['Neymar', 'Bebeto', 'Gabigol', 'Cebola'];

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