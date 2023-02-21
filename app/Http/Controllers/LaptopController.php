<?php

namespace App\Http\Controllers;

use App\Models\Laptop;
use Illuminate\Http\Request;

class LaptopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $dashboards = Laptop::latest()->paginate(5);

        return view('dashboard.index' , compact('dashboards'))
        ->with('i', (request()->input('page', 1) -1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('dashboard.create');
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
        $validateDate = $request->validate([
            'nama_mobil' => 'required',
            'nama_peminjam' => 'required',
            'no_mobil' => 'required',
            'image' => 'image|file',

            'tanggal_peminjaman' => 'required'
        ]);
        if ($request->file('image')) {
            $validateDate['image'] = $request->file('image')->store('project-images');
        };
        Laptop::create($validateDate);
            return redirect()->route('dashboard.index')
                ->with('success', 'Berhasil Menyimpan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Laptop  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function show(Laptop $dashboard)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Laptop  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function edit(Laptop $dashboard)
    {
        //

        return view('dashboard.edit' ,compact('dashboard'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Laptop  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Laptop $dashboard)
    {
        //
        $request->validate([
            'tanggal_di_kembalikan' => 'required'
        ]);

        $dashboard->update($request->all());
            return redirect()->route('dashboard.index')->with('success', 'Berhasil Menyimpan');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Laptop  $dashboard
     * @return \Illuminate\Http\Response
     */
    public function destroy(Laptop $dashboard)
    {
        $dashboard->delete();
         return redirect()->route('dashboard.index')
                ->with('success', 'berhasil!');

    }
}
