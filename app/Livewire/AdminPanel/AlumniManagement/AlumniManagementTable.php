<?php

namespace App\Livewire\AdminPanel\AlumniManagement;

use App\Models\User;
use Livewire\Component;

class AlumniManagementTable extends Component
{
    protected $listeners = [
        'EditAlumni',
        'DeleteThis',
        'RefreshAlumniTable' => '$refresh'
    ];

    public function render()
    {
        $this->dispatch('DispatchTable');
        return view('livewire.admin-panel.alumni-management.alumni-management-table',[
            'AlumniData'    =>  User::where('role_id',2)->get()
        ]);
    }
    
    public function OpenAlumniForm()
    {
        $this->dispatch('OpenAlumniModal');
    }
    
    public function EditAlumni($AlumniID)
    {
        $this->dispatch('AlumniID',$AlumniID);
        $this->dispatch('OpenAlumniModal');
    }
    
    public function DeleteAlumni($AlumniID)
    {
        $this->dispatch('ConfirmDelete',$AlumniID);
    }
    
    public function DeleteThis($AlumniID)
    {
        User::destroy($AlumniID);
        $this->alert('error','Your data has been successfully deleted.');
    }
}
