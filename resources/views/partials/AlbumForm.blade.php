<div class="form-row">
    <div class="form-group col-md-6">
        <label for="name">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Let It Be" value="{{ old('name', $album->name) }}">
        @error('name')
            <div class="invalid-feedback" role="alert">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label for="slug">slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="let-it-be" readonly value="{{ old('slug', $album->slug) }}">
        @error('slug')
            <div class="invalid-feedback" role="alert">{{ $message }}</div>
        @enderror
    </div>
</div>
<div >
        {{-- Artist --}}
        <livewire:search-artist />
</div>
<div class="form-row">

    <div class="form-group col-md-4">
        <label for="catalog">catalog</label>
        <input type="text" class="form-control @error('catalog') is-invalid @enderror" id="catalog" name="catalog" placeholder="CB00E15" value="{{ old('catalog', $album->catalog) }}">
        @error('catalog')
            <div class="invalid-feedback" role="alert">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-2">
        <label for="released_at">Release date</label>
        <input type="date" class="form-control @error('released_at') is-invalid @enderror" id="released_at" name="released_at" value="
        {{ old('released_at', $album->released_at) }}">
        @error('released_at')
            <div class="invalid-feedback" role="alert">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-row my-3">
    <div class="col-md-2">
        <label for="format">Format</label><br>
        <div class="custom-control custom-radio custom-control-inline">
            <input class="custom-control-input 
                @error('format') is-invalid @enderror" 
                type="radio" 
                name="format" 
                id="format1" 
                value="Album"  
                {{ (old('format', $album->format) == 'Album') ? 'checked' : ''}}>
            <label class="custom-control-label" for="format1">Album</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input class="custom-control-input 
                @error('format') is-invalid @enderror" 
                type="radio" 
                name="format" 
                id="format2" 
                value="Single"  
                {{ (old('format', $album->format) == 'Single') ? 'checked' : ''}}>
            <label class="custom-control-label" for="format2">Single</label>
        </div>
        <div class="custom-control custom-radio custom-control-inline">
            <input class="custom-control-input 
                @error('format') is-invalid @enderror" 
                type="radio" 
                name="format" 
                id="format3" 
                value="Ep"  
                {{ (old('format', $album->format) == 'Ep') ? 'checked' : ''}}>
            <label class="custom-control-label" for="format3">Ep</label>
            
        </div>
        @error('format')
            <div class="text-danger" role="alert">
                <small>{{ $message }}</small>
            </div>
        @enderror
    </div>
</div>
<div class="form-row">

    
</div>
<div class="form-group">
    <label for="tracklist">Tracklist</label>
    <textarea class="form-controlf @error('tracklist') is-invalid @enderror" id="tracklist" name="tracklist" rows="3">{{ old('tracklist', $album->tracklist) }}</textarea>
    @error('tracklist')
        <div class="invalid-feedback" role="alert">{{ $message }}</div>
    @enderror
</div>
<div class="form-row">
    <div class="col-auto">
        <div class="image-wrapper">
                <img id="img" src="
                @if (is_null($album->image)) 
                    {{Storage::url('background-light.png')}}
                @else
                    {{Storage::url($album->image->url)}}
                @endif 
                " alt="">
        </div>
    </div>
    <div class="col">
        <label for="file">Select image cover</label>
        <input type="file" class="form-control-file" id="file" name="file"  accept="image/png, image/jpeg">
        @error('file')
            <div class="text-danger" role="alert">
                <small>{{ $message }}</small>
            </div>
        @enderror
        <ul class="list-unstyled ">
            <li>The image should be png or jpeg</li>
            <li>The image should be with a size of 300x300 and not bigger than 600x600 to keep the aspect ratio</li>
        </ul>
    </div>
</div>