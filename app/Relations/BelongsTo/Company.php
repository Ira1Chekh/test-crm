<?php


namespace App\Relations\BelongsTo;


trait Company{
    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function company()
    {
        return $this->belongsTo(Company::class,'company_id');
    }
}
