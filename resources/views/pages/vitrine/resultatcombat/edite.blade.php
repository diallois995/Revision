@inject('nomObjet', 'App\Utilities\GetRevision')

@extends("base", ['titre' => 'Page edite'])

@section('vitrine')
    <h3> Page Edite bigua woooo</h3>
    {{ $nomObjet->getRevision()}}

    {{-- @push('message_js')
        <script src="js/index.js"></script>
        @endpush --}}
@endsection
