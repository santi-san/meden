<div class="form-group">
    
    <div>
        <label for="buscar">Artist</label><br>
        <input 
            type="text"
            class="form-control @error('buscar') is-invalid @enderror" 
            id="buscar"
            placeholder="Search artist"
            wire:model.debounce.500ms="buscar"
            wire:keydown.enter="asignarPrimero()"
            autocomplete="off"
        >
        <input type="hidden" name="artist_id"
        wire:model="artist_id">
    </div>
        @if(count($artistas)>0)
            @if(!$picked)
                @foreach ($artistas as $artista)
                <div style="display: inline-block; padding-top: 8px">
                        <a href="#" style="cursor: pointer;background: #353535;color: #47bba5;padding:4px 8px;border-radius: 3px;" 
                        wire:click="asignarUsuario({{ $artista->id }}, '{{ $artista->name }}')">{{$artista->name}}</a>
                     
                </div>
            @endforeach
            @endif
        @else
            <small>search the artist of this album</small>
        @endif
</div>
