@props(['step', 'question', 'option_1', 'option_2'])
<div class="card-container relative mx-auto w-80 h-96">
    <!-- Card 1 - Light Blue -->
    <div id="card-1" class="overflow-hidden background-blue-camel-alt  absolute p-6 rounded-lg w-full card h-80" style="transform: translateX(-55%) translateY(-45%) rotate(-10deg)">
  
    </div>
    
    <!-- Card 2 - Yellow -->
    <div id="card-2" class="overflow-hidden background-blue-camel-yellow absolute p-6 rounded-lg w-full card h-80" style="transform: translateX(-45%) translateY(-50%) rotate(10deg)">

    </div>
    
    <!-- Card 3 - White -->
    <div id="card-3" class="overflow-hidden bg-white absolute p-6 rounded-lg w-full card h-80" style="transform: translateX(-50%) translateY(-50%) ">
        <x-question step="{{$step}}" question="{{$question}}" option_1="{{$option_1}}" option_2="{{$option_2}}"/>
    </div>
  </div>

  <style>
    .card-container {
      perspective: 1000px; /* Create 3D perspective */
    }
    
    .card {
      position: absolute;
      top: 50%;
      left: 50%;
      transform-style: preserve-3d; /* Preserve 3D transformations */
      transition: transform 0.3s ease; /* Add smooth transition effect on hover */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Add box shadow to each card */
    }
    
    .card:hover {
      transform: translateY(-50%) rotateX(10deg); /* On hover, shift and tilt the cards */
    }
  </style>