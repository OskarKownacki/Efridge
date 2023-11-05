<div class="row h-100">
    @foreach($recipeName as $Name)
    <div class="col pl-5 ">
        <div class="p-5 my-5 h-75 text-white text-center" style="background-color: teal" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom{{ $Name['name'] }}" aria-controls="offcanvasBottom">
            <h3>Lorem ipsum dolor sit amet consectetur adipisicing.</h3>
        
        </div>
    </div>

    <div class="offcanvas offcanvas-bottom h-75" tabindex="-1" id="offcanvasBottom{{ $Name['name'] }}" aria-labelledby="offcanvasBottomLabel">
        <div class="offcanvas-header">
          <h2 class="offcanvas-title" id="offcanvasBottomLabel">Przepis na {{ $Name['name'] }}</h2>
          
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        
        <div class="offcanvas-body small">
          <h5 class="bi bi-stopwatch"> 25 min</h5>
          <h4>Składniki:</h5>
          <ul>
            @foreach($Name['ingredients'] as $ingredients)
            <li>{{  $ingredients['name'] }} {{ $ingredients['amount'] }}g </li>
            @endforeach
          </ul>

          <h4>Przygotowanie:</h5>
            <ol>
                <li>{{ $Name['description'] }}</li>
            </ol>

        </div>
    </div>
    @endforeach
</div>

