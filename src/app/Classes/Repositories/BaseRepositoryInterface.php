<?php

namespace App\Classes\Repositories;

interface BaseRepositoryInterface
{
    /**
     * Find data
     * @param $id
     * @return mixed
     */
    public function find($id);

    /**
     * Add data
     * @param $attribute
     * @return mixed
     */
    public function create($attribute);

    /**
     * Update data
     * @param $id
     * @param $attribute
     * @return mixed
     */
    public function update($id, $attribute);

    /**
     * Delete data
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * Get all
     * @return mixed
     */
    public function all();

    /**
     * insert data
     * @param $attribute
     * @return mixed
     */
    public function insert($attribute);
}
