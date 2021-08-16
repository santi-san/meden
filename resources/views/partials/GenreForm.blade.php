<div class="form-row">
  <div class="form-group col-md-6">
      <label for="name">Name</label>
      <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Progressive House" value="{{ old('name', $genre->name) }}">
      @error('name')
          <div class="invalid-feedback" role="alert">{{ $message }}</div>
      @enderror
  </div>
  <div class="form-group col-md-6">
      <label for="slug">slug</label>
      <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" placeholder="progressive-house" readonly value="{{ old('slug', $genre->slug) }}">
      @error('slug')
          <div class="invalid-feedback" role="alert">{{ $message }}</div>
      @enderror
  </div>
</div>