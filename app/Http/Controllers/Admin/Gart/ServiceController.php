<?php

namespace App\Http\Controllers\Admin\Gart;

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
        $services = Service::gart()->latest()->get();

        return view('admin.pages.gart.service.index', compact('services'));
    }

    public function create(): View
    {
        return view('admin.pages.gart.service.create');
    }

    public function store(StoreServiceRequest $request): RedirectResponse
    {
        Service::create($request->dataTransferObject() + ['type' => self::TYPE_AS_GART]);

        return redirect()
            ->route('admin.gart.service.index')
            ->with('toastSuccess', 'Service created successfully');
    }

    public function edit(int $id): View
    {
        $service = Service::gart()->where('id', $id)->first();

        return view('admin.pages.gart.service.edit', compact('service'));
    }

    public function update(UpdateServiceRequest $request, int $id): RedirectResponse
    {
        Service::where('id', $id)->update($request->dataTransferObject());

        return redirect()
            ->route('admin.gart.service.index')
            ->with('toastSuccess', 'Service updated successfully');
    }

    public function destroy(int $id): RedirectResponse
    {
        $service = Service::gart()->findOrFail($id);
        $service->delete();

        return redirect()
            ->back()
            ->with('toastSuccess', 'Service deleted successfully');
    }
}
