@props(['userresponse'])
<div class="h-screen flex justify-center flex-col">
    <x-plane width="w-16"/>
    <x-title class="text-4xl mb-4">Did you find<br>this useful?</x-title>
    <div class="flex justify-center ">
        <div><x-star class="star" rating="1" fill="white"/></div>
        <div><x-star class="star" rating="2" fill="white"/></div>
        <div><x-star class="star" rating="3" fill="white"/></div>
        <div><x-star class="star" rating="4" fill="white"/></div>
        <div><x-star class="star" rating="5" fill="white"/></div>
        
    </div>
</div>

<style>
    

.radio-input {
  position: fixed;
  opacity: 0;
  pointer-events: none;
}

.radio-label {
  cursor: pointer;
  font-size: 0;
  color: rgba(0,0,0,0.2);
  transition: color 0.1s ease-in-out;
}

.radio-label:before {
  content: "★";
  display: inline-block;
  font-size: 60px;
}
/* .radio-input:checked ~ .radio-label {
  color: #ffc700;
  color: gold;
} */
/* 
.radio-label:hover,
.radio-label:hover ~ .radio-label {
  color: goldenrod;
}

.radio-input:checked + .radio-label:hover,
.radio-input:checked + .radio-label:hover ~ .radio-label,
.radio-input:checked ~ .radio-label:hover,
.radio-input:checked ~ .radio-label:hover ~ .radio-label,
.radio-label:hover ~ .radio-input:checked ~ .radio-label {
  color: darkgoldenrod;
} */
</style>

<script>
document.querySelectorAll('.radio-label').forEach((star, index, stars) => {
  star.addEventListener('mouseover', () => {
    stars.forEach((s, i) => {
          s.style.color = 'rgba(0,0,0,0.2)';
      });
    for (let i = 0; i <= index; i++) {
      stars[i].style.color = 'goldenrod';
    }
  });

//   star.addEventListener('mouseout', () => {
//     setTimeout(() => {
//       stars.forEach((s, i) => {
//         if (!s.previousElementSibling.checked) {
//           s.style.color = 'rgba(0,0,0,0.2)';
//         }
//       });
//     }, 300); // 300 milliseconds delay
//   });

  star.addEventListener('click', () => {
    stars.forEach((s, i) => {
        console.log(index + 1);
      if (i <= index) {

        s.style.color = 'gold';
        if (i == index){
            jQuery.ajax({
            url: '{{route('update-rating')}}',
            method: 'POST',
            data: {
                rating: i + 1, // Replace this with the actual rating value
                user_response_id: {{$userresponse->id}}, // Replace this with the actual user response ID
                _token: '{{ csrf_token() }}' // Add CSRF token for Laravel
            },
            success: function(response) {
                alert('Rating updated successfully');
            },
            error: function(response) {
                alert('An error occurred while updating the rating');
            }
        });
        }
      } else {
        s.style.color = 'rgba(0,0,0,0.2)';
      }
    });
  });
});



</script>