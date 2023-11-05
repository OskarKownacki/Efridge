<div class="fs-6">
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home"
                type="button" role="tab" aria-controls="nav-home" aria-selected="true">Dodawanie</button>
            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile"
                type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Edytowanie pytań</button>
            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact"
                type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Edytowanie przepisów</button>
        </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab"
            tabindex="0">
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
                        <button type="button" class="btn btn-dark" style="margin-top:1%"
                            wire:click="addAnotherIngredient">Dodaj
                            kolejny produkt</button>
                        <button type="submit" class="btn btn-dark" style="margin-top:1%;">Submit</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Treść pytania</th>
                        <th scope="col">Odpowiedź</th>
                        <th scope="col">Akcje</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($queryQuestions as $question)
                    <tr>
                        <td>{{ $question->question }}</td>
                        <td>{{ $question->answer->answer }}</td>
                        <td>
                            <button type="button" class="btn bg-transparent" style="margin-top:1%" wire:click="deleteQuestion({{ $question->id }})"><i
                                    class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-profile-tab" tabindex="0">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Tytuł przepisu</th>
                        <th scope="col">Treść przepisu</th>
                        <th scope="col">Składniki</th>
                        <th scope="col">Akcje</th>
                    </tr>
                </thead>
                <tbody class="table-group-divider">
                    @foreach($queryRecipes as $Recipe)
                    <tr>
                        <td>{{ $Recipe->name }}</td>
                        <td>{{ $Recipe->description }}</td>
                        <td><ul>
                            @foreach($Recipe->ingredients as $ingredients)
                            <li>{{  $ingredients->name }} {{ $ingredients->amount }}g </li>
                            @endforeach
                          </ul></td>
                        <td>
                            <button type="button" class="btn bg-transparent" style="margin-top:1%" wire:click="deleteRecipe({{ $Recipe->id }})"><i
                                    class="bi bi-trash"></i></button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</div>
