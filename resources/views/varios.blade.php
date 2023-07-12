{{ "<script>alert('Hola');</script>" }}


@foreach ($info as $infoItem)
    @if ($infoItem->nombre == 'Juan Fran')
        <p>{{ $infoItem->nombre }}, {{ $infoItem->descripcion }} este usuario es JF</p>
    @else
        <p>{{ $infoItem->nombre }}, {{ $infoItem->descripcion }}</p>
    @endif

    @empty($infoItem->descripcion)
        <p>La descripción esta en blanco</p>
    @endempty
@endforeach
