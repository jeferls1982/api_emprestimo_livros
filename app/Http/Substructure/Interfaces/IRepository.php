<?php
namespace App\Http\Substructure\Interfaces;

use PhpParser\Builder\Interface_;

Interface IRepository {

    public function index();

    public  function store();

    public function show($id);

    public function update($id);

    public function destroy($id);   


}