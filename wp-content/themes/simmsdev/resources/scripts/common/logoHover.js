document.addEventListener('DOMContentLoaded', () => {
  const logoLink = document.querySelector('.desktop-logo .custom-logo-link');
  const originalLogo = document.querySelector('.desktop-logo .custom-logo');

  if (logoLink && originalLogo) {
    const hoverImageUrl =
      '/wp-content/uploads/2024/12/Simms-Logo_Color-White.png';
    const originalImageUrl = originalLogo.src;

    // Change image on mouse enter
    logoLink.addEventListener('mouseenter', () => {
      originalLogo.src = hoverImageUrl;
    });

    // Revert to original image on mouse leave
    logoLink.addEventListener('mouseleave', () => {
      originalLogo.src = originalImageUrl;
    });
  }
});
