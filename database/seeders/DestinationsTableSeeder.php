<?php

namespace Database\Seeders;
use App\Models\Destination;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DestinationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $destinations = array(
            array('id' => '3','city' => 'Singapore','country' => 'Singapore','description' => 'SINGAPORE IS A VIBRANT, MULTICULTURAL CITY-STATE LOCATED IN SOUTHEAST ASIA. IT\'S KNOWN FOR ITS EFFICIENT INFRASTRUCTURE, CLEANLINESS, LUSH LANDSCAPES AND DIVERSE CULINARY SCENE.<br><br>
          SINGAPORE IS A GREAT PLACE TO VISIT FOR ITS MANY TOURIST ATTRACTIONS, OFFERING TRAVELLERS A UNIQUE BLEND OF MODERNITY AND TRADITIONAL CHARM.','pdf_path' => 'pdfs/22927_JTI_Camel Animals_Travel_Guide_SINGAPORE_PDFs_V1_HR.pdf','created_at' => '2023-08-02 13:27:52','updated_at' => '2023-08-03 19:56:29','type_id' => '3','image_path' => 'images/5XXE9XD5Ifc0t39Y600jCg44GdI4BdcOPvUeYP5E.svg'),
            array('id' => '4','city' => 'Penang','country' => 'Malaysia','description' => 'PenangPENANG IS LOCATED ON THE NORTHWEST COAST OF PENINSULAR MALAYSIA. IT IS KNOWN FOR ITS RICH HISTORY, DIVERSE CULTURE, AND DELICIOUS FOOD. <br><br>
          OFFERING BEAUTIFUL BEACHES, HIKING TRAILS, AND VARIOUS CULTURAL AND HISTORICAL SITES SUCH AS THE UNESCO WORLD HERITAGE SITE OF GEORGE TOWN, PENANG IS A FAVOURITE DESTINATION FOR BOTH LOCALS AND TOURISTS.','pdf_path' => 'pdfs/22927_JTI_Camel Animals_Travel_Guide_PENANG_PDFs_V1_HR.pdf','created_at' => '2023-08-02 13:28:33','updated_at' => '2023-08-03 19:57:10','type_id' => '3','image_path' => 'images/3CK23Nx4FJCAYZS4wurzwqHQUGz7xiMLgzT0tD9r.svg'),
            array('id' => '5','city' => 'Melbourne','country' => 'Australia','description' => 'MelbourneSITUATED IN THE SOUTH EAST OF THE COUNTRY, MELBOURNE IS KNOWN FOR RICH CULTURE, DIVERSE CULINARY ARTS AND MUSIC SCENES, AS WELL AS STUNNING ARCHITECTURE. <br><br>
          WHETHER YOU\'RE A FOODIE, AN ART ENTHUSIAST, SPORTS FAN, OR A NATURE LOVER, MELBOURNE HAS SOMETHING TO OFFER FOR EVERYONE.','pdf_path' => 'pdfs/22927_JTI_Camel Animals_Travel_Guide_MELBOURNE_PDFs_V1_HR.pdf','created_at' => '2023-08-02 13:29:15','updated_at' => '2023-08-03 19:57:20','type_id' => '3','image_path' => 'images/3P1Vp4UizRYvDeCU5QLEqPFHndyokhi9bS7j5fOp.svg'),
            array('id' => '6','city' => 'Danang','country' => 'Vietnam','description' => 'DA NANG IS ONE OF VIETNAM\'S MOST VIBRANT AND RAPIDLY DEVELOPING CITIES. LOCATED ON THE CENTRAL COAST, DA NANG OFFERS A BLEND OF NATURAL BEAUTY, RICH HISTORY, AND MODERN ATTRACTIONS. <br><br>
          WHETHER SEEKING PRISTINE BEACHES, EXPLORING ANCIENT TEMPLES, OR INDULGING IN DELICIOUS CUISINE, DA NANG HAS SOMETHING TO OFFER EVERY TRAVELLER.','pdf_path' => 'pdfs/22927_JTI_Camel Animals_Travel_Guide_DANANG_PDFs_V1_HR.pdf','created_at' => '2023-08-02 13:29:50','updated_at' => '2023-08-03 19:57:38','type_id' => '1','image_path' => 'images/oPMbUSc2SHYnUJyJfS6sWy0j9xygaqgbuRN8lvaN.svg'),
            array('id' => '7','city' => 'Chiangmai','country' => 'Thailand','description' => 'CHIANG MAI IN NORTHERN THAILAND IS KNOWN FOR ITS RICH CULTURAL HERITAGE, BEAUTIFUL TEMPLES, AND VIBRANT STREET MARKETS. IT IS ALSO A POPULAR DESTINATION FOR MEDITATION RETREATS AND TREKKING. <br><br>
          WITH A BLEND OF CULTURAL EXPERIENCES, NATURAL BEAUTY AND DELICIOUS CUISINE, CHIANG MAI IS A FANTASTIC DESTINATION TO EXPLORE.','pdf_path' => 'pdfs/22927_JTI_Camel Animals_Travel_Guide_CHIANGMAI_PDFs_V1_HR.pdf','created_at' => '2023-08-02 13:30:32','updated_at' => '2023-08-03 19:57:47','type_id' => '1','image_path' => 'images/CBDLPFoGZaYtzr482V0LK7HW94PQUVKT2F1KBNv1.svg'),
            array('id' => '8','city' => 'Cappadocia','country' => 'Turkey','description' => 'CAPPADOCIA IS A CAPTIVATING REGION LOCATED IN CENTRAL TURKIYE, KNOWN FOR ITS UNIQUE LANDSCAPE, ANCIENT CAVE DWELLINGS, AND RICH HISTORY. <br><br>
          THE REGION IS CHARACTERIZED BY ITS NATURAL AND HISTORIC WONDERS. EXPLORE THE SURREAL ROCK FORMATIONS, KNOWN AS FAIRY CHIMNEYS, HIKE THROUGH PICTURESQUE VALLEYS AND SAMPLE SOME DELICIOUS TURKISH CUISINE.','pdf_path' => 'pdfs/22927_JTI_Camel Animals_Travel_Guide_CAPPADOCIA_PDFs_V1_HR.pdf','created_at' => '2023-08-02 13:31:08','updated_at' => '2023-08-03 19:57:57','type_id' => '1','image_path' => 'images/8VSjIvtxt3pYN0wPRwg9pf5P4C7SUOeA4sKee6d8.svg'),
            array('id' => '9','city' => 'Bordeaux','country' => 'France','description' => 'BordeauxLOCATED IN THE SOUTHWEST OF FRANCE, BORDEAUX IS RENOWNED FOR ITS WINE PRODUCTION AND RICH HISTORY. SITUATED ALONG THE GARONNE RIVER, IT IS THE CAPITAL CITY OF THE NOUVELLE-AQUITAINE REGION. <br><br>
          THE CITY IS DIVERSE AND VIBRANT, MIXING TRADITIONAL WITH THE CONTEMPORARY, MAKING IT A POPULAR DESTINATION FOR TRAVELLERS ALL AROUND THE WORLD.','pdf_path' => 'pdfs/22927_JTI_Camel Animals_Travel_Guide_BORDEAUX_PDFs_V1_HR.pdf','created_at' => '2023-08-02 13:31:40','updated_at' => '2023-08-03 19:58:08','type_id' => '2','image_path' => 'images/4p2fW4tHo5KjyVlrIflBNhepDWWhoo33VdwmYejb.svg'),
            array('id' => '10','city' => 'Battambang','country' => 'Cambodja','description' => 'BATTAMBANG IS LOCATED IN NORTHWESTERN CAMBODIA. IT IS THE SECOND-LARGEST CITY IN THE COUNTRY AND IS KNOWN FOR ITS RICH HISTORY, FRENCH COLONIAL ARCHITECTURE AND VIBRANT ARTS SCENE. <br><br>
          SURROUNDED BY PICTURESQUE COUNTRYSIDE, INCLUDING RICE FIELDS AND QUAINT VILLAGES, THE CITY OFFERS A RELAXED AND AUTHENTIC CAMBODIAN EXPERIENCE.','pdf_path' => 'pdfs/22927_JTI_Camel Animals_Travel_Guide_BATTAMBANG_PDFs_V1_HR.pdf','created_at' => '2023-08-02 13:32:27','updated_at' => '2023-08-03 19:58:16','type_id' => '3','image_path' => 'images/UOXyHUTFl2PeYweoc1pWRed0C30uyEgeH9BWHtZV.svg'),
            array('id' => '11','city' => 'Abu Dhabi','country' => 'United Arab Emirates','description' => 'ABU DHABI IS THE CAPITAL CITY OF THE UNITED ARAB EMIRATES (UAE) AND IS KNOWN FOR ITS MODERN ARCHITECTURE, LUXURIOUS HOTELS, AND VIBRANT CULTURAL SCENE. <br><br>
          WITH ITS NATURAL BEAUTY, ROLLING DESERT LANDSCAPES AND PRISTINE COASTLINES, IT HAS BECOME AN EXCITING DESTINATION FOR TRAVELLERS SEEKING CULTURE, LUXURY AND A MEMORABLE EXPERIENCE.','pdf_path' => 'pdfs/22927_JTI_Camel Animals_Travel_Guide_ABUDHABI_PDFs_V1_HR.pdf','created_at' => '2023-08-02 13:33:20','updated_at' => '2023-08-03 19:58:24','type_id' => '3','image_path' => 'images/RNo7Dk6FZcRsAwPrMOLwIyEDUpwNbaarPZPHLA1B.svg')
          );
          

        // Insert the data into the 'destinations' table
        Destination::insert($destinations);
    }
}