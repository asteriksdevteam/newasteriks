<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Careers extends Model
{
    use HasFactory;

    protected $table = "careers";
     
    protected $fillable = [
        "department",
        "job_heading",
        "job_specification",
        "job_overview",
        "job_description",
        "full_allowance",
        "leave_encashment",
        "LDopp",
        "recognition_rewards",
        "medical_insurance",
        "maternity_paternity_leave",
        "increment_twice_a_year",
        "paid_time_off",
        "mental_health_leave",
        "number_of_vacancies",
        "working_hours",
        "job_shift",
        "job_type",
        "city",
    ];

    public function JobCategory()
    {
        return $this->belongsTo(JobCategory::class,"department","id");
    }
}
