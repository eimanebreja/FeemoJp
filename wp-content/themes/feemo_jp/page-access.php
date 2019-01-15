<?php get_header(); ?>
 <!--header image-->
 <div  class="access-header">
       
       <div class="container">
         <h2 class="header center white-text text-lighten-2 wow zoomIn">ACCESS</h2>
       
       </div>
       </div>
 <!-- end header image-->
<div class="section">
    <div class="company-body">
        <div class="row">
            <div class="col s12 m4 l3 wow slideInLeft">
              <div class="container">
                <div class="company-text">
                        <h6 style="font-weight: bold" class="center">ACCESS</h6>
                </div>
                <ul style="list-style-type: circle" class="left">
                        <li class="blue-grey-text lighten-4">.............................................................</li>
                        <li style="padding-top: 8px"><a href="access.html" class="company-left-text-active">• Main Office</a></li>
                        <li class="blue-grey-text lighten-4">.............................................................</li>
                        <li style="padding-top: 8px"><a href="access.html" class="company-left-text" >• Fukuoka</a></li>
                        <li class="blue-grey-text lighten-4">.............................................................</li>
                        <li style="padding-top: 8px"><a href="access.html" class="company-left-text">• Makati Branch</a></li>
                        <li class="blue-grey-text lighten-4">.............................................................</li>
                      </ul>
                    </div>
            </div>
            <div class="col s12 m8 l9">
                <div class="container">
                    <div class="wow slideInRight">
                     <div class="acess-name">
                         <h6 style="font-weight: bold" class="center">TOKYO</h6>
                          <br>
                      </div>
                    <div class="map" id="Shinjuku"></div>
                         <p class="location">KDX Shinjuku 6th Bldg.9f, <br>
                            6-24-20 Shinjuku, Shinjuku, Tokyo,<br>
                             160-022, Japan</p>
                         <p class="location">
                             Phone <br>
                            Tel : 03-6273-8003
                         </p>
                         <p class="location">
                              Office Hours <br>
                             Monday - Friday : 9am - 6pm
                         </p>
                        </div>

                        <div class="wow slideInRight">
            <div class="acess-name">
                    <h6 style="font-weight: bold" class="center">FUKOUKA</h6>
                    <br>
                 </div>
                 <div class="map" id="Fukouka"></div>
                 <p class="location" >810-0041<br>
            No.2 Prince Bldg.5f <br>
        2-9-29 Daimyo Fukuoka, Fukuoka</p>
            <p class="location">
                Phone <br>
                Tel : 092-707-1141<br>
                Fax : 092-707-1141
            </p>
            <p class="location">
                Office Hours <br>
                Monday - Friday : 9am - 6pm
            </p>

        </div>
        <div class="wow slideInRight">
            <div class="acess-name">
                    <h6 style="font-weight: bold" class="center">MANILA</h6>
                    <br>
                 </div>


                 <div class="map" id="Makati"></div>

                 <p class="location">
                     4F Makati Skyplaza, 6788 Ayala Avenue <br>
                     Makati City, Philippines 
                 </p>
            <p class="location">
                Email<br>
                info@feemo.jp
            </p>
            <p class="location">
                Office Hours <br>
                Monday - Friday : 9am - 6pm
            </p>
            </div>
            </div>
        </div>
        </div>
    </div>
</div>
<script>
        function myMap() {

var mapProp= {
    center:new google.maps.LatLng(35.697443, 139.710854),
    zoom:17,
};
 var map1=new google.maps.Map(document.getElementById("Shinjuku"),mapProp);
var marker1 = new google.maps.Marker({
      position: {lat: 35.697443, lng: 139.710854},
      map: map1,
      title: 'Main Office'
});



var mapProp2= {
    center:new google.maps.LatLng(33.587049, 130.394934),
    zoom:17,
};
 var map2=new google.maps.Map(document.getElementById("Fukouka"),mapProp2);
var marker2 = new google.maps.Marker({
      position: {lat: 33.587049, lng: 130.394934},
      map: map2,
      title: 'Fukouka Branch'
});


var mapProp3= {
    center:new google.maps.LatLng(14.558750, 121.017697),
    zoom:17,
};
var map3=new google.maps.Map(document.getElementById("Makati"),mapProp3);
var marker3 = new google.maps.Marker({
      position: {lat: 14.558750, lng: 121.017697},
      map: map3,
      title: 'Makati Branch'
});


}

        </script>
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDOZ4601cRnFQ7h5YljZNYFeO7ErGmxkMs&callback=myMap"></script>
 
<?php get_footer(); ?>