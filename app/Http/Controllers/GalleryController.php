<?php

namespace App\Http\Controllers;

use App\Services\ImageService;
use Illuminate\Http\Request;

class GalleryController extends Controller
{
    private $imageService;
    public function __construct(ImageService $imageService)
    {
        $this->imageService = $imageService;
    }

    public function index()
    {
        $images = $this->imageService->all();

        return view('gallery', ['images' => $images]);
    }
    public function add()
    {
        return view('add');
    }
    public function show($id)
    {
        $image = $this->imageService->one($id);

        return view('show', ['nameImage' => $image->name]);
    }
    public function edit($id)
    {
        $image = $this->imageService->one($id);

        return view('edit', ['image' => $image]);
    }
    public function store(Request $request)
    {
        $image = $request->file('image');
        $this->imageService->create($image);

        return redirect('/');
    }
    public function update(Request $request, $id)
    {
        $image = $request->file('image');
        $this->imageService->update($id, $image);

        return redirect('/');
    }
    public function delete($id)
    {
        $this->imageService->delete($id);

        return redirect('/');
    }
}
