<?php

namespace App\Http\Controllers;

use App\Models\User;
use Webpatser\Uuid\Uuid;
use Illuminate\Support\Str;
use Illuminate\Http\Request;


class AuthController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'nip', 
            'nama_lengkap', 
            'bagian', 
            'ttd_image'
        ]);

        $file = $request->file('ttd_image');
		$fileName = time() . '.' . $file->getClientOriginalExtension();
		$file->storeAs('public/ttd_images', $fileName);

		// $profile = new User();

        // $profile->id = Uuid::generate();
        // $profile->nip = $request->get('nip');
        // $profile->nama_lengkap = $request->get('nama_lengkap');
        // $profile->bagian = $request->get('bagian');
        // $profile->ttd_image = $request->get('ttd_image');

        $profileData = [
            'id' => Uuid::generate(),
            'nip' => Str::upper($request->nip), 
            'nama_lengkap' => Str::upper($request->nama_lengkap), 
            'bagian' => $request->bagian, 
            'ttd_image' => $fileName, 
        ];

		User::create($profileData);
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
        //
    }
}
