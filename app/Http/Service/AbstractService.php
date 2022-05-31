<?php
namespace App\Http\Service;

class AbstractService
{
    protected $model;

    public function index()
    {
        return $this->model::all();
    }

    public function show($id)
    {
        return $this->model::findOrFail($id);
    }

    public function store(array $data)
    {
        return $this->model::create($data);
    }

    public function update(array $data, $id)
    {
        $category = $this->show($id);
        $category->update($data);
        return $category;
    }
}
