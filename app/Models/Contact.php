<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    public $timestamps = false;
    protected $table = 'contacts';
    protected $fillable = ['studID','lastName', 'firstName', 'MI','course','yearlevel'];
    protected $primaryKey = 'studID';
}
