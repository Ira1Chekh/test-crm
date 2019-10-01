<?php


namespace App\Relations\HasMany;


trait Employee
{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function employee()
    {
        return $this->hasMany(Employee::class,'id','name');
    }
}
