<?php

namespace App\Http\Controllers;

use App\Http\Resources\ApplicationResource;
use App\Models\Bank;
use GuzzleHttp\Psr7\Response;
use Illuminate\Support\MessageBag;
use App\Http\Requests\ApplicationStore;
use Illuminate\Http\Request;
use App\Models\Application;

class ApplicationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return new ApplicationResource(Application::with("bank")->get());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ApplicationStore $request)
    {

        $res = Application::create($request->validated());

        return new ApplicationResource($res);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new ApplicationResource(Application::with("bank")->findOrFail($id));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ApplicationStore $request, $id)
    {
        $res_request = Application::where('id', $id)->get();
        return $res_request[0]->update($request->validated());
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Application::where("id", "=", $id)->delete();
        return response(null, 204);
    }
}
