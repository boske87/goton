<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests\ProfMainRequest;
use App\ProfMain;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Skippaz\Services\UploadService;
use App\Skippaz\Admin\AdminTrait;

class ProfController extends Controller
{
    use UploadService;
    use AdminTrait;

    public function index()
    {
        $items = ProfMain::all();
        return view('admin.prof.index', compact('items'));

    }

    public function add()
    {
        return view('admin.prof.add');
    }


    public function store(ProfMainRequest $request)
    {
        $input = $request->all();

        // upload
        $input['main_image'] = $this->upload('main_image', 'img/gallery');

        ProfMain::create($input);

        return redirect()->route('admin.prof')->withFlashMessage("Insert image successfully.")->withFlashType('success');
    }

    public function edit($id){

        $item = ProfMain::find($id);
        return view('admin.prof.edit', compact('id','item'));

    }

    public function update($id, Request $request)
    {
        $homeText = ProfMain::find($id);

        $input = $request->all();

        // upload
        if(isset($input['main_image']))
            $input['main_image'] = $this->upload('main_image', 'img/gallery');

        $homeText->update($input);

        return redirect()->route('admin.prof', '1')->withFlashMessage("Updated successfully.")->withFlashType('success');
    }

    public function view($id)
    {
        $prof = ProfMain::find($id);

        return view('admin.prof.add', compact('prof'));
    }

    public function delete($id)
    {
        ProfMain::destroy($id);

        return redirect()->route('admin.prof')->withFlashMessage("Delete image successfully.")->withFlashType('success');
    }
}
