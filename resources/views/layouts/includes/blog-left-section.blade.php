<div class="col-xxl-3 col-xl-4 col-lg-5 order-lg-1 mt-5">
    <div class="left-sidebar-box wow fadeInUp">
        <div class="left-search-box">
            <div class="search-box">
                <input type="search" class="form-control" id="exampleFormControlInput1" placeholder="Buscar post">
            </div>
        </div>

        <div class="accordion left-accordion-box" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne">
                        Recent Post
                    </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                    <div class="accordion-body pt-0">
                       
                        <div class="recent-post-box">
                            @foreach ($recent_posts as $recent_post)
                            <div class="recent-box">
                                <a href="blog-detail.html" class="recent-image">
                                    <img src="{{ asset('images/blog-post/'.$recent_post->image_450x300) }}" class="img-fluid blur-up lazyload" alt="">
                                </a>

                                <div class="recent-detail">
                                    <a href="blog-detail.html">
                                        <h5 class="recent-name">{{ $recent_post->title }}</h5>
                                    </a>
                                    <h6>{{ $recent_post->created_at->format('Y-m-d') }} <i data-feather="thumbs-up"></i></h6>
                                </div>
                            </div>
                            @endforeach
                        </div>
               
                      
                    </div>
                </div>
            </div>

            {{-- <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo">Category</button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse collapse show">
                    <div class="accordion-body p-0">
                        <div class="category-list-box">
                            <ul>
                                <li>
                                    <a href="blog-list.html">
                                        <div class="category-name">
                                            <h5>Latest Recipes</h5>
                                            <span>10</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="blog-list.html">
                                        <div class="category-name">
                                            <h5>Diet Food</h5>
                                            <span>6</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="blog-list.html">
                                        <div class="category-name">
                                            <h5>Low calorie Items</h5>
                                            <span>8</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="blog-list.html">
                                        <div class="category-name">
                                            <h5>Cooking Method</h5>
                                            <span>9</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="blog-list.html">
                                        <div class="category-name">
                                            <h5>Dairy Free</h5>
                                            <span>12</span>
                                        </div>
                                    </a>
                                </li>

                                <li>
                                    <a href="blog-list.html">
                                        <div class="category-name">
                                            <h5>Vegetarian Food</h5>
                                            <span>10</span>
                                        </div>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}

            {{-- <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree">Product Tags</button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse collapse show">
                    <div class="accordion-body pt-0">
                        <div class="product-tags-box">
                            <ul>

                                <li>
                                    <a href="javascript:void(0)">Fruit Cutting</a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)">Meat</a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)">organic</a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)">cake</a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)">pick fruit</a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)">backery</a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)">organix food</a>
                                </li>

                                <li>
                                    <a href="javascript:void(0)">Most Expensive Fruit</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div class="accordion-item">
                <h2 class="accordion-header" id="panelsStayOpen-headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseFour">Trending Products</button>
                </h2>
                <div id="panelsStayOpen-collapseFour" class="accordion-collapse collapse collapse show">
                    <div class="accordion-body">
                        <ul class="product-list product-list-2 border-0 p-0">
                            <li>
                                <div class="offer-product">
                                    <a href="shop-left-sidebar.html" class="offer-image">
                                        <img src="../assets/images/vegetable/product/23.png" class="blur-up lazyload" alt="">
                                    </a>

                                    <div class="offer-detail">
                                        <div>
                                            <a href="shop-left-sidebar.html">
                                                <h6 class="name">Meatigo Premium Goat Curry</h6>
                                            </a>
                                            <span>450 G</span>
                                            <h6 class="price theme-color">$ 70.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="offer-product">
                                    <a href="shop-left-sidebar.html" class="offer-image">
                                        <img src="../assets/images/vegetable/product/24.png" class="blur-up lazyload" alt="">
                                    </a>

                                    <div class="offer-detail">
                                        <div>
                                            <a href="shop-left-sidebar.html">
                                                <h6 class="name">Dates Medjoul Premium Imported</h6>
                                            </a>
                                            <span>450 G</span>
                                            <h6 class="price theme-color">$ 40.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <li class="mb-0">
                                <div class="offer-product">
                                    <a href="shop-left-sidebar.html" class="offer-image">
                                        <img src="../assets/images/vegetable/product/26.png" class="blur-up lazyload" alt="">
                                    </a>

                                    <div class="offer-detail">
                                        <div>
                                            <a href="shop-left-sidebar.html">
                                                <h6 class="name">Apple Red Premium Imported</h6>
                                            </a>
                                            <span>1 KG</span>
                                            <h6 class="price theme-color">$ 80.00</h6>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>