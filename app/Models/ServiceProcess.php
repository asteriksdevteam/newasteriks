<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ServiceProcess extends Model
{
    use HasFactory;
    protected $table = "service_process";
    protected $fillable = [
        "service_id",
        "workProcessId",
        "process_heading_one",
        "process_content_one",
        "process_heading_two",
        "process_content_two",
        "process_heading_three",
        "process_content_three",
        "process_heading_four",
        "process_content_four",
    ];
}
