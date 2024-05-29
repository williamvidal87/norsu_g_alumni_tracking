<?php

namespace App\Livewire\AdminPanel\Degree;

use App\Models\Degree;
use App\Models\EducationalLevel;
use Livewire\Component;

class DegreeForm extends Component
{
    public  $educational_level_name;
    public  $DegreeID;

    protected $listeners = [
        'DegreeID',
        'CloseDegreeForm'
    ];

    public function DegreeID($DegreeID)
    {
        $this->DegreeID = $DegreeID;
        $data=EducationalLevel::find($DegreeID);
        $this->educational_level_name = $data['educational_level_name'];
    }

    public function render()
    {
        return view('livewire.admin-panel.degree.degree-form');
    }

    public function Store(){
        
        $this->validate([
            'educational_level_name'         => 'required',
        ]);
        
        $this->dispatch('CloseDegreeForm');
        
        $data = ([
            'educational_level_name'         => $this->educational_level_name,
        ]);
        
        try {
            
            foreach ($data as $key => $value) {
                if ($value === '') {
                    $data[$key] = null;
                }
            }
            
            if($this->DegreeID){

                EducationalLevel::find($this->DegreeID)->update($data);
                $this->alert('info','Your data has been successfully updated.');

            }else{

                EducationalLevel::create($data);
                $this->alert('success','Your data has been successfully stored.');
                
            }
            
        } catch (\Exception $e) {
			dd($e);
			return back();
        }
        
    }
    
    public function CloseDegreeForm()
    {   
        $this->dispatch('CloseDegreeModal');
        $this->dispatch('RefreshDegreeTable');
        $this->resetValidation();
        $this->reset();
        
    }
}
