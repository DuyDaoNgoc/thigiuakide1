<?php

namespace App\Models;
use app\Http\Controllers\BanhMiHtmlController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BanhMiHtml extends Model
{
    use HasFactory;

    protected $table = 'banh_mi_htmls'; // Bảng đang dùng
    protected $fillable = [
        'name',
        'price',
        'description',
        'image_url',
        'detail_url'
    ];
}