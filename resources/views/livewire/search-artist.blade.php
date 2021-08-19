<div class="form-row">
    
    <div class="form-group col-md-4">
        <label for="artist_id">Artist</label><br>
        <input 
            type="text"
            class="form-control @error('artist_id') is-invalid @enderror" 
            id="buscar"
            name="artist_id"
            placeholder="Search artist"
            wire:model="buscar"
            wire:keydown.enter="asignarPrimero()"
        >
    </div>
    <div class="form-group col-md-8">
        @if(count($artistas)>0)
            <label for="artist_id">Select artist</label>
            <select class="form-control" id="artist_id">
            @if(!$picked)
                @foreach ($artistas as $artista)
                    <option value="{{$artista->id}}" {{old('artist_id', $artista->name) == $artista->name ? 'selected' : ''}}>{{$artista->name}}</option>
                @endforeach
            @endif
            </select>
        @endif
    </div>
</div>