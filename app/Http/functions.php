<?php

use App\Category;

if (!function_exists('getParentCategory')) {

    function getParentCategory($id)
    {
        if ($id == 0) {
            return 'Highest Grade';
        }

        $parentCategory = Category::find($id);
        return $parentCategory['name'];
    }    
}

if (!function_exists('getCategoryName'))
{
    function getCategoryName($id)
    {
        $category = Category::find($id);
        return $category['name'];
    }
}

if(!function_exists('insertImage'))
{
    function insertImage($rq)
    {
        $file = $rq->thumbnail;

        $fileName = $file->getClientOriginalName();

        $path = $file->move(base_path('resources/views/posts/images'), $fileName);
        $thumbnail = 'resources/views/posts/images/'.$fileName;
        return $thumbnail;
    }
}

if(!function_exists('editImage'))
{
    function editImage($filePath, $rq)
    {   
        $link = is_file(base_path($filePath));
        if($link) {
            unlink(base_path($filePath));
            $thumbnail = insertImage($rq);
        } else {
            $thumbnail = insertImage($rq);
        }
        
        return $thumbnail;
    }    

}

if(!function_exists('deleteImage'))
{
    function deleteImage($filePath)
    {   
        $link = is_file(base_path($filePath));
        if($link) {
            unlink(base_path($filePath));
        }      
    }    
}

if(!function_exists('removePTag'))
{
    function removePTag($string)
    {
        $p1 = '<p>';
        $p2 = '</p>';

        $removeP1 = str_replace($p1, '', $string);
        $removeFinal = str_replace($p2, '', $removeP1);

        return $removeFinal;
    }
}
