<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }


    public function home($id)
    {

        return view('admin.pocetna.index', compact('id'));
    }


    public function homeUpdate($id, Request $request)
    {
        $homeText = $this->item->find($id);

        $input = $request->all();

        // upload
        $input['image_file'] = $this->upload('image_file', 'categories', $item);

        $item->update($input);

        return redirect()->route('admin.category.index')->withFlashMessage("<b>{$item->name}</b> updated successfully.")->withFlashType('success');
    }
}
