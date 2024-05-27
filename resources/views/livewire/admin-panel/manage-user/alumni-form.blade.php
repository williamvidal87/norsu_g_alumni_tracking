<div>
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Alumni</h5>
            
            <button class="btn btn-theme-dark btn--icon" wire:click="CloseAlumniForm"><i class="zwicon-close"></i></button>
        </div>
        <div class="modal-body">
            
            <div class="form-group">
                <label for="last_name">Last Name</label>
                <input id="last_name" wire:model="last_name" type="text" class="form-control" placeholder="Last Name">
                <span class="text-danger">@error('last_name') {{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="name">First Name</label>
                <input id="name" wire:model="name" type="text" class="form-control" placeholder="First Name">
                <span class="text-danger">@error('name') {{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="middle_name">Middle Name</label>
                <input id="middle_name" wire:model="middle_name" type="text" class="form-control" placeholder="Middle Name">
                <span class="text-danger">@error('middle_name') {{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="email">Email Address</label>
                <input id="email" wire:model="email" type="email" class="form-control" placeholder="Email Address">
                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input id="password" wire:model="password" type="password" class="form-control" placeholder="Password">
                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
            </div>
            <div class="form-group">
                <label for="confirm_password">Confirm Password</label>
                <input id="confirm_password" wire:model="confirm_password" type="password" class="form-control" placeholder="Confirm Password">
                <span class="text-danger">@error('confirm_password') {{ $message }} @enderror</span>
            </div>

        </div>
        <div class="modal-footer">
            <button wire:click="Store" type="button" class="btn btn-link">Save</button>
            <button wire:click="CloseAlumniForm" type="button" class="btn btn-link">Close</button>
        </div>
    </div>
</div>
