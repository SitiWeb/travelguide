<x-destination-layout>
<x-header-destination :destination="$destination"/>
<x-description-destination/>

@isset($venues['hotel'])
<x-title-destination>Places to stay</x-title-destination>
<x-caroussel-destination :items="$venues['hotel']" name="hotel">  
</x-caroussel-destination>
@endisset

@isset($venues['activity'])
<x-title-destination>Things to do</x-title-destination>
<x-caroussel-destination :items="$venues['activity']" name="activity"></x-caroussel-destination>
@endisset

@isset($venues['restaurant'])
<x-title-destination>Places to eat</x-title-destination>
<x-caroussel-destination :items="$venues['restaurant']" name="restaurant"></x-caroussel-destination>
@endisset

@isset($venues['nightlife'])
<x-title-destination>Nigthlife</x-title-destination>
<x-caroussel-destination :items="$venues['nightlife']" name="nightlife"></x-caroussel-destination>
@endisset
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<script>
// Function that actually builds the swiper 
const buildSwiperSlider = sliderElm => {
    console.log(sliderElm);
    const sliderIdentifier = sliderElm.dataset.id;
    console.log(sliderIdentifier);
    return new Swiper(`#${sliderElm.id}`, {
        navigation: {
            nextEl: `.swiper-button-next-${sliderIdentifier}`,
            prevEl: `.swiper-button-prev-${sliderIdentifier}`
        },
        pagination: {
            el: `.swiper-pagination-${sliderIdentifier}`,
            type: 'progressbar',
        },
        loop : true,
    });
}

// Get all of the swipers on the page
const allSliders = document.querySelectorAll('.swiper');

// Loop over all of the fetched sliders and apply Swiper on each one.
allSliders.forEach(slider => buildSwiperSlider(slider));
</script>
</x-new-layout>