<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GroupData extends Model
{
    use HasFactory;
    public $table = "group_data";


    protected $fillable = [
        'group_id', 'team_name', 'fullname', 'birth', 'line_id', 'phone_no', 'competition_type', 'cv_file', 'payment_file', 'regist_date'
    ];

    public function group_data(){
        return $this->belongsTo(Group::class, 'group_id');
    }
}
