<div>
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">Course</h5>
            
            <button class="btn btn-theme-dark btn--icon" wire:click="CloseCourseForm"><i class="zwicon-close"></i></button>
        </div>
        <div class="modal-body">
            
            <div class="form-group">
                <label for="college_department_id">College/Department</label>
                <div class="select">
                    <select id="college_department_id" wire:model="college_department_id" class="form-control">
                        <option value="">Select College/Department</option>
                        @foreach($CollegeDepartmentData as $data)
                            <option value={{ $data->id }}>{{ $data->college_department_name }}</option>
                        @endforeach
                    </select>
                </div>
                <span class="text-danger">@error('college_department_id') {{ $message }} @enderror</span>
            </div>

            <div class="form-group">
                <label for="abrivation_name">Abbreviation</label>
                <input id="abrivation_name" wire:model="abrivation_name" type="text" class="form-control" placeholder="Course Name">
                <span class="text-danger">@error('abrivation_name') {{ $message }} @enderror</span>
            </div>

            <div class="form-group">
                <label for="course_name">Course Name</label>
                <input id="course_name" wire:model="course_name" type="text" class="form-control" placeholder="Course Name">
                <span class="text-danger">@error('course_name') {{ $message }} @enderror</span>
            </div>

        </div>
        <div class="modal-footer">
            <button wire:click="Store" type="button" class="btn btn-link">Save</button>
            <button wire:click="CloseCourseForm" type="button" class="btn btn-link">Close</button>
        </div>
    </div>
</div>
