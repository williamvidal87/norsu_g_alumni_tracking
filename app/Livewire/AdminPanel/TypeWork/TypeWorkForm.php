<?php

namespace App\Livewire\AdminPanel\TypeWork;

use App\Models\TypeWork;
use Livewire\Component;

class TypeWorkForm extends Component
{
    public  $type_work_name;
    public  $TypeWorkID;

    protected $listeners = [
        'TypeWorkID',
        'CloseTypeWorkForm'
    ];

    public function TypeWorkID($TypeWorkID)
    {
        $this->TypeWorkID = $TypeWorkID;
        $data=TypeWork::find($TypeWorkID);
        $this->type_work_name = $data['type_work_name'];
    }

    public function render()
    {
        return view('livewire.admin-panel.type-work.type-work-form');
    }

    public function Store(){
        
        $this->validate([
            'type_work_name'         => 'required',
        ]);
        
        $this->dispatch('CloseTypeWorkForm');
        
        $data = ([
            'type_work_name'         => $this->type_work_name,
        ]);
        
        try {
            if($this->TypeWorkID){

                TypeWork::find($this->TypeWorkID)->update($data);
                $this->alert('info','Your data has been successfully updated.');

            }else{

                TypeWork::create($data);
                $this->alert('success','Your data has been successfully stored.');
                
            }
            
        } catch (\Exception $e) {
			dd($e);
			return back();
        }
        
    }
    
    public function CloseTypeWorkForm()
    {   
        $this->dispatch('CloseTypeWorkModal');
        $this->dispatch('RefreshTypeWorkTable');
        $this->resetValidation();
        $this->reset();
        
    }
}
