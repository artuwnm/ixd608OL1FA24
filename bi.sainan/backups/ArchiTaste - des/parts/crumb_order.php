<script>
  const makeNav = (classes = '') => {
     // Define the breadcrumb links
     const links = [
         { name: 'Store', url: 'product_list.php' },
         { name: 'Shopping Cart', url: 'cart.php' }
     ];

     // Get the current page name
     const currentPage = window.location.pathname.split('/').pop();

     // Add the "Checkout" link if we're on the checkout page
     if (currentPage === 'checkout.php') {
         links.push({ name: 'Checkout', url: 'checkout.php' });
     }

     // Generate the breadcrumb HTML
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
