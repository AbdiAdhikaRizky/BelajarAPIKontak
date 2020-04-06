<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = \App\Kontak::all();
        if(count($data)>0){
            $res['Messeage'] = "SUCCESS";
            $res['values']   = $data;
            
            return response($res);
        }else{
            $res['message'] = 'EMPTY';
            return response($res);
        }
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
        //
        $nama = $request->input('nama');
        $nomor = $request->input('nomor');

        $data = new \App\Kontak();
        $data->nama = $nama;
        $data->nomor = $nomor;

        if($data->save()){
            $res['message'] = "SUCCESS";
            $res['value'] = $data;
            return response($res);
        }else{
            $res['message'] = "FAILED";
            return response($res);
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
        //
        $data = \App\Kontak::where('id',$id)->get();

        if(count($data)>0){
            $res['message'] = "Success";
            $res['values'] = $data;
            return response($res);
        }else{
            $res['message'] = "Failed";
            return response($res);
        }
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
        //
        $nama = $request->input('nama');
        $nomor = $request->input('nomor');
        $data =\App\Kontak::where('id',$id)->first();
        $data->nama = $nama;
        $data->nomor = $nomor;

        if($data->save()){
            $res['message'] = "SUCCESS";
            $res['value'] = $data;
            return response($res);
        }else{
            $res['message'] = "FAILED";
            return response($res);
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
        $data = \App\Kontak::where('id',$id)->first();
        if($data->delete()){
            $res['message'] = "SUCCSESS";
            $res['value'] = $data;
            return response($res);
        }else{
            $res['message'] = "FAILED";
            return response($res);
        }
    }
}
