export const dropdownSelect = async (err) => {
  if (err) {
    console.error('Error loading dropdown select:', err);
    return;
  }

  // Query the dropdown parent elements, if necessary
  const dropdownParents = document.querySelectorAll(
    '.menu-item-has-children > a',
  );

  // Alpine.js component logic for the dropdown select
  window.dropdownSelect = (
    options = [],
    placeholder = 'Select an option',
    selected = null,
  ) => ({
    isOpen: false,
    selectedOption: options.find((option) => option.value === selected) || null,
    placeholder: placeholder,
    options: options,

    toggleDropdown() {
      this.isOpen = !this.isOpen;
    },

    selectOption(option) {
      this.selectedOption = option;
      this.isOpen = false;
    },
  });
};
