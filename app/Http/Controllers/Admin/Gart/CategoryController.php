<?php

namespace App\Http\Controllers\Admin\Gart;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Services\ImageService;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;
use Illuminate\Http\RedirectResponse;
use App\Http\Requests\Category\StoreCategoryRequest;
use App\Http\Requests\Category\UpdateCategoryRequest;

class CategoryController extends Controller
{
    /**
     * Display a listing of the categories.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $categories = Category::gart()->get();

        return view('admin.pages.gart.category.index', compact('categories'));
    }

    /**
     * Show the form for creating a new category.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create(): View
    {
        return view('admin.pages.gart.category.create');
    }

    /**
     * Store a newly created category in storage.
     *
     * @param \App\Http\Requests\Category\StoreCategoryRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(StoreCategoryRequest $request): RedirectResponse
    {
        $categoryDTO = $request->dataTransferObject();
        $imageService = new ImageService(
            imageRequest: $categoryDTO['image'],
            storeToFolder: 'images/gart/category',
            imageName: date('dmyHis'),
        );

        $categoryDTO['image'] = $imageService->executeSingleImage();

        Category::create($categoryDTO + ['type' => self::TYPE_AS_GART]);

        return redirect()
            ->route('admin.gart.category.index')
            ->with('toastSuccess', 'Category created successfully');
    }

    /**
     * Show the form for editing the specified category.
     *
     * @param int $id The ID of the category to edit.
     * @return \Illuminate\Contracts\View\View The view for the category edit form.
     */
    public function edit(int $id): View
    {
        $category = Category::gart()->where('id', $id)->first();

        return view('admin.pages.gart.category.edit', compact('category'));
    }

    /**
     * Update the specified category.
     *
     * @param \App\Http\Requests\Category\UpdateCategoryRequest $request
     * @param int $id The ID of the category to update.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UpdateCategoryRequest $request, int $id): RedirectResponse
    {
        $categoryDTO = $request->dataTransferObject();
        $category = Category::find($id);

        if (!is_null($categoryDTO['image'])) {
            $imageService = new ImageService(
                imageRequest: $categoryDTO['image'],
                storeToFolder: 'images/gart/category',
                imageName: date('dmyHis'),
            );

            $categoryDTO['image'] = $imageService->executeSingleImage();
        } else {
            $categoryDTO['image'] ??= $category->image;
        }

        $category->update($categoryDTO);

        return redirect()
            ->route('admin.gart.category.index')
            ->with('toastSuccess', 'Category updated successfully');
    }

    /**
     * Delete the specified category.
     *
     * @param int $id The ID of the category to delete.
     * @return \Illuminate\Http\RedirectResponse A redirect response to the previous page with a success message.
     */
    public function destroy(int $id): RedirectResponse
    {
        $category = Category::find($id);
        $category->delete();

        return redirect()
            ->back()
            ->with('toastSuccess', 'Category deleted successfully');
    }
}
