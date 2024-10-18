export const mobileToggle = async (err) => {
  if (err) {
    console.error('Error loading mobile navigation:', err);
    return;
  }

  // Select drawer, buttons, and icons
  const drawer = document.getElementById('drawer-menu');
  const toggleBtn = document.getElementById('drawer-toggle-btn');
  const hamburgerIcon = document.getElementById('hamburger-icon');
  const closeIcon = document.getElementById('close-icon');

  const dropdownParents = document.querySelectorAll(
    '.menu-item-has-children > a',
  );

  // Guard clauses to check if elements exist
  if (!drawer || !toggleBtn || !hamburgerIcon || !closeIcon) {
    console.error('One or more navigation elements are missing.');
    return;
  }

  // Function to open the drawer and toggle icons
  const openDrawer = () => {
    drawer.classList.remove('-translate-x-full'); // Open the drawer
    hamburgerIcon.classList.add('hidden'); // Hide hamburger icon
    closeIcon.classList.remove('hidden'); // Show close icon
  };

  // Function to close the drawer and toggle icons
  const closeDrawer = () => {
    drawer.classList.add('-translate-x-full'); // Close the drawer
    hamburgerIcon.classList.remove('hidden'); // Show hamburger icon
    closeIcon.classList.add('hidden'); // Hide close icon
  };

  // Toggle between opening and closing when the button is clicked
  toggleBtn.addEventListener('click', () => {
    if (drawer.classList.contains('-translate-x-full')) {
      openDrawer();
    } else {
      closeDrawer();
    }
  });

  // Optional: close the drawer if clicked outside the drawer area
  document.addEventListener('click', (event) => {
    if (!drawer.contains(event.target) && !toggleBtn.contains(event.target)) {
      closeDrawer(); // Close drawer when clicking outside
    }
  });

  dropdownParents.forEach((parent) => {
    parent.addEventListener('click', (event) => {
      event.preventDefault(); // Prevent default anchor behavior
      const submenu = parent.nextElementSibling; // Get the next sibling <ul>

      if (submenu) {
        submenu.classList.toggle('hidden'); // Toggle visibility
      }
    });
  });
};
