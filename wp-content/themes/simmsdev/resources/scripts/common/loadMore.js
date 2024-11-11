export const loadMore = async (err) => {
  if (err) {
    console.error('Error loading dropdown select:', err);
    return;
  }

  document.addEventListener('DOMContentLoaded', () => {
    const loadMoreButton = document.getElementById('load-more');
    const floorplanItems = document.querySelectorAll('article.hidden');

    if (!loadMoreButton || !floorplanItems.length) {
      console.error('Load more button or items not found');
      return;
    }

    loadMoreButton.addEventListener('click', () => {
      // Filter and reveal the next three hidden items
      const hiddenItems = Array.from(floorplanItems).filter((item) =>
        item.classList.contains('hidden'),
      );

      hiddenItems.slice(0, 3).forEach((item) => {
        item.classList.remove('hidden');
      });

      // Hide the button if no more items remain hidden
      if (hiddenItems.length <= 3) {
        loadMoreButton.style.display = 'none';
      }
    });
  });
};
