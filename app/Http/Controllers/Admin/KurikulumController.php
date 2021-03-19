<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\Admin\KurikulumRequest;
use App\Models\Admin\Kurikulum;

class KurikulumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurikulum = Kurikulum::all();

        return view('pages.admin.curriculum.index')->with([
            'kurikulums' => $kurikulum
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.admin.curriculum.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(KurikulumRequest $request)
    {
        $data = $request->all();

        Kurikulum::create($data);
        return redirect()->route('kurikulums.index');
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
        $kurikulum = Kurikulum::findOrFail($id);

        return view('pages.admin.curriculum.edit', [
            'kurikulum' => $kurikulum
        ]);
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
        $data = $request->all();
        $data['photo'] = $request->file('photo')->store(
            'assets/graduation',
            'public'
        );

        $kurikulum = Kurikulum::findOrFail($id);

        $kurikulum->update($data);

        return redirect()->route('kurikulums.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $kurikulum = Kurikulum::findorFail($id);
        $kurikulum->delete();

        return redirect()->route('kurikulums.index');
    }
}
