@inject('nomObjet', 'App\Utilities\GetRevision')

@extends("base", ['titre' => 'Page liste'])

@section('vitrine')
    <h3> Bienvenue sur le Lutte - Page Liste</h3>
    {{ $nomObjet->getRevision()}}

    {{-- @push('message_js')
        <script src="js/index.js"></script>
        @endpush --}}
@endsection
