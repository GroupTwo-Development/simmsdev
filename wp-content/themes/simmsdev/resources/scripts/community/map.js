// community/map.js
import L from 'leaflet';
import 'leaflet/dist/leaflet.css';
import shadowUrl from '/images/marker-shadow.png';
import iconUrl from '/images/marker-icon.png';
import iconRetinaUrl from '/images/marker-icon-2x.png';
// Manually set the paths for marker icons
delete L.Icon.Default.prototype._getIconUrl;

L.Icon.Default.mergeOptions({
  iconRetinaUrl,
  iconUrl,
  shadowUrl,
  iconSize: [25, 41],
  iconAnchor: [12, 41],
  popupAnchor: [1, -34],
  tooltipAnchor: [16, -28],
  shadowSize: [41, 41],
});

export const initCommunityMap = () => {
  const mapContainer = document.getElementById('communitymap');
  if (
    mapContainer &&
    window.communityLocations &&
    window.communityLocations.length > 0
  ) {
    const firstLocation = window.communityLocations[0];
    const map = L.map(mapContainer).setView(
      [firstLocation.latitude, firstLocation.longitude],
      13,
    );

    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
      maxZoom: 19,
      attribution: '© OpenStreetMap',
    }).addTo(map);

    // Clear existing markers
    map.eachLayer((layer) => {
      if (layer instanceof L.Marker) {
        map.removeLayer(layer);
      }
    });

    // Add markers for each community location
    window.communityLocations.forEach((location) => {
      console.log(location);

      L.marker([location.latitude, location.longitude])
        .addTo(map)
        .bindPopup(`<strong>${location.title}</strong>`);
    });

    // Ensure map resizes correctly if toggled
    setTimeout(() => map.invalidateSize(), 0);
  }
};
