<?php

namespace App\Livewire\AdminPanel\AlumniManagement;

use App\Models\CivilStatus;
use App\Models\Course;
use App\Models\EducationalLevel;
use App\Models\EmploymentStatus;
use App\Models\Sex;
use App\Models\TypeWork;
use App\Models\User;
use Livewire\Component;

class AlumniManagementForm extends Component
{
    public  $last_name,
            $name,
            $middle_name,
            $sex_id,
            $date_birth,
            $birth_place,
            $home_address,
            $mobile_number,
            $land_line_no,
            $civil_status_id,
            $email,
            $facebook_account,
            $year_graduate,
            $educational_level_id,
            $graduate_school_campus,
            $course_id,
            $major_in,
            $employment_status_id,
            $present_occupation,
            $type_work_id,
            $name_of_company,
            $employment_address,
            $reference_person_workplace,
            $reference_person_workplace_contact_no,
            $person_to_notify,
            $person_to_notify_contact_no;
    public  $AlumniID;

    protected $listeners = [
        'AlumniID',
        'CloseAlumniForm'
    ];

    public function AlumniID($AlumniID)
    {
        $this->AlumniID = $AlumniID;
        $data=User::find($AlumniID);
        $this->last_name                              =   $data['last_name'];
        $this->name                                   =   $data['name'];
        $this->middle_name                            =   $data['middle_name'];
        $this->sex_id                                 =   $data['sex_id'];
        $this->date_birth                             =   $data['date_birth'];
        $this->birth_place                            =   $data['birth_place'];
        $this->home_address                           =   $data['home_address'];
        $this->mobile_number                          =   $data['mobile_number'];
        $this->land_line_no                           =   $data['land_line_no'];
        $this->civil_status_id                        =   $data['civil_status_id'];
        $this->email                                  =   $data['email'];
        $this->facebook_account                       =   $data['facebook_account'];
        $this->year_graduate                          =   $data['year_graduate'];
        $this->educational_level_id                   =   $data['educational_level_id'];
        $this->graduate_school_campus                 =   $data['graduate_school_campus'];
        $this->course_id                              =   $data['course_id'];
        $this->major_in                               =   $data['major_in'];
        $this->employment_status_id                   =   $data['employment_status_id'];
        $this->present_occupation                     =   $data['present_occupation'];
        $this->type_work_id                           =   $data['type_work_id'];
        $this->name_of_company                        =   $data['name_of_company'];
        $this->employment_address                     =   $data['employment_address'];
        $this->reference_person_workplace             =   $data['reference_person_workplace'];
        $this->reference_person_workplace_contact_no  =   $data['reference_person_workplace_contact_no'];
        $this->person_to_notify                       =   $data['person_to_notify'];
        $this->person_to_notify_contact_no            =   $data['person_to_notify_contact_no'];
    }

    public function render()
    {
        return view('livewire.admin-panel.alumni-management.alumni-management-form',[
            'SexData' =>   Sex::all(),
            'CivilStatusData' =>   CivilStatus::all(),
            'EducationalLevelData' =>   EducationalLevel::all(),
            'CourseData' =>   Course::all(),
            'TypeWorkData' =>   TypeWork::all(),
            'EmploymentStatusData' =>   EmploymentStatus::all(),
            ]);
    }

    public function Store(){

        
        $this->validate([
            'last_name'                             =>  'required',
            'name'                                  =>  'required',
            'middle_name'                           =>  '',
            'sex_id'                                =>  'required',
            'date_birth'                            =>  'required',
            'birth_place'                           =>  'required',
            'home_address'                          =>  'required',
            'mobile_number'                         =>  '',
            'land_line_no'                          =>  '',
            'civil_status_id'                       =>  'required',
            'email'                                 =>  'required|email|unique:users,email,'.$this->AlumniID,
            'facebook_account'                      =>  '',
            'year_graduate'                         =>  '',
            'educational_level_id'                  =>  '',
            'graduate_school_campus'                =>  '',
            'course_id'                             =>  '',
            'major_in'                              =>  '',
            'employment_status_id'                  =>  '',
            'present_occupation'                    =>  '',
            'type_work_id'                          =>  '',
            'name_of_company'                       =>  '',
            'employment_address'                    =>  '',
            'reference_person_workplace'            =>  '',
            'reference_person_workplace_contact_no' =>  '',
            'person_to_notify'                      =>  '',
            'person_to_notify_contact_no'           =>  '',
        ]);
        
        $this->dispatch('CloseAlumniForm');

        $data = ([
            'last_name'                             =>  $this->last_name,
            'name'                                  =>  $this->name,
            'middle_name'                           =>  $this->middle_name,
            'sex_id'                                =>  $this->sex_id,
            'date_birth'                            =>  $this->date_birth,
            'birth_place'                           =>  $this->birth_place,
            'home_address'                          =>  $this->home_address,
            'mobile_number'                         =>  $this->mobile_number,
            'land_line_no'                          =>  $this->land_line_no,
            'civil_status_id'                       =>  $this->civil_status_id,
            'email'                                 =>  $this->email,
            'facebook_account'                      =>  $this->facebook_account,
            'year_graduate'                         =>  $this->year_graduate,
            'educational_level_id'                  =>  $this->educational_level_id,
            'graduate_school_campus'                =>  $this->graduate_school_campus,
            'course_id'                             =>  $this->course_id,
            'major_in'                              =>  $this->major_in,
            'employment_status_id'                  =>  $this->employment_status_id,
            'present_occupation'                    =>  $this->present_occupation,
            'type_work_id'                          =>  $this->type_work_id,
            'name_of_company'                       =>  $this->name_of_company,
            'employment_address'                    =>  $this->employment_address,
            'reference_person_workplace'            =>  $this->reference_person_workplace,
            'reference_person_workplace_contact_no' =>  $this->reference_person_workplace_contact_no,
            'person_to_notify'                      =>  $this->person_to_notify,
            'person_to_notify_contact_no'           =>  $this->person_to_notify_contact_no,
        ]);
        
        try {
            
            foreach ($data as $key => $value) {
                if ($value === '') {
                    $data[$key] = null;
                }
            }

            if($this->AlumniID){
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
