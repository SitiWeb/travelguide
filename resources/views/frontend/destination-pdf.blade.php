

<STYLE>
      
        @font-face {
            font-family: 'CustomFontName';
            src: url('{{ asset('storage/fonts/IqbalCamel-Regular.ttf') }}') format('truetype');
        }

        .camel-font {
            font-family: CustomFontName;
            text-transform: uppercase;
        }

        .graphik-font {
            font-family: CustomFontName;
        }

        .bg-footer-image {
            background-image:url('{{ url(' storage/Footer4x.png') }}');
        }
        .background-pattern{
            background-image:url('{{ url('storage/pattern.svg') }}');
        }

    </STYLE>
<div >
    <img src="{{ asset('storage/' . $destination->image_path) }}" width="100%"/>
</div>
<div style="background: linear-gradient(to bottom, #002b4a 0%, #004578 15%, #004578 15%); padding: 30px;background:#004578">
  <div style="font-family:'CustomFontName';box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2); border-radius: 20px; background-color: white; padding: 16px; font-family: 'camel-font'; text-align: center; color: #004578;">
  {!!$destination->description!!}
  </div>
</div>
<div style="background:yellow;">
<div style="background:url({{ asset('storage/pattern.png') }})">
<x-title-destination-pdf>Places to stay</x-title-destination-pdf>
<x-caroussel-destination-pdf destination="{{$destination->id}}" :items="$destination->locations['hotel']" name="hotel" />  
   
<x-title-destination-pdf>Things to do</x-title-destination-pdf>
<x-caroussel-destination-pdf destination="{{$destination->id}}" :items="$destination->locations['activity']" name="activity" />  

<x-title-destination-pdf>Places to eat</x-title-destination-pdf>
<x-caroussel-destination-pdf destination="{{$destination->id}}" :items="$destination->locations['restaurant']" name="restaurant" />  

<x-title-destination-pdf>Night life</x-title-destination-pdf>
<x-caroussel-destination-pdf destination="{{$destination->id}}" :items="$destination->locations['nightlife']" name="nightlife" />  

<x-title-destination-pdf>Getting around</x-title-destination-pdf>
<x-caroussel-destination-pdf destination="{{$destination->id}}" :items="$destination->locations['get_around']" name="get_around" />  
</div>
</div>