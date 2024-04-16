@include('layouts._partials.header')
@include('layouts.includes.menu-weew')

    <!-- Breadcrumb Section Start -->
    <section class="breadcrumb-section pt-0">
        <div class="container-fluid-lg">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb-contain">
                        <h2>Blog Details Page</h2>
                        <nav>
                            <ol class="breadcrumb mb-0">
                                <li class="breadcrumb-item">
                                    <a href="index.html">
                                        <i class="fa-solid fa-house"></i>
                                    </a>
                                </li>
                                <li class="breadcrumb-item">Blog</li>
                                <li class="breadcrumb-item active">Blog Details</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Blog Details Section Start -->
    <section class="blog-section section-b-space">
        <div class="container-fluid-lg">
            <div class="row g-sm-4 g-3">

                <div class="col-xxl-9 col-xl-8 col-lg-7 ratio_50">
                    <div class="blog-detail-image rounded-3 mb-5">
                        <img src="{{ asset('images/blog-post/'.$blogs->image_450x300) }}" class="bg-img blur-up lazyload" alt="">
                        <div class="blog-image-contain">
                            <ul class="contain-list">
                                <li>Canabis</li>
                                <li>Amistad</li>
                                <li>Vida</li>
                            </ul>
                            <h2>{{ $blogs->title }}</h2>
                            <ul class="contain-comment-list">
                                <li>
                                    <div class="user-list">
                                        <i data-feather="user"></i>
                                        <span>{{ $blogs->editor }}</span>
                                    </div>
                                </li>

                                <li>
                                    <div class="user-list">
                                        <i data-feather="calendar"></i>
                                        <span>{{ $blogs->created_at->format('Y-m-d') }}</span>
                                    </div>
                                </li>

                                {{-- <li>
                                    <div class="user-list">
                                        <i data-feather="message-square"></i>
                                        <span>82 Comment</span>
                                    </div>
                                </li> --}}

                            </ul>
                        </div>
                    </div>

                    <div class="blog-detail-contain mt-5">
                        <p class="mb-5">{!! nl2br($blogs->description) !!}</p>

                        <!-- Enlaces de paginación para otros blogs -->
                    <div class="container mt-2 mb-5">
                        <div class="row">
                            <div class="col text-center">
                                @if ($prevBlog)
                                    <a href="{{ route('blog-details', ['id' => $prevBlog->id]) }}" class="mr-3 display-6">Anterior</a>
                                @endif
                                
                                @if ($prevBlog && $nextBlog)
                                    <span class="text-muted display-6">|</span>
                                @endif
                                
                                @if ($nextBlog)
                                    <a href="{{ route('blog-details', ['id' => $nextBlog->id]) }}" class="ml-3 display-6">Siguiente</a>
                                @endif
                            </div>
                        </div>
                    </div>

                        <div class="blog-details-quote mt-4">
                            <h3>El consumo responsable del cannabis implica entender sus efectos, respetar los límites personales y sociales, y tomar decisiones informadas que promuevan la salud y el bienestar.</h3>
                            <h5>por Chat GPT</h5>
                        </div>

                        {{-- <p>Agile currying favour pulling teeth collaboration through advanced technology. Everyone
                            thinks
                            the soup tastes better after they pissed in it can you put it on my calendar?.
                            Low-hanging fruit. Data-point blue sky yet first-order optimal strategies shotgun approach.
                            Land it in region. Idea shower prairie dogging a set of certitudes based on deductions
                            founded on false premise nor three-martini lunch. Baseline. Run it up the flag pole big boy
                            pants so game-plan, and it just needs more cowbell pixel pushing, but we need to make the
                            new version clean and sexy. Back of the net we need a recap by eod, cob or whatever comes
                            first for we need evergreen content.</p>

                        <p class="mb-0">We need to harvest synergy effects land it in region nor time to open the
                            kimono, but we need to touch base off-line before we fire the new ux experience. Moving the
                            goalposts. Lean into that problem we need to get all stakeholders up to speed and in the
                            right place. Get all your ducks in a row this proposal is a win-win situation which will
                            cause a stellar paradigm shift, and produce a multi-fold increase in deliverables or dunder
                            muffin for high-level nor gain alignment into the weeds. Open door policy. Goalposts
                            player-coach but quick win, so effort made was a lot for game-plan in an ideal world
                            commitment to the cause . Service as core &innovations as power makes our brand meeting
                            assassin core competencies run it up the flagpole, ping the boss and circle back but zoom
                            meeting at 2:30 today.
                        </p> --}}

                    </div>

                    
                    
                    


                    {{-- <div class="comment-box overflow-hidden">
                        <div class="leave-title">
                            <h3>Comments</h3>
                        </div>

                        <div class="user-comment-box">
                            <ul>
                                <li>
                                    <div class="user-box border-color">
                                        <div class="reply-button">
                                            <i class="fa-solid fa-reply"></i>
                                            <span class="theme-color">Reply</span>
                                        </div>
                                        <div class="user-image">
                                            <img src="../assets/images/inner-page/user/1.jpg" class="img-fluid blur-up lazyload" alt="">
                                            <div class="user-name">
                                                <h6>30 Jan, 2022</h6>
                                                <h5 class="text-content">Glenn Greer</h5>
                                            </div>
                                        </div>

                                        <div class="user-contain">
                                            <p>"This proposal is a win-win situation which will cause a stellar paradigm
                                                shift, and produce a multi-fold increase in deliverables a better
                                                understanding"</p>
                                        </div>
                                    </div>
                                </li>

                                <li>
                                    <div class="user-box border-color">
                                        <div class="reply-button">
                                            <i class="fa-solid fa-reply"></i>
                                            <span class="theme-color">Reply</span>
                                        </div>
                                        <div class="user-image">
                                            <img src="../assets/images/inner-page/user/2.jpg" class="img-fluid blur-up lazyload" alt="">
                                            <div class="user-name">
                                                <h6>30 Jan, 2022</h6>
                                                <h5 class="text-content">Glenn Greer</h5>
                                            </div>
                                        </div>

                                        <div class="user-contain">
                                            <p>"Yeah, I think maybe you do. Right, gimme a Pepsi free. Of course, the
                                                Enchantment Under The Sea Dance they're supposed to go to this, that's
                                                where they kiss for the first time. You'll find out. Are you sure about
                                                this storm?"</p>
                                        </div>
                                    </div>
                                </li>

                                <li class="li-padding">
                                    <div class="user-box">
                                        <div class="reply-button">
                                            <i class="fa-solid fa-reply"></i>
                                            <span class="theme-color">Reply</span>
                                        </div>
                                        <div class="user-image">
                                            <img src="../assets/images/inner-page/user/3.jpg" class="img-fluid blur-up lazyload" alt="">
                                            <div class="user-name">
                                                <h6>30 Jan, 2022</h6>
                                                <h5 class="text-content">Glenn Greer</h5>
                                            </div>
                                        </div>

                                        <div class="user-contain">
                                            <p>"Cheese slices goat cottage cheese roquefort cream cheese pecorino cheesy
                                                feet when the cheese comes out everybody's happy"</p>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div> --}}

                    {{-- <div class="leave-box">
                        <div class="leave-title mt-0">
                            <h3>Leave Comment</h3>
                        </div>

                        <div class="leave-comment">
                            <div class="comment-notes">
                                <p class="text-content mb-4">Your email address will not be published. Required fields
                                    are marked</p>
                            </div>
                            <div class="row g-3">
                                <div class="col-xxl-4 col-lg-12 col-sm-6">
                                    <div class="blog-input">
                                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Full Name">
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-lg-12 col-sm-6">
                                    <div class="blog-input">
                                        <input type="email" class="form-control" id="exampleFormControlInput2" placeholder="Enter Email Address">
                                    </div>
                                </div>

                                <div class="col-xxl-4 col-lg-12 col-sm-6">
                                    <div class="blog-input">
                                        <input type="url" class="form-control" id="exampleFormControlInput3" placeholder="Enter URL">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <div class="blog-input">
                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Comments"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="form-check d-flex mt-4 p-0">
                                <input class="checkbox_animated" type="checkbox" value="" id="flexCheckDefault">
                                <label class="form-check-label text-content" for="flexCheckDefault">
                                    <span class="color color-1"> Save my name, email, and website in this
                                        browser for the next time I comment.</span>
                                </label>
                            </div>

                            <button class="btn btn-animation ms-xxl-auto mt-xxl-0 mt-3 btn-md fw-bold">Post
                                Comment</button>
                        </div>
                    </div> --}}
                </div>
                @include('layouts.includes.blog-left-section')
            </div>
        </div>
    </section>
    <!-- Blog Details Section End -->

    @include('layouts._partials.footer')