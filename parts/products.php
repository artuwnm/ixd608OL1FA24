
<div class="container">

    <h2>Product List</h2>

        
     <?php

                $result = makeQuery(
                    makeConn(),
                    "
                    SELECT * 
                    FROM `Products`
                    ORDER BY `date_create` DESC
                    "
                );

                echo "<div class='grid gap'>",array_reduce($result,'productListTemplate'),"</div>";
                ?>
         
              
     </div>
               

   



    <?php include "../parts/footer.php"; ?>
</body>
</html>
