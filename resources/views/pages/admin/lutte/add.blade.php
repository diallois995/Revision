@inject('nomObjet', 'App\Utilities\GetRevision')

@extends("base", ['titre' =>
'Page add'])

@section('vitrine')
    <h1>Bienvenue sur Daaray
 Technologie - Page Add</h1>

    {{ $nomObjet->getRevision()}}
{{--
   @push('message_js')
        <script src="js/index.js"></script>
    @endpush --}}
@endsection
