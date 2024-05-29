<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'last_name',
        'name',
        'middle_name',
        'sex_id',
        'date_birth',
        'birth_place',
        'home_address',
        'mobile_number',
        'land_line_no',
        'civil_status_id',
        'email',
        'facebook_account',
        'year_graduate',
        'educational_level_id',
        'graduate_school_campus',
        'course_id',
        'major_in',
        'employment_status_id',
        'present_occupation',
        'type_work_id',
        'name_of_company',
        'employment_address',
        'reference_person_workplace',
        'reference_person_workplace_contact_no',
        'person_to_notify',
        'person_to_notify_contact_no',

        'password',
        'role_id',
        'profile_photo_path',
        'email_verified_at'
    ];
    
    public static function convertEmptyToNull($value)
    {
        return $value === '' ? null : $value;
    }

    public function getEmploymentStatus()
    {
        return $this->belongsTo(EmploymentStatus::class,'employment_status_id');
    }
    
    public function getSex()
    {
        return $this->belongsTo(Sex::class,'sex_id');
    }
    
    public function getCivilStatus()
    {
        return $this->belongsTo(CivilStatus::class,'civil_status_id');
    }
    
    public function getEducationalLevel()
    {
        return $this->belongsTo(EducationalLevel::class,'educational_level_id');
    }
    
    public function getCourse()
    {
        return $this->belongsTo(Course::class,'course_id');
    }
    
    public function getTypeWork()
    {
        return $this->belongsTo(TypeWork::class,'type_work_id');
    }
    
    public function getRole()
    {
        return $this->belongsTo(Role::class,'role_id');
    }

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
}
