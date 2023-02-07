<?php

namespace App\Http\Livewire\Stuff;

use Livewire\Component;
use Smalot\PdfParser\Parser;

class PlansPage extends Component
{

    public $file;
    public $text, $matches;

    public function export()
    {
        $filePath = public_path('fiche_controle_54554.pdf');
        $parser = new Parser();
        $pdf = $parser->parseFile($filePath);
        $this->text = $pdf->getText();

        preg_match('/Nom Rue\s*:\s*([\w\s]+) Ad/',$this->text,$this->matches);
    }

    public function render()
    {
        return view('livewire.stuff.plans-page')->layout('layouts.app', ['title' => 'Plans']);
    }
}
