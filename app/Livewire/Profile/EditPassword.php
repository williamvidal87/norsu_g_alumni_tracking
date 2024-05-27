<?php

namespace App\Livewire\Profile;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class EditPassword extends Component
{
    public  $current_password,
            $password,
            $password_confirmation;
    public function render()
    {
        return view('livewire.profile.edit-password');
    }

    public function Save()
    {
        $this->validate([
            'current_password'      => ['required', 'string', 'current_password:web'],
            'password'              => 'required',
            'password_confirmation' => 'required|same:password',
        ]);
        
        try {

            $data['password']=bcrypt($this->password);
            User::find(Auth::user()->id)->update($data);
            $this->alert('info','Your data has been successfully updated.');
            
        } catch (\Exception $e) {
			dd($e);
			return back();
        }
    }
}
