<?php

namespace App\Http\Controllers\Reise;

use App\Models\Gallery;
use App\Models\Service;
use App\Models\Category;
use Illuminate\Contracts\View\View;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Retrieves the latest 4 galleries and returns a view with them.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index(): View
    {
        $galleries = Gallery::reise()
            ->with('category')
            ->latest()
            ->limit(4)
            ->get();

        $services = Service::reise()->latest()->get();

        return view('reise.index', compact('galleries', 'services'));
    }

    /**
     * Retrieves all categories and returns a view with them.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function categories(): View
    {
        $categories = Category::reise()->latest()->get();

        return view('reise.category.index', compact('categories'));
    }

    /**
     * Retrieves a category by its slug and returns a view with the category and its associated galleries.
     *
     * @param string $slug The slug of the category to retrieve.
     * @return \Illuminate\Contracts\View\View The view with the category and its galleries.
     */
    public function category(string $slug): View
    {
        $category = Category::reise()
            ->with('galleries')
            ->latest()
            ->get()
            ->first(fn ($category) => $category->slug === $slug);

        return view('reise.category.detail', compact('category'));
    }

    /**
     * Retrieves the latest 6 galleries and returns a view with them.
     *
     * @return \Illuminate\Contracts\View\View The view with the latest 6 galleries.
     */
    public function galleries(): View
    {
        $galleries = Gallery::reise()
            ->with('category')
            ->latest()
            ->paginate(6);

        return view('reise.gallery.index', compact('galleries'));
    }

    /**
     * Retrieves a gallery by its slug and returns a view with the gallery and the next gallery.
     *
     * @param string $slug The slug of the gallery to retrieve.
     * @return \Illuminate\Contracts\View\View The view with the gallery and the next gallery.
     */
    public function gallery(string $slug): View
    {
        $gallery = Gallery::reise()
            ->with('category', 'detailGalleries')
            ->latest()
            ->get()
            ->first(fn ($gallery) => $gallery->slug === $slug);

        $nextGallery = Gallery::reise()->where('id', $gallery->id + 1)->first();

        return view('reise.gallery.detail', compact('gallery', 'nextGallery'));
    }
}
