<div>
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">College/Department</h5>
            
            <button class="btn btn-theme-dark btn--icon" wire:click="CloseCollegeDepartmentForm"><i class="zwicon-close"></i></button>
        </div>
        <div class="modal-body">
            
            <div class="form-group">
                <label for="college_department_name">College/Department Name</label>
                <input id="college_department_name" wire:model="college_department_name" type="text" class="form-control" placeholder="College/Department Name">
                <span class="text-danger">@error('college_department_name') {{ $message }} @enderror</span>
            </div>

        </div>
        <div class="modal-footer">
            <button wire:click="Store" type="button" class="btn btn-link">Save</button>
            <button wire:click="CloseCollegeDepartmentForm" type="button" class="btn btn-link">Close</button>
        </div>
    </div>
</div>
