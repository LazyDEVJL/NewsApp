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

if (!function_exists('getCategoryColumn'))
{
    function getCategoryColumn($id, $key)
    {
        $category = Category::find($id);

        switch($key)
        {
            case 'name':
                return $category['name'];
                break;
            case 'slug':
                return $category['slug'];
            break;
        }
    }
}

if(!function_exists('insertImage'))
{
    function insertImage($rq)
    {
        $file = $rq->thumbnail;

        $fileName = $file->getClientOriginalName();

        $file->move(base_path('resources/views/admin/posts/images'), $fileName);
        $thumbnail = 'resources/views/admin/posts/images/'.$fileName;
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

if(!function_exists('getIconByCategorySlug'))
{
    function getIconBySlug($slug)
    {
        $class = '';
        switch ($slug)
        {
            case 'mobile':
                $class = 'fa-mobile-alt';
                break;
        }

        return $class;
    }
}
