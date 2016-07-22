<?php
/**
 * Created by PhpStorm.
 * User: olhakh
 * Date: 18.07.16
 * Time: 19:57
 */

namespace App\Repositories;

use App\Entities\Post;


class PostRepository
{
    private $model;


    public function __construct(Post $model)
    {
        $this->model = $model;
    }

    public function createPost(array $data)
    {

        return $this->model->create($data);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }
    
    public function delete($id)
    {
        return $this->model->destroy($id);
    }
}