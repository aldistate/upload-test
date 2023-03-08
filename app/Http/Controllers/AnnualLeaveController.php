<?php

namespace App\Http\Controllers;

use App\Models\Cuti;
use Illuminate\Http\Request;

class AnnualLeaveController extends Controller
{
    public function index()
    {
        $cuti = Cuti::all();

        return response()->json(['cuti' => $cuti], 200);
    }

    public function create(Request $request)
    {
        $cuti = new Cuti;
        $cuti->user_id = $request->user_id;
        $cuti->start_date = $request->start_date;
        $cuti->end_date = $request->end_date;
        $cuti->description = $request->description;
        $cuti->status = false;
        $cuti->save();

        return response()->json(['message' => 'Cuti request created successfully'], 201);
    }

    public function show($id)
    {
        $cuti = Cuti::find($id);

        if (!$cuti) {
            return response()->json(['message' => 'Cuti request not found'], 404);
        }

        return response()->json(['cuti' => $cuti], 200);
    }
}
