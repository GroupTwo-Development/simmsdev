/* global FWP */
export const initFooterContent = async (err) => {
  if (err) {
    console.error(err);
    return;
  }

  const defaultTitle = 'Welcome to SimsDev';
  const defaultContent =
    '<p>This body copy paragraph can be up to 500 characters. It should reflect whatever topic is written above in the headline. In home building, creativity shapes dreams into tangible sanctuaries. Each nail, each board is a step toward realizing visions—a harmonious blend of purpose and design. From foundation to finish every detail is crafted with care, transforming blueprints into havens of comfort and joy. Homes become more than structures; they’re where laughter echoes and love fills every corner.</p>';
  const defaultImage = '/wp-content/uploads/2024/10/Component-27-–-14.jpg';

  // Function to set default content
  const setDefaultContent = () => {
    document.getElementById('footer-text').querySelector('h1').textContent =
      defaultTitle;
    document.getElementById('footer-description').innerHTML = defaultContent;
    document.getElementById('footer-image').src = defaultImage;
  };

  document.addEventListener('facetwp-loaded', function () {
    // Check for mobile and desktop facet data based on screen size
    const selectedArea =
      window.innerWidth < 1024
        ? FWP.facets['areas'] // Mobile
        : FWP.facets['areas_desktop']; // Desktop

    // Check if there is a selected area; if not, set default content
    if (!selectedArea || selectedArea.length === 0) {
      setDefaultContent();
      return;
    }

    // Check if there is a selected area; if not, set default content
    if (!selectedArea || selectedArea.length === 0) {
      setDefaultContent();
      return;
    }

    // Fetch new footer content based on selected market area
    const area = selectedArea[0]; // Assuming single selection
    console.log('Selected Area:', selectedArea);

    fetch(`/wp-json/wp/v2/search-footer-content?area=${area}`)
      .then((response) => {
        if (!response.ok) {
          throw new Error(
            `Network response was not ok: ${response.statusText}`,
          );
        }
        return response.json();
      })
      .then((data) => {
        console.log('Fetched data:', data);
        // Update footer content dynamically
        document.getElementById('footer-text').querySelector('h1').textContent =
          'Building communities in ' + (data.title || defaultTitle);
        document.getElementById('footer-description').innerHTML =
          `<p>${data.description}</p>` || defaultContent;
        document.getElementById('footer-image').src =
          data.image_url || defaultImage;
      })
      .catch((error) => {
        console.error('Error fetching footer content:', error);
        // Set default content if there's an error in fetching data
        setDefaultContent();
      });
  });

  // Set default content on initial page load
  setDefaultContent();
};
