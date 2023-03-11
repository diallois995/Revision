@inject('nomObjet', 'App\Utilities\GetRevision')

@extends("base", ['titre' => 'Page liste'])

@section('vitrine')
    <h3> Page Liste bigua woooo</h3>
    {{ $nomObjet->getRevision()}}

    {{-- @push('message_js')
        <script src="js/index.js"></script>
        @endpush --}}
@endsection
