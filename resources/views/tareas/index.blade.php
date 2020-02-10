@extends ('layouts.app')


@section('content')

    @include ('partials.navbar')

    <main role="main" class="flex-shirink-0">
        <div class="container">

            <h1 class="mt-5">Mis tareas</h1>

        <span><a href="{{route('tareas.create')}}">Nueva Tarea</a></span>

            @if (!empty($tareas))
                @foreach ($tareas as $tarea)
                    <p>{{$tarea->titulo}} - {{$tarea->descripcion}}</p>
                    <a class="btn btn-sm btn-primary" href="{{route('tareas.edit',['id'=> $tarea->id])}}">Editar</a>
                    
                    <form action="{{route('tareas.destroy',$tarea->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Eliminar</button>
                    </form>
                @endforeach
            @endif
        </div>
    </main>


    @include ('partials.footer')

@endsection