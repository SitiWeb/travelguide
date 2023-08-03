@props(['destination'])

<x-header-destination :destination="$destination"/>
<x-description-destination/>

@isset($destination->locations['hotel'])
<x-title-destination>Places to stay</x-title-destination>
<x-caroussel-destination :items="$destination->locations['hotel']" name="hotel">  
</x-caroussel-destination>
@endisset

@isset($destination->locations['activity'])

<x-title-destination>Things to do</x-title-destination>
<x-caroussel-destination :items="$destination->locations['activity']" name="activity"></x-caroussel-destination>
@endisset

@isset($destination->locations['restaurant'])
<x-title-destination>Places to eat</x-title-destination>
<x-caroussel-destination :items="$destination->locations['restaurant']" name="restaurant"></x-caroussel-destination>
@endisset

@isset($destination->locations['nightlife'])
<x-title-destination>Nigthlife</x-title-destination>
<x-caroussel-destination :items="$destination->locations['nightlife']" name="nightlife"></x-caroussel-destination>
@endisset
