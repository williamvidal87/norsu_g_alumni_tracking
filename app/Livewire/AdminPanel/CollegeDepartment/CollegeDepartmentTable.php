<?php

namespace App\Livewire\AdminPanel\CollegeDepartment;

use App\Models\CollegeDepartment;
use Livewire\Component;

class CollegeDepartmentTable extends Component
{
    protected $listeners = [
        'EditCollegeDepartment',
        'DeleteThis',
        'RefreshCollegeDepartmentTable' => '$refresh'
    ];

    public function render()
    {
        $this->dispatch('DispatchTable');
        return view('livewire.admin-panel.college-department.college-department-table',[
            'CollegeDepartmentData'    =>  CollegeDepartment::all()
        ]);
    }
    
    public function OpenCollegeDepartmentForm()
    {
        $this->dispatch('OpenCollegeDepartmentModal');
    }
    
    public function EditCollegeDepartment($CollegeDepartmentID)
    {
        $this->dispatch('CollegeDepartmentID',$CollegeDepartmentID);
        $this->dispatch('OpenCollegeDepartmentModal');
    }
    
    public function DeleteCollegeDepartment($CollegeDepartmentID)
    {
        $this->dispatch('ConfirmDelete',$CollegeDepartmentID);
    }
    
    public function DeleteThis($CollegeDepartmentID)
    {
        CollegeDepartment::destroy($CollegeDepartmentID);
        $this->alert('error','Your data has been successfully deleted.');
    }
}
