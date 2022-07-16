<?php
namespace App\Http\Substructure\Interfaces;

use Illuminate\Http\Request;
use PhpParser\Builder\Interface_;

Interface IRepository {

    public function index();

    public  function store(Request $request);

    public function show($id);

    public function update($id);

    public function destroy($id);   


}