<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Http\Requests\ApiListRequest;
use Illuminate\Support\Arr;
use App\Http\Resources\MonsterListResource;
use App\Http\Resources\MonsterResource;

class APIController extends Controller
{
    public function list(ApiListRequest $request)
    {
        $validated = $request->validated();

        $limit = Arr::get($validated, 'limit', 100);
        $offset = Arr::get($validated, 'offset', 0);

        return response()->json(
            $this->list_resource_class::collection(
                $this->model_class
                    ::skip($offset)
                    ->take($limit)
                    ->get()
            )
        );
    }

    public function retrieve(int $id)
    {
        $resource_class = "App\Http\Resources\\{$this->model_class}Resource";

        return response()
            ->json(
                new $this->resource_class(
                    $this->model_class::find($id)
                )
            );
    }
}
