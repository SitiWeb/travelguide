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
                SINGAPORE IS A VIBRANT, MULTICULTURAL CITY-STATE LOCATED IN SOUTHEAST ASIA. 
                IT'S KNOWN FOR ITS EFFICIENT INFRASTRUCTURE, CLEANLINESS, LUSH LANDSCAPES AND 
                DIVERSE CULINARY SCENE.
            </p>
            <p class='camel-font text-center'>
                SINGAPORE IS A GREAT PLACE TO VISIT FOR ITS MANY TOURIST ATTRACTIONS, OFFERING 
                TRAVELLERS A UNIQUE BLEND OF MODERNITY AND TRADITIONAL CHARM.
            </p>
        </div>
    </div>

    <div style='background-image:url("{{ asset("assets/images/Patterns.png") }}"); background-position: center; background-size: cover; background-repeat: no-repeat;padding-bottom:10px'>
        <div class='title'>
            <p class='text-white h1'>Places to Stay &#8250;</p>
        </div>

        <div class='card'>
            <p class='text-white h2'>1. The Barracks Hotel</p>
            <a href='https://www.thebarrackshotel.com.sg' class='link'>https://www.thebarrackshotel.com.sg</a>
            <p class='text-white'>
                Located on Sentosa Island, this luxury hotel is in a beautifully restored colonial building.
                It offers a tranquil and exclusive setting, away from the hustle and bustle of the city whilst still being easily 
                accessible to the mainland.
            </p>
            <p class='text-white text-right'>$$$</p>
        </div>

        <div class='card'>
            <p class='text-white h2'>2. Hotel Mono</p>
            <a href='https://www.hotelmono.com' class='link'>https://www.hotelmono.com</a>
            <p class='text-white'>
                Located in the heart of Chinatown, this hotel has a unique black-and-white color scheme 
                throughout with clean lines and minimalist furnishings, creating a sleek
                and contemporary atmosphere.
            </p>
            <p class='text-white text-right'>$$</p>
        </div>

        <div class='card'>
            <p class='text-white h2'>3. 1929</p>
            <a href='https://www.1929hotel.com' class='link'>https://www.1929hotel.com</a>
            <p class='text-white'>
                Stylish and contemporary hotel located in 5 converted shop houses from 1929. 
                This boutique hotel is conveniently located in China town, close to the business district. 
                It offers all the modern comforts at a modest price.
            </p>
            <p class='text-white text-right'>$$</p>
        </div>


        <div class='title'>
            <p class='text-white h1'>Things to do &#8250;</p>
        </div>

        <div class='card'>
            <p class='text-white h2'>1. Gardens by the bay</p>
            <a href='https://www.gardensbythebay.com.sg' class='link'>https://www.gardensbythebay.com.sg</a>
            <p class='text-white'>
                This nature park spans 101 he https://www.gardensbytheba for its iconic Supertrees, 
                which are y.com.sg from 25 to 50 meters in height. A must visit destination for nature lovers seeking a unique experience.
            </p>
            <!-- <p class='text-white text-right'>$$$</p> -->
        </div>

        <div class='card'>
            <p class='text-white h2'>2. Palawan Beach</p>
            <a href='https://www.sentosa.com.sg/en/things-to-do/attractions/palawan-beach/' class='link'>https://www.sentosa.com.sg/en/things-to-do/attractions/palawan-beach/</a>
            <p class='text-white'>
                Located on Sentosa Island the beach has white sandy shores, 
                clear blue waters and lush greenery. Relax and recharge those batteries, 
                ready for Singapore's night time festivities.
            </p>
            <!-- <p class='text-white text-right'>$$$</p> -->
        </div>

        <div class='card'>
            <p class='text-white h2'>3. Southern Ridges</p>
            <a href='https://www.nparks.gov.sg/gardens-parks-and-nature/parks-and-nature-reserves/the-southern-ridges' class='link'>https://www.nparks.gov.sg/gardens-parks-and-nature/parks-and-nature-reserves/the-southern-ridges</a>
            <p class='text-white'> 
                This scenic walking trail connects several parks and nature reserves in the Southern part 
                of the city. Enjoy the lush landscapes and breath-taking views along the 10Km trail.
            </p>
            <!-- <p class='text-white text-right'>$$$</p> -->
        </div>



        <div class='title'>
            <p class='text-white h1'>Places to eat &#8250;</p>
        </div>

        <div class='card'>
            <p class='text-white h2'>1. NOX dine in the dark</p>
            <a href='https://www.noxdineinthedark.com' class='link'>https://www.noxdineinthedark.com</a>
            <p class='text-white'> 
                Dine in the Dark aims to create awareness and empathy for the visually impaired while 
                providing a unique and immersive dining experience. It is a great opportunity to challenge 
                your senses as well as your taste buds.
            </p>
            <p class='text-white text-right'>$$$</p>
        </div>

        <div class='card'>
            <p class='text-white h2'>2. The Coconut Club</p>
            <a href='https://www.thecoconutclub.sg' class='link'>https://www.thecoconutclub.sg</a>
            <p class='text-white'> 
                Informal restaurant celebrating all things coconut. Enjoy the atmosphere 
                and culinary delights of authentic Singaporean flavour's, in particular the signature Nasi Lemak.</p>
            <p class='text-white text-right'>$</p>
        </div>

        <div class='card'>
            <p class='text-white h2'>3. Amoy Street Food Centre</p>
            <a href='7 Maxwell Rd, Singapore 069111' class='link'>7 Maxwell Rd, Singapore 069111</a>
            <p class='text-white'> 
                A popular hawker center located in the heart of Singapore's Central 
                Business District. Enjoy the bustling atmosphere and a wide variety of local Singaporean 
                and Asian dishes at affordable prices.</p>
            <p class='text-white text-right'>$</p>
        </div>


        <div class='title'>
            <p class='text-white h1' >Nightlife &#8250;</p>
        </div>

        <div class='card'>
            <p class='text-white h2'>1. Atlas Bar</p>
            <a href='https://atlasbar.sg' class='link'>https://atlasbar.sg</a>
            <p class='text-white'>
                Located on the ground floor of the iconic park view square building, 
                relax in the bar's truly grand art deco back drop whilst enjoying one of 
                their perfectly crafted cocktails.
            </p>
            <!-- <p class='text-white text-right'>$$$</p> -->
        </div>

        <div class='card'>
            <p class='text-white h2'>2. Cable Car Sky Dining</p>
            <a href='https://www.mountfaberleisure.com/restaurant/cable-car-sky-dining/' class='link'>https://www.mountfaberleisure.com/restaurant/cable-car-sky-dining/</a>
            <p class='text-white'> 
                Enjoy a meal high above the city with this cable cabin dining experience. 
                Take in the stunning views of Singapore at night from this unique setting.
            </p>
            <!-- <p class='text-white text-right'>$$$</p> -->
        </div>

        <div class='card'>
            <p class='text-white h2'>3. Zouk Night club</p>
            <a href='https://zoukclub.com' class='link'>https://zoukclub.com</a>
            <p class='text-white'> 
                Located on the Singapore river, dance into the early hours of the morning in one of 
                Singapore's most revered night spots.
            </p>
            <!-- <p class='text-white text-right'>$$$</p> -->
        </div>



        <div class='title'>
            <p class='text-white h1'>Getting around &#8250;</p>
        </div>

        <div class='card'>
            <p class='text-white h2'>1. MRT</p>
            <!-- <a href='test.com' class='link'>www.thebarrackshotel.com</a> -->
            <p class='text-white'>
                Singapore's MRT metro system is a great way to travel the city with a MRT never too 
                far away from the Cities main tourist attractions it is a convenient and efficient way 
                to get around.
            </p>
            <!-- <p class='text-white text-right'>$$$</p> -->
        </div>

        <div class='card'>
            <p class='text-white h2'>2. Taxi's</p>
            <!-- <a href='test.com' class='link'>www.thebarrackshotel.com</a> -->
            <p class='text-white'> 
                Taxi's are a popular and convenient mode of transportation in Singapore. 
                You can easily find taxis throughout the city, either by hailing them on the street 
                or booking through ride-hailing apps like Grab and Ryde.
            </p>
            <!-- <p class='text-white text-right'>$$$</p> -->
        </div>

        <div class='card'>
            <p class='text-white h2'>3. Bicycle</p>
            <!-- <a href='test.com' class='link'>www.thebarrackshotel.com</a> -->
            <p class='text-white'> 
                Singapore offers a well connected network of cycling paths, travellers can rent bicycles 
                from a number of operators and experience the City from a different perspective.
            </p>
            <!-- <p class='text-white text-right'>$$$</p> -->
        </div>
        

    </div>

    <div style='background-color:#114778'>
        <div style='height:200px;'></div>
        <p class='text-white text-center m-0' style='padding:20px'>Terms & Conditions apply</p>
    </div>

</body>
</html>