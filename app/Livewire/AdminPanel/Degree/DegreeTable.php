<?php

namespace App\Livewire\AdminPanel\Degree;

use App\Models\Degree;
use App\Models\EducationalLevel;
use Livewire\Component;

class DegreeTable extends Component
{
    protected $listeners = [
        'EditDegree',
        'DeleteThis',
        'RefreshDegreeTable' => '$refresh'
    ];

    public function render()
    {
        $this->dispatch('DispatchTable');
        return view('livewire.admin-panel.degree.degree-table',[
            'DegreeData'    =>  EducationalLevel::all()
        ]);
    }
    
    public function OpenDegreeForm()
    {
        $this->dispatch('OpenDegreeModal');
    }
    
    public function EditDegree($DegreeID)
    {
        $this->dispatch('DegreeID',$DegreeID);
        $this->dispatch('OpenDegreeModal');
    }
    
    public function DeleteDegree($DegreeID)
    {
        $this->dispatch('ConfirmDelete',$DegreeID);
    }
    
    public function DeleteThis($DegreeID)
    {
        EducationalLevel::destroy($DegreeID);
        $this->alert('error','Your data has been successfully deleted.');
    }
}
