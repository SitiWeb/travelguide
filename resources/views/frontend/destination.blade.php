<x-destination-layout>
    <div class="slider-top" >
        <!-- Additional required wrapper -->
  <div class="swiper-wrapper">
    @foreach($destinations as $destination)
    <div class="swiper-slide">
        <x-wrapper-destination :destination="$destination"/> 
        </div>
    @endforeach
    </div>
    </div>
<script>
// Function that actually builds the swiper 
const buildSwiperSlider = sliderElm => {
    console.log(sliderElm);
    const sliderIdentifier = sliderElm.dataset.id;

    return new Swiper(`#${sliderElm.id}`, {
      
        loop : true,
    });
}


// Get all of the swipers on the page
const allSliders = document.querySelectorAll('.swiper');

// Loop over all of the fetched sliders and apply Swiper on each one.
allSliders.forEach(slider => buildSwiperSlider(slider));
new Swiper(`.slider-top`, {
      loop : true,
  });
</script>
</x-new-layout>