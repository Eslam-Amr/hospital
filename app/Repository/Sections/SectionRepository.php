<?php

namespace App\Repository\Sections;

use App\Models\Section;
use App\Interfaces\Sections\SectionRepositoryInterface;

class SectionRepository implements SectionRepositoryInterface
{
    public function index()
    {
        $sections = Section::all();
        return view('dashboard.sections.index', get_defined_vars());
    }
    public function store($request)
    {
        Section::create([
            'name' => $request->name
        ]);
        session()->flash('add');
        return redirect()->route('sections.index');
    }
    public function update($request)
    {

        $section = Section::findOrFail($request->id);
        $section->update([
            'name' => $request->name
        ]);
        session()->flash('edit');
        return redirect()->route('sections.index');
    }
    public function destroy($request)
    {
        Section::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('sections.index');
    }
}
