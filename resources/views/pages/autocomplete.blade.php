@extends('layouts.default3')
<!-- ecran = autocomplete.blade.php   -->


@section('title')
  Auto complete
@endsection

@section('pagetitle')
  
@endsection

@section('custom_css')
@endsection

@section('content')


    <div class="container-fluid px-3">
      
        
        <div class="row min-vh-100">
            <div class="col-md-6 offset-md-3">
            <!-- <div class="col-md-8 col-lg-6 col-xl-5 d-flex align-items-center">               -->
                <h2>Laravel  Google Autocomplete Address </h2>
                <form>
                    <div class="mb-3">
                        <label for="autocomplete" class="form-label">Address</label>
                        <input type="text" class="form-control" id="autocomplete" placeholder="Enter your address">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

    </div>
    

@endsection

@section('scripts')
<!-- Include Google Places API Script -->

 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDhuR1erE3ZS9EEgqm9-czUxo6uPQbR5k8&libraries=places"></script>
  <script type="text/javascript">
    //$(document).ready(function(){
      //-initialize the javascript
      // App.init();
      // App.formElements();
    //})
  </script>
<!--  https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete-addressform  -->
<!--      https://developers.google.com/maps/documentation/javascript/place-autocomplete?hl=fr   -->
    <script>
        let autocomplete;
        function initAutocomplete() {
            var input = document.getElementById('autocomplete');
            autocomplete = new google.maps.places.Autocomplete(input);
            autocomplete.setComponentRestrictions({
                    country: ["fr"],
                });
            autocomplete.setFields(["address_components","place_id", "geometry", "name"]);
            autocomplete.addListener("place_changed", fillInAddress);
        }
        google.maps.event.addDomListener(window, 'load', initAutocomplete);
        function fillInAddress() {
            let address1 = "";
            let postcode = "";

            // Get the place details from the autocomplete object.
            //const place = autocomplete.getPlace();
            console.log("ttttt");
            //const place = autocomplete.getPlace();
            const place = autocomplete.getPlace();
            for (const component of place.address_components) {
                // @ts-ignore remove once typings fixed
                const componentType = component.types[0];
                console.log('type='+componentType) ;
                switch (componentType) {
                    
                
                case "street_number": {
                    address1 = `${component.long_name} ${address1}`;
                    console.log('street_number='+address1) ;
                    break;
                }

                case "route": {
                    address1 += component.short_name;
                    route =component.short_name;
                    console.log('route='+route) ;
                    break;
                }

                case "postal_code": {
                    postcode = `${component.long_name}${postcode}`;
                    console.log('code postal='+postcode) ;
                    break;
                }

                case "postal_code_suffix": {
                    //postcode = `${postcode}-${component.long_name}`;
                    break;
                }
                case "locality": {
                    locality = `${component.long_name}`;
                    console.log("locality ="+locality) ;
                    //document.querySelector("#locality").value = component.long_name;
                    break;
                }
                case "administrative_area_level_1": {
                    //document.querySelector("#state").value = component.short_name;
                    break;
                }
                
                case "country": {
                    //document.querySelector("#country").value = component.long_name;
                    country = `${component.long_name}`;
                    console.log("country ="+country) ;
                    break;
                }
                
                    
                }

                
            }   
            console.log("place geometrie ="+place.geometry);
            console.log("place name ="+place.name);
            console.log("latitue: "+JSON.stringify(place.geometry.location.lat()));
            console.log("longitude: "+JSON.stringify(place.geometry.location.lng()));
            console.log('place.formatted_address :' + JSON.stringify(place)); //voir doc https://developers.google.com/maps/documentation/javascript/examples/places-autocomplete

            
        }
    
    </script>
@endsection