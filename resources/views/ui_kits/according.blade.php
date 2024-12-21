@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/prism.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Accordion</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Ui Kits</li>
                        <li class="breadcrumb-item active">Accordion</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-Fluid Starts-->
    <div class="container-fluid accordion-page">
        <div class="row">
            <div class="col-md-6">
                <!-- Simple accordion-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Simple accordion</h4>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icon-more-alt"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                        <p class="desc mb-0 mt-1"><span>Use</span><code>.accordion, accordion-light-*</code><span>click
                                accordion below to expand/collapse accordion content, you can use different color.</span>
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="accordion" id="simpleaccordion">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed accordion-light-primary active" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false"
                                        aria-controls="collapseOne">What do web designers do ?</button>
                                </h2>
                                <div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne"
                                    data-bs-parent="#simpleaccordion">
                                    <div class="accordion-body">
                                        <p class="mb-0">Web design<em class="font-danger"> identifies the goals</em> of a
                                            website or webpage and promotes accessibility for all potential users. This
                                            process involves organizing content and images across a series of pages and
                                            integrating applications and other interactive elements.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button accordion-light-primary active collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">What is the use of web design ?</button>
                                </h2>
                                <div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo"
                                    data-bs-parent="#simpleaccordion">
                                    <div class="accordion-body">
                                        <p class="mb-3"><strong> Search engine optimization: </strong> Search engine
                                            optimization (SEO) is a method for improving the chances for a website to be
                                            found by search engines. Web design codes information in a way that search
                                            engines can read it. It can boost business because the site shows up on the top
                                            search result pages, helping people to find it.</p>
                                        <p class="mb-3"><strong> Mobile responsiveness:</strong> Mobile responsiveness is
                                            the feature of a website that allows it to display on a mobile device and adapt
                                            its layout and proportions to be legible. Web design ensures sites are easy to
                                            view and navigate from mobile devices. When a website is well-designed and
                                            mobile-responsive, customers can reach the business with ease.</p>
                                        <p class="mb-0"><strong> Improved sales:</strong>Increasing the number of items
                                            sold or acquiring more active customers are objectives of a compelling website.
                                            As web design reaches targeted customers and search engines, it helps the
                                            business make conversions on their site and improve its sales.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed accordion-light-primary active" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">What are the elements of web design ?</button>
                                </h2>
                                <div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree"
                                    data-bs-parent="#simpleaccordion">
                                    <div class="accordion-body">
                                        <p class="mb-0">The web design process allows designers to adjust to any
                                            preferences and provide effective solutions. There are many standard components
                                            of every web design, including:</p>
                                        <ul class="d-flex flex-column gap-2 accordions-content">
                                            <li>1. Layout</li>
                                            <li>2. Images</li>
                                            <li>3. Visual hierarchy</li>
                                            <li>4. Color scheme</li>
                                            <li>5. Typography</li>
                                            <li>6. Navigation</li>
                                            <li>7. Readability</li>
                                            <li>8. Content</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="according">&lt;!--You can use .accordion-collapse with .show class then show accordions.--&gt;
    &lt;div class="accordion dark-accordion" id="simpleaccordion"&gt;
    &lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header" id="headingOne"&gt;
    &lt;button class="accordion-button collapsed accordion-light-primary font-primary active" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"&gt;What do web designers do?&lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;/h2&gt;
    &lt;div class="accordion-collapse collapse show" id="collapseOne" aria-labelledby="headingOne" data-bs-parent="#simpleaccordion"&gt;
    &lt;div class="accordion-body"&gt;
    &lt;p&gt;
    Web design&lt;em class="txt-danger"&gt; identifies the goals&lt;/em&gt; of a website or webpage and promotes accessibility for all potential users. This process involves organizing content and images across a series of pages and integrating applications and other interactive elements.&lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header" id="headingTwo"&gt;
    &lt;button class="accordion-button collapsed accordion-light-primary font-primary active" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"&gt;What is the use of web design?&lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;/h2&gt;
    &lt;div class="accordion-collapse collapse" id="collapseTwo" aria-labelledby="headingTwo" data-bs-parent="#simpleaccordion"&gt;
    &lt;div class="accordion-body"&gt;
    &lt;p class="mb-3"&gt;&lt;strong&gt; Search engine optimization: &lt;/strong&gt; Search engine optimization (SEO) is a method for improving the chances for a website to be found by search engines. Web design codes information in a way that search engines can read it. It can boost business because the site shows up on the top search result pages, helping people to find it.&lt;/p&gt;
    &lt;p class="mb-3"&gt;&lt;strong&gt; Mobile responsiveness:&lt;/strong&gt; Mobile responsiveness is the feature of a website that allows it to display on a mobile device and adapt its layout and proportions to be legible. Web design ensures sites are easy to view and navigate from mobile devices. When a website is well-designed and mobile-responsive, customers can reach the business with ease.&lt;/p&gt;
    &lt;p&gt;&lt;strong&gt; Improved sales:&lt;/strong&gt;Increasing the number of items sold or acquiring more active customers are objectives of a compelling website. As web design reaches targeted customers and search engines, it helps the business make conversions on their site and improve its sales.&lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header" id="headingThree"&gt;
    &lt;button class="accordion-button collapsed accordion-light-primary font-primary active" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"&gt;What are the elements of web design?&lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;/h2&gt;
    &lt;div class="accordion-collapse collapse" id="collapseThree" aria-labelledby="headingThree" data-bs-parent="#simpleaccordion"&gt;
    &lt;div class="accordion-body"&gt;
    &lt;p&gt;
    The web design process allows designers to adjust to any preferences and provide effective solutions. There are many standard components of every web design, including:
    &lt;ul class="d-flex flex-column gap-2 accordions-content"&gt;
    &lt;li&gt;--&gt; Layout&lt;/li&gt;
    &lt;li&gt;--&gt; Images&lt;/li&gt;
    &lt;li&gt;--&gt; Visual hierarchy&lt;/li&gt;
    &lt;li&gt;--&gt; Color scheme&lt;/li&gt;
    &lt;li&gt;--&gt; Typography&lt;/li&gt;
    &lt;li&gt;--&gt; Navigation&lt;/li&gt;
    &lt;li&gt;--&gt; Readability&lt;/li&gt;
    &lt;li&gt;--&gt; Content&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Flush accordion-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Flush Accordion</h4>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icon-more-alt"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                        <p class="desc mb-0 mt-1"><span>to remove the default </span><code>background-color , some
                                borders</code><span>and some rounded corners to render accordions edge-to-edge with their
                                parent container..</span></p>
                    </div>
                    <div class="card-body">
                        <div class="accordion accordion-flush" id="accordionFlushExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseOne" aria-expanded="true"
                                        aria-controls="flush-collapseOne">Flush accordion Item #1</button>
                                </h2>
                                <div class="accordion-collapse collapse show" id="flush-collapseOne"
                                    aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended
                                        to demonstrate the <code>.accordion-flush</code> class. This is the first
                                        item&apos;s accordion body. Let's imagine this being filled with some actual
                                        content. that use for remove default border and background colors.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseTwo" aria-expanded="false"
                                        aria-controls="flush-collapseTwo">Flush accordion Item #2</button>
                                </h2>
                                <div class="accordion-collapse collapse" id="flush-collapseTwo"
                                    aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended
                                        to demonstrate the <code>.accordion-flush</code> class. This is the second
                                        item&apos;s accordion body. Let&apos;s imagine this being filled with some actual
                                        content.</div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#flush-collapseThree" aria-expanded="false"
                                        aria-controls="flush-collapseThree">Flush accordion Item #3</button>
                                </h2>
                                <div class="accordion-collapse collapse" id="flush-collapseThree"
                                    aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                                    <div class="accordion-body">Placeholder content for this accordion, which is intended
                                        to demonstrate the <code>.accordion-flush</code> class. This is the third
                                        item&apos;s accordion body. Nothing more exciting happening here in terms of
                                        content, but just filling up the space to make it look, at least at first glance, a
                                        bit more representative of how this would look in a real-world application.</div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="flush-according">&lt;!--You can use .accordion-collapse with .show class then show accordions.--&gt;
    &lt;div class="accordion accordion-flush dark-accordion" id="accordionFlushExample"&gt;
    &lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header" id="flush-headingOne"&gt;
    &lt;button class="accordion-button collapsed txt-success accordion-light-success active" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne"&gt;What is bootstrap?&lt;/button&gt;
    &lt;/h2&gt;
    &lt;div class="accordion-collapse collapse show" id="flush-collapseOne" aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample"&gt;
    &lt;div class="accordion-body"&gt;
    &lt;ul class="d-flex flex-column gap-1 accordions-content"&gt;
    &lt;li&gt;--&gt; Bootstrap is the most popular HTML, CSS and JavaScript framework for developing a responsive and mobile friendly website.&lt;/li&gt;
    &lt;li&gt;--&gt; It is absolutely free to download and use.&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header" id="flush-headingTwo"&gt;
    &lt;button class="accordion-button collapsed txt-success accordion-light-success" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo"&gt;Why Should You Use Bootstrap?&lt;/button&gt;
    &lt;/h2&gt;
    &lt;div class="accordion-collapse collapse" id="flush-collapseTwo" aria-labelledby="flush-headingTwo" data-bs-parent="#accordionFlushExample"&gt;
    &lt;div class="accordion-body"&gt;
    &lt;ul class="d-flex flex-column gap-2 accordions-content"&gt;
    &lt;li&gt;First and foremost, Bootstrap is easy to learn. Due to its popularity, plenty of tutorials and online forums are available to help you get started.&lt;/li&gt;
    &lt;li&gt;One of the reasons why Bootstrap is so popular among web developers and web designers is that it has a simple file structure. Its files are compiled for easy access, and it only requires basic knowledge of HTML, CSS, and JS to modify them.&lt;/li&gt;
    &lt;li&gt;You can also use themes for popular content management systems as learning tools. For example, most WordPress themes were developed using Bootstrap, which any beginner web developer can access. &lt;/li&gt;
    &lt;li&gt;To increase the site's page load time, Bootstrap minifies the CSS and JavaScript files. Additionally, Bootstrap maintains consistency across the syntax between websites and developers, which is ideal for team-based projects.&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header" id="flush-headingThree"&gt;
    &lt;button class="accordion-button collapsed txt-success accordion-light-success" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree"&gt;Bootstrap Image System&lt;/button&gt;
    &lt;/h2&gt;
    &lt;div class="accordion-collapse collapse" id="flush-collapseThree" aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample"&gt;
    &lt;div class="accordion-body"&gt;
    &lt;ul class="d-flex flex-column gap-2 accordions-content"&gt;
    &lt;li&gt;Bootstrap handles the image display and responsiveness with its predefined HTML and CSS rules.&lt;/li&gt;
    &lt;li&gt;Adding the .img-responsive class will automatically resize images based on the users' screen size. This will benefit your website&rsquo;s performance, as reducing image sizes is part of the site optimization process.&lt;/li&gt;
    &lt;li&gt;Bootstrap also provides additional classes like .img-circle and .img-rounded, which help to modify the images' shape.&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <!-- Multiple collapse accordion-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Multiple collapse accordion</h4>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icon-more-alt"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                        <p class="desc mb-0 mt-1"><span>A</span><code>&lt;button&gt;</code><span>can show and hide multiple
                                elements by referencing them with a selector in its href or data-bs-target attribute.</span>
                        </p>
                    </div>
                    <div class="card-body">
                        <div class="common-flex"><a class="btn btn-primary collapsed" data-bs-toggle="collapse"
                                href="#multiCollapseExample1" role="button" aria-expanded="false"
                                aria-controls="multiCollapseExample1">Toggle first element</a>
                            <button class="btn btn-secondary collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#multiCollapseExample2" aria-expanded="false"
                                aria-controls="multiCollapseExample2">Toggle second element</button>
                            <button class="btn btn-tertiary collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target=".multi-collapse" aria-expanded="false"
                                aria-controls="multiCollapseExample1 multiCollapseExample2">Toggle both elements</button>
                        </div>
                        <div class="row">
                            <div class="col-xl-6">
                                <div class="multi-collapse collapse" id="multiCollapseExample1">
                                    <div class="card card-body mt-3 mb-0 collapse-wrapper accordion-light-primary">The
                                        collapse JavaScript plugin is used to show and hide content. Buttons or anchors are
                                        used as triggers that are mapped to specific elements you toggle. Collapsing an
                                        element will animate the height from it&apos;s current value to 0. Given how CSS
                                        handles animations, you cannot use padding on a .collapse element. Instead, use the
                                        class as an independent wrapping element.</div>
                                </div>
                            </div>
                            <div class="col-xl-6">
                                <div class="multi-collapse collapse" id="multiCollapseExample2">
                                    <div class="card card-body mt-3 mb-0 collapse-wrapper accordion-light-secondary">This
                                        is the first item&apos;s accordion body. It is shown by default, until the collapse
                                        plugin adds the appropriate classes that we use to style each element. These classes
                                        control the overall appearance, as well as the showing and hiding via CSS
                                        transitions. You can modify any of this with custom CSS or overriding our default
                                        variables.</div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="multiple-according">&lt;!--You can use .accordion-collapse with .show class then show accordions.--&gt;
    &lt;div class="common-flex"&gt;&lt;a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapseExample1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1"&gt;Toggle first element&lt;/a&gt;
    &lt;button class="btn btn-warning" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapseExample2" aria-expanded="false" aria-controls="multiCollapseExample2"&gt;Toggle second element&lt;/button&gt;
    &lt;button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target=".multi-collapse" aria-expanded="false" aria-controls="multiCollapseExample1 multiCollapseExample2"&gt;Toggle both elements&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="row d-flex"&gt;
    &lt;div class="col-xl-6"&gt;
    &lt;div class="collapse multi-collapse" id="multiCollapseExample1"&gt;
    &lt;div class="card card-body mt-3 mb-0 collapse-wrapper accordion-light-primary"&gt;The collapse JavaScript plugin is used to show and hide content. Buttons or anchors are used as triggers that are mapped to specific elements you toggle. Collapsing an element will animate the height from it's current value to 0. Given how CSS handles animations, you cannot use padding on a .collapse element. Instead, use the class as an independent wrapping element.&lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="col-xl-6"&gt;
    &lt;div class="collapse multi-collapse" id="multiCollapseExample2"&gt;
    &lt;div class="card card-body mt-3 mb-0 collapse-wrapper accordion-light-warning"&gt;This is the first item's accordion body. It is shown by default, until the collapse plugin adds the appropriate classes that we use to style each element. These classes control the overall appearance, as well as the showing and hiding via CSS transitions. You can modify any of this with custom CSS or overriding our default variables.&lt;/div&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- With icons accordion-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>With icons accordion</h4>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icon-more-alt"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                        <p class="desc mb-0 mt-1"><span>Use the</span><code>.accordion , .icons-accordion</code><span>
                                through change plus icons accordion.</span></p>
                    </div>
                    <div class="card-body accordion-border icons-accordion">
                        <div class="accordion" id="accordionPanelsStayOpenExample">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                                    <button class="accordion-button collapsed gap-2 accordion-light-secondary"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                                        aria-controls="panelsStayOpen-collapseOne">
                                        <svg class="svg-color stroke-secondary">
                                            <use href="{{ asset('assets/svg/iconly-sprite.svg#Bell') }}"></use>
                                        </svg>Keep in touch
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse show" id="panelsStayOpen-collapseOne"
                                    aria-labelledby="panelsStayOpen-headingOne">
                                    <div class="accordion-body">
                                        <p><em class="font-danger"></em>&quot; This page might not behave as expected
                                            because Windows Internet Explorer isn&apos;t configured to load unsigned ActiveX
                                            controls.&quot;
                                            or &quot;Allow this page to install an unsigned ActiveX Control? Doing so from
                                            untrusted sources may harm your computer.&quot; (Both phrased as conditions that
                                            may cause future problems.)
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingTwo">
                                    <button class="accordion-button collapsed gap-2 accordion-light-secondary"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseTwo">
                                        <svg class="svg-color stroke-secondary">
                                            <use href="{{ asset('assets/svg/iconly-sprite.svg#Message') }}"></use>
                                        </svg>Chats with others
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse" id="panelsStayOpen-collapseTwo"
                                    aria-labelledby="panelsStayOpen-headingTwo">
                                    <div class="accordion-body">
                                        <ul class="d-flex flex-column gap-2 accordions-content">
                                            <li>You get the same features in Chat and Chat in Gmail, but the integrated
                                                Gmail experience provides a central location to communicate with friends,
                                                family, or coworkers between emails.</li>
                                            <li><strong>Chat:</strong> Use when you prefer a dedicated chat experience and
                                                don&apos;t mind switching between different apps.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="panelsStayOpen-headingThree">
                                    <button class="accordion-button collapsed gap-2 accordion-light-secondary"
                                        type="button" data-bs-toggle="collapse"
                                        data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false"
                                        aria-controls="panelsStayOpen-collapseThree">
                                        <svg class="svg-color stroke-secondary">
                                            <use href="{{ asset('assets/svg/iconly-sprite.svg#Tick-square') }}"></use>
                                        </svg>Right way to code
                                    </button>
                                </h2>
                                <div class="accordion-collapse collapse" id="panelsStayOpen-collapseThree"
                                    aria-labelledby="panelsStayOpen-headingThree">
                                    <div class="accordion-body">
                                        <ul class="d-flex flex-column gap-2 accordions-content">
                                            <li>1 Decide on the indentation and keep it that way.</li>
                                            <li>2 Make comments.</li>
                                            <li>3 Consistent name scheme.</li>
                                            <li>4 Don&apos;t repeat code.</li>
                                            <li>5 Avoid writing long code lines.</li>
                                            <li>6 Break down a big task into smaller chunks.</li>
                                            <li>7 Organize your program into smaller files.</li>
                                            <li>8 Write clever code that is also readable.</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="icons-according">&lt;!--You can use .accordion-collapse with .show class then show accordions.--&gt;  
    &lt;div class="accordion dark-accordion" id="accordionPanelsStayOpenExample"&gt;
    &lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header" id="panelsStayOpen-headingOne"&gt;
    &lt;button class="accordion-button collapsed gap-2 accordion-light-secondary active txt-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="false" aria-controls="panelsStayOpen-collapseOne"&gt;&lt;i class="svg-wrapper" data-feather="bell"&gt;&lt;/i&gt;Keep in touch&lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;/h2&gt;
    &lt;div class="accordion-collapse collapse" id="panelsStayOpen-collapseOne" aria-labelledby="panelsStayOpen-headingOne"&gt;
    &lt;div class="accordion-body"&gt;
    &lt;p&gt; &lt;em class="txt-danger"&gt; " This page might not behave as expected because Windows Internet Explorer isn't configured to load unsigned ActiveX controls."&lt;/em&gt; or "Allow this page to install an unsigned ActiveX Control? Doing so from untrusted sources may harm your computer." (Both phrased as conditions that may cause future problems.)&lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header" id="panelsStayOpen-headingTwo"&gt;
    &lt;button class="accordion-button collapsed gap-2 accordion-light-secondary active txt-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo"&gt;&lt;i class="svg-wrapper" data-feather="message-circle"&gt;&lt;/i&gt;Chats with others&lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;/h2&gt;
    &lt;div class="accordion-collapse collapse" id="panelsStayOpen-collapseTwo" aria-labelledby="panelsStayOpen-headingTwo"&gt;
    &lt;div class="accordion-body"&gt;
    &lt;ul class="d-flex flex-column gap-2 accordions-content"&gt;
    &lt;li&gt;You get the same features in Chat and Chat in Gmail, but the integrated Gmail experience provides a central location to communicate with friends, family, or coworkers between emails.&lt;/li&gt;
    &lt;li&gt; &lt;strong&gt;Chat:&lt;/strong&gt; Use when you prefer a dedicated chat experience and don't mind switching between different apps.&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header" id="panelsStayOpen-headingThree"&gt;
    &lt;button class="accordion-button collapsed gap-2 accordion-light-secondary active txt-secondary" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree"&gt;&lt;i class="svg-wrapper" data-feather="check-square"&gt;&lt;/i&gt;Right way to code &lt;i class="svg-color" data-feather="chevron-down"&gt;&lt;/i&gt;&lt;/button&gt;
    &lt;/h2&gt;
    &lt;div class="accordion-collapse collapse" id="panelsStayOpen-collapseThree" aria-labelledby="panelsStayOpen-headingThree"&gt;
    &lt;div class="accordion-body"&gt;
    &lt;ul class="d-flex flex-column gap-2 accordions-content"&gt;
    &lt;li&gt;1) Decide on the indentation and keep it that way.&lt;/li&gt;
    &lt;li&gt;2) Make comments.&lt;/li&gt;
    &lt;li&gt;3) Consistent name scheme.&lt;/li&gt;
    &lt;li&gt;4) Don't repeat code.&lt;/li&gt;
    &lt;li&gt;5) Avoid writing long code lines.&lt;/li&gt;
    &lt;li&gt;6) Break down a big task into smaller chunks.&lt;/li&gt;
    &lt;li&gt;7) Organize your program into smaller files.&lt;/li&gt;
    &lt;li&gt;8) Write clever code that is also readable.&lt;/li&gt;
    &lt;/ul&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <!-- Nested accordion-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Nested accordion</h4>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icon-more-alt"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                        <p class="desc mb-0 mt-1"><span>You can give</span><code>.accordion,.nestings</code><span> inside
                                the parent Accordion content property by using id #nestedaccordion of nested element.</span>
                        </p>
                    </div>
                    <div class="card-body nestings">
                        <div class="accordion" id="accordionstyle">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading_1">
                                    <button class="accordion-button collapsed accordion-light-info active" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseOnestyle"
                                        aria-expanded="false" aria-controls="collapseOne">Knowledgebase featured tutorial
                                        detail.</button>
                                </h2>
                                <div class="accordion-collapse collapse show" id="collapseOnestyle"
                                    aria-labelledby="heading_1" data-bs-parent="#accordionstyle">
                                    <div class="accordion-body">
                                        <div class="d-flex">
                                            <div class="nested-accordion w-50" id="nestedaccordion">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button
                                                            class="accordion-button collapsed accordion-light-tertiary active"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#nestedcollapseOne" aria-expanded="false"
                                                            aria-controls="collapseOne">Web Development</button>
                                                    </h2>
                                                    <div class="accordion-collapse collapse" id="nestedcollapseOne"
                                                        aria-labelledby="headingOne" data-bs-parent="#nestedaccordion">
                                                        <div class="accordion-body">
                                                            <p class="mb-0">This course is designed to start you on a
                                                                path toward future studies in web development and design.
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nested-accordion w-50" id="nestedaccordion_1">
                                                <div class="accordion-item">
                                                    <h2 class="accordion-header">
                                                        <button
                                                            class="accordion-button collapsed accordion-light-tertiary active"
                                                            type="button" data-bs-toggle="collapse"
                                                            data-bs-target="#nestedcollapseTwo" aria-expanded="false"
                                                            aria-controls="collapseOne">UI/UX designer</button>
                                                    </h2>
                                                    <div class="accordion-collapse collapse" id="nestedcollapseTwo"
                                                        aria-labelledby="headingOne" data-bs-parent="#nestedaccordion_1">
                                                        <div class="accordion-body">
                                                            <p class="mb-0">The capacity to comprehend and experience
                                                                other people's feelings is known as empathy. A positive
                                                                consumer experience is priority by UX.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading_2">
                                    <button class="accordion-button accordion-light-info active collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwostyle"
                                        aria-expanded="false" aria-controls="collapseTwo">What is the use of web design
                                        ?</button>
                                </h2>
                                <div class="accordion-collapse collapse" id="collapseTwostyle"
                                    aria-labelledby="heading_2" data-bs-parent="#accordionstyle">
                                    <div class="accordion-body">
                                        <div class="d-flex">
                                            <div class="nested-accordion" id="nestedaccordion_2">
                                                <div class="card-body collapse-accordion p-0">
                                                    <p class="mb-2">
                                                        <button class="btn btn-outline-tertiary" type="button"
                                                            data-bs-toggle="collapse" data-bs-target="#buttoncollapse"
                                                            aria-expanded="false" aria-controls="collapseExample">Nested
                                                            Button Collapse</button>
                                                    </p>
                                                    <div class="collapse" id="buttoncollapse">
                                                        <div class="card card-body default-border mb-0">Some placeholder
                                                            content for the collapse component. This panel is hidden by
                                                            default but revealed when the user activates the relevant
                                                            trigger.</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="heading_3">
                                    <button class="accordion-button collapsed accordion-light-info active" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThreestyle"
                                        aria-expanded="false" aria-controls="collapseThree">What are the elements of web
                                        design ?</button>
                                </h2>
                                <div class="accordion-collapse collapse" id="collapseThreestyle"
                                    aria-labelledby="heading_3" data-bs-parent="#accordionstyle">
                                    <div class="accordion-body">
                                        <p class="mb-0">The web design process allows designers to adjust to any
                                            preferences and provide effective solutions. There are many standard components
                                            of every web design, including:</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="nested-according">&lt;div class="accordion" id="accordionstyle"&gt;
    &lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header" id="heading_1"&gt;
    &lt;button class="accordion-button accordion-light-info active collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOnestyle" aria-expanded="false" aria-controls="collapseOne"&gt;Knowledgebase featured tutorial detail.&lt;/button&gt;
    &lt;/h2&gt;
    &lt;div class="accordion-collapse collapse" id="collapseOnestyle" aria-labelledby="heading_1" data-bs-parent="#accordionstyle" style=""&gt;
    &lt;div class="accordion-body"&gt;
    &lt;div class="d-flex"&gt;
    &lt;div class="nested-accordion w-50" id="nestedaccordion"&gt;
    &lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header"&gt;
    &lt;button class="accordion-button collapsed accordion-light-tertiary active" type="button" data-bs-toggle="collapse" data-bs-target="#nestedcollapseOne" aria-expanded="false" aria-controls="collapseOne"&gt;Web Development&lt;/button&gt;
    &lt;/h2&gt;
    &lt;div class="accordion-collapse collapse" id="nestedcollapseOne" aria-labelledby="headingOne" data-bs-parent="#nestedaccordion"&gt;
    &lt;div class="accordion-body"&gt;
    &lt;p class="mb-0"&gt;This course is designed to start you on a path toward future studies in web development and design.| &lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="nested-accordion w-50" id="nestedaccordion_1"&gt;
    &lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header"&gt;
    &lt;button class="accordion-button collapsed accordion-light-tertiary active" type="button" data-bs-toggle="collapse" data-bs-target="#nestedcollapseTwo" aria-expanded="false" aria-controls="collapseOne"&gt;UI/UX designer&lt;/button&gt;
    &lt;/h2&gt;
    &lt;div class="accordion-collapse collapse" id="nestedcollapseTwo" aria-labelledby="headingOne" data-bs-parent="#nestedaccordion_1"&gt;
    &lt;div class="accordion-body"&gt;
    &lt;p class="mb-0"&gt;The capacity to comprehend and experience other people's feelings is known as empathy. A positive consumer experience is priority by UX.| &lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header" id="heading_2"&gt;
    &lt;button class="accordion-button accordion-light-info active collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwostyle" aria-expanded="false" aria-controls="collapseTwo"&gt;What is the use of web design ?&lt;/button&gt;
    &lt;/h2&gt;
    &lt;div class="accordion-collapse collapse" id="collapseTwostyle" aria-labelledby="heading_2" data-bs-parent="#accordionstyle" style=""&gt;
    &lt;div class="accordion-body"&gt;
    &lt;div class="d-flex"&gt;
    &lt;div class="nested-accordion" id="nestedaccordion_2"&gt;
    &lt;div class="card-body collapse-accordion p-0"&gt;
    &lt;p class="mb-2"&gt;
    &lt;button class="btn btn-outline-tertiary collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#buttoncollapse" aria-expanded="false" aria-controls="collapseExample"&gt;Nested Button Collapse&lt;/button&gt;
    &lt;/p&gt;
    &lt;div class="collapse" id="buttoncollapse"&gt;
    &lt;div class="card card-body default-border mb-0"&gt;Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.| &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="accordion-item"&gt;
    &lt;h2 class="accordion-header" id="heading_3"&gt;
    &lt;button class="accordion-button accordion-light-info active" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThreestyle" aria-expanded="true" aria-controls="collapseThree"&gt;What are the elements of web design ?&lt;/button&gt;
    &lt;/h2&gt;
    &lt;div class="accordion-collapse collapse show" id="collapseThreestyle" aria-labelledby="heading_3" data-bs-parent="#accordionstyle" style=""&gt;
    &lt;div class="accordion-body"&gt;
    &lt;p class="mb-0"&gt;The web design process allows designers to adjust to any preferences and provide effective solutions. There are many standard components of every web design, including:| &lt;/p&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-5">
                <!-- Horizontal accordion-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Horizontal accordion</h4>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icon-more-alt"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                        <p class="desc mb-0 mt-1"><span>Add</span><code>.collapse-horizontal</code><span>modifier class to
                                transition width, set a width on the next child element.</span></p>
                    </div>
                    <div class="card-body">
                        <p class="mb-2">
                            <button class="btn btn-success" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseWidthExample" aria-expanded="false"
                                aria-controls="collapseWidthExample">Toggle width collapse</button>
                        </p>
                        <div>
                            <div class="collapse collapse-horizontal" id="collapseWidthExample">
                                <div class="card card-body default-border mb-0">
                                    This is some placeholder content for a horizontal collapse. It&apos;s hidden by default
                                    and shown when triggered.</div>
                            </div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="horizontal-according">&lt;button class="btn btn-success" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample"&gt;Toggle width collapse&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-6 col-xl-7">
                <!-- Horizontal accordion-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>Different tag accordion</h4>
                        <div class="card-header-right">
                            <ul class="list-unstyled card-option">
                                <li><i class="icon-more-alt"></i></li>
                                <li><i class="view-html fa fa-code"></i></li>
                                <li><i class="icofont icofont-maximize full-card"></i></li>
                                <li><i class="icofont icofont-minus minimize-card"></i></li>
                                <li><i class="icofont icofont-refresh reload-card"></i></li>
                                <li><i class="icofont icofont-error close-card"></i></li>
                            </ul>
                        </div>
                        <p class="desc mb-0 mt-1"><span>you can also use a link with the href
                                attribute</span><code>(role=&quot;button&quot;),
                                data-bs-toggle=&quot;collapse&quot;</code><span>is required.</span></p>
                    </div>
                    <div class="card-body">
                        <p class="mb-2 common-flex"><a class="btn btn-info" data-bs-toggle="collapse"
                                href="#collapseExample" role="button" aria-expanded="false"
                                aria-controls="collapseExample">Link with href</a>
                            <button class="btn btn-info" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseExample" aria-expanded="false"
                                aria-controls="collapseExample">Button with data-bs-target</button>
                        </p>
                        <div class="collapse" id="collapseExample">
                            <div class="card card-body default-border mb-0">Some placeholder content for the collapse
                                component. This panel is hidden by default but revealed when the user activates the relevant
                                trigger.</div>
                        </div>
                        <div class="code-box-copy">
                            <button class="code-box-copy__btn btn-clipboard" data-clipboard-target="#tooltip"
                                title="Copy"><i class="icofont icofont-copy"></i></button>
                            <pre><code class="language-html" id="tag-according">&lt;a class="btn btn-info" data-bs-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample"&gt;Link with href&lt;/a&gt;
    &lt;button class="btn btn-info" type="button" data-bs-toggle="collapse" data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample"&gt;Button with data-bs-target&lt;/button&gt;</code></pre>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-Fluid Ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/vendors/clipboard/dist/clipboard.min.js') }}"></script>
    <script src="{{ asset('assets/js/clipboard/clipboard-script.js') }}"></script>
    <script src="{{ asset('assets/js/prism/prism.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom-card/custom-card.js') }}"></script>
@endsection
