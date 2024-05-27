<div>
    <div class="content__inner content__inner--sm">
        <header class="content__title">
            <h1>Update Password</h1>
        </header>

        <div class="card">
            <div class="card-body">
                <form class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label for="current_password">Current Password</label>
                            <input id="current_password" wire:model="current_password" type="password" class="form-control" placeholder="Current Password">
                            <span class="text-danger">@error('current_password') {{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="password">New Password</label>
                            <input id="password" wire:model="password" type="password" class="form-control" placeholder="New Password">
                            <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                        </div>
                        <div class="form-group">
                            <label for="password_confirmation">Confirm Password</label>
                            <input id="password_confirmation" wire:model="password_confirmation" type="password" class="form-control" placeholder="Confirm Password">
                            <span class="text-danger">@error('password_confirmation') {{ $message }} @enderror</span>
                        </div>
                        
                        <button wire:click="Save" type="button" class="btn btn-theme">Save</button>
                    </div>
                </form>

            </div>

        </div>
    </div>
</div>
</div>