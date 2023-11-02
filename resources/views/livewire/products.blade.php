<div class="fs-6">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nazwa produktu</th>
                <th scope="col">Posiadana ilość</th>
                <th scope="col">Dodaj</th>
            </tr>
        </thead>
        <tbody>
            @if(!empty($tableall))
            @foreach($tableall as $table)
            <tr>
                <th scope="row"></th>
                <td>{{ $table->name }}</td>
                <td>{{ $table->amount }}</td>
                <td>
                    <form wire:submit="add({{ $table->id }})">
                        <input type="number" wire:model="amounts.{{ $table->id }}" placeholder="0"> 
                        <button type="submit" class="btn">Dodaj</button>
                    </form>
                </td>
            </tr>
            @endforeach
            @endif
            <th scope="row"></th>
            <td>
                <form wire:submit="addproduct">
                    <input type="text" wire:model="namenew">

                    <button type="submit" class="btn">Dodaj nowy produkt</button>
                </form>
            </td>
            <td></td>
            <td>
            </td>
            </tr>
        </tbody>
    </table>
  
</div>
