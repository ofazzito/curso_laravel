@extends ('layouts.app')


@section('content')

    @include ('partials.navbar')

    <main role="main" class="flex-shirink-0">
        <div class="container">

            <h1 class="mt-5">Mis tareas</h1>

            @if (!empty($tareas))
                @foreach ($tareas as $tarea)
                    <p>{{$tarea->titulo}} - {{$tarea->descripcion}}</p>
                @endforeach
            @endif
        </div>
    </main>


    @include ('partials.footer')

@endsection