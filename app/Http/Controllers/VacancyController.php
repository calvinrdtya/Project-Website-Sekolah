<?php

namespace App\Http\Controllers;

use App\Models\Vacancy;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\StoreVacancyRequest;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mengambil data vacancy
        $vacancy = vacancy::all();
        
        //mengirim data vacancy ke view siswa
        return view('vacancy.vacancy', [
            'title' => 'Vacancy',
            'vacancy' => $vacancy
        ]);

        
        
    }


    public function detail($id)
    {
        $vacancy = Vacancy::find($id);
        return response()->json($vacancy);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function tambah()
    {
        return view ('vacancy.add_vacancy',
        ['title' => 'tambah data']);
    }
    public function simpan(Request $request) 
    {
        $this->validate($request,[
            'lowongan' => 'required',
            'perusahaan' => 'required',
            'pendidikan' => 'required',
            'lokasi' => 'required',
            'keahlian' => 'required',
            'kualifikasi' => 'required'
            // 'foto' => 'required'
        ]);

        Vacancy::create([
            'lowongan' => $request->lowongan,
            'perusahaan' => $request->perusahaan,
            'pendidikan' => $request->pendidikan,
            'lokasi' => $request->lokasi,
            'keahlian' => $request->keahlian,
            'kualifikasi' => $request->kualifikasi
            // 'foto' => $request->foto
        ]);

        return redirect("/vacancy");
    }

    public function search(Request $request)
    {
        $lowongan = $request->lowongan;

        $vacancy = DB::table('vacancies')
            ->where('lowongan', 'like', "%" . $lowongan . "%")
            ->paginate(8);

        return view('/vacancy', compact('vacancy'));
    }
    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreVacancyRequest  $request
     * @return \Illuminate\Http\Response
     */
    // public function store(StoreStudentRequest $request)
    // {
    //     //
    // }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\vacancy  $student
     * @return \Illuminate\Http\Response
     */
    // public function show(Student $student)
    // {
    //     //
    // }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vacancy  $student
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

        $vacancy = Vacancy::find($id);
        return view('vacancy.edit_vacancy', [
            'title' => 'Edit Vacancy',
            'vacancy' => $vacancy
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVacancyRequest  $request
     * @param  \App\Models\Vacancy  
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $this->validate($request,
        [
            'lowongan' => 'required',
            'perusahaan' => 'required',
            'pendidikan' => 'required',
            'lokasi' => 'required',
            'keahlian' => 'required',
            'kualifikasi' => 'required'
        ]);

        $vacancy = Vacancy::find($id);
        $vacancy->lowongan = $request->lowongan;
        $vacancy->perusahaan = $request->perusahaan;
        $vacancy->pendidikan = $request->pendidikan;
        $vacancy->lokasi = $request->lokasi;
        $vacancy->keahlian = $request->keahlian;    
        $vacancy->kualifikasi = $request->kualifikasi;    
        $vacancy->save();

        return redirect('/vacancy.vacancy');
    }

    // public function update(Request $request){
    //     $this->validate($request,[
    //         'lowongan' => 'required',
    //         'perusahaan' => 'required',
    //         'pendidikan' => 'required',
    //         'lokasi' => 'required',
    //         'keahlian' => 'required',
    //         'kualifikasi' => 'required'
    //     ]);

    //     $vacancy = Vacancy::find();
    //     $vacancy->lowongan = $request->lowongan;
    //     $vacancy->perusahaan = $request->perusahaan;
    //     $vacancy->pendidikan = $request->pendidikan;
    //     $vacancy->lokasi = $request->lokasi;    
    //     $vacancy->keahlian = $request->keahlian;    
    //     $vacancy->kualifikasi = $request->kualifikasi;   
    //     $vacancy->save();

    //     return redirect('/vacancy.vacancy');
    // }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Student  $student
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $vacancy = Vacancy::find($id);
        $vacancy->delete();

        return redirect('/vacancy');
    }
}
