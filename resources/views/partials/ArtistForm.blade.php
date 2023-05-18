<div class="form-row">
    <div class="form-group col-md-6">
        <label for="name">Name</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
            placeholder="The beatles" value="{{ old('name', $artist->name) }}">
        @error('name')
        <div class="invalid-feedback" role="alert">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-6">
        <label for="slug">slug</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" readonly
            value="{{ old('slug', $artist->slug) }}">
        @error('slug')
        <div class="invalid-feedback" role="alert">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group">
    <label for="members">members</label>
    <input type="text" class="form-control @error('members') is-invalid @enderror" id="members" name="members"
        placeholder="Ringo Starrfdes" value="{{ old('members', $artist->members) }}">
    @error('members')
    <div class="invalid-feedback" role="alert">{{ $message }}</div>
    @enderror
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label for="country">Country</label>
        <select id="country" name="country" class="form-control custom-select  @error('country') is-invalid @enderror ">
            <option selected disabled>Choose country</option>
            @foreach ($countries as $country)
            <option value="{{$country->name}}" {{old('country', $artist->country) == $country->name ? 'selected' :
                ''}}>{{$country->name}}</option>
            @endforeach
        </select>
        @error('country')
        <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group col-md-2">
        <label for="foundation">Foundation</label>
        <input type="number" class="form-control @error('foundation') is-invalid @enderror" id="foundation"
            name="foundation" min="1700" max="2021" value="{{ old('foundation', $artist->foundation) }}">
        @error('foundation')
        <div class="invalid-feedback" role="alert">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description"
        rows="3">{{ old('description', $artist->description) }}</textarea>
    @error('description')
    <div class="invalid-feedback" role="alert">{{ $message }}</div>
    @enderror
</div>
<div class="form-row">
    <div class="col-auto">
        <div class="image-wrapper">
            <img id="img" src="
            @if (is_null($artist->image)) 
                {{Storage::url('background-light.png')}}
            @else
                {{Storage::url($artist->image->url)}}
            @endif 
            " alt="">
        </div>
    </div>
    <div class="col">
        <label for="file">Select image cover</label>
        <input type="file" class="form-control-file" id="file" name="file" accept="image/png, image/jpeg">
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