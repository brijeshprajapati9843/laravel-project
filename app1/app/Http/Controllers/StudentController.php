<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Student;
use Exception;
use GuzzleHttp\Psr7\Message;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $student = Student::all();
        return response()->json($student);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try{
            $student = new Student();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->mobile = $request->mobile;
            if($student->save()){
                $response = [
                    'code'=>200,
                    'message'=>'Recored Inserted Successfull.',
                    'status'=>true,
                    'data'=>[
                        'id'=> $student->id
                    ],
                    'error'=> false
                ];
                return response()->json($response);
            }else{
                throw new \Exception();
            }

        }catch(Exception $e){
            $response = [
                'code'=>201,
                'message'=>'Recored Cannot Inserted Successfull.',
                'status'=>false,
                'data'=>[
                     
                ],
                'error'=> $e->getMessage(),
            ];
            return response()->json($response);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $student = Student::find($id);
        return response()->json($student);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try{
            $newStudent = Student::find($id);
            $student = new Student();
            $student->name = $request->name;
            $student->email = $request->email;
            $student->mobile = $request->mobile;

            if($student->save()){
                $response = [
                    'code'=>200,
                    'message'=>'Recored Updated Successfull.',
                    'status'=>true,
                    'data'=> $newStudent,
                    'error'=> false
                ];
                return response()->json($response);
            }else{
                throw new \Exception();
            }

        }catch(Exception $e){
            $response = [
                'code'=>201,
                'message'=>'Recored Cannot Updated Successfull.',
                'status'=>false,
                'data'=>[],
                'error'=> $e->getMessage(),
            ];
            return response()->json($response);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
