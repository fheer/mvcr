<?php

namespace App\Http\Controllers;

use App\Models\Singer;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use App\Http\Requests\SingerRequest;
use Illuminate\Support\Facades\Redirect;
use Illuminate\View\View;

class SingerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        $singers = Singer::paginate();

        return view('singer.index', compact('singers'))
            ->with('i', ($request->input('page', 1) - 1) * $singers->perPage());
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $singer = new Singer();

        return view('singer.create', compact('singer'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SingerRequest $request): RedirectResponse
    {
        Singer::create($request->validated());

        return Redirect::route('singers.index')
            ->with('success', 'Singer created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $singer = Singer::find($id);

        return view('singer.show', compact('singer'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $singer = Singer::find($id);

        return view('singer.edit', compact('singer'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(SingerRequest $request, Singer $singer): RedirectResponse
    {
        $singer->update($request->validated());

        return Redirect::route('singers.index')
            ->with('success', 'Singer updated successfully');
    }

    public function destroy($id): RedirectResponse
    {
        Singer::find($id)->delete();

        return Redirect::route('singers.index')
            ->with('success', 'Singer deleted successfully');
    }
}
