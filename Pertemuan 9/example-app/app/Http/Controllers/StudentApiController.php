<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class StudentApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Ambil data dari database
        //lalu simpan ke dalam array telebih dahulu
        $data['students'] = Student::all();

        //lalu kita return data array ke API
        return response() -> json($data);
         
    }

    //Menampilkan data siswa melalui API
    //dengan menggunakan parameter id
    public function getById($id){
         
        //Ambil data dari database berdasarkan id,
        //lalu simpan ke dalam array terlebih dahulu 
        $data['students'] = Student::find($id); 

        //Lalu kita return data array ke API
        return response() -> json($data);   
    }

    //Menampilkan data siswa melalui API
    //dengan menggunakan parameter id
    public function getByNim($nim){
         
        //Ambil data dari database berdasarkan nim,
        //lalu simpan ke dalam array terlebih dahulu 
        $data['students'] = Student::where('nim', $nim) -> first(); 

        //Lalu kita return data array ke API
        return response() -> json($data);   
    }

    public function save()
    {
        $student = new Student();
        $student->nim = request('nim');
        $student->name = request('name');
        $student->gender = request('gender');
        $student->departement = request('departement');
        $student->address = request('address');
        $student->save();

        return response() -> json(['message' => "Data berhasil disimpan"]);
    }

    public function update($id)
    {
        $student = Student::find($id);
        $student->nim = request('nim');
        $student->name = request('name');
        $student->gender = request('gender');
        $student->departement = request('departement');
        $student->address = request('address');
        $student->save();

        return response() -> json(['message' => "Data berhasil dirubah"]);
    }

    public function delete($id)
    {
        //Ambil data dari database berdasarkan id
        $student = Student::find($id);

        //Hapus data siswa
        $student->delete();

        return response() -> json(['message' => "Data berhasil dihapus"]);
    }


    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     //
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     // $validateData = FacadesValidator::make($request->all(),[
    //     //     'nim' => 'required|size:8|unique:students,nim',
    //     //     'nama' => 'required|min:3|max:50',
    //     //     'jenis_kelamin' => 'required|in:P,L',
    //     //     'jurusan' => 'required',
    //     //     'alamat' => ' ',
    //     // ]);

    //     // if ($validateData->fails()){
    //     //     return response($validateData->errors(), 400);
    //     // } else {
    //     //     $mahasiswa = new Student();
    //     //     $mahasiswa->nim = $request->nim;
    //     //     $mahasiswa->name = $request->nama;
    //     //     $mahasiswa->gender = $request->jenis_kelamin;
    //     //     $mahasiswa->departement = $request->jurusan;
    //     //     $mahasiswa->address = $request->alamat;
    //     //     $mahasiswa->save();
    //     //     return response()->json([
    //     //         'message' => 'student record created'
    //     //     ], 201);
    //     // }
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     // if(Student::where('id', $id)->exists()){
    //     //     $validateData = FacadesValidator::make($request->all(),[
    //     //         'nim' => 'required|size:8|unique:students,nim',
    //     //         'nama' => 'required|min:3|max:50',
    //     //         'jenis_kelamin' => 'required|in:P,L',
    //     //         'jurusan' => 'required',
    //     //         'alamat' => ' ',
    //     //     ]);
    //     //     if ($validateData->fails()){
    //     //         return response($validateData->errors(), 400);
    //     //     } else {
    //     //         $mahasiswa = Student::find($id);
    //     //         $mahasiswa->nim = $request->nim;
    //     //         $mahasiswa->name = $request->nama;
    //     //         $mahasiswa->gender = $request->jenis_kelamin;
    //     //         $mahasiswa->departement = $request->jurusan;
    //     //         $mahasiswa->address = $request->alamat;
    //     //         $mahasiswa->save();
    //     //         return response()->json([
    //     //             'message' => 'student record created'
    //     //         ], 201);
    //     //     }
    //     // } else {
    //     //     return response()->json([
    //     //         'message' => 'Student not found'
    //     //     ], 404);
    //     // }
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id)
    // {
    //     //
    // }
}
