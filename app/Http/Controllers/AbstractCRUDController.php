<?php

namespace App\Http\Controllers;

class AbstractCRUDController extends Controller
{
    
    protected $service;
    protected $StoreRequestClass;
    protected $UpdateRequestClass;


    public function index()
    {
        $items = $this->service->index();
        return response()->json([
            'items' => $items
        ]);
    }

    public function show($id)
    {
        $item = $this->service->show($id);
        return response()->json([
           'item' => $item
        ]);
    }

    public function store()
    {
        $request = new $this->StoreRequestClass;
        $item = $this->service->store($request->validated());

        return response()->json([
            'item' => $item
        ]);
    }

    public function update($id)
    {
        $request = new $this->UpdateRequestClass;
        $item = $this->service->update($request->validated(), $id);

        return response()->json([
           'item' => $item
        ]);
    }
}