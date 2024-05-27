<div>
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Work Type</h5>
            
            <button class="btn btn-theme-dark btn--icon" wire:click="CloseTypeWorkForm"><i class="zwicon-close"></i></button>
        </div>
        <div class="modal-body">
            
            <div class="form-group">
                <label for="type_work_name">Work Type Name</label>
                <input id="type_work_name" wire:model="type_work_name" type="text" class="form-control" placeholder="Work Type Name">
                <span class="text-danger">@error('type_work_name') {{ $message }} @enderror</span>
            </div>

        </div>
        <div class="modal-footer">
            <button wire:click="Store" type="button" class="btn btn-link">Save</button>
            <button wire:click="CloseTypeWorkForm" type="button" class="btn btn-link">Close</button>
        </div>
    </div>
</div>
