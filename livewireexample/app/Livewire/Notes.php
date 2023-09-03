<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Note;
class Notes extends Component
{
    public $note ="";
    public $feedback="";


    public function update($id)
    {
        $noteToUpdate = Note::find($id);
        $noteToUpdate->contenido=$this->note;
        $noteToUpdate->save();
        $this->feedback = "Note updated";
    }

    public function store()
    {
        Note::create([
            "contenido" => $this->note
        ]);
        $this->feedback = "Note created";
    }

    public function destroy($id)
    {
        Note::destroy($id);
        $this->feedback = "Note delated";
    }
    public function render()
    {
        $notes = Note::all();
        return view('livewire.note', compact('notes'));
        //  return view('livewire.note');
    }
}