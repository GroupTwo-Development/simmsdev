/* global Alpine */
import L from 'leaflet';
import 'leaflet/dist/leaflet.css';

export const communityMap = () => {
  document.addEventListener('alpine:init', () => {
    Alpine.data('leafletMap', () => ({
      map: null,
      initMap() {
        if (!this.map) {
          this.map = L.map('communitymap').setView([51.505, -0.09], 13);
          L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 19,
            attribution: '© OpenStreetMap',
          }).addTo(this.map);
        }
      },
      showMap() {
        this.initMap(); // Call the map initialization when the component is shown
      },
    }));
  });
};
