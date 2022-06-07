<form wire:submit.prevent="create">
    <input type="text" name="title" id="title" class="form-control" wire:model="title">
    <input type="text" name="content" id="content" class="form-control" wire:model="content">
    <button class="btn btn-primary">Salvar</button>
</form>
