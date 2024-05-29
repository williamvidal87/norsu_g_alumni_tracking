<?php

namespace App\Livewire\AdminPanel\Course;

use App\Models\CollegeDepartment;
use App\Models\Course;
use Livewire\Component;

class CourseForm extends Component
{
    public  $college_department_id,
            $abrivation_name,
            $course_name;
    public  $CourseID;

    protected $listeners = [
        'CourseID',
        'CloseCourseForm'
    ];

    public function CourseID($CourseID)
    {
        $this->CourseID = $CourseID;
        $data=Course::find($CourseID);
        $this->college_department_id    = $data['college_department_id'];
        $this->abrivation_name              = $data['abrivation_name'];
        $this->course_name              = $data['course_name'];
    }

    public function render()
    {
        return view('livewire.admin-panel.course.course-form',[
            'CollegeDepartmentData' =>   CollegeDepartment::all(),
            ]);
    }

    public function Store(){
        
        $this->validate([
            'college_department_id' => 'required',
            'abrivation_name'           => 'required',
            'course_name'           => 'required',
        ]);
        
        $this->dispatch('CloseCourseForm');
        
        $data = ([
            'college_department_id' => $this->college_department_id,
            'abrivation_name'       => $this->abrivation_name,
            'course_name'           => $this->course_name,
        ]);
        
        try {
            
            foreach ($data as $key => $value) {
                if ($value === '') {
                    $data[$key] = null;
                }
            }
            
            if($this->CourseID){

                Course::find($this->CourseID)->update($data);
                $this->alert('info','Your data has been successfully updated.');

            }else{

                Course::create($data);
                $this->alert('success','Your data has been successfully stored.');
                
            }
            
        } catch (\Exception $e) {
			dd($e);
			return back();
        }
        
    }
    
    public function CloseCourseForm()
    {   
        $this->dispatch('CloseCourseModal');
        $this->dispatch('RefreshCourseTable');
        $this->resetValidation();
        $this->reset();
        
    }
}
