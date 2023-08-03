<x-destination-layout>
<x-header-destination :destination="$destination"/>
<x-description-destination/>


@isset($venues['hotel'])
<x-title-destination>Places to stay</x-title-destination>
<x-caroussel-destination :items="$venues['hotel']">  
</x-caroussel-destination>
@endisset

@isset($venues['activity'])
<x-title-destination>Things to do</x-title-destination>
<x-caroussel-destination></x-caroussel-destination>
@endisset

@isset($venues['restaurant'])
<x-title-destination>Places to eat</x-title-destination>
<x-caroussel-destination></x-caroussel-destination>
@endisset

@isset($venues['nightlife'])
<x-title-destination>Nigthlife</x-title-destination>
<x-caroussel-destination></x-caroussel-destination>
@endisset

</x-new-layout>