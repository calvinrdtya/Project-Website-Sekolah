<?php

namespace App\Http\Controllers;
use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mengambil data siswa
        $teacher = Teacher::all();
        
        //mengirim data student ke view siswa
        return view('guru', [
            'title' => 'guru',
            'guru' => $teacher
        ]);
    }
    public function tambah()
    {
        return view ('guru_tambah');
    }
    public function simpan(Request $request){
        $this->validate($request,[
            'id' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'mapel' => 'required',
            'foto' => 'required'
        ]);

        Teacher::create([
            'id' => $request->id,
            'nama' => $request->nama,
            'jenis_kelamin' => $request->jenis_kelamin,
            'alamat' => $request->alamat,
            'mapel' => $request->mapel,
            'foto' => $request->foto
        ]);
        return redirect("/guru.guru");

    }
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('guru_edit', [
            'title' => 'guru',
            'guru' => $teacher
        ]);
    }
    public function update($id, Request $request){
        $this->validate($request,[
            'id' => 'required',
            'nama' => 'required',
            'jenis_kelamin' => 'required',
            'alamat' => 'required',
            'mapel' => 'required',
            'foto' => 'required'
        ]);

        $teacher = Teacher::find($id);
        $teacher->id = $request->id;
        $teacher->nama = $request->nama;
        $teacher->alamat = $request->alamat;
        $teacher->mapel = $request->mapel;
        $teacher->foto = $request->foto;
        $teacher->save();

        return redirect('/guru');
    }
    public function delete($id)
    {
        $teacher = Teacher::find($id);
        $teacher->delete();

        return redirect('/guru');
    }

}