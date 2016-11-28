<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\NewsRequest;
use App\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Skippaz\Services\UploadService;
use App\Skippaz\Admin\AdminTrait;

class NewsController extends Controller
{
    use UploadService;
    use AdminTrait;

    public function index()
    {
        $items = News::all();

        return view('admin.news.index', compact('items'));
    }

    public function add()
    {
        return view('admin.news.create');
    }

    public function store(NewsRequest $request)
    {
        $input = $request->all();

        // upload
        $input['main_image'] = $this->upload('main_image', 'img/gallery');

        News::create($input);

        return redirect()->route('admin.news')->withFlashMessage("Insert image successfully.")->withFlashType('success');
    }

    public function delete($id)
    {
        News::destroy($id);

        return redirect()->route('admin.news')->withFlashMessage("Delete image successfully.")->withFlashType('success');
    }
}
