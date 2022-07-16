<?php

namespace App\Http\Substructure\Repositories;

use Illuminate\Http\Request;


class BaseRepository
{






    public function list()
    {
        $collection = $this->setFilters();
        return  $this->resource::collection($collection);
    }

    public function store($values = null)
    {
        $values = $values ?? request()->all();
        return new $this->resource(($this->model::create($values)));
    }

    public function find($id)
    {
        if(request()['with']){
            return new $this->resource(($this->model::with(request()['with'])->find($id)));
        }
        return new $this->resource(($this->model::find($id)));
    }

    public function update($id)
    {
        $this->model::where('id', $id)->update(request()->all());
        return new $this->resource($this->model::find($id));
    }


    public function destroy($id)
    {
        $this->model::destroy($id);
        return response()->json("Deleted", 200);
    }




    public function setFilters()
    {
        $returnable = '$func = $this->model::';

        $returnable = $this->setWith($returnable);
        $returnable = $this->setOrder($returnable);
        $returnable = $this->setPaginate($returnable);

        //dd($returnable);

        eval('$func =  ' . $returnable . ';');
        return $func;
    }


    public function setOrder(string $string)
    {
        $orderBy =  $this->orderBy ?? null;
        $orderByType =  $this->orderByType ?? null;

        $with = request()['with'] ?? null;
        $seta = $with ? "->" : "";
        if ($orderBy && $orderByType) {
            //return $this->model::orderBy($orderBy, $orderByType)->paginate();
            return $string . $seta . "orderBy('" . $orderBy . "','". $orderByType."')";
        } elseif ($orderBy && !$orderByType) {
            //return $this->model::orderBy($orderBy)->paginate();

            return $string . $seta . "orderBy('" . $orderBy . "')";
        }
        return $string;
    }

    public function setPaginate(string $string)
    {
        $paginate = request()['paginate'] ?? null;
        $with = request()['with'] ?? null;



        if ($paginate) {
            $string = $string . $this->getSeta() . "paginate(" . $paginate . ")";
        } else {
            $string = $string . $this->getSeta() . "get()";
        }
        return $string;
    }





    public function setWith(string $string)
    {
        $with = request()['with'] ?? null;
        if ($with) {
            $total = count($with);
            $i = 1;
            $items_with = "";
            foreach ($with as $w) {
                if ($w) {
                    $items_with = $items_with . "'" . $w . "'" . $this->setVirgula($i, $total) . "";
                } else {
                    dd("parametros invalidos para with");
                }
                $i++;
            }
            $string = $string . "with(" . $items_with . ")";
        }
        return $string;
    }

    public function getSeta()
    {
        $orderBy =  $this->orderBy ?? null;
        $with = request()['with'] ?? null;
        return  $with || $orderBy ? "->" : "";
    }

    public function setVirgula(int $i, int $total)
    {
        if ($i < $total) {
            return ",";
        } else {
            return "";
        }
    }
}
