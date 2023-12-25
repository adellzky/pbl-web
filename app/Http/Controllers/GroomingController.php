<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\GroomingResource;
use Illuminate\Http\Request;
use App\Models\Grooming;

use Illuminate\Support\Facades\Validator;

class GroomingController extends Controller
{
    public function index()
    {
        $groomings = Grooming::all();
        return GroomingResource::collection($groomings);
    }


    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [

            'jenis_hewan' => 'required',
            'nama_hewan' => 'required|max:100',
            'tanggal_pemesanan' => 'required|date',
            'biaya' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        $grooming = Grooming::create($validator->validated());
        return response()->json([
            "message" => "berhasil",
            "data" => new GroomingResource($grooming)
        ]);
    }

    public function update(Request $request, $id_grooming)
    {
        $grooming = Grooming::find($id_grooming);
        if (!$grooming) {
            return response()->json(['message' => 'Grooming not found'], 404);
        }

        $validator = Validator::make($request->all(), [
            'jenis_hewan' => 'required',
            'nama_hewan' => 'required|max:100',
            'tanggal_pemesanan' => 'required|date',
            'biaya' => 'required|numeric',
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $grooming->update($validator->validated());

        return new GroomingResource($grooming);
    }

    public function destroy($id_grooming)
    {
        $grooming = Grooming::find($id_grooming);
        if (!$grooming) {
            return response()->json(['message' => 'Grooming not found'], 404);
        }

        $grooming->delete();

        return response()->json(['message' => 'Grooming deleted successfully']);
    }
}
