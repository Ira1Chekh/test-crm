<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Events\CompanyCreated;
use Illuminate\Support\Facades\Mail;

class Company extends Model
{
    protected $fillable = ['id','name', 'email', 'website'];

    use Relations\HasMany\Employee;
}
