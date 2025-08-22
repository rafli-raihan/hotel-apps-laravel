<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Models\Guest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;


class GuestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $guestDatas = Guest::orderBy('id', 'desc')->get();
        $title = "Data Guest";
        return view("guests.index", compact('guestDatas', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $title = "Tambah Tamu";
        $categories = Categories::orderBy('id', "desc")->get();
        return view("guests.create", compact('title', 'categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $rules = [
            'nama_tamu' => ['required'],
            'check_in' => ['required'],
            'check_out' => ['required'],
            'no_kamar' => ['required', Rule::in(['17A', '17B', '17C', '17D', '17E', '17F'])],
            'email' => ['required', 'email', 'unique:guests'],
            'no_tel' => ['required', 'string', 'unique:guests'],
            'status_tamu' => ['required'],
            'alamat' => ['required'],
            'kebutuhan_khusus' => ['nullable'],
        ];

        $validator = Validator::make($request->all(), $rules);
        if ($validator->fails()) {
            # code...
            return back()->withErrors($validator);
        }
        Guest::create($request->all());
        return redirect()->to("guests");
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
        $edit = Guest::find($id);
        $categories = Categories::all();
        $title = "Ubah Tamu";
        return view('guests.edit', compact('edit', 'title', 'categories'));
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
