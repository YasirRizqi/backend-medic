<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DataMedis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DataMedisController extends Controller
{
    public function index()
    {
        return DataMedis::where('user_id', Auth::id())->get();
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama' => 'required',
            'nomor_riwayat' => 'required|unique:data_medis',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'alamat' => 'required',
            'nomor_hp' => 'required',
            'keluhan' => 'required',
            'diagnosa' => 'nullable',
            'tindakan' => 'nullable',
            'resep_obat' => 'nullable',
            'dokter_penanggung_jawab' => 'required',
            'tanggal_periksa' => 'required|date',
        ]);

        $validated['user_id'] = Auth::id();

        return DataMedis::create($validated);
    }

    public function show($id)
    {
        $data = DataMedis::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        return $data;
    }

    public function update(Request $request, $id)
    {
        $data = DataMedis::where('id', $id)->where('user_id', Auth::id())->firstOrFail();

        $data->update($request->all());

        return $data;
    }

    public function destroy($id)
    {
        $data = DataMedis::where('id', $id)->where('user_id', Auth::id())->firstOrFail();
        $data->delete();

        return response()->json(['message' => 'Deleted']);
    }
}

