{{--
    script[leadspace.js,banner.js,slider.js]script
    style[modules/styleguide.scss]style
    Title: Styleguide
    Description: Styleguide
    Category: Styleguide
    Icon: admin-tools
    Keywords: Styleguide
    Mode: auto
    Align: center
    PostTypes: post page
    SupportsMode: false
    SupportsMultiple: true
    SupportsAlign: left right
    SupportsAlignContent: center
    EnqueueStyle:
    EnqueueScript:
    EnqueueAssets: assetsEnqueue
    EnqueueAssetsCSS: styles/styleguide.css
    EnqueueAssetsJS: scripts/banner.js,scripts/slider.js
--}}
<!-- leadspace html goes here -->

@if (!empty($is_preview))
    @php
        /* Render screenshot for example */
        $imgUrl = \Roots\asset('images/preview/leadspace.webp')->uri();
    @endphp
    <img loading="lazy" src="{!! $imgUrl !!}" style="width:100%;height:auto;">
@else
    @php
        $blockId = $block['id'];
    @endphp

    <div class="styleguide-wrap">
        <div class="container">
            <div class="row">
                <div class="col-xl-3">
                    <aside class="styleguide-sidebar sticky-top">
                        <ul>
                            <li class="list-group-item">
                                <a href="#branding" class="anchor-link">Branding and Colors</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#typography" class="anchor-link">Typography</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#icons" class="anchor-link">Icons</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#components" class="anchor-link">Reusable Components</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#forms" class="anchor-link">Forms</a>
                            </li>
                            <li class="list-group-item">
                                <a href="#grids" class="anchor-link">Grid Systems</a>
                            </li>
                        </ul>
                    </aside>
                </div>
                <div class="col-xl-9">

                    <section class="content-wrap" id="branding">
                        <div class="row ">
                            <div class="col">
                                <header class="mb-8">
                                    <h4 class="mb-0">Branding and colors</h4>
                                </header>
                                <div class="row mb-5 gx-5 gx-lg-20">
                                    <div class="col-md-4 mb-5">
                                        <span class="bg-space d-block p-4 text-white border">
                                            <strong class="d-block">Space</strong>
                                            <small class="mb-4 d-block">
                                                <i>$space</i>
                                                <span class="font-size-12 d-block mb-1">#222222</span>
                                            </small>
                                            <code>.bg-space</code>
                                        </span>
                                    </div>
                                    <div class="col-md-4 mb-5">
                                        <span class="bg-teal d-block p-4 text-white border">
                                            <strong class="d-block">Teal</strong>
                                            <small class="mb-4 d-block">
                                                <i>$teal</i>
                                                <span class="font-size-12 d-block mb-1">#114E60</span>
                                            </small>
                                            <code>.bg-teal</code>
                                        </span>
                                    </div>
                                    <div class="col-md-4 mb-5">
                                        <span class="bg-sky d-block p-4 text-white border">
                                            <strong class="d-block">Sky</strong>
                                            <small class="mb-4 d-block">
                                                <i>$sky</i>
                                                <span class="font-size-12 d-block mb-1">#325288</span>
                                            </small>
                                            <code>.bg-sky</code>
                                        </span>
                                    </div>
                                    <div class="col-md-4 mb-5">
                                        <span class="bg-mint d-block p-4 text-dark  ">
                                            <strong class="d-block">Mint</strong>
                                            <small class="mb-4 d-block">
                                                <i>$mint</i>
                                                <span class="font-size-12 d-block mb-1">#F4FEF3</span>
                                            </small>
                                            <code>.bg-mint</code>
                                        </span>
                                    </div>
                                    <div class="col-md-4 mb-5">
                                        <span class="bg-peach d-block p-4 text-dark ">
                                            <strong class="d-block">Peach</strong>
                                            <small class="mb-4 d-block">
                                                <i>$peach</i>
                                                <span class="font-size-12 d-block mb-1">#F5CEBE</span>
                                            </small>
                                            <code>.bg-peach</code>
                                        </span>
                                    </div>
                                    <div class="col-md-4 mb-5">
                                        <span class="bg-blush d-block p-4 text-dark ">
                                            <strong class="d-block">Blush</strong>
                                            <small class="mb-4 d-block">
                                                <i>$blush</i>
                                                <span class="font-size-12 d-block mb-1">#F4EEE8</span>
                                            </small>
                                            <code>.bg-blush</code>
                                        </span>
                                    </div>
                                </div>
                                <div class="row mb-10">
                                    <hr class="my-10" />
                                    <h4 class="mt-5 mb-3">Text Colors</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h6 class="p-2 pb-3 bg-white text-sky">Text sky <code>.text-sky</code></h6>
                                            <h6 class="p-2 pb-3 bg-white text-secondary">Text Secondary
                                                <code>.text-secondary</code>
                                            </h6>
                                        </div>
                                        <div class="col-md-6">
                                            <h6 class="p-2 pb-3 bg-dark text-white">Text White <code>.text-white</code>
                                            </h6>
                                            <h6 class="p-2 pb-3 bg-light text-black">Text Black <code>.text-black</code>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="content-wrap post-content" id="typography">
                        <div class="row">
                            <div class="col">
                                <header class="mb-8">
                                    <h4 class="mb-0">Typography</h4>
                                </header>

                                <div class="mb-8 row">
                                    <div class="col-md-5">
                                        <h1 class="heading_title">h1 </h1>
                                        <p class="text-secondary ">
                                            <span class="d-block heading_text">Desktop(xl) - 55/63.24</span>
                                            <span class="d-block heading_text">Mobile(sm) - 35/40.25</span>
                                        </p>
                                    </div>
                                    <div class="col-md-7 mt-md-0 mt-4 ">
                                        <h1 class="text-">Page title</h1>
                                    </div>
                                </div>
                                <div class="mb-8 row">
                                    <div class="col-md-5">
                                        <h2 class="heading_title">h2 - Heading 2</h2>
                                        <p class="text-secondary">
                                            <span class="d-block heading_text heading_text">Desktop(xl) - 44/50.6</span>
                                            <span class="d-block heading_text  heading_text">Mobile(xs) - 28/32.2</span>
                                        </p>
                                    </div>
                                    <div class="col-md-7 mt-md-0 mt-4 ">
                                        <h2 class="text-">Section title</h2>
                                    </div>
                                </div>
                                <div class="mb-8 row">
                                    <div class="col-md-5">
                                        <h3 class="heading_title">h3 - Heading 3</h3>
                                        <p class="text-secondary">
                                            <span class="d-block heading_text">Desktop(xl) - 35/40.25</span>
                                            <span class="d-block heading_text">Mobile(xs) - 24/27.6</span>
                                        </p>
                                    </div>
                                    <div class="col-md-7 mt-md-0 mt-4 ">
                                        <h3 class="text-">Large subtitle</h3>
                                    </div>
                                </div>
                                <div class="mb-8 row">
                                    <div class="col-md-5">
                                        <h4 class="heading_title">h4 - Heading 4</h4>
                                        <p class="text-secondary">
                                            <span class="d-block heading_text">Desktop(xl) - 28/32.2</span>
                                            <span class="d-block heading_text">Mobile(xs) - 20/23</span>
                                        </p>
                                    </div>
                                    <div class="col-md-7 mt-md-0 mt-4 ">
                                        <h4 class="text-">Medium subtitle</h4>
                                    </div>
                                </div>
                                <div class="mb-8 row">
                                    <div class="col-md-5">
                                        <h5 class="heading_title">h5 - Heading 5</h5>
                                        <p class="text-secondary">
                                            <span class="d-block heading_text">Desktop(xl) - 23/28</span>
                                            <span class="d-block heading_text">Mobile(xs) - 18/20</span>
                                        </p>
                                    </div>
                                    <div class="col-md-7 mt-md-0 mt-4 ">
                                        <h5 class="text-">Small subtitle</h5>
                                    </div>
                                </div>
                                <div class="mb-8 row">
                                    <div class="col-md-5">
                                        <h6 class="heading_title">h6 - Heading 6</h6>
                                        <p class="text-secondary">
                                            <span class="d-block heading_text">Desktop(xl) - 18/21.78</span>
                                            <span class="d-block heading_text">Mobile(xs) - 16/19.36</span>
                                        </p>
                                    </div>
                                    <div class="col-md-7 mt-md-0 mt-4 ">
                                        <h6 class="">Small subtitle</h6>
                                    </div>
                                </div>

                                <div class="mb-8 row">
                                    <div class="col-md-5">
                                        <span class="body-xl">.body-xl</span>
                                        <p class="text-secondary">
                                            <span class="d-block">Desktop(xl) - 28/39.2</span>
                                            <span class="d-block">Mobile(xs) - 23/32.2</span>
                                        </p>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="body-xl">
                                            Ut enim ad minim <b>veniam</b>, quis nostrud exercitation <a
                                                href="#">ullamco</a> laboris nisi ut aliquip ex ea commodo.
                                        </div>
                                    </div>

                                </div>
                                <div class="mb-8 row">
                                    <div class="col-md-5">
                                        <span class="body-l">.body-l</span>
                                        <p class="text-secondary">
                                            <span class="d-block">Desktop(l) - 28/34.5</span>
                                            <span class="d-block">Mobile(xs) - 20/30</span>
                                        </p>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="body-l">
                                            Ut enim ad minim <b>veniam</b>, quis nostrud exercitation <a
                                                href="#">ullamco</a> laboris nisi ut aliquip ex ea commodo.
                                        </div>
                                    </div>
                                </div>
                                <div class="mb-8 row">
                                    <div class="col-md-5">
                                        <span class="body">.body</span>
                                        <p class="text-secondary">
                                            <span class="d-block">Desktop(l) - 23/34.5</span>
                                            <span class="d-block">Mobile(xs) - 16/24</span>
                                        </p>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="body">
                                            Ut enim ad minim <b>veniam</b>, quis nostrud exercitation <a
                                                href="#">ullamco</a> laboris nisi ut aliquip ex ea commodo.
                                        </div>
                                    </div>
                                </div>


                                <div class="mb-8 row">
                                    <div class="col-md-5">
                                        <span class="caption">.caption</span>
                                        <p class="text-secondary">
                                            <span class="d-block">Desktop(l) - 14/21 Weight:700</span>
                                            <span class="d-block">Mobile(xs) - 14/21 Weight:500</span>
                                        </p>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="caption">
                                            Ut enim ad minim <b>veniam</b>, quis nostrud exercitation <a
                                                href="#">ullamco</a> laboris nisi ut aliquip ex ea commodo.
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-10" />

                                <div class="row">
                                    <div class="col-md-12">
                                        <h5 class="mb-4">Inline text elements</h5>
                                        <div class="mb-6">
                                            <p class="mb-4">You can use the mark tag to <mark>highlight</mark> text.
                                            </p>
                                            <code>&lt;p&gt;You can use the mark tag to
                                                &lt;mark&gt;highlight&lt;/mark&gt; text.&lt;/p&gt;</code>
                                        </div>
                                        <div class="mb-6">
                                            <p class="mb-4"><s>This line of text is meant to be treated as no longer
                                                    accurate.</s></p>
                                            <code>&lt;p&gt;&lt;s&gt;This line of text is meant to be treated as no
                                                longer accurate.&lt;/s&gt;&lt;/p&gt;</code>
                                        </div>
                                        <div class="mb-6">
                                            <p class="mb-4"><u>This line of text will render as underlined</u></p>
                                            <code>&lt;p&gt;&lt;u&gt;This line of text will render as
                                                underlined&lt;/u&gt;&lt;/p&gt;</code>
                                        </div>
                                        <div class="mb-6">
                                            <p class="mb-4"><small>This line of text is meant to be treated as fine
                                                    print.</small></p>
                                            <code>&lt;p&gt;&lt;small&gt;This line of text is meant to be treated as fine
                                                print.&lt;/small&gt;&lt;/p&gt;</code>
                                        </div>
                                        <div class="mb-6">
                                            <p class="mb-4"><strong>This line rendered as bold text.</strong></p>
                                            <code>&lt;p&gt;&lt;strong&gt;This line rendered as bold
                                                text.&lt;/strong&gt;&lt;/p&gt;</code>
                                        </div>
                                        <div class="mb-6">
                                            <p class="mb-4"><em>This line rendered as italicized text.</em></p>
                                            <code>&lt;p&gt;&lt;em&gt;This line rendered as italicized
                                                text.&lt;/em&gt;&lt;/p&gt;</code>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-5" />

                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="mb-4">Lists</h5>
                                        <div class="row">
                                            <div class="col-md-8">
                                                <ul>
                                                    <li>
                                                        Engage with government and community partners to identify
                                                        high-priority opportunities to address
                                                        local needs and racial equity.
                                                    </li>
                                                    <li>
                                                        Design scopes of work with clearly articulated goals for
                                                        executive fellows to pursue while they are
                                                        embedded full-time for at least 12-months at the senior levels
                                                        of local government agencies.
                                                    </li>
                                                    <li>
                                                        Ensure that all projects have plans for long-term,
                                                        community-based sustainability of progress after
                                                        the fellowships conclude.
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <hr class="my-10" />

                                <div class="row">
                                    <div class="col-md-8">
                                        <h5 class="mb-4">Normal Paragraphs</h5>
                                        <p>
                                            FUSE partners with local governments and communities to create projects that
                                            advance racial equity and
                                            accelerate systems change across six issue areas: affordable housing,
                                            climate resilience, educational access,
                                            public health, justice reform, and workforce development. We embed
                                            experienced professionals from the private
                                            and social sectors to lead these year-long projects.
                                        </p>
                                        <p>
                                            Consectetur adipisicing elit. Mollitia, voluptate dolor architecto excepturi
                                            adipisci pariatur laboriosam quos
                                            quo nulla? Ab vero temporibus animi voluptatibus dicta vitae possimus
                                            eveniet aliquam quam molestiae, dolores
                                            sapiente reiciendis error vel incidunt soluta nesciunt recusandae
                                            necessitatibus, quasi maxime, voluptatum esse
                                            sint autem excepturi. Nihil, blanditiis.
                                        </p>
                                        <p><a href="#">Learn More About Our Model <i class="ms-2 icons"></i></a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>

                    <section class="content-wrap" id="icons">
                        <div class="row">
                            <div class="col">
                                <header class="mb-5">
                                    <h3 class="heading_title" class="mb-0">Icons</h3>
                                </header>

                                <div class="row mb-5">
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-linkedin font-size-30"></i>
                                        </span><code>&lt;i class="icon-linkedin"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-github font-size-30"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> </span><code>&lt;i
                                            class="icon-github"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-twitter font-size-30"></i>
                                        </span><code>&lt;i class="icon-twitter"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-facebook font-size-30"></i>
                                        </span><code>&lt;i class="icon-facebook"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-close font-size-30"></i>
                                        </span><code>&lt;i class="icon-close"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-bars font-size-30"><span
                                                    class="path1"></span><span class="path2"></span><span
                                                    class="path3"></span></i> </span><code>&lt;i
                                            class="icon-bars"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-up font-size-30"></i>
                                        </span><code>&lt;i class="icon-up"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-down font-size-30"></i>
                                        </span><code>&lt;i class="icon-down"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-left font-size-30"></i>
                                        </span><code>&lt;i class="icon-left"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-right font-size-30"></i>
                                        </span><code>&lt;i class="icon-right"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-up-45 font-size-30"></i>
                                        </span><code>&lt;i class="icon-up-right"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-caret-up font-size-30"></i>
                                        </span><code>&lt;i class="icon-caret-up"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-caret-up font-size-30"></i>
                                        </span><code>&lt;i class="icon-caret-up"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-caret-right font-size-30"></i>
                                        </span><code>&lt;i class="icon-caret-right"&gt;&lt;/i&gt;</code>
                                    </div>
                                    <div class="col-sm-6 col-md-3 mb-5">
                                        <span class="d-block py-2"><i class="icon-search font-size-30"></i>
                                        </span><code>&lt;i class="icon-search"&gt;&lt;/i&gt;</code>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>
                    <section class="content-wrap" id="components">
                        <div class="row">
                            <div class="col">
                                <header class="mb-8">
                                    <h4 class="mb-0">Reusable Components</h4>
                                </header>

                                <div class="btn-group mb-8">
                                    <div class="mb-2">
                                        <button type="button" class="btn-space">Space <i
                                                class="icon-arrow-right font-size-4"> </i></button>
                                        <button type="button" class="btn-space " disabled>Disabled <i
                                                class="icon-arrow-right font-size-4"> </i></button>
                                        <button type="button" class="btn-space active ">Active <i
                                                class="icon-arrow-right font-size-4"> </i></button>

                                    </div>
                                </div>
                                <pre class="p-0">
                                    <code>
                                        &lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-space&quot;&gt;Space&lt;/button&gt;
                                        <br>
                                        &lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-space&quot; disabled &gt;Space&lt;/button&gt;
