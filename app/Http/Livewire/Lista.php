<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Lista extends Component
{
    public $item;
    public $key;
    public $nome = 'Mundo';
    public $acao = 'cadastrar';

    public $lista = ['Iago', 'Wesley', 'Frank', 'Icaro', 'Lucas', 'Danilo'];

    public function render()
    {
        // return view('livewire.lista', ["nome" => "mundo"]);
        return view('livewire.lista');
    }

    public function add(){
        if($this->item != ''){
        array_unshift($this->lista, $this->item);
        $this->item = '';
    }
    }
    public function resetList(){
        unset($this->lista);
        $this->lista = [];
    }

    public function edit(int $key){
        $this->key = $key;
        $this->acao = 'atualizar';
        $this->item = $this->lista[$key];
    }

    public function update(){
        $this->lista = array_replace($this->lista, [$this->key => $this->item]);
        $this->acao = "cadastrar";
        $this->item = '';
    }

    public function delete(int $key){
        unset($this->lista[$key]);
    }
}
