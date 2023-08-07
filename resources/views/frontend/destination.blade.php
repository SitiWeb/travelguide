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
    <div class="swiper-pagination nav-main"></div>
<script>
// Function that actually builds the swiper 
const buildSwiperSlider = sliderElm => {

    const sliderIdentifier = sliderElm.dataset.id;
    const slider_dest_Identifier = sliderElm.dataset.destination;
  
    console.log(`.swiper-pagination`);
    return new Swiper(`#${sliderElm.id}`, {
       
        loop : true,
        navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      
    },
    });
}
document.querySelectorAll(".swiper").forEach(function (s) {
//   let next = s.querySelector(".swiper-next");
//   let prev = s.querySelector(".swiper-prev");

  new Swiper(s, {
    // navigation: {
    //   nextEl: next,
    //   prevEl: prev
    // },
    
  });
});


// Get all of the swipers on the page
const allSliders = document.querySelectorAll('.swiper');

// Loop over all of the fetched sliders and apply Swiper on each one.
allSliders.forEach(slider => buildSwiperSlider(slider));
new Swiper(`.slider-top`, {
      loop : true,
      pagination: {
        el: `.swiper-pagination`,
  
      },
      
  });
</script>
</x-destination-layout>