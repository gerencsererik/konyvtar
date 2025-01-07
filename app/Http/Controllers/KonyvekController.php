<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KonyvekController extends Controller
{
    public function index()
    {
        $konyvek = DB::table('konyvek')->get();
        return view('konyvek.index', compact('konyvek'));
    }

    public function create()
    {
        return view('konyvek.create');
    }

    public function store(Request $request)
    {
        DB::table('konyvek')->insert([
            'id' => uniqid(),
            'nev' => $request->nev,
            'iro_szuletesi_eve' => $request->iro_szuletesi_eve,
            'iro_neme' => $request->iro_neme,
            'kiado' => $request->kiado,
            'iro' => $request->iro,
        ]);

        return redirect()->route('konyvek.index')->with('success', 'Könyv hozzáadva!');
    }

    public function edit($id)
    {
        $konyv = DB::table('konyvek')->where('id', $id)->first();
        return view('konyvek.edit', compact('konyv'));
    }

    public function update(Request $request, $id)
    {
        DB::table('konyvek')->where('id', $id)->update([
            'nev' => $request->nev,
            'iro_szuletesi_eve' => $request->iro_szuletesi_eve,
            'iro_neme' => $request->iro_neme,
            'kiado' => $request->kiado,
            'iro' => $request->iro,
        ]);

        return redirect()->route('konyvek.index')->with('success', 'Könyv frissítve!');
    }

    public function destroy($id)
    {
        DB::table('konyvek')->where('id', $id)->delete();
        return redirect()->route('konyvek.index')->with('success', 'Könyv törölve!');
    }
}

