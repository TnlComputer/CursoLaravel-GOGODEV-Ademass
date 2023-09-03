    @extends('layouts.landing')

    @section('title', 'Services')

    @section('content')
    <h1>Services</h1>
    <div class="cards">
        @component('_components.card')
        @slot('tittle', "Services 1")
        @slot('content', 'Loren Ipsum dolor set aimet.')
        @endcomponent

        @component('_components.card')
        @slot('tittle', "Services 2")
        @slot('content', 'Loren Ipsum dolor .')
        @endcomponent

        @component('_components.card')
        @slot('tittle', "Services 3")
        @slot('content', 'Loren Ipsum.')
        @endcomponent
    </div>

    @endsection
