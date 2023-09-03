<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteFormRequest;
use App\Models\Note;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $notes = Note::all();
        return view ('note.index', compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
         return view ('note.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(NoteFormRequest $request): RedirectResponse
    {
        // $note = new Note;
        // $note->title= $request->title;
        // $note->description= $request->description;
        // $note->save();

        Note::create($request->all());
        return redirect()->route('note.index')->with('success', 'Note created');

    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note): View
    {
        return view('note.show', compact('note'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note): View
    {
        // $myNote = Note::find($note);
        return view('note.edit', compact('note'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(NoteFormRequest $request, Note $note): RedirectResponse
    {
        $note->update($request->all());
        return redirect()->route('note.index')->with('success', 'Note updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note): RedirectResponse
    {
        $note->delete();
        return redirect()->route('note.index')->with('danger', 'Note deleted');
        //
    }
}
