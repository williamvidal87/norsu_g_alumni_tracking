<div>
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Degree</h5>
            
            <button class="btn btn-theme-dark btn--icon" wire:click="CloseDegreeForm"><i class="zwicon-close"></i></button>
        </div>
        <div class="modal-body">
            
            <div class="form-group">
                <label for="educational_level_name">Degree Name</label>
                <input id="educational_level_name" wire:model="educational_level_name" type="text" class="form-control" placeholder="Degree Name">
                <span class="text-danger">@error('educational_level_name') {{ $message }} @enderror</span>
            </div>

        </div>
        <div class="modal-footer">
            <button wire:click="Store" type="button" class="btn btn-link">Save</button>
            <button wire:click="CloseDegreeForm" type="button" class="btn btn-link">Close</button>
        </div>
    </div>
</div>
