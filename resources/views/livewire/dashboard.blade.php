<div class="fs-6">
        <form wire:submit="addQuestion">
            <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <label for="question" class="form-label">Treść pytania</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="questionContent" aria-describedby="textHelp"
                        wire:model="questionContent">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="answer" class="form-label">Odpowiedź na pytanie</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="answerContent" aria-describedby="textHelp"
                        wire:model="answerContent">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <button type="submit" class="btn btn-dark" style="margin-top:1%">Submit</button>
                </div>
            </div>
            </div>
        </form>
        <form wire:submit="addRecipe">
            <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <label for="recipeTitle" class="form-label">Nazwa przepisu</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="recipeTitle" aria-describedby="textHelp"
                        wire:model="recipeTitle">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="recipeContent" class="form-label">Treść przepisu</label>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="recipeConten" aria-describedby="textHelp"
                        wire:model="recipeContent">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <label for="recipeIngredients" class="form-label">Potrzebne składniki</label>
                </div>
                <div class="col">
                    <label for="recipeAmount" class="form-label">Ilość (w gramach)</label>
                </div>
            </div>
            @foreach($recipeIngredients as $recipeIngredients)
            <div class="row">
                <div class="col">
                    <input type="text" class="form-control" id="recipeIngredients" aria-describedby="textHelp"
                        wire:model="recipeIngredients.{{ $recipeIngredients['id'] }}.name">
                </div>
                <div class="col">
                    <input type="number" class="form-control" id="recipeAmount" aria-describedby="textHelp"
                        wire:model="recipeIngredients.{{ $recipeIngredients['id'] }}.amount" style=>
                </div>
            </div>
            @endforeach
            <div class="row">
                <button type="button" class="btn btn-dark" style="margin-top:1%" wire:click="addAnotherIngredient">Dodaj kolejny produkt</button>
            <button type="submit" class="btn btn-dark" style="margin-top:1%;">Submit</button>
            </div>
        </form>
    </div>
