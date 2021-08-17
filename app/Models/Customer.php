<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    public $timestamps = false; //set time to false
    protected $fillable = [
    	'customer_name', 'gender','phone','email'
    ];
    protected $primaryKey = 'customer_id';
 	protected $table = 'tbl_customer';
}
