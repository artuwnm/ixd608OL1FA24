<script>
  const makeNav = (classes = '') => {
     const links = [
         { name: 'Home', url: 'home.php' },
         { name: 'Product List', url: 'product_list.php' }
     ];

     const currentPage = window.location.pathname.split('/').pop();

     // Add "Product Details" link if we're on the product detail page
     if (currentPage !== 'product_list.php') {
         links.push({ name: 'Product Details', url: '' });
     }

     document.write(`
     <div>
        <nav class="${classes}">
           <ul>
           ${links.reduce((r, { name, url }, index) => {
              const isActive = currentPage === url ? 'active' : '';
              return r + `<li class="${isActive}"><a href="${url}">${name}</a></li>`;
           }, '')}
           </ul>
        </nav>
     </div>
     `);
  }
</script>

<div class="container">
  <script>makeNav('nav nav-crumbs')</script>
</div>
