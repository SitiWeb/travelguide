<x-guest-layout>
<x-header-question/>

<div class="steps-wrapper">
<x-steps active="{{$question->id}}" />
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
                        window.location.href = response.next_question_url;
                    }
                    else{
                        jQuery('.steps-wrapper').html(response.steps_html);
                        jQuery('.card-wrapper').html(response.question_html);
                        var box = document.querySelector('#card-3');

                        // GSAP Animation
                        gsap.set(box, { transformStyle: 'preserve-3d' });

                        gsap.to(box, {
                            duration: 1.5,
                            
                            backgroundColor: 'yellow',
                            rotationY: 180,
                            rotationX: 10,
                            onComplete: function() {
                                box.style.zIndex = -1;
                            },
                        });

                        
                        
                     
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
        // app.js
    var box = document.querySelector('#card-3');

    // GSAP Animation
    gsap.set(box, { transformStyle: 'preserve-3d' });

    gsap.to(box, {
        duration: 1.5,
        scale: 2,
        backgroundColor: '#e74c3c',
        rotationX: 180,
        onComplete: function() {
            box.style.zIndex = 10;
        },
    });

    }
</script>
</x-guest-layout>
