<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Student extends Model
{
    use softDeletes;

    /**
     * Relationship Methods
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function school() {
        # Student belongs to School
        # Define an inverse one-to-many relationship.
        return $this->belongsTo('App\School');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'school_id',
        'first_name',
        'last_name',
        'preferred_name',
        'street_address',
        'city',
        'state',
        'zip_code',
        'telephone_number',
        'grade',
        'phone_type',
        'mother_first_name',
        'mother_last_name',
        'father_first_name',
        'father_last_name',
    ];

    /**
     * Create dropdown list of students
     *
     * @return array
     */
    public static function getSchoolDropdown() {
        $students = Student::orderBy('school', 'ASC')->get();

        $students_for_dropdown = [];
        foreach($students as $student) {
            $students_for_dropdown[$student->id] = $student->last_name.', '.$student->first_name;
        }

        return $schools_for_dropdown;
    }
}
