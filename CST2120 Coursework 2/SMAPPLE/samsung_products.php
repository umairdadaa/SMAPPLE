
  <?php
  include('common.php');

  output_header_navigation("Samsung Products", "min_custom_index")
  ?>

  <!-- Start SAMSUNG Product -->
  <section class="bg-light">
    <div class="container py-5">
      <div class="row text-center py-3">
        <div class="col-lg-6 m-auto">
          <h1 class="h1">Samsung</h1>

          <form class="search" action="#">
            <input type="text" placeholder="Search" name="search">
            <button type="submit"><i class="fa fa-search"></i></button>
          </form>
          <div class="filters">
            <div>
              Sort By:
              <select class="sort-by">
                <option value="">Select one</option>
                <option value="price">Price</option>
              </select>
            </div>
            <div style="padding: 12px;">
              Sort Order:
              <select class="sort-order">
                <option value="">Select one</option>
                <option value="asc">Ascending</option>
                <option value="desc">Descending</option>
              </select>
            </div>
          </div>
        </div>
      </div>

      <div style="padding-bottom: 100px;"></div>

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <a href="view_product.php">
              <img src="assets/img/samsung21.png" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li>
                  <h5>Galaxy S21</h5>
                </li>
                <li class=" text-right">AED3124.99</li>
              </ul>
            </div>
            <button class="btn btn-primary p-1 m-1" type="submit">Add to Cart</button>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <a href="view_product.php">
              <img src="./assets/img/samsung21.png" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li>
                  <h5>Galaxy S21 Ultra 5G</h5>
                </li>
                <li class=" text-right">AED3124.99</li>
              </ul>
            </div>
            <button class="btn btn-primary p-1 m-1" type="submit">Add to Cart</button>

          </div>
        </div>
        <div class="col">
          <div class="card">
            <a href="view_product.php">
              <img src="./assets/img/samsung21.png" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li>
                  <h5>Galaxy S20</h5>
                </li>
                <li class=" text-right">AED3124.99</li>
              </ul>
            </div>
            <button class="btn btn-primary p-1 m-1" type="submit">Add to Cart</button>
          </div>
        </div>

  </section>

  <!-- Start SAMSUNG Product -->
  <section class="bg-light">
    <div class="container py-5">
      <div class="row text-center py-3">
      </div>

      <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
          <div class="card">
            <a href="view_product.php">
              <img src="assets/img/samsung21.png" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li>
                  <h5>Galaxy S21</h5>
                </li>
                <li class=" text-right">AED3124.99</li>
              </ul>
            </div>
            <button class="btn btn-primary p-1 m-1" type="submit">Add to Cart</button>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <a href="view_product.php">
              <img src="./assets/img/samsung21.png" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li>
                  <h5>Galaxy S21 Ultra 5G</h5>
                </li>
                <li class=" text-right">AED3124.99</li>
              </ul>
            </div>
            <button class="btn btn-primary p-1 m-1" type="submit">Add to Cart</button>

          </div>
        </div>
        <div class="col">
          <div class="card">
            <a href="view_product.php">
              <img src="./assets/img/samsung21.png" class="card-img-top" alt="...">
            </a>
            <div class="card-body">
              <ul class="list-unstyled d-flex justify-content-between">
                <li>
                  <h5>Galaxy S20</h5>
                </li>
                <li class=" text-right">AED3124.99</li>
              </ul>
            </div>
            <button class="btn btn-primary p-1 m-1" type="submit">Add to Cart</button>
          </div>
        </div>

  </section>



  <br><br><br><br>

  <?php

  output_footer()
  ?>

</body>

</html>