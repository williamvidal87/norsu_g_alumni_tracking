<?php

namespace App\Livewire\AdminPanel\CollegeDepartment;

use App\Models\CollegeDepartment;
use Livewire\Component;

class CollegeDepartmentForm extends Component
{
    public  $college_department_name;
    public  $CollegeDepartmentID;

    protected $listeners = [
        'CollegeDepartmentID',
        'CloseCollegeDepartmentForm'
    ];

    public function CollegeDepartmentID($CollegeDepartmentID)
    {
        $this->CollegeDepartmentID = $CollegeDepartmentID;
        $data=CollegeDepartment::find($CollegeDepartmentID);
        $this->college_department_name = $data['college_department_name'];
    }

    public function render()
    {
        return view('livewire.admin-panel.college-department.college-department-form');
    }

    public function Store(){
        
        $this->validate([
            'college_department_name'         => 'required',
        ]);
        
        $this->dispatch('CloseCollegeDepartmentForm');
        
        $data = ([
            'college_department_name'         => $this->college_department_name,
        ]);
        
        try {
            if($this->CollegeDepartmentID){

                CollegeDepartment::find($this->CollegeDepartmentID)->update($data);
                $this->alert('info','Your data has been successfully updated.');

            }else{

                CollegeDepartment::create($data);
                $this->alert('success','Your data has been successfully stored.');
                
            }
            
        } catch (\Exception $e) {
			dd($e);
			return back();
        }
        
    }
    
    public function CloseCollegeDepartmentForm()
    {   
        $this->dispatch('CloseCollegeDepartmentModal');
        $this->dispatch('RefreshCollegeDepartmentTable');
        $this->resetValidation();
        $this->reset();
        
    }
}
