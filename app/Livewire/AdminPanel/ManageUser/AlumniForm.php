<?php

namespace App\Livewire\AdminPanel\ManageUser;

use App\Models\User;
use Livewire\Component;

class AlumniForm extends Component
{
    public  $last_name,
            $name,
            $middle_name,
            $email,
            $password,
            $confirm_password,
            $role_id=2;
    public  $AlumniID;

    protected $listeners = [
        'AlumniID',
        'CloseAlumniForm'
    ];

    public function AlumniID($AlumniID)
    {
        $this->AlumniID = $AlumniID;
        $data=User::find($AlumniID);
        $this->last_name = $data['last_name'];
        $this->name = $data['name'];
        $this->middle_name = $data['middle_name'];
        $this->email = $data['email'];
    }

    public function render()
    {
        return view('livewire.admin-panel.manage-user.alumni-form');
    }

    public function Store(){

        if($this->password==""){
            $this->password=null;
        }
        
        $this->validate([
            'last_name'         => 'required',
            'name'              => 'required',
            'middle_name'       => 'required',
            'email'             => 'required|email|unique:users,email,'.$this->AlumniID,
            'password'          => 'required_without:AlumniID',
            'confirm_password'  => 'required_without:AlumniID|same:password',
        ]);
        
        $this->dispatch('CloseAlumniForm');
        
        $data = ([
            'last_name'         => $this->last_name,
            'name'              => $this->name,
            'middle_name'       => $this->middle_name,
            'email'             => $this->email,
        ]);
        
        try {
            if($this->AlumniID){
                if ($this->password) {
                    $data['password']=bcrypt($this->password);
                }
                User::find($this->AlumniID)->update($data);
                $this->alert('info','Your data has been successfully updated.');
            }else{
                $data['password']=bcrypt($this->password);
                User::create($data);
                $this->alert('success','Your data has been successfully stored.');
            }
            
        } catch (\Exception $e) {
			dd($e);
			return back();
        }
        
    }
    
    public function CloseAlumniForm()
    {   
        $this->dispatch('CloseAlumniModal');
        $this->dispatch('RefreshAlumniTable');
        $this->resetValidation();
        $this->reset();
        
    }
}
