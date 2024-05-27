<div>
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Alumni Information</h5>
            
            <button class="btn btn-theme-dark btn--icon" wire:click="CloseAlumniForm"><i class="zwicon-close"></i></button>
        </div>
        <div class="modal-body">

            <div class="card-body">

                <div class="row">
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="last_name">Last Name</label>
                            <input id="last_name" wire:model="last_name" type="text" class="form-control" placeholder="Last Name">
                            <span class="text-danger">@error('last_name') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="name">First Name</label>
                            <input id="name" wire:model="name" type="text" class="form-control" placeholder="First Name">
                            <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="middle_name">Middle Name</label>
                            <input id="middle_name" wire:model="middle_name" type="text" class="form-control" placeholder="Middle Name">
                            <span class="text-danger">@error('middle_name') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="sex_id">Sex</label>
                            <div class="select">
                                <select id="sex_id" wire:model="sex_id" class="form-control">
                                    <option value="">Select Sex</option>
                                    @foreach($SexData as $data)
                                        <option value={{ $data->id }}>{{ $data->sex_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="text-danger">@error('sex_id') {{ $message }} @enderror</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="date_birth">Date Of Birth</label>
                            <input id="date_birth" wire:model="date_birth" type="text" class="form-control" placeholder="Date Of Birth" onfocus="(this.type='date')" onblur="(this.type='text')">
                            <span class="text-danger">@error('date_birth') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="birth_place">Birth Place</label>
                            <input id="birth_place" wire:model="birth_place" type="text" class="form-control" placeholder="Birth Place">
                            <span class="text-danger">@error('birth_place') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="civil_status_id">Civil Status</label>
                            <div class="select">
                                <select id="civil_status_id" wire:model="civil_status_id" class="form-control">
                                    <option value="">Select Civil Status</option>
                                    @foreach($CivilStatusData as $data)
                                        <option value={{ $data->id }}>{{ $data->civil_status_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="text-danger">@error('civil_status_id') {{ $message }} @enderror</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="home_address">Home Address</label>
                            <input id="home_address" wire:model="home_address" type="text" class="form-control" placeholder="Home Address">
                            <span class="text-danger">@error('home_address') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="mobile_number">Mobile No</label>
                            <input id="mobile_number" wire:model="mobile_number" type="text" class="form-control" placeholder="Mobile No">
                            <span class="text-danger">@error('mobile_number') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="form-group">
                            <label for="land_line_no">Landline No</label>
                            <input id="land_line_no" wire:model="land_line_no" type="text" class="form-control" placeholder="Landline No">
                            <span class="text-danger">@error('land_line_no') {{ $message }} @enderror</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input id="email" wire:model="email" type="email" class="form-control" placeholder="Email Address">
                            <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="facebook_account">Facebook Account</label>
                            <input id="facebook_account" wire:model="facebook_account" type="text" class="form-control" placeholder="FaceBook Account">
                            <span class="text-danger">@error('facebook_account') {{ $message }} @enderror</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="year_graduate">Year Graduate</label>
                            <input id="year_graduate" wire:model="year_graduate" type="text" class="form-control" placeholder="Year Graduate">
                            <span class="text-danger">@error('year_graduate') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="educational_level_id">Educational Level</label>
                            <div class="select">
                                <select id="educational_level_id" wire:model="educational_level_id" class="form-control">
                                    <option value="">Select Educational Level</option>
                                    @foreach($EducationalLevelData as $data)
                                        <option value={{ $data->id }}>{{ $data->educational_level_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="text-danger">@error('educational_level_id') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="graduate_school_campus">Graduate School Campus</label>
                            <input id="graduate_school_campus" wire:model="graduate_school_campus" type="text" class="form-control" placeholder="Graduate School Campus">
                            <span class="text-danger">@error('graduate_school_campus') {{ $message }} @enderror</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="course_id">Course</label>
                            <div class="select">
                                <select id="course_id" wire:model="course_id" class="form-control">
                                    <option value="">Select Course</option>
                                    @foreach($CourseData as $data)
                                        <option value={{ $data->id }}>{{ $data->course_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="text-danger">@error('course_id') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="major_in">Major In</label> 
                            <input id="major_in" wire:model="major_in" type="text" class="form-control" placeholder="Major In">
                            <span class="text-danger">@error('major_in') {{ $message }} @enderror</span>
                        </div>
                   </div>
                </div>

                <div class="row">
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="employment_status_id">Employment Status</label>
                            <div class="select">
                                <select id="employment_status_id" wire:model="employment_status_id" class="form-control">
                                    <option value="">Select Employment Status</option>
                                    @foreach($EmploymentStatusData as $data)
                                        <option value={{ $data->id }}>{{ $data->employment_status_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="text-danger">@error('employment_status_id') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="present_occupation">Present Occupation/Position</label>
                            <input id="present_occupation" wire:model="present_occupation" type="text" class="form-control" placeholder="Present Occupation/Position">
                            <span class="text-danger">@error('present_occupation') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="type_work_id">Work Of Type</label>
                            <div class="select">
                                <select id="type_work_id" wire:model="type_work_id" class="form-control">
                                    <option value="">Select Work Of Type</option>
                                    @foreach($TypeWorkData as $data)
                                        <option value={{ $data->id }}>{{ $data->type_work_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <span class="text-danger">@error('type_work_id') {{ $message }} @enderror</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="name_of_company">Name Of Company/Agency</label>
                            <input id="name_of_company" wire:model="name_of_company" type="text" class="form-control" placeholder="Name Of Company/Agency">
                            <span class="text-danger">@error('name_of_company') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="employment_address">Employment Address</label>
                            <input id="employment_address" wire:model="employment_address" type="text" class="form-control" placeholder="Employment Address">
                            <span class="text-danger">@error('employment_address') {{ $message }} @enderror</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="reference_person_workplace">Reference Person From Workplace</label>
                            <input id="reference_person_workplace" wire:model="reference_person_workplace" type="text" class="form-control" placeholder="Reference Person From Workplace">
                            <span class="text-danger">@error('reference_person_workplace') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="reference_person_workplace_contact_no">Contact No</label>
                            <input id="reference_person_workplace_contact_no" wire:model="reference_person_workplace_contact_no" type="text" class="form-control" placeholder="Contact No">
                            <span class="text-danger">@error('reference_person_workplace_contact_no') {{ $message }} @enderror</span>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-8">
                        <div class="form-group">
                            <label for="person_to_notify">Person To Notify In Case Of Emergency</label>
                            <input id="person_to_notify" wire:model="person_to_notify" type="text" class="form-control" placeholder="Person To Notify In Case Of Emergency">
                            <span class="text-danger">@error('person_to_notify') {{ $message }} @enderror</span>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="form-group">
                            <label for="person_to_notify_contact_no">Contact No</label>
                            <input id="person_to_notify_contact_no" wire:model="person_to_notify_contact_no" type="text" class="form-control" placeholder="Contact No">
                            <span class="text-danger">@error('person_to_notify_contact_no') {{ $message }} @enderror</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button wire:click="Store" type="button" class="btn btn-link">Save</button>
            <button wire:click="CloseAlumniForm" type="button" class="btn btn-link">Close</button>
        </div>
    </div>
</div>