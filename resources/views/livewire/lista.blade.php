<div>
    Hello {{$nome}}!
    <input type="text" wire:model = "item">
    @if($acao == 'cadastrar')
    <button wire:click="add()" >Adicionar</button>
    @else
    <button wire:click="update()" >Atualizar</button>
    @endif
    <p>
        <button wire:click = "resetList()">
            Resetar Lista
        </button>
    </p>
    <ul>
        @foreach ($lista as $key => $nome)

        <li>
            <span>{{$key}} - {{$nome}}</span>
            <button wire:click = "delete({{$key}})">X</button>
            <button wire:click = "edit({{$key}})">editar</button>
        </li>

        @endforeach
    </ul>
</div>
