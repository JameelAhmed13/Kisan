<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', [App\Http\Controllers\HomeController::class, 'main'])->name('home');
Route::get('/kissan/create', [App\Http\Controllers\Admin\KisanController::class, 'form'])->name('kissan.form');
Route::get('/kissan/checkingCnic', [App\Http\Controllers\Admin\KisanController::class, 'checkingCnic'])->name('kissan.checkingCnic');
Auth::routes(['register' => false, 'verify' => false]);

Route::group(['middleware' => ['auth'], 'as' => 'admin.', 'prefix' => 'admin'], function () {

  // Dashboard
  Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('default_dashboard');
  // Users
    Route::get('/user/create', [App\Http\Controllers\Admin\UserController::class, 'create'])->name('user.create');
    Route::post('/user/store', [App\Http\Controllers\Admin\UserController::class, 'store'])->name('user.store');
    Route::put('user/status/{user}', [App\Http\Controllers\Admin\UserController::class, 'status'])->name('user.status');
    Route::get('/user', [App\Http\Controllers\Admin\UserController::class, 'index'])->name('user.index');
    Route::get('/user/show/{user}', [App\Http\Controllers\Admin\UserController::class, 'show'])->name('user.show');
    Route::get('/user/{user}/edit', [App\Http\Controllers\Admin\UserController::class, 'edit'])->name('user.edit');
    Route::put('user/{user}', [App\Http\Controllers\Admin\UserController::class, 'update'])->name('user.update');
    Route::delete('/user/{user}', [App\Http\Controllers\Admin\UserController::class, 'destroy'])->name('user.destroy');

    //Kisan
    Route::resource('kisan', App\Http\Controllers\Admin\KisanController::class)->names('kisan');

    //District

    Route::resource('district', App\Http\Controllers\Admin\DistrictController::class);

    //Tehsil
    Route::resource('tehsil', App\Http\Controllers\Admin\TehsilController::class);

    //Uc
    Route::resource('uc', App\Http\Controllers\Admin\UcController::class);

  // Roles
  Route::resource('role', App\Http\Controllers\Admin\RoleController::class);

  // Pages
  Route::put('page/status/{id}', [App\Http\Controllers\Admin\PageController::class, 'status'])->name('page.status');
  Route::resource('page', App\Http\Controllers\Admin\PageController::class);

  // Tags
  Route::put('tag/status/{id}', [App\Http\Controllers\Admin\TagController::class, 'status'])->name('tag.status');
  Route::resource('tag', App\Http\Controllers\Admin\TagController::class);

  // Blog
  Route::put('blog/status/{id}', [App\Http\Controllers\Admin\BlogController::class, 'status'])->name('blog.status');
  Route::resource('blog', App\Http\Controllers\Admin\BlogController::class);
  Route::get('blog/remove-image/{id}', [App\Http\Controllers\Admin\BlogController::class, 'removeImage'])->name('blog.removeImage');

  // Category
  Route::post('category/update-orders', [App\Http\Controllers\Admin\CategoryController::class, 'updateOrders'])->name('category.orders');
  Route::resource('category', App\Http\Controllers\Admin\CategoryController::class);


  // User_profile
  Route::get('edit-profile', [App\Http\Controllers\Admin\UserController::class, 'editProfile'])->name('user.edit-profile');
  Route::get('get-states', [App\Http\Controllers\Admin\UserController::class, 'getStates'])->name('user.get-states');
  Route::post('update-profile', [App\Http\Controllers\Admin\UserController::class, 'updateProfile'])->name('user.update-profile');


  Route::view('default-dashboard', 'dashboards.default_dashboard')->name('dashboard');
  Route::view('ecommerce-dashboard', 'dashboards.ecommerce_dashboard')->name('ecommerce_dashboard');
  Route::view('project-dashboard', 'dashboards.project_dashboard')->name('project_dashboard');

  //widgets
  Route::view('general-widget', 'widgets.general_widget')->name('general_widget');
  Route::view('chart-widget', 'widgets.chart_widget')->name('chart_widget');

  //page_layout
  Route::view('box-layout', 'page_layouts.box_layout')->name('box_layout');
  Route::view('rtl-layout', 'page_layouts.rtl_layout')->name('rtl_layout');
  Route::view('dark-layout', 'page_layouts.dark_layout')->name('dark_layout');

  //projects
  Route::view('project-list', 'projects.list_project')->name('project_list');
  Route::view('project-create', 'projects.create_project')->name('project_create');

  //file manager
  Route::view('file-manager', 'file_manager')->name('file_manager');

  //kanban board
  Route::view('kanban', 'kanban')->name('kanban');

  //ecommerce
  Route::view('products', 'ecommerce.product')->name('product');
  Route::view('product-page', 'ecommerce.product_page')->name('product_page');
  Route::view('add-products', 'ecommerce.add_products')->name('add_products');
  Route::view('list-products', 'ecommerce.list_products')->name('list_products');
  Route::view('payment-details', 'ecommerce.payment_details')->name('payment_details');
  Route::view('order-history', 'ecommerce.order_history')->name('order_history');
  Route::view('invoice-1', 'ecommerce.invoices.invoice_1')->name('invoice_1');
  Route::view('invoice-2', 'ecommerce.invoices.invoice_2')->name('invoice_2');
  Route::view('invoice-3', 'ecommerce.invoices.invoice_3')->name('invoice_3');
  Route::view('invoice-4', 'ecommerce.invoices.invoice_4')->name('invoice_4');
  Route::view('invoice-5', 'ecommerce.invoices.invoice_5')->name('invoice_5');
  Route::view('invoice-6', 'ecommerce.invoices.invoice_6')->name('invoice_6');
  Route::view('cart', 'ecommerce.cart')->name('cart');
  Route::view('list-wish', 'ecommerce.list_wish')->name('list_wish');
  Route::view('checkout', 'ecommerce.checkout')->name('checkout');
  Route::view('pricing', 'ecommerce.pricing')->name('pricing');

  //letter box
  Route::view('letter-box', 'letter_box')->name('letter_box');

  //chat
  Route::view('chat-private', 'chats.chat_private')->name('chat_private');
  Route::view('chat-group', 'chats.chat_group')->name('chat_group');

  //users
  Route::view('profile', 'users.user_profile')->name('user_profile');
  // Route::view('user-edit-profile', 'users.edit_profile')->name('edit_profile');
  Route::view('cards', 'users.user_cards')->name('user_cards');

  //bookmark
  Route::view('bookmark', 'bookmark')->name('bookmark');

  //contacts
  Route::view('contacts', 'contacts')->name('contacts');

  //tasks
  Route::view('task', 'task')->name('task');

  //calendar
  Route::view('calendar-basic', 'calendar_basic')->name('calendar_basic');

  //social_app
  Route::view('social-app', 'social_app')->name('social_app');

  //to_do
  Route::view('to-do', 'to_do')->name('to_do');

  //search_result
  Route::view('search', 'search')->name('search');

  //buttons
  Route::view('buttons', 'buttons')->name('buttons');

  //ui_kits
  Route::view('typography', 'ui_kits.typography')->name('typography');
  Route::view('avatars', 'ui_kits.avatars')->name('avatars');
  Route::view('grid', 'ui_kits.grid')->name('grid');
  Route::view('helper-classes', 'ui_kits.helper_classes')->name('helper_classes');
  Route::view('pills-tag', 'ui_kits.tag_pills')->name('tag_pills');
  Route::view('progress-bar', 'ui_kits.progress_bar')->name('progress_bar');
  Route::view('popover', 'ui_kits.popover')->name('popover');
  Route::view('tooltip', 'ui_kits.tooltip')->name('tooltip');
  Route::view('alert', 'ui_kits.alert')->name('alert');
  Route::view('modal', 'ui_kits.modal')->name('modal');
  Route::view('dropdown', 'ui_kits.dropdown')->name('dropdown');
  Route::view('according', 'ui_kits.according')->name('according');
  Route::view('tabs', 'ui_kits.tabs')->name('tabs');
  Route::view('list', 'ui_kits.list')->name('list');

  //bonus_ui
  Route::view('scrollable', 'bonus_ui.scrollable')->name('scrollable');
  Route::view('breadcrumb', 'bonus_ui.breadcrumb')->name('breadcrumb');
  Route::view('pagination', 'bonus_ui.pagination')->name('pagination');
  Route::view('ribbons', 'bonus_ui.ribbons')->name('ribbons');
  Route::view('tree', 'bonus_ui.tree')->name('tree');
  Route::view('toasts', 'bonus_ui.toasts')->name('toasts');
  Route::view('rating', 'bonus_ui.rating')->name('rating');
  Route::view('dropzone', 'bonus_ui.dropzone')->name('dropzone');
  Route::view('tour', 'bonus_ui.tour')->name('tour');
  Route::view('sweet-alert2', 'bonus_ui.sweet_alert2')->name('sweet_alert2');
  Route::view('animation-modal', 'bonus_ui.modal_animated')->name('modal_animated');
  Route::view('sliders', 'bonus_ui.sliders')->name('sliders');
  Route::view('range-slider', 'bonus_ui.range_slider')->name('range_slider');
  Route::view('image-cropper', 'bonus_ui.image_cropper')->name('image_cropper');
  Route::view('basic-card', 'bonus_ui.basic_card')->name('basic_card');
  Route::view('creative-card', 'bonus_ui.creative_card')->name('creative_card');
  Route::view('dragable-card', 'bonus_ui.dragable_card')->name('dragable_card');
  Route::view('timeline', 'bonus_ui.timeline')->name('timeline');

  //animation
  Route::view('wow', 'animations.wow')->name('wow');
  Route::view('aos', 'animations.aos')->name('aos');

  //icons
  Route::view('flag-icon', 'icons.flag_icon')->name('flag_icon');
  Route::view('font-awesome', 'icons.font_awesome')->name('font_awesome');
  Route::view('feather-icon', 'icons.feather_icon')->name('feather_icon');
  Route::view('iconly-icon', 'icons.iconly_icon')->name('iconly_icon');
  Route::view('ico-icon', 'icons.ico_icon')->name('ico_icon');
  Route::view('themify-icon', 'icons.themify_icon')->name('themify_icon');
  Route::view('whether-icon', 'icons.whether_icon')->name('whether_icon');

  //charts
  Route::view('chart-apex', 'charts.chart_apex')->name('chart_apex');
  Route::view('chartist', 'charts.chartist')->name('chartist');
  Route::view('chartjs', 'charts.chartjs')->name('chartjs');

  // form-controls
  Route::view('base-input', 'form_controls.base_input')->name('base_input');
  Route::view('radio-checkbox-control', 'form_controls.radio_checkbox_control')->name('radio_checkbox_control');
  Route::view('input-group', 'form_controls.input_group')->name('input_group');
  Route::view('megaoptions', 'form_controls.megaoptions')->name('megaoptions');
  Route::view('form-validation', 'form_controls.form_validation')->name('form_validation');

  //form-widgets
  Route::view('datepicker', 'form_widgets.datepicker')->name('datepicker');
  Route::view('touchspin', 'form_widgets.touchspin')->name('touchspin');
  Route::view('select2', 'form_widgets.select2')->name('select2');
  Route::view('switch', 'form_widgets.switch')->name('switch');
  Route::view('typeahead', 'form_widgets.typeahead')->name('typeahead');
  Route::view('clipboard', 'form_widgets.clipboard')->name('clipboard');

  //Forms -> form_layout
  Route::view('form-wizard', 'form_layout.form_wizard')->name('form_wizard');
  Route::view('two-form-wizard', 'form_layout.form_wizard_two')->name('form_wizard_two');
  Route::view('two-factor', 'form_layout.two_factor')->name('two_factor');

  //Tables -> bootstrap_tables
  Route::view('bootstrap-basic-table', 'tables.bootstrap_tables.bootstrap_basic_table')->name('bootstrap_basic_table');
  Route::view('table-components', 'tables.bootstrap_tables.table_components')->name('table_components');

  //Tables -> data_tables
  Route::view('datatable-basic-init', 'tables.data_tables.datatable_basic_init')->name('datatable_basic_init');
  Route::view('datatable-advance-init', 'tables.data_tables.datatable_advance_init')->name('datatable_advance_init');
  Route::view('datatable-api', 'tables.data_tables.datatable_api')->name('datatable_api');
  Route::view('datatable-data-source', 'tables.data_tables.datatable_data_source')->name('datatable_data_source');

  //Tables -> extension_data_tables
  Route::view('datatable-ext-autofill', 'tables.datatable_ext_autofill')->name('datatable_ext_autofill');

  //Tables ->jsgrid-table
  Route::view('jsgrid-table', 'tables.jsgrid_table')->name('jsgrid_table');

  // landing page
  Route::view('landing-page', 'landing_page')->name('landing_page');

  //sample-page
  Route::view('sample-page', 'sample_page')->name('sample_page');

  //translate
  Route::view('translate', 'translate')->name('translate');

  // Starter kit
  // Route::view('starter-kit', 'starter_kit')->name('starter_kit');

  //others -> error_page
  Route::view('error-page1', 'others.error_pages.error_page1')->name('error_page1');
  Route::view('error-page2', 'others.error_pages.error_page2')->name('error_page2');
  Route::view('error-page3', 'others.error_pages.error_page3')->name('error_page3');
  Route::view('error-page4', 'others.error_pages.error_page4')->name('error_page4');
  Route::view('error-page5', 'others.error_pages.error_page5')->name('error_page5');
  Route::view('error-page6', 'others.error_pages.error_page6')->name('error_page6');

  //others -> authentication
  // Route::view('login', 'others.authentication.login')->name('login');
  Route::view('login-one', 'others.authentication.login_one')->name('login_one');
  Route::view('login-two', 'others.authentication.login_two')->name('login_two');
  Route::view('login-bs-validation', 'others.authentication.login_bs_validation')->name('login_bs_validation');
  Route::view('login-bs-tt-validation', 'others.authentication.login_bs_tt_validation')->name('login_bs_tt_validation');
  Route::view('login-sa-validation', 'others.authentication.login_sa_validation')->name('login_sa_validation');
  Route::view('sign-up', 'others.authentication.sign_up')->name('sign_up');
  Route::view('sign-up-one', 'others.authentication.sign_up_one')->name('sign_up_one');
  Route::view('sign-up-two', 'others.authentication.sign_up_two')->name('sign_up_two');
  Route::view('sign-up-wizard', 'others.authentication.sign_up_wizard')->name('sign_up_wizard');
  Route::view('unlock', 'others.authentication.unlock')->name('unlock');
  Route::view('forget-password', 'others.authentication.forget_password')->name('forget_password');
  Route::view('reset-password', 'others.authentication.reset_password')->name('reset_password');
  Route::view('maintenance', 'others.authentication.maintenance')->name('maintenance');

  //others -> coming_soon
  Route::view('comingsoon', 'others.coming_soon.comingsoon')->name('comingsoon');
  Route::view('comingsoon-bg-video', 'others.coming_soon.comingsoon_bg_video')->name('comingsoon_bg_video');
  Route::view('comingsoon-bg-img', 'others.coming_soon.comingsoon_bg_img')->name('comingsoon_bg_img');

  //others -> email_templates
  Route::view('basic-template', 'others.email_templates.basic_template')->name('basic_template');
  Route::view('email-header', 'others.email_templates.email_header')->name('email_header');
  Route::view('template-email', 'others.email_templates.template_email')->name('template_email');
  Route::view('template-email-2', 'others.email_templates.template_email_2')->name('template_email_2');
  Route::view('ecommerce-templates', 'others.email_templates.ecommerce_templates')->name('ecommerce_templates');
  Route::view('email-order-success', 'others.email_templates.email_order_success')->name('email_order_success');

  //gallery
  Route::view('gallery', 'gallery.gallery')->name('gallery');
  Route::view('with-description', 'gallery.gallery_with_description')->name('gallery_with_description');
  Route::view('masonry', 'gallery.gallery_masonry')->name('gallery_masonry');
  Route::view('swith-disc-masonry', 'gallery.masonry_gallery_with_disc')->name('masonry_gallery_with_disc');
  Route::view('hover', 'gallery.gallery_hover')->name('gallery_hover');

  //blog
  Route::view('details-blog', 'blog.blog')->name('blog_details');
  Route::view('single-blog', 'blog.blog_single')->name('blog_single');
  Route::view('add-post', 'blog.add_post')->name('add_post');

  //faq
  Route::view('faq', 'faq')->name('faq');

  //job_search
  Route::view('job-cards-view', 'job_search.job_cards_view')->name('job_cards_view');
  Route::view('job-list-view', 'job_search.job_list_view')->name('job_list_view');
  Route::view('job-details', 'job_search.job_details')->name('job_details');
  Route::view('job-apply', 'job_search.job_apply')->name('job_apply');

  //learning
  Route::view('learning-list-view', 'learning.learning_list_view')->name('learning_list_view');
  Route::view('learning-detailed', 'learning.learning_detailed')->name('learning_detailed');

  //maps
  Route::view('data-map', 'maps.data_map')->name('data_map');
  Route::view('vector-map', 'maps.vector_map')->name('vector_map');

  //editors
  Route::view('quill-editor', 'editors.quill_editor')->name('quill_editor');
  Route::view('ace-code-editor', 'editors.ace_code_editor')->name('ace_code_editor');

  //knowledgebase
  Route::view('knowledgebase', 'knowledgebase')->name('knowledgebase');

  //support_ticket
  Route::view('support-ticket', 'support_ticket')->name('support_ticket');
});
