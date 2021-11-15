<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Resources\WorkerResource;
use App\Http\Requests\StoreWorkerRequest;
use App\Models\Worker;

class WorkerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request) /* GET */
    {


        /*         $workers = Worker::all();
        return response()-> json($workers); */

        $page = $request->has('page') ? $request->get('page') : 1;
        $limit = $request->has('limit') ? $request->get('limit') : 5;
        return WorkerResource::collection(Worker::limit($limit)->offset(($page - 1) * $limit)->get());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //NO!
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreWorkerRequest $request)
    {
        // $student = new Student;
        // $student->fname = $request->fname;
        // $student->lname = $request->lname;
        // $student->email = $request->email;
        // $student->password = $request->password;
        // $student->save();
        // return response()->json([
        //     "message" => "Student record created"
        // ], 201);

        return WorkerResource::make(Worker::create($request->validated()));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return WorkerResource::make(Worker::where('id', $id)->firstOrFail());
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //NO
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StoreWorkerRequest $request, $id)
    {

        return WorkerResource::make(Worker::where('id', $id)->update($request->validated()));
/*
        if (Worker::where('id', $id)->exists()) {
            $worker = Worker::find($id);
            $worker->fname = $request->fname;
            $worker->lname = $request->lname;
            $worker->email = $request->email;
            $worker->password = $request->password;
            $worker->save();
            return response()->json([
                "message" => "worker updated successfully"
            ], 200);
        } else {
            return response()->json([
                "message" => "worker not found"
            ], 404);
        } */
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return WorkerResource::make(Worker::where('id', $id)->delete());

    /*     if (Worker::where('id', $id)->exists()) {
            $student = Worker::find($id);
            $student->delete();
            return response()->json([
                "message" => "Student deleted"
            ], 202);
        } else {
            return response()->json([
                "message" => "Student not found"
            ], 404);
        } */
    }
}
