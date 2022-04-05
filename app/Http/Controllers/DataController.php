<?php

namespace App\Http\Controllers;

use App\Http\Resources\DataResource;
use App\Models\Data;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\AnonymousResourceCollection;
use Illuminate\Http\Response;
use App\Helper\Helper;

class DataController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  Response
     * @return AnonymousResourceCollection
     */
    public function index()
    {
        return DataResource::collection(Data::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return DataResource
     */
    public function store(Request $request)
    {
        $requestData = $request->validated();
        $requestData['page_uid'] = Helper::generateString();

        $data = Data::create($requestData);

        return new DataResource($data);
    }

    /**
     * Display the specified resource.
     *
     * @param  string  $page_uid
     * @return DataResource
     */
    public function show($page_uid)
    {
        return new DataResource(Data::findByPageuid($page_uid));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        //
    }
}
