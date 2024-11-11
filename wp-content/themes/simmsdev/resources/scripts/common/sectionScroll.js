export const initScrollToSection = () => {
  return {
    showMenu: false,
    init() {
      const scrollToSection = document.getElementById('scroll-to-section');
      const sections = [
        'overview',
        'description',
        'sitemap',
        'pointsofinterest',
        'availablehomes',
        'floorplans',
        'location',
      ];
      const offset = 105; // Adjust for the navbar height

      window.addEventListener('scroll', () => {
        // Show or hide the scroll menu based on scroll position
        const overviewSection = document.getElementById('overview');
        if (overviewSection && scrollToSection) {
          if (
            window.scrollY >=
            overviewSection.offsetTop + overviewSection.offsetHeight
          ) {
            this.showMenu = true;
            scrollToSection.classList.add('fixed');
            scrollToSection.classList.remove('-translate-y-full', 'hidden');
          } else {
            this.showMenu = false;
            scrollToSection.classList.remove('fixed');
            scrollToSection.classList.remove('-translate-y-full', 'hidden');
            // scrollToSection.classList.add('-translate-y-full');
          }
        }

        // Check each section to highlight the active link
        sections.forEach((sectionId) => {
          const section = document.getElementById(sectionId);
          const link = document.querySelector(
            `.scroll-link[href="#${sectionId}"]`,
          );
          if (section && link) {
            const sectionTop = section.offsetTop - offset;
            const sectionBottom = sectionTop + section.offsetHeight;

            if (
              window.scrollY >= sectionTop &&
              window.scrollY < sectionBottom
            ) {
              link.classList.add('active');
            } else {
              link.classList.remove('active');
            }
          }
        });
      });

      // Smooth scroll on link click
      document.querySelectorAll('.scroll-link').forEach((link) => {
        link.addEventListener('click', (event) => {
          event.preventDefault();
          const targetId = link.getAttribute('href').substring(1);
          const targetElement = document.getElementById(targetId);
          if (targetElement) {
            window.scrollTo({
              top: targetElement.offsetTop - offset,
              behavior: 'smooth',
            });
          }
        });
      });
    },
  };
};
