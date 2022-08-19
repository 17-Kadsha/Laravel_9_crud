<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ebook extends Model
{
   

    protected $table = 'ebooks';
    protected $primaryKey = 'id';
    protected $fillable = 
    [
        'book_title',
        'author',
        'description'
    ]; 

}
