<?php

namespace App\Http\Controllers\messager;

use Webpatser\Uuid\Uuid;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Ijin;

class IjinController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Ijin::with('users')->get();
        return view('messager.ijin', compact('data'));
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
        $this->validate($request, [
            'user_id' => 'required',
            'nip' => 'required',
            'nama_lengkap' => 'required',
            'bagian' => 'required',
            'hari' => 'required',
            'tanggal' => 'required',
            'keperluan' => 'required',
        ]);

        $ijinData = [
            'id' => Uuid::generate(),
            'user_id' => $request->user_id,
            'nip' => $request->nip,
            'nama_lengkap' => $request->nama_lengkap,
            'bagian' => $request->bagian, 
            'hari' => $request->hari, 
            'tanggal' => $request->tanggal, 
            'keperluan' => $request->keperluan, 
            // 'ttd_image' => $request->ttd_image, 
        ];

		Ijin::create($ijinData);
		return response()->json([
			'success' => 200,
		]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Ijin::with('users')->findOrFail($id);
        $data->delete();

        return redirect()->route('message_ijin.index');
    }
}
