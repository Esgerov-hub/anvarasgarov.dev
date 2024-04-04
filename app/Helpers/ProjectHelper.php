<?php

namespace App\Helpers;

use App\Models\Category;
use Illuminate\Support\Carbon;
use Illuminate\Support\Str;

class ProjectHelper
{
    public static function saveData($request,$project)
    {
        $text = [];
        $locales = ['az'];
        $category_id = Category::where(['status' => 1, 'id' => $request->category_id])->first();
        if (empty($category_id)){
            return ['messages' => 'Kateqorya tapılmadı.'];
        }
        foreach ($locales as $locale) {
            $text[$locale] = $request->input("text.$locale", '');
        }

        if($request->hasFile('image')){
            $imageName = time().'.'.$request->image->extension();
            $image = $request->image->move(public_path('uploads/project'), $imageName);
            $imageImage = $image->getFilename();
        }else{
            $imageImage = $project->image;
            if ($project == null)
            {
                $imageImage = null;
            }
        }
        $data = [
            'image' => $imageImage,
            'title' => $request->title,
            'text' => $text,
            'category_id' => $category_id['id'],
            'user_id' => auth()->user()->id,
            'status' => 1,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];

        return $data;
    }
}
