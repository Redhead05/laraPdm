<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Team;
use Illuminate\Http\Request;
use Yajra\DataTables\Facades\DataTables;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Team::all();

//            dd($query->toArray());
            $datatables = DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('image', function($row){
                    return $row->image;
                })
                ->addColumn('action', function($row){
                    $editUrl = route('admin.team.edit', $row->id);
                    $deleteUrl = route('admin.team.destroy', $row->id);

                    $btn = '<a href="javascript:" data-id="'.$row->id.'" data-url="'.route('admin.blog.edit', $row->id).'"
                    class="edit btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>';
                    $btn .= ' <a href="javascript:" data-id="'.$row->id.'" data-url="'.$deleteUrl.'" class="delete btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>';

                    return $btn;
                })
                ->rawColumns(['action', 'image'])
                ->setRowId(function ($data) {
                    return $data->id;
                });

            return $datatables->make(true);
        }

        $type_menu = 'dashboard';

        return view('pages.team.team', compact('type_menu'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
