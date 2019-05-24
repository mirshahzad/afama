<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    // protected $primaryKey = 'CaseNo';
    protected $fillable=['Name', 'Address', 'CNIC', 'Mobile', 'Email', 'Subject', 'AreaName', 'Complain', 'Suggestion', 'Status'];
}
