<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['id', 'first_name', 'last_name', 'company_id', 'email', 'phone'];

    use Relations\BelongsTo\Company;
}
