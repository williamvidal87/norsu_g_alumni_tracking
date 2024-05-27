<?php

namespace App\Livewire\AdminPanel\TypeWork;

use App\Models\TypeWork;
use Livewire\Component;

class TypeWorkTable extends Component
{
    protected $listeners = [
        'EditTypeWork',
        'DeleteThis',
        'RefreshTypeWorkTable' => '$refresh'
    ];

    public function render()
    {
        $this->dispatch('DispatchTable');
        return view('livewire.admin-panel.type-work.type-work-table',[
            'TypeWorkData'    =>  TypeWork::all()
        ]);
    }
    
    public function OpenTypeWorkForm()
    {
        $this->dispatch('OpenTypeWorkModal');
    }
    
    public function EditTypeWork($TypeWorkID)
    {
        $this->dispatch('TypeWorkID',$TypeWorkID);
        $this->dispatch('OpenTypeWorkModal');
    }
    
    public function DeleteTypeWork($TypeWorkID)
    {
        $this->dispatch('ConfirmDelete',$TypeWorkID);
    }
    
    public function DeleteThis($TypeWorkID)
    {
        TypeWork::destroy($TypeWorkID);
        $this->alert('error','Your data has been successfully deleted.');
    }
}
