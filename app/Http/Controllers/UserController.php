<?php

namespace App\Http\Controllers;

use App\Models\DummyData;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        return view('users.index');
    }
    

    public function getUsers(Request $request)
    {
        $columns = ['id', 'name', 'email', 'created_at'];
        $query = DummyData::select($columns);
        foreach ($request->input('columns') as $key => $column) {
            $searchValue = $column['search']['value'];
            if ($searchValue) {
                $columnName = $columns[$key];
                $query->where($columnName, 'like', '%' . $searchValue . '%');
            }
        }
        $totalRecords = $query->count();
        $start = $request->input('start', 0);
        $length = $request->input('length', 10);
        $data = $query->offset($start)->limit($length)->get();
        return response()->json([
            'draw'            => $request->input('draw'),
            'recordsTotal'    => $totalRecords, 
            'recordsFiltered' => $totalRecords, 
            'data'            => $data,
        ]);
    }
}
