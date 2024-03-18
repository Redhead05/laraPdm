<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TeamRequest;
use App\Models\Team;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Yajra\DataTables\Facades\DataTables;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     */
        public function index(Request $request)
    {
        if ($request->ajax()) {
            $query = Team::orderBy('created_at', 'desc')->get();

//            dd($query->toArray());
            $datatables = DataTables::of($query)
                ->addIndexColumn()
                ->addColumn('image', function($row){
                    return $row->image;
                })
                ->addColumn('action', function($row){
                    $editUrl = route('admin.team.edit', $row->id);
                    $deleteUrl = route('admin.team.destroy', $row->id);

                    $btn = '<a href="javascript:" data-id="'.$row->id.'" data-url="'.route('admin.team.edit', $row->id).'"
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
    public function store(TeamRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['image'] = $request->hasFile('image') ? (new Team)
            ->uploadImage($request->file('image')) : null;

        Team::create(array_merge($validatedData, ['slug' => Str::slug($validatedData['name'])]));

        return redirect()->route('admin.team.index');
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
        $team = Team::findOrFail($id);
//        dd($team->toArray());
        $data = [
            'team' => $team,
        ];
        return response()->json($data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(TeamRequest $request, string $id)
    {
        $team = Team::findOrFail($id);

        $validatedData = $request->validated();
        $validatedData['image'] = $request->hasFile('image') ? $team->uploadImage($request->file('image')) : $team->image;

        $team->update(array_merge($validatedData, ['slug' => Str::slug($validatedData['name'])]));

        return redirect()->route('admin.team.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
