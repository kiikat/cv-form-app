<?php

namespace App\Http\Controllers;

use App\Models\cv;
use App\Http\Requests\StorecvRequest;
use App\Http\Requests\UpdatecvRequest;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class CvController extends Controller
{

    public function index() : View
    {
        return view('cvs.index', [
            'cvs' => cv::latest()->paginate(4)
        ]);
    }

    public function create() : View
    {
        return view('cvs.create');
    }


    public function store(StoreCvRequest $request) : RedirectResponse
    {

        Cv::create($request->validated());
        return redirect()->route('cvs.index')
                ->withSuccess('Cv has been added successfully.');

    }

    public function show(Cv $cv) : View
    {
        return view('cvs.show', compact('cv'));
    }


    public function edit(Cv $cv) : View
    {
        return view('cvs.edit', compact('cv'));
    }

    public function update(UpdateCvRequest $request, Cv $cv) : RedirectResponse
    {
        $cv->update($request->validated());

        return redirect()->back()
                ->withSuccess('Your cv has been updated successfully.');
    }

    public function destroy(Cv $cv) : RedirectResponse
    {
        $cv->delete();

        return redirect()->route('cvs.index')
                ->withSuccess('Cv has been deleted successfully.');
    }
}