   <script>
      const makeNav = (classes='') => {
         const links = ['Home', 'Store', 'Cart', 'Account'];
         const hrefs = ['home.php', 'product_list.php', 'cart.php', 'account.php'];  
         let ran = Math.floor(Math.random() * links.length);

         const currentPage = window.location.pathname.split('/').pop(); 

         const cartBadge = "<?= markeCartBadge(); ?>"; 

         document.write(`
         <div>
            <nav class="${classes}">
               <ul>
               ${links.reduce((r, o, i) => {
                  const isActive = currentPage === hrefs[i] ? 'active' : ''; 

                  if (o === "Cart") {
                     return r + `<li class="${isActive}">
                                    <a href="${hrefs[i]}">
                                       <span>Cart</span>
                                       <span class="badge">${cartBadge}</span>
                                    </a>
                                 </li>`;
                  } else {
                     return r + `<li class="${isActive}"><a href="${hrefs[i]}">${o}</a></li>`;
                  }
               }, '')}
               </ul>
            </nav>
         </div>
         `);
      }
   </script>

   <div>
      <script>makeNav('nav nav-block nav-material')</script>
   </div>