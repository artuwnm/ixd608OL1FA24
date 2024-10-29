
<script>
  const makeNav = (classes = '') => {
     const links = [
         { name: 'Home', url: 'home.php' },
         { name: 'Product List', url: 'product_list.php' },
         { name: 'Product Details', url: 'product_item.php' }
     ];

     const currentPage = window.location.pathname.split('/').pop();
     
     document.write(`
     <div>
        <nav class="${classes}">
           <ul>
           ${links.reduce((r, { name, url }) => {
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