<div class="fs-6">
    <form wire:submit="addQuestion">
        <label for="question" class="form-label">Treść pytania</label>
        <input type="text" class="form-control" id="questionContent" aria-describedby="textHelp"
            wire:model="questionContent">
        <label for="answer" class="form-label">Odpowiedź na pytanie</label>
        <input type="text" class="form-control" id="answerContent" aria-describedby="textHelp"
            wire:model="answerContent">
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
    <form wire:submit="addRecipe">
        <label for="question" class="form-label">Treść pytania</label>
        <input type="text" class="form-control" id="questionContent" aria-describedby="textHelp"
            wire:model="questionContent">
        <label for="answer" class="form-label">Odpowiedź na pytanie</label>
        <input type="text" class="form-control" id="answerContent" aria-describedby="textHelp"
            wire:model="answerContent">
        <button type="submit" class="btn btn-dark">Submit</button>
    </form>
</div>
