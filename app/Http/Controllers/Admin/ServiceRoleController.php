<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\ServiceRole;
use App\Http\Requests\StoreServiceRoleRequest;
use App\Http\Requests\UpdateServiceRoleRequest;

class ServiceRoleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $serviceRoles = ServiceRole::orderBy('name')->get();

        return view('admin.service-roles.index', compact('serviceRoles'));
    }

    public function create()
    {
        return view('admin.service-roles.create');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreServiceRoleRequest $request)
    {
        ServiceRole::create($request->validated());

        return redirect()
            ->route('service-roles.index')
            ->with('success', 'Jabatan pelayanan berhasil ditambahkan.');
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
    public function edit(ServiceRole $serviceRole)
    {
        return view('admin.service-roles.edit', compact('serviceRole'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateServiceRoleRequest $request, ServiceRole $serviceRole)
    {
        $serviceRole->update($request->validated());

        return redirect()
            ->route('service-roles.index')
            ->with('success', 'Jabatan pelayanan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ServiceRole $serviceRole)
    {
        $serviceRole->delete();

        return redirect()
            ->route('service-roles.index')
            ->with('success', 'Jabatan pelayanan berhasil dihapus.');
    }
}
