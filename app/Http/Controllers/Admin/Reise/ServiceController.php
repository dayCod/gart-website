<?php

namespace App\Http\Controllers\Admin\Reise;

use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Service\StoreServiceRequest;
use App\Http\Requests\Service\UpdateServiceRequest;

class ServiceController extends Controller
{
    public function index(): View
    {
        $services = Service::reise()->latest()->get();

        return view('admin.pages.reise.service.index', compact('services'));
    }

    public function create(): View
    {
        return view('admin.pages.reise.service.create');
    }

    public function store(StoreServiceRequest $request): RedirectResponse
    {
        Service::create($request->dataTransferObject() + ['type' => self::TYPE_AS_REISE]);

        return redirect()
            ->route('admin.reise.service.index')
            ->with('toastSuccess', 'Service created successfully');
    }

    public function edit(int $id): View
    {
        $service = Service::reise()->where('id', $id)->first();

        return view('admin.pages.reise.service.edit', compact('service'));
    }

    public function update(UpdateServiceRequest $request, int $id): RedirectResponse
    {
        Service::where('id', $id)->update($request->dataTransferObject());

        return redirect()
            ->route('admin.reise.service.index')
            ->with('toastSuccess', 'Service updated successfully');
    }

    public function destroy(int $id): RedirectResponse
    {
        $service = Service::reise()->findOrFail($id);
        $service->delete();

        return redirect()
            ->back()
            ->with('toastSuccess', 'Service deleted successfully');
    }
}
