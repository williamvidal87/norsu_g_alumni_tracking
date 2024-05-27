<div>
    <div class="content__inner content__inner--sm">
        <header class="content__title">
            <h1>YOUR INFORMATION</h1>
        </header>

        <div class="card profile">
            <div class="profile__img">
                <img id="profileImage" class="user__img" style="min-width: 200px; height: 200px; object-fit: cover;"
                    src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}">
            </div>

            <div class="profile__info">
                <h5 class="card-body__title">Personal Information</h5>

                <ul class="icon-list" style="margin-left: 20px">
                    <li><strong>Name : </strong>{{ Auth::user()->last_name.' '.Auth::user()->name.' '.Auth::user()->middle_name }}</li>
                    <li><strong>Sex : </strong>{{Auth::user()->getSex->sex_name ?? ''}}</li>
                    <li><strong>Date Of Birth : </strong>{{Auth::user()->date_birth ?? ''}}</li>
                    <li><strong>Birth Place : </strong>{{Auth::user()->birth_place ?? ''}}</li>
                    <li><strong>Civil Status : </strong>{{Auth::user()->getCivilStatus->civil_status_name ?? ''}}</li>
                    <li><strong>Email Address : </strong>{{Auth::user()->email ?? ''}}</li>
                    <li><strong>Facebook Account : </strong>{{Auth::user()->facebook_account ?? ''}}</li>
                </ul>

            </div>
        </div>

        <div class="card">
            <div class="card-body">
                <h5 class="card-body__title">Educational Background</h5>

                <ul class="icon-list" style="margin-left: 20px">
                    <li><strong>Year Graduated : </strong>{{Auth::user()->year_graduate ?? 'none'}}</li>
                    <li><strong>Educational Level : </strong>{{Auth::user()->getEducationalLevel->educational_level_name ?? 'none'}}</li>
                    <li><strong>Graduate School Campus : </strong>{{Auth::user()->graduate_school_campus ?? 'none'}}</li>
                    <li><strong>Course : </strong>{{Auth::user()->getCourse->course_name ?? 'none'}}</li>
                    <li><strong>Major in : </strong>{{Auth::user()->major_in ?? 'none'}}</li>
                </ul>

                <br>

                <h5 class="card-body__title">Employment Information</h5>

                <ul class="icon-list" style="margin-left: 20px">
                    <li><strong>Employment Status : </strong>{{Auth::user()->getEmploymentStatus->employment_status_name ?? 'none'}}</li>
                    <li><strong>Present Occupation/Position : </strong>{{Auth::user()->present_occupation ?? 'none'}}</li>
                    <li><strong>Types of Work : </strong>{{Auth::user()->getTypeWork->type_work_name ?? 'none'}}</li>
                    <li><strong>Name of Company/Agency : </strong>{{Auth::user()->name_of_company ?? 'none'}}</li>
                    <li><strong>Employment Address : </strong>{{Auth::user()->employment_address ?? 'none'}}</li>
                    <li><strong>Reference Person From Workplace : </strong>{{Auth::user()->reference_person_workplace ?? 'none'}}</li>
                    <li><strong>Contact No : </strong>{{Auth::user()->major_in ?? 'none'}}</li>
                </ul>

                <h5 class="card-body__title">Emergency Contact</h5>

                <ul class="icon-list" style="margin-left: 20px">
                    <li><strong>Person to Notify : </strong>{{Auth::user()->person_to_notify ?? 'none'}}</li>
                    <li><strong>Contact No : </strong>{{Auth::user()->person_to_notify_contact_no ?? 'none'}}</li>
                </ul>

                <br>
            </div>
        </div>
    </div>
</div>
