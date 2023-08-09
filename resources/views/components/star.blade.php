@props(['rating'])
<input class="radio-input" type="radio" id="star{{$rating}}" name="star-input" value="{{$rating}}" />
<label class="radio-label" class for="star{{$rating}}" title="{{$rating}} stars">{{$rating}} stars</label>