<?php

namespace App\Models\Traits;

trait CRUD {

    public function index(){
       dd("index");
    }

    public function create(){
        dd("create");
    }

    public function store(){
        dd("store");
    }

    public function edit(){
        dd("edit");
    }

    public function update(){
        dd("update");
    }

    public function destroy(){
        dd("destroy");
    }
}
