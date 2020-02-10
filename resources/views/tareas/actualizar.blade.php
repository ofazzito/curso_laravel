@extends ('layouts.app')


@section('content')

    @include ('partials.navbar')

    <main role="main" class="flex-shirink-0">
        <div class="container">

            <h1 class="mt-5">Mis tareas</h1>

        <span><a href="{{route('tareas.index')}}">Regresar</a></span>
        <section class="content">
            <h4>Actualizar tarea</h4>
            @include('tareas._form')
        </section>
        </div>
    </main>


    @include ('partials.footer')

@endsection