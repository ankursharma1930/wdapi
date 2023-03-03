<?php

namespace App\GraphQL\Mutations;

use App\Models\Category;


final class createCategory
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        $parent = isset($args['parent_id']) ? Category::find($args['parent_id']) : null;
        $parent_path = $parent->path;

        // Create new category
        $category = new Category([
            'name' => $args['name'],
            'path'=>$parent_path,
            'parent_id'=>$args['parent_id']
        ]);

        $category->save();
        $saveId = $category->id;
        $newPath = $parent_path."/".$saveId;
        $category->path = $newPath;
        $category->save();
        
        return $category;
        
    }

   
}
