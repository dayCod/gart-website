<?php

namespace App\Http\Controllers\Gart;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Gallery;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * @return View
     */
    public function index(): View
    {
        $galleries = Gallery::gart()
            ->with('category')
            ->latest()
            ->limit(4)
            ->get();

        return view('gart.index', compact('galleries'));
    }

    /**
     * @return View
     */
    public function categories(): View
    {
        $categories = Category::gart()->latest()->get();

        return view('gart.category.index', compact('categories'));
    }

    /**
     * @return View
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
     * @return View
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
     * @return View
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
