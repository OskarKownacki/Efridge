<div class="row h-100">
    @foreach($recipeName as $Name)
    <div class="col pl-5 ">
        <div class="p-5 my-5 h-75 text-white text-center" style="background-color: teal" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom{{ $Name['name'] }}" aria-controls="offcanvasBottom">
            <h3>Przepis: {{ $Name['name'] }}</h3>
        
        </div>
    </div>

    <div class="offcanvas offcanvas-bottom h-75" tabindex="-1" id="offcanvasBottom{{ $Name['name'] }}" aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-header">
          <h2 class="offcanvas-title" id="offcanvasBottomLabel">Przepis na {{ $Name['name'] }}</h2>
          
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        
        <div class="offcanvas-body small">
          <h4>Składniki:</h5>
          <ul>
            @foreach($Name['ingredients'] as $ingredients)
            <li>{{  $ingredients['name'] }} {{ $ingredients['amount'] }}g </li>
            @endforeach
          </ul>

          <h4>Przygotowanie:</h5>
                <p>{{ $Name['description'] }}</p>

        </div>
    </div>
    @endforeach
</div>