<br>
&lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-space active&quot;  &gt;Space&lt;/button&gt;

                                    </code>
                                </pre>
                                <div class="btn-group">
                                    <div class="mb-2">
                                        <button type="button" class="btn-outline-space">Outline</button>
                                        <button type="button" class="btn-outline-space" disabled>Outline</button>
                                        <button type="button" class="btn-outline-space active">Outline</button>
                                    </div>


                                </div>
                                <pre class="p-0">
                                    <code>
                                        &lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-outline-space&quot;&gt;Space&lt;/button&gt;
                                        <br>
                                        &lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-outline-space&quot; disabled &gt;Space&lt;/button&gt;
<br>
&lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-outline-space active&quot;  &gt;Space&lt;/button&gt;

                                    </code>
                                </pre>
                                <div class="btn-group bg-dark  mb-2">
                                    <div class=" p-4 ">
                                        <button type="button" class="btn-outline-dark">Outline</button>
                                        <button type="button" class="btn-outline-dark" disabled>Outline</button>
                                        <button type="button" class="btn-outline-dark active">Outline</button>
                                    </div>
                                </div>
                                <pre class="p-0">
                                    <code>
                                        &lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-outline-dark&quot;&gt;dark&lt;/button&gt;
                                        <br>
                                        &lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-outline-dark&quot; disabled &gt;dark&lt;/button&gt;
