
<script>
  const makeNav = (classes = '') => {
     const links = [
         { name: 'Home', url: 'home.php' },
         { name: 'Shopping Cart', url: 'cart.php' },
         { name: 'Checkout', url: 'checkout.php' }
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