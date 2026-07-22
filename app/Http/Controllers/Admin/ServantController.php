<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Servant;
use App\Http\Requests\StoreServantRequest;
use App\Http\Requests\UpdateServantRequest;

class ServantController extends Controller
{
    public function index()
    {
        $servants = Servant::orderBy('name')->get();

        return view('admin.servants.index', compact('servants'));
    }

    public function create()
    {
        return view('admin.servants.create');
    }

    public function store(StoreServantRequest $request)
    {
        Servant::create($request->validated());

        return redirect()
            ->route('servants.index')
            ->with('success', 'Pelayan berhasil ditambahkan.');
    }

    public function show(Servant $servant)
    {
        //
    }

    public function edit(Servant $servant)
    {
        return view('admin.servants.edit', compact('servant'));
    }

    public function update(UpdateServantRequest $request, Servant $servant)
    {
        $servant->update($request->validated());

        return redirect()
            ->route('servants.index')
            ->with('success', 'Pelayan berhasil diperbarui.');
    }

    public function destroy(Servant $servant)
    {
        $servant->delete();

        return redirect()
            ->route('servants.index')
            ->with('success', 'Pelayan berhasil dihapus.');
    }
}