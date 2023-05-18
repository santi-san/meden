<div class="form-group">
        
            
    <label for="genre">Genre/s: </label><br>
    
    @foreach ($genres as $genre)
        <div class="form-check form-check-inline">



           <input type="checkbox" 
                    id="genre" 
                    name="genre[]" 
                    value="{{$genre->id}}"
                    class="form-check-input"
                    {{  @foreach($album->genres as $value) 
                            @if($value->id == $genre->id) ' checked' 
                            @endif 
                        @endforeach  
                    }}>
                     {{ (is_array(old('genre')) && in_array($genre->name, $album->genres, old('genre'))) ? ' checked' : '' }}
                    
            <label class="form-check-label">{{$genre->name}}</label>
        </div>
    @endforeach

</div>