<?php

namespace App\Http\Controllers\Gart;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use App\Models\Service;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    /**
     * Retrieves the latest 4 galleries and returns a view with them.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $galleries = Gallery::gart()
            ->with('category')
            ->latest()
            ->limit(4)
            ->get();

        $services = Service::gart()->latest()->get();

        return view('gart.index', compact('galleries', 'services'));
    }

    /**
     * Retrieves all categories and returns a view with them.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function categories(): View
    {
        $categories = Category::gart()->latest()->get();

        return view('gart.category.index', compact('categories'));
    }

    /**
     * Retrieves a category by its slug and returns a view with the category and its associated galleries.
     *
     * @param string $slug The slug of the category to retrieve.
     * @return \Illuminate\Contracts\View\View The view with the category and its galleries.
     */
    public function category(string $slug): View
    {
        $category = Category::gart()
            ->with('galleries')
            ->latest()
            ->get()
            ->first(fn ($category) => $category->slug === $slug);

        return view('gart.category.detail', compact('category'));
    }

    /**
     * Retrieves the latest 6 galleries and returns a view with them.
     *
     * @return \Illuminate\Contracts\View\View The view with the latest 6 galleries.
     */
    public function galleries(): View
    {
        $galleries = Gallery::gart()
            ->with('category')
            ->latest()
            ->paginate(6);

        return view('gart.gallery.index', compact('galleries'));
    }

    /**
     * Retrieves a gallery by its slug and returns a view with the gallery and the next gallery.
     *
     * @param string $slug The slug of the gallery to retrieve.
     * @return \Illuminate\Contracts\View\View The view with the gallery and the next gallery.
     */
    public function gallery(string $slug): View
    {
        $gallery = Gallery::gart()
            ->with('category', 'detailGalleries')
            ->latest()
            ->get()
            ->first(fn ($gallery) => $gallery->slug === $slug);

        $nextGallery = Gallery::gart()->where('id', $gallery->id + 1)->first();

        return view('gart.gallery.detail', compact('gallery', 'nextGallery'));
    }
}
