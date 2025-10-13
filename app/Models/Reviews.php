<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;


class Reviews extends Model
{
    use HasUuids;
    //بلت ان من لارفيل وضيفتها تخلي البرايمري كي يكون uuid تلقائيا
// UUID
    public $incrementing = false;
    //وهاي لحتى تخبر لارفيل ان الاي دي  البرايمري كي يعني مش رقم متزايد عرفنها بفولس
    protected $keyType = 'string';
    //وهون لحتى نقير الاي دي بدل انتجر يصير سترينق لان اليويو اي دي سترنق  من 36 حرف
//table
    protected $table = 'reviews';
    //عرفنا اسم الجدول في قاعدة البياات
// fillable fields-> حقول مسموح للمسخدم تعبئتها
    protected $fillable = [
        'content',
        'book_id',
        'author',
    ];
    //علاقة بين الجدولين بوك والريفيو كل رفيو بكتاب واحد
    public function book()
    {
        return $this->belongsTo(Book::class);
    }
    //relations
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
