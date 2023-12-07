<?php

namespace App\View\Components;

use Illuminate\View\Component;

class map extends Component {
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct() {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render() {
        $initialMarkers = [
            [
                'position' => [
                    'lat' => 17.769910132160778,
                    'lng' => 78.62117428835806
                ],
                'draggable' => true
            ]
        ];
        return view('components.map', compact('initialMarkers'));
    }
}
