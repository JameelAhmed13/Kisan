@extends('layouts.master')

@section('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/vendors/scrollbar.css') }}">
@endsection

@section('main_content')
    <div class="container-fluid">
        <div class="row page-title">
            <div class="col-sm-6">
                <h3>Translate</h3>
            </div>
            <div class="col-sm-6">
                <nav>
                    <ol class="breadcrumb justify-content-sm-end align-items-center">
                        <li class="breadcrumb-item"> <a href="{{ route('admin.dashboard') }}">
                                <svg class="svg-color">
                                    <use href="{{ asset('assets/svg/iconly-sprite.svg#Home') }}"></use>
                                </svg></a></li>
                        <li class="breadcrumb-item">Pages</li>
                        <li class="breadcrumb-item active">Translate</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12">
                <div class="site">
                    <div class="site-bd">
                        <div class="wrapper">
                            <div class="card">
                                <div class="card-header language-header pb-0">
                                    <h4>Translate</h4>
                                    <div class="main" role="main">
                                        <select class="langChoice js-languageSelect" id="language-select">
                                            <option value="en">English</option>
                                            <option value="gr">German</option>
                                            <option value="rs">Russian</option>
                                            <option value="ar">Arabic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <h5 class="hdg hdg_main js-languagePageHdg mb-2" id="heading1">Static Sub Nav
                                            </h5>
                                            <div class="masthead" role="banner">
                                                <ul
                                                    class="icon-lists solid-border navs-icon hList hList_loose masthead-nav js-languageList">
                                                    <li><a href="#"><span id="title1"> Base</span></a></li>
                                                    <li><a href="#"><span id="title2"> Advance</span></a>
                                                        <ul class="hList hList_loose masthead-nav js-languageList">
                                                            <li class="pl-navs-inline"><a href="#"><span
                                                                        id="title3">Scrollable</span></a></li>
                                                            <li class="pl-navs-inline"><a href="#"><span
                                                                        id="title4">Tree View</span></a></li>
                                                            <li class="pl-navs-inline"><a href="#"><span
                                                                        id="title5">Rating</span></a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#"><span id="title6" data-mlr-text="">
                                                                Forms</span></a></li>
                                                    <li><a href="#"><span id="title7" data-mlr-text="">
                                                                Tables</span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-md-6 language-xs">
                                            <h5 class="hdg hdg_main js-languagePageHdg mb-2" id="heading2">Task List</h5>
                                            <div class="masthead" role="banner">
                                                <ul>
                                                    <li class="d-flex line-primary">
                                                        <div class="flex-grow-1">
                                                            <h5 id="content1">Task With dropdown menu</h5>
                                                            <h6 id="content2">By Johnny</h6>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex line-secondary">
                                                        <div class="flex-grow-1">
                                                            <h5 id="content3">Badge on the right task</h5>
                                                            <h6 id="content4">This task has show on hover actions!</h6>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex line-tertiary">
                                                        <div class="flex-grow-1">
                                                            <h5 id="content5">Wash the car</h5>
                                                            <h6 id="content6">Written by bob</h6>
                                                        </div>
                                                    </li>
                                                    <li class="d-flex line-info">
                                                        <div class="flex-grow-1">
                                                            <h5 id="content7">Development Task</h5>
                                                            <h6 id="content8">Finish react todo list app</h6>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-12">
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>How To Use It</h4>
                        <p class="desc mb-0 mt-1"><span>Add a class</span><code>.hdg, .hdg_main, .js-languagePageHdg,
                                .hList, .hList_loose, .masthead-nav., js-languageList, .langChoice,
                                .js-languageSelect</code><span>class to any tag for language translate</span></p>
                    </div>
                    <div class="card-body">
                        <div class="language">
                            <p class="mb-2"> <b>HTML code</b></p>
                            <pre class="mb-0"> &lt;div class="site"&gt;<br />  &lt;div class="site-bd"&gt;<br />    &lt;div class="wrapper"&gt;<br />      &lt;div class="card"&gt;<br />        &lt;div class="card-header"&gt;<br />          &lt;h5 class="hdg hdg_main js-languagePageHdg"&gt;Internationalization&lt;/h5&gt;<br />        &lt;/div&gt;<br />        &lt;div class="main" role="main"&gt;<br />          &lt;select class="langChoice js-languageSelect"&gt;<br />            &lt;option val="0"&gt;English&lt;/option&gt;<br />            &lt;option val="1"&gt;German&lt;/option&gt;<br />            &lt;option val="2"&gt;Russian&lt;/option&gt;<br />            &lt;option val="3"&gt;Arabic&lt;/option&gt;<br />          &lt;/select&gt;<br />        &lt;/div&gt;<br />        &lt;div class="card-body row"&gt;<br />          &lt;div class="col-lg-6"&gt;<br />            &lt;h5 class="hdg hdg_main js-languagePageHdg"&gt;Static Sub Nav&lt;/h5&gt;<br />            &lt;div class="masthead" role="banner"&gt;<br />              &lt;ul class="icon-lists border navs-icon hList hList_loose masthead-nav js-languageList"&gt;<br />                &lt;li&gt;<br />                  &lt;a href="#"&gt;&lt;span&gt; Base&lt;/span&gt;&lt;/a&gt;<br />                &lt;/li&gt;<br />                &lt;li&gt;<br />                  &lt;a href="#"&gt;&lt;span&gt; Advance&lt;/span&gt;&lt;/a&gt;<br />                  &lt;ul class="hList hList_loose masthead-nav js-languageList"&gt;<br />                    &lt;li class="pl-navs-inline"&gt;&lt;a href="#"&gt;&lt;span&gt;Scrollable&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;<br />                    &lt;li class="pl-navs-inline"&gt;&lt;a href="#"&gt;&lt;span&gt;Tree View&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;<br />                    &lt;li class="pl-navs-inline"&gt;&lt;a href="#"&gt;&lt;span&gt;Rating&lt;/span&gt;&lt;/a&gt;&lt;/li&gt;<br />                  &lt;/ul&gt;<br />                &lt;/li&gt;<br />                &lt;li&gt;<br />                  &lt;a href="#"&gt;&lt;span data-mlr-text&gt; Forms&lt;/span&gt;&lt;/a&gt;<br />                &lt;/li&gt;<br />                &lt;li&gt;<br />                  &lt;a href="#"&gt;&lt;span data-mlr-text&gt; Tables&lt;/span&gt;&lt;/a&gt;<br />                &lt;/li&gt;<br />              &lt;/ul&gt;<br />            &lt;/div&gt;<br />          &lt;/div&gt;<br />        &lt;/div&gt;<br />      &lt;/div&gt;<br />    &lt;/div&gt;<br />  &lt;/div&gt;<br /> &lt;/div&gt;</pre>
                        </div>
                    </div>
                </div>
                <!-- how to add language-->
                <div class="card">
                    <div class="card-header pb-0">
                        <h4>How To Add Language</h4>
                        <p class="desc mb-0 mt-1"><span>you can also add other language according to
                                below</span><code></code><span>in js and add language type in langChoice</span></p>
                    </div>
                    <div class="card-body">
                        <p class="mb-2"> <b>Javascript code</b></p>
                        <pre class="language mb-0"><span class="font-danger">const  </span>translations = {<br>&nbsp;&nbsp; 'heading1': {<br>&nbsp;&nbsp; 'en': 'Static Sub Nav'<br>&nbsp;&nbsp; 'gr': 'Statische Sub-Navigation',<br>&nbsp;&nbsp; 'rs': 'Статическая вспомогательная навигация',<br>&nbsp;&nbsp; 'ar': 'الملاحة الفرعية الثابتة'
    &nbsp; }<br><br>&nbsp;&nbsp; 'title1': {<br>&nbsp;&nbsp; 'en': 'Base'<br>&nbsp;&nbsp; 'gr': 'Base',<br>&nbsp;&nbsp; 'rs': 'Основа',<br>&nbsp;&nbsp; 'ar': 'قاعدة'
    &nbsp; }<br><br>&nbsp;&nbsp; 'content1': {<br>&nbsp;&nbsp; 'en': 'Task With dropdown menu'<br>&nbsp;&nbsp; 'gr': 'Aufgabe mit Dropdown-Menü',<br>&nbsp;&nbsp; 'rs': 'Задача с выпадающим меню',<br>&nbsp;&nbsp; 'ar': 'المهمة مع القائمة المنسدلة'
    &nbsp; }</pre>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Container-fluid ends-->
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/translate-custom.js') }}"></script>
@endsection
