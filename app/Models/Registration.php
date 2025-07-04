<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Registration extends Model {
    protected $fillable = [
        'FirstName', 'LastName', 'Gender', 'Email', 'Password', 'PhoneNo', 'Course', 'Languages', 'Resume'
    ];
}