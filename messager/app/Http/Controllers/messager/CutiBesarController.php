<?php

namespace App\Http\Controllers\messager;

use Webpatser\Uuid\Uuid;
use App\Models\CutiBesar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CutiBesarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = CutiBesar::with('users')->get();
        return view('messager.cutiBesar', compact('data'));
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
            'grade' => 'required',
            'hak_cuti' => 'required',
            'mulai_tgl' => 'required',
            'sudah' => 'required',
            'akan' => 'required',
            'sisa' => 'required',
            'no_hp' => 'required',
            'alamat' => 'required',
            'ttd_image' => 'required',
        ]);

        $cutiBesar = [
            'id' => Uuid::generate(),
            'user_id' => $request->user_id,
            'nip' => $request->nip,
            'nama_lengkap' => $request->nama_lengkap,
            'bagian' => $request->bagian, 
            'grade' => $request->grade, 
            'hak_cuti' => $request->hak_cuti, 
            'mulai_tgl' => $request->mulai_tgl, 
            'sampai_tgl' => $request->sampai_tgl, 
            'sudah' => $request->sudah, 
            'akan' => $request->akan, 
            'sisa' => $request->sisa, 
            'no_hp' => $request->no_hp, 
            'alamat' => $request->alamat, 
            'ttd_image' => $request->ttd_image, 
        ];

		CutiBesar::create($cutiBesar);
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
        //
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
        $data = CutiBesar::with('users')->findOrFail($id);
        $data->delete();

        return redirect()->route('message_cutiBesar.index');
    }
}
