<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PDF</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
	<style type="text/css">
        @page {
            margin: 0;
        }
        @font-face {
            font-family: IqbalCamel;
            src: url("{{ url('storage/CAMEL-BOLD.ttf') }}");
        }
        @font-face {
            font-family: Graphik-bold;
            src: url("{{ url('storage/GRAPHIK-BOLD.ttf') }}");
        }
		body{
	        font-family: Graphik-bold;
            font-size:20px;
            margin:0;
            padding:0;
            background-color:#114778;
	    }
        .camel-font{
            font-family: IqbalCamel;
            text-transform: uppercase;
            line-height:0.7;
            font-size:45px
        }
        .h1{
            font-size: 40px;
        }
        .h2{
            font-size: 35px;
            margin:0 0 10px 0;
        }
        .link{
            color:#00ABE3;
            text-decoration:none;
        }
        .text-white{
            color:#ffffff;
        }
        .text-right{
            text-align:right;
        }
        .text-center {
            text-align:center;
        }
        .m-0{
            margin:0;
        }
        .title{
            background-color:rgba(217,87,39,0.7);
            padding:5px 50px;
        }
        .card{
            background-color:#114778;
            border-radius:20px;
            margin:30px 50px;
            padding:30px; 
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
        }
	</style>
</head>
<body>
    <img src="{{ asset('assets/images/SINGAPORE_Interactive.jpg') }}" alt='SINGAPORE' width='100%' height='auto'>

    <div style='background-color:#114778;padding:50px'>
        <div style='background-color:white;color:#114778;border-radius:50px;padding:31px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);'>
            <p class='camel-font text-center'>
                {!!$destination->description!!}
            </p>
        </div>
    </div>

    <div style='background-image:url("{{ asset("assets/images/Patterns.png") }}"); background-position: center; background-size: cover; background-repeat: repeat-y;padding-bottom:10px'>
     

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

    <div style='background-color:#114778'>
       
        <p class='text-white text-center m-0' style='padding:30px'>Terms & Conditions apply</p>
    </div>

</body>
</html>