<?php

namespace App\Services;


class DBService {

    public function getAllFromTable($model, array $with) {
        $all = $model->with($with)->get();
        return $all;
    }
    
    public function getAllWithPagination($model, array $with, int $itemsPerPage) {
        $all = $model->with($with)->paginate($itemsPerPage);
        return $all;
    }

    public function store($model, array $data) {

        // Save Image

        foreach($data as $key => $value) {
            $model->$key = $data[$key];
        } 

        $model->save();

        return $model;

    }
    
    public function update($model, array $data, int $id) {

        // Save Image

        $model->find($id);

        foreach($data as $key => $value) {
            $model->$key = $data[$key];
        }

        $model->save();

        return $model;

    }

}

?>