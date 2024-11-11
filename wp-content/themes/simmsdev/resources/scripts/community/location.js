/* global google */ // Add this directive at the top to let ESLint know 'google' is a global variable.

export const initLocationMap = async () => {
  (function ($) {
    /**
     * initMap
     *
     * Renders a Google Map onto the selected jQuery element
     *
     * @date 22/10/19
     * @param $el
     * @since 	5.8.6
     * @param jQuery $el The jQuery element.
     * @return 	object The map instance.
     */
    function initMap($el) {
      // Find marker elements within map.
      const $markers = $el.find('.marker');

      // Create gerenic map.
      const mapArgs = {
        zoom: $el.data('zoom') || 16,
        mapTypeId: google.maps.MapTypeId.ROADMAP,
      };
      const map = new google.maps.Map($el[0], mapArgs);

      // Add markers.
      map.markers = [];
      $markers.each(function () {
        initMarker($(this), map);
      });

      // Center map based on markers.
      centerMap(map);

      // Return map instance.
      return map;
    }

    /**
     * initMarker
     *
     * Creates a marker for the given jQuery element and map.
     *
     * @date 22/10/19
     * @since 	5.8.6
     * @param $marker
     * @param map
     * @param jQuery $el The jQuery element.
     * @param object The map instance.
     * @return 	object The marker instance.
     */
    function initMarker($marker, map) {
      // Get position from marker.
      const lat = $marker.data('lat');
      const lng = $marker.data('lng');
      const latLng = {
        lat: parseFloat(lat),
        lng: parseFloat(lng),
      };

      // Create marker instance.
      const marker = new google.maps.Marker({
        position: latLng,
        map,
        // icon: 'https://newhomeinc1dev.wpengine.com/wp-content/uploads/2022/01/google-map-marker.png',
      });

      // Append to reference for later use.
      map.markers.push(marker);

      // If marker contains HTML, add it to an infoWindow.
      if ($marker.html()) {
        // Create info window.
        const infowindow = new google.maps.InfoWindow({
          content: $marker.html(),
        });

        // Show info window when marker is clicked.
        google.maps.event.addListener(marker, 'click', function () {
          infowindow.open(map, marker);
        });
      }
    }

    /**
     * centerMap
     *
     * Centers the map showing all markers in view.
     *
     * @date 22/10/19
     * @param map
     * @since 	5.8.6
     * @param object The map instance.
     * @return 	void
     */
    function centerMap(map) {
      // Create map boundaries from all map markers.
      const bounds = new google.maps.LatLngBounds();
      map.markers.forEach(function (marker) {
        bounds.extend({
          lat: marker.position.lat(),
          lng: marker.position.lng(),
        });
      });

      // Case: Single marker.
      if (map.markers.length == 1) {
        map.setCenter(bounds.getCenter());

        // Case: Multiple markers.
      } else {
        map.fitBounds(bounds);
      }
    }

    //Render maps on page load.
    $(document).ready(function () {
      $('.acf-map').each(function () {
        // eslint-disable-next-line no-unused-vars
        const map = initMap($(this));
      });
    });

    // $( document ).on( 'facetwp-loaded', function() {
    //   $( '.acf-map' ).each( function() {
    //     const map = initMap( $( this ) );
    //   } );
    // } );
  })(jQuery);
};
