<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    use HasFactory;

    public function customer()
    {
        return $this->belongsToMany(Customer::class, "customers_appointments");
    }

    public function pet()
    {
        return $this->belongsTo(Pet::class);
    }

    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }
}