<br>
&lt;button&nbsp;type=&quot;button&quot;&nbsp;class=&quot;btn&nbsp;btn-outline-dark active&quot;  &gt;dark&lt;/button&gt;

                                    </code>
                                </pre>
                                <div class="mt-5">
                                    <nav aria-label="Page navigation">
                                        <div class="pagination">
                                            <button class="pagination__prev">
                                                <a href="#" aria-label="Previous">
                                                    <i class="text-white icon-left"></i>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </button>
                                            <ul class="pagination__list">

                                                <li class="pagination__list__item  "><a class="pagination__list__link active"
                                                        href="#">1</a></li>
                                                <li class="pagination__list__item"><a class="pagination__list__link"
                                                        href="#">2</a></li>
                                                <li class="pagination__list__item"><a class="pagination__list__link"
                                                        href="#">3</a></li>
                                            </ul>
                                            <button class="pagination__next">
                                                <a class="" href="#" aria-label="Previous">
                                                    <i class="text-white icon-right"></i>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </button>
                                        </div>
                                    </nav>
                                </div>
                                <pre>
                                    <code>
                                        &lt;div class=&quot;pagination&quot;&gt;<br>
                                        &lt;button class=&quot;pagination__prev&quot;&gt;<br>
                                            &lt;a href=&quot;#&quot; aria-label=&quot;Previous&quot;&gt;<br>
                                                &lt;i class=&quot;text-white icon-left&quot;&gt;&lt;/i&gt;<br>
                                                &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;<br>
                                            &lt;/a&gt;<br>
                                        &lt;/button&gt;<br>
                                        &lt;ul class=&quot;pagination__list&quot;&gt;<br>

                                            &lt;li class=&quot;pagination__list__item &quot;&gt;&lt;a class=&quot;pagination__list__link active &quot;
                                                    href=&quot;#&quot;&gt;1&lt;/a&gt;&lt;/li&gt;<br>
                                            &lt;li class=&quot;pagination__list__item&quot;&gt;&lt;a class=&quot;pagination__list__link&quot;
                                                    href=&quot;#&quot;&gt;2&lt;/a&gt;&lt;/li&gt;<br>
                                            &lt;li class=&quot;pagination__list__item&quot;&gt;&lt;a class=&quot;pagination__list__link&quot;
                                                    href=&quot;#&quot;&gt;3&lt;/a&gt;&lt;/li&gt;<br>
                                        &lt;/ul&gt;<br>
                                        &lt;button class=&quot;pagination__next&quot;&gt;<br>
                                            &lt;a class=&quot;&quot; href=&quot;#&quot; aria-label=&quot;Previous&quot;&gt;<br>
                                                &lt;i class=&quot;text-white icon-right&quot;&gt;&lt;/i&gt;<br>
                                                &lt;span class=&quot;sr-only&quot;&gt;Previous&lt;/span&gt;<br>
                                            &lt;/a&gt;<br>
                                        &lt;/button&gt;<br>
                                    &lt;/div&gt;<br>
                                    </code>
                                </pre>

                            </div>
                        </div>
                    </section>

                    <section class="content-wrap" id="forms">
                        <div class="row">
                            <div class="col">
                                <header class="mb-8">
                                    <h4 class="mb-0">Form Control</h4>
                                </header>

                                <div class="bg-light p-5 mb-5" style="max-width: 850px;">
                                    <div class="row mb-5">
                                        <div class="col">
                                            <form class="wpcf7-form init wpcf7-acceptance-as-validation">
                                                <div class="row">
                                                    <div class="col-md-6 mb-5">
                                                        <input type="text" class="form-control"
                                                            placeholder="Name" />
                                                        <div data-lastpass-icon-root="true"
                                                            style="
                                                                position: relative !important;
                                                                height: 0px !important;
                                                                width: 0px !important;
                                                                float: left !important;
                                                            ">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 mb-5"><input type="text"
                                                            class="form-control" placeholder="Position" /></div>
                                                    <div class="col-md-6 mb-5">
                                                        <input type="text" class="form-control wpcf7-not-valid"
                                                            placeholder="Organization" />
                                                    </div>
                                                    <div class="col-md-6 mb-5">
                                                        <input type="text" class="form-control wpcf7-not-valid"
                                                            placeholder="Annual Operating Budget" />
                                                    </div>
                                                    <div class="col-md-6 mb-5">
                                                        <div class="custom-select">
                                                            <select aria-label="Default select example">
                                                                <option>Popular topics</option>
                                                                <option>Topic Lorem ipsum</option>
                                                                <option>Assumenda commodi, voluptates</option>
                                                                <option>Consectetur adipisicing</option>
                                                                <option>soluta provident</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-12 mb-5">
                                                        <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Message"></textarea>
                                                    </div>
                                                    <div class="col-md-10 mb-5">
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckDefault" />
                                                            <label class="form-check-label"
                                                                for="flexCheckDefault">Default checkbox</label>
                                                        </div>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="checkbox"
                                                                value="" id="flexCheckChecked"
                                                                checked="checked" />
                                                            <label class="form-check-label"
                                                                for="flexCheckChecked">Checked checkbox</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-10">
                                                        <div class="form-group"><input type="submit"
                                                                class="btn btn-primary" /></div>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                    <div class="row mb-5">
                                        <div class="col">
                                            <pre class="p-0">
                                                <code>
                                                    &lt;form&nbsp;class="wpcf7-form&nbsp;init&nbsp;wpcf7-acceptance-as-validation"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="row"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-md-5&nbsp;mb-5"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type="text"&nbsp;class="form-control"&nbsp;placeholder="Name"&nbsp;/&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-md-5&nbsp;mb-5"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type="text"&nbsp;class="form-control"&nbsp;placeholder="Position"&nbsp;/&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-md-5&nbsp;mb-5"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="custom-select"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;select&nbsp;aria-label="Default&nbsp;select&nbsp;example"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option&gt;Popular&nbsp;topics&lt;/option&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option&gt;Topic&nbsp;Lorem&nbsp;ipsum&lt;/option&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option&gt;Assumenda&nbsp;commodi,&nbsp;voluptates&lt;/option&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option&gt;Consectetur&nbsp;adipisicing&lt;/option&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;option&gt;soluta&nbsp;provident&lt;/option&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/select&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-md-10&nbsp;mb-5"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;textarea&nbsp;class="form-control"&nbsp;id="exampleFormControlTextarea1"&nbsp;rows="3"&nbsp;placeholder="Message"&gt;&lt;/textarea&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="col-md-10"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;div&nbsp;class="form-group"&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;input&nbsp;type="submit"&nbsp;class="btn&nbsp;btn-orr-blue"&nbsp;/&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&nbsp;&nbsp;&nbsp;&nbsp;&lt;/div&gt;<br>&lt;/form&gt;<br>
                                                </code>
                                            </pre>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </section>

                    {{-- <section class="content-wrap" id="grids">
                        <div class="row">
                            <div class="col">
                                <header class="mb-8">
                                    <h4 class="mb-0">Grid Information</h4>
                                </header>

                                <div class="table-responsive">
                                    <table class="table mb-4">
                                        <thead>
                                            <tr>
                                                <th scope="col"></th>
                                                <th scope="col">
                                                    xs<br />
                                                    <span class="fw-normal">&lt;576px</span>
                                                </th>
                                                <th scope="col">
                                                    sm<br />
                                                    <span class="fw-normal">≥576px</span>
                                                </th>
                                                <th scope="col">
                                                    md<br />
                                                    <span class="fw-normal">≥768px</span>
                                                </th>
                                                <th scope="col">
                                                    xl<br />
                                                    <span class="fw-normal">≥1200px</span>
                                                </th>
                                                <th scope="col">
                                                    xxl<br />
                                                    <span class="fw-normal">≥1400px</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Container <code
                                                        class="fw-normal">max-width</code></th>
                                                <td>None (auto)</td>
                                                <td>540px</td>
                                                <td>720px</td>
                                                <td>960px</td>
                                                <td>1140px</td>
                                                <td>1320px</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Class prefix</th>
                                                <td><code>.col-</code></td>
                                                <td><code>.col-sm-</code></td>
                                                <td><code>.col-md-</code></td>
                                                <td><code>.col-lg-</code></td>
                                                <td><code>.col-xl-</code></td>
                                                <td><code>.col-xxl-</code></td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row"># of columns</th>
                                                <td colspan="6">12</td>
                                            </tr>
                                            <tr>
                                                <th class="text-nowrap" scope="row">Gutter width</th>
                                                <td colspan="6">1.5rem (.75rem on left and right)</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </section> --}}

                </div>
            </div>
        </div>
    </div>

    <div class="modal modal-team fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered position-relative">
            <div class="modal-content">
                <div class="modal-body p-0">
                    <div class="modal-team-content position-relative w-100">
                        <figure class="position-absolute zindex-1">
                            <img src="images/vector-modal-team.svg" alt=" " />
                        </figure>
                        <button type="button" class="btn-close btn-close-modal position-absolute zindex-3"
                            data-bs-dismiss="modal" aria-label="Close">
                            <i class="icon-close"></i>
                        </button>
                        <div class="modal-team-wrap position-relative zindex-2 p-20">
                            <div class="team-bio d-flex align-items-center">
                                <figure class="team-bio-author-pic ratio ratio-1x1 flex-shrink-0">
                                    <img src="images/christina-wocintechchat@2x.png" alt="Christina" />
                                </figure>
                                <div class="team-bio-info flex-grow-1 ms-13">
                                    <h5 class="team-bio-name">Lorem Ipsum Doloreros</h5>
                                    <p class="team-bio-designation mt-3">Lorem Ipsum Dolor Sit Amet Title</p>
                                    <div class="post-restricted mt-6">
                                        <p>
                                            <a href="#">Lorem Ipsum Project Title Amet Consectetur Adipiscing
                                                Elit Sed Eget Leo
                                                Vehicula Tempor Justo Sed. [15]</a>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="team-description mt-16">
                                <div class="post-restricted">
                                    <p>
                                        <b>Lorem</b> ipsum dolor sit amet, consectetur adipiscing elit. Quisque nec
                                        pulvinar
                                        ipsum, a condimentum enim. Aliquam accumsan gravida nulla, a rutrum ex malesuada
                                        quis. Sed condimentum orci eu facilisis accumsan. Etiam massa turpis, placerat
                                        nec
                                        nunc vel, porta ullamcorper sem. Donec pharetra nulla id nibh convallis mattis.
                                        Maecenas at fringilla ligula.
                                    </p>
                                    <p>
                                        Praesent in nulla ac ligula interdum feugiat suscipit at dui. Donec non neque
                                        vehicula, bibendum felis ac, semper sapien. Cras dapibus risus sed gravida
                                        laoreet.
                                        Cras id nisi tincidunt, tincidunt massa vitae, tristique nisl. Mauris commodo
                                        non
                                        arcu ac sollicitudin. Aliquam quis lorem vulputate felis dapibus tempus ut
                                        fermentum. [100]
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endif
