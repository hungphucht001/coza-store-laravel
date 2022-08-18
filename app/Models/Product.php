<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'price',
        'slug',
    ];
    public function menu()
    {
        return $this->hasOne(Menu::class, 'id', 'menu_id')
            ->withDefault(['name' => '']);
    }
    public function images()
    {
        return $this->hasMany(Image::class, 'product_id', 'id');
    }
    public function sizes()
    {
        return $this->hasMany(Size::class, 'product_id', 'id');
    }
    public function colors()
    {
        return $this->hasMany(Color::class, 'product_id', 'id');
    }
}
