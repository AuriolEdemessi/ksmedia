window.addEventListener('load', function() {
    var masonryContainer = document.querySelector('.masonry-container');
    var masonry = new Masonry(masonryContainer, {
      itemSelector: '.Teasers-item',
      gutter: 20, // Adjust the gutter size based on your design
      columnWidth: '.Teasers-item',
      percentPosition: true
    });
  });

  const mobileMenuButton = document.getElementById('mobileMenuButton'); // Ciblez le bouton "Menu"
  const mobileMenu = document.getElementById('mobileMenu'); // Ciblez le menu
  
  mobileMenuButton.addEventListener('click', () => {
    mobileMenu.classList.toggle('show-menu'); // Ajoutez ou supprimez la classe "show-menu"
  });
  