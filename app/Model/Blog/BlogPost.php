<?php

namespace App\Model\Blog;
use Illuminate\Database\Eloquent\Model;
use Intervention\Image\Facades\Image;

class BlogPost extends Model
{
    protected $fillable=[
        'title_ar',
        'title_en',
        'image',
        'category_id',
        'details_en',
        'details_ar',

        ];


    public function category(){
        return $this->belongsTo(BlogCategory::class);
    }


        public static function saveImage($request){

            if ($request->image){
                $ImageOne = Image::make($request->image);
                $ImageOne->save('public/media/Post/'.date("m.d.y").
                    $request->file('image')->getClientOriginalName());

            }

    }

}
