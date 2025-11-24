<?php

use CodeIgniter\Router\RouteCollection;
use App\Controllers\Auth\LoginController;
use App\Controllers\Auth\RegisterController;
use App\Controllers\LandingController;

/**
 * @var RouteCollection $routes
 */

// -----------------------------------------------------------------------------
// 🔹 HALAMAN UTAMA (Landing Page)
// -----------------------------------------------------------------------------
$routes->get('/', [LandingController::class, 'index']);
$routes->get('landing', [LandingController::class, 'index']);

// -----------------------------------------------------------------------------
// 🔹 AUTH ROUTES (Custom + Shield Integration)
// -----------------------------------------------------------------------------

// Muat semua route bawaan Shield, tapi exclude login & register (karena kita custom)
service('auth')->routes($routes, ['except' => ['login', 'register']]);

// --- Custom Login ---
$routes->get('login', [LoginController::class, 'loginView']);
$routes->post('login', [LoginController::class, 'loginAction']);

// --- Custom Register ---
$routes->get('register', [RegisterController::class, 'registerView']);
$routes->post('register', [RegisterController::class, 'registerAction']);

// --- Logout (pakai Shield bawaan) ---
$routes->get('logout', 'Auth\LogoutController::logout');

// -----------------------------------------------------------------------------
// 🔹 ADMIN DASHBOARD ROUTES
// -----------------------------------------------------------------------------
$routes->group('admin', ['namespace' => 'App\Controllers\Admin', 'filter' => 'session'], static function($routes) {

    // Dashboard
    $routes->get('/', 'DashboardController::index');
    $routes->get('dashboard', 'DashboardController::index');
    $routes->get('dashboard/style2', 'DashboardController::style2');

    // Search
    $routes->get('search', 'SearchController::index');

    // Upload Project
    $routes->get('upload', 'UploadController::index');
    $routes->post('upload/save', 'UploadController::save');

    // Portfolio CRUD
    $routes->get('portfolio', 'PortfolioController::index');
    $routes->get('portfolio/list', 'PortfolioController::index');
    $routes->get('portfolio/create', 'PortfolioController::create');
    $routes->post('portfolio/store', 'PortfolioController::store');
    $routes->get('portfolio/edit/(:num)', 'PortfolioController::edit/$1');
    $routes->post('portfolio/update/(:num)', 'PortfolioController::update/$1');
    $routes->get('portfolio/detail/(:num)', 'PortfolioController::detail/$1');

    $routes->get('portfolio/delete/(:num)', 'PortfolioController::delete/$1');
    $routes->post('portfolio/bulkDelete', 'PortfolioController::bulkDelete');
    $routes->get('portfolio/feature/(:num)/(:num)', 'PortfolioController::setFeatured/$1/$2');

    // Profile
    $routes->get('profile', 'ProfileController::index');
    $routes->post('profile/update', 'ProfileController::update');
    // Blog CRUD
    $routes->get('blog', 'BlogController::index');
    $routes->get('blog/list', 'BlogController::index');
    $routes->get('blog/create', 'BlogController::create');
    $routes->post('blog/store', 'BlogController::store');
    $routes->get('blog/edit/(:num)', 'BlogController::edit/$1');
    $routes->post('blog/update/(:num)', 'BlogController::update/$1');
    $routes->get('blog/delete/(:num)', 'BlogController::delete/$1');
    $routes->get('blog/detail/(:num)', 'BlogController::detail/$1');
    $routes->get('blog/setFeatured/(:num)/(:num)', 'BlogController::setFeatured/$1/$2');

    // Testimonial (Admin)
$routes->get('testimonial', 'TestimonialController::index');
$routes->get('testimonial/list', 'TestimonialController::index');
$routes->get('testimonial/create', 'TestimonialController::create');
$routes->post('testimonial/store', 'TestimonialController::store');
$routes->get('testimonial/edit/(:num)', 'TestimonialController::edit/$1');
$routes->post('testimonial/update/(:num)', 'TestimonialController::update/$1');
$routes->get('testimonial/approve/(:num)', 'TestimonialController::approve/$1');
$routes->get('testimonial/reject/(:num)', 'TestimonialController::reject/$1');
$routes->post('testimonial/bulkDelete', 'TestimonialController::bulkDelete');
$routes->get('testimonial/delete/(:num)', 'TestimonialController::delete/$1');


    // Contact
    $routes->get('contact', 'ContactController::index');
    $routes->get('contact/list', 'ContactController::index');
    $routes->get('contact/detail/(:num)', 'ContactController::detail/$1');
    $routes->post('contact/sendReply/(:num)', 'ContactController::sendReply/$1');
    $routes->get('contact/delete/(:num)', 'ContactController::delete/$1');
    $routes->post('contact/bulkDelete', 'ContactController::bulkDelete');
    $routes->get('contact/unread-count', 'ContactController::getUnreadCount');

    // Contact Info
    $routes->get('contact-info', 'ContactInfoController::edit');
    $routes->post('contact-info/update/(:num)', 'ContactInfoController::update/$1');
});

// -----------------------------------------------------------------------------
// 🔹 PUBLIC ROUTES (Landing Page dan Blog/Portfolio)
// -----------------------------------------------------------------------------

// Contact Form (Landing)
$routes->post('contact/send', [LandingController::class, 'sendMessage']);

// Testimonial Submit
$routes->post('testimonial/submit', [LandingController::class, 'submit']);

// Blog (Landing)
$routes->get('blog', [LandingController::class, 'blog']);
$routes->get('blog/(:segment)', [LandingController::class, 'blogDetail/$1']);

// Portfolio (Landing)
$routes->get('portfolio', [LandingController::class, 'portfolio']);
$routes->get('portfolio/(:segment)', [LandingController::class, 'portfolioDetail/$1']);

// Redirect lama → baru
$routes->get('landing/portfolio', static fn() => redirect()->to('/portfolio'));
$routes->get('landing/portfolio/(:segment)', static fn($slug) => redirect()->to('/portfolio/' . $slug));

