<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Employee extends Model 
{
    use HasFactory;

    protected $fillable = ['first_name',
                            'last_name',
                            'address',
                            'department_id',
                            'city_id',
                            'state_id',
                            'country_id',
                            'zip_code',
                            'birth_date',
                            'date_hired'];
    public function department(){
        return $this->BelongsTo(Department::class);
    }
    public function city(){
        return $this->BelongsTo(City::class);
    }
    public function state(){
        return $this->BelongsTo(State::class);
    }
    public function country(){
        return $this->BelongsTo(Country::class);
    }
}
