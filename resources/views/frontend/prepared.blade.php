<x-guest-layout>
<x-header-question/>

<div class="steps-wrapper">
<x-steps class="mb-4" active="{{$question->id}}" />
</div>

<form id="questionForm" method="post">
@csrf
<div class="card-wrapper">
<x-cards step="{{$question->id}}" question="{{$question->question}}" option_1="{{$question->option_1}}" option_2="{{$question->option_2}}"/>
</div>
</form>


<script>
    // Attach an event listener to the radio buttons
    $('input[type="radio"]').on('change', function() {
        saveResponse(); // Call saveResponse() when a radio button is selected
    });
    var images = [];
    function preload() {
        for (var i = 0; i < arguments.length; i++) {
            images[i] = new Image();
            images[i].src = preload.arguments[i];
        }
    }

    //-- usage --//
    preload(
        "http://localhost/travelguide/public/storage/images/nvtdDiwiIyLrmNIwYaE1wW4ujjJKqnPlesgeKcEx.png",

    )
    function saveResponse() {
        let formData = $('#questionForm').serialize();

        $.ajax({
            url: '{{ route("save_response") }}',
            type: 'POST',
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.status === 'success') {
                    if (response.redirect_url){
                        window.location.href = response.redirect_url;
                    }
                    else{
                        if (response.image_url){
                            $('.bg-footer-image').css('background-image', 'url(' + response.image_url + ')');
                        }
                        jQuery('.steps-wrapper').html(response.steps_html);
                        jQuery('.card-wrapper').html(response.question_html);                 
                     
                        // Attach an event listener to the radio buttons
                        $('input[type="radio"]').on('change', function() {
                            saveResponse(); // Call saveResponse() when a radio button is selected
                        });
                    }
                    
                    console.log(response);
                } else {
                    // Handle error response, if needed
                }
            },
            error: function(xhr, status, error) {
                // Handle error, if needed
            }
        });
    }

    function change_cards(){
   
var box = document.querySelector('#card-3');

// Create a new Timeline
const timeline = gsap.timeline();

// Move the box 200 pixels to the left
timeline.to(box, { x: '-=200', duration: 0.3 });

// Flip the box backside (assuming you have a CSS class for the backside)
timeline.to(box, { rotationY: 180,zIndex: -10,backgroundColor: '#fdea34', duration: 0.5 });



// Move back the box to the original position
timeline.to(box, { x: '+=200', rotate: 10, duration: 0.3 });

    }
</script>
</x-guest-layout>
