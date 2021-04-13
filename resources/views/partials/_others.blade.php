<!-- presentation site -->
  <div class="container mt-5 mb-5">
    <div class="row">
      <div class="col-12 col-md-4">
        <div class="mb-3 text-center"><i class="fas fa-shopping-cart"></i></div>
        <h1 class="h5 text-center"><b>CHOOSE OUR PRODUCTS</b></h1>
        <p class="text-justify text-muted">Lorem ipsum dolor sit amet consectetur adipisicing elit. Pariatur commodi doloribus quibusdam nam hic repellat distinctio. Perspiciatis, dolor. Laboriosam, quam!</p>
      </div>
      <div class="col-12 col-md-4">
        <div class="bg-danger h-25 w-25 offset-4 rounded rounded-circle">
          <div class="mb-3 text-center pt-3"><i class="fas fa-gift"></i></div>
        </div>
        <h1 class="h5 text-center"><b>PAY WITH ORANGE MONEY AND MOMO</b></h1>
        <p class="text-justify text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nisi animi numquam praesentium ipsa, iure repudiandae dolor ipsam, recusandae est perspiciatis.</p>
      </div>
      <div class="col-12 col-md-4">
        <div class="mb-3 text-center"><i class="fas fa-download"></i></div>
        <h1 class="h5 text-center"><b>GET INSTAND DOWNLOAD</b></h1>
        <p class="text-center text-muted">Lorem ipsum, dolor sit, amet consectetur adipisicing elit. Laudantium assumenda magnam neque explicabo! Dolores saepe assumenda at omnis, quo, reprehenderit.</p>
      </div>
      <!-- end presentation site -->

      <div class="col-12 mt-3 mb-5">
        <h1 class="display-4 text-center text-uppercase">Latest Items</h1>
      </div>

      <!-- categories star -->
      <div class="col-12 col-md-3 mb-2">
        <h1 class="h4 text-uppercase">Categories</h1>
          <ul class="list-group">
             @foreach($categories as $category)
                <li class="list-group-item list-group-item-action"><a href="#">{{$category->name}}</a></li>
              @endforeach
          </ul>
      </div>
      <!--End categories star -->

      <!-- Presentation th Products -->
        <div class="col-12 col-md-3 mb-2">
          <div class="card">
            <img src="images/1.jpg" alt="RNB" class="card-img-top">
            <div class="card-body">
              <p class="card-title">Lorem ipsum dolor, sit amet.</p>
              <p class="text-danger police">10.000 CFA</p>
              <a href="#" class="text-muted police"><i class="fas fa-eye text-warning"></i> Details</a>
            </div>
          </div>
        </div>      
        <div class="col-12 col-md-3 mb-2">
          <div class="card">
            <img src="images/2.jpg" alt="RNB" class="card-img-top">
            <div class="card-body">
              <p class="card-title">Lorem ipsum dolor, sit amet.</p>
              <p class="text-danger police">10.000 CFA</p>
              <a href="#" class="text-muted police"><i class="fas fa-eye text-warning"></i> Details</a>
            </div>
          </div>
        </div> 
        <div class="col-12 col-md-3 mb-2">
          <div class="card">
            <img src="images/3.jpg" alt="RNB" class="card-img-top">
            <div class="card-body">
              <p class="card-title">Lorem ipsum dolor, sit amet.</p>
              <p class="text-danger police">10.000 CFA</p>
              <a href="#" class="text-muted police"><i class="fas fa-eye text-warning"></i> Details</a>
            </div>
          </div>
        </div> 
      <!-- end. presentation The Products -->

      <!-- btn of see the All products -->
      <div class="col-12 col-md-6 offset-md-6 mt-5">
        <a href="{{ route('product.index') }}" class="btn btn-info btn-lg"><b>Browse All Products</b> <i class="fas fa-star"></i></a>
      </div>
      <!-- end button of seen All product-->

      <div class="ol-12 col-md-4 px-4 py-1 mt-3">
        <div class="card">
          <div class="card-body">
            <h1 class="h3 text-center pt-2 pb-2">Lorem, ipsum.</h1>
            <p class="text-muted text-justify">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Nulla earum sed nam, atque veniam pariatur quas, nihil consequatur animi? Voluptas excepturi repellendus quos cupiditate nihil?</p>
            <p class="text-center"><a href="#">-Get in Touch-</a></p>
          </div>
        </div>
      </div>

      <div class="ol-12 col-md-4 px-4 py-1 mt-3">
        <div class="card">
          <div class="card-body">
            <h1 class="h3 text-center pt-2 pb-2">Lorem, ipsum.</h1>
            <p class="text-muted text-justify">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Nulla earum sed nam, atque veniam pariatur quas, nihil consequatur animi? Voluptas excepturi repellendus quos cupiditate nihil?</p>
            <p class="text-center"><a href="#">-Get in Touch-</a></p>
          </div>
        </div>
      </div>

       <div class="ol-12 col-md-4 px-4 py-1 mt-3">
        <div class="card">
          <div class="card-body">
            <h1 class="h3 text-center pt-2 pb-2">Lorem, ipsum.</h1>
            <p class="text-muted text-justify">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Nulla earum sed nam, atque veniam pariatur quas, nihil consequatur animi? Voluptas excepturi repellendus quos cupiditate nihil?</p>
            <p class="text-center"><a href="#">-Get in Touch-</a></p>
          </div>
        </div>
      </div>

    </div>
  </div>

      
 