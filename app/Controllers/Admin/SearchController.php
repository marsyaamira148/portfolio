<?php

namespace App\Controllers\Admin;

use App\Controllers\Admin\AdminController;
use App\Models\PortfolioModel;
use App\Models\PostModel;
use App\Models\TestimonialModel;
use App\Models\ContactModel;

class SearchController extends AdminController
{
    public function index()
    {
        $keyword = trim($this->request->getGet('keyword'));
        $type    = $this->request->getGet('type') ?? 'all';

        if ($keyword === '' || $keyword === null) {
            switch ($type) {
                case 'portfolio':
                    return redirect()->to(base_url('admin/portfolio/list'));
                case 'blog':
                    return redirect()->to(base_url('admin/blog/list'));
                case 'testimonial':
                    return redirect()->to(base_url('admin/testimonial/list'));
                case 'contact':
                    return redirect()->to(base_url('admin/contact/list'));
                default:
                    return redirect()->to(base_url('admin/dashboard'));
            }
        }

        $results = [];

        $convertToObject = function ($items) {
            foreach ($items as &$item) {
                if (is_array($item)) $item = (object) $item;
            }
            return $items;
        };

        switch ($type) {
            case 'portfolio':
                $portfolioModel = new PortfolioModel();
                $portfolios = $portfolioModel
                    ->like('title', $keyword)
                    ->orLike('description', $keyword)
                    ->findAll();
                foreach ($portfolios as &$p) {
                    if (is_array($p)) $p = (object) $p;
                    $p->image_url = !empty($p->thumbnail)
                        ? base_url('uploads/' . $p->thumbnail)
                        : base_url('uploads/no-image.png');
                }
                $results['portfolios'] = $portfolios;
                break;

            case 'blog':
                $postModel = new PostModel();
                $posts = $postModel
                    ->like('title', $keyword)
                    ->orLike('description', $keyword)
                    ->findAll();
                foreach ($posts as &$post) {
                    if (is_array($post)) $post = (object) $post;
                    $post->image_url = !empty($post->image)
                        ? base_url('uploads/blog/' . $post->image)
                        : base_url('uploads/blog/no-image.png');
                    $post->content = $post->description ?? '';
                }
                $results['posts'] = $posts;
                break;

            case 'testimonial':
                $testimonialModel = new TestimonialModel();
                $testimonials = $testimonialModel
                    ->like('name', $keyword)
                    ->orLike('position', $keyword)
                    ->orLike('message', $keyword)
                    ->findAll();
                foreach ($testimonials as &$t) {
                    if (is_array($t)) $t = (object) $t;
                    $t->image_url = !empty($t->photo)
                        ? base_url('uploads/testimonials/' . $t->photo)
                        : base_url('uploads/default-avatar.png');
                    if (!isset($t->name)) $t->name = '(Tanpa Nama)';
                    if (!isset($t->position)) $t->position = '';
                    if (!isset($t->message)) $t->message = '';
                }
                $results['testimonials'] = $testimonials;
                break;

            case 'contact':
                $contactModel = new ContactModel();
                $contacts = $contactModel
                    ->like('name', $keyword)
                    ->orLike('email', $keyword)
                    ->orLike('message', $keyword)
                    ->findAll();
                $results['contacts'] = $convertToObject($contacts);
                break;

            case 'all':
            default:
                // Portfolio
                $portfolioModel = new PortfolioModel();
                $portfolios = $portfolioModel
                    ->like('title', $keyword)
                    ->orLike('description', $keyword)
                    ->findAll();
                foreach ($portfolios as &$p) {
                    if (is_array($p)) $p = (object) $p;
                    $p->image_url = !empty($p->thumbnail)
                        ? base_url('uploads/' . $p->thumbnail)
                        : base_url('uploads/no-image.png');
                }
                $results['portfolios'] = $portfolios;

                // Blog
                $postModel = new PostModel();
                $posts = $postModel
                    ->like('title', $keyword)
                    ->orLike('description', $keyword)
                    ->findAll();
                foreach ($posts as &$post) {
                    if (is_array($post)) $post = (object) $post;
                    $post->image_url = !empty($post->image)
                        ? base_url('uploads/blog/' . $post->image)
                        : base_url('uploads/blog/no-image.png');
                    $post->content = $post->description ?? '';
                }
                $results['posts'] = $posts;

                // Testimonial
                $testimonialModel = new TestimonialModel();
                $testimonials = $testimonialModel
                    ->like('name', $keyword)
                    ->orLike('position', $keyword)
                    ->orLike('message', $keyword)
                    ->findAll();
                foreach ($testimonials as &$t) {
                    if (is_array($t)) $t = (object) $t;
                    $t->image_url = !empty($t->photo)
                        ? base_url('uploads/testimonials/' . $t->photo)
                        : base_url('uploads/default-avatar.png');
                    if (!isset($t->name)) $t->name = '(Tanpa Nama)';
                    if (!isset($t->position)) $t->position = '';
                    if (!isset($t->message)) $t->message = '';
                }
                $results['testimonials'] = $testimonials;

                // Contact
                $contactModel = new ContactModel();
                $contacts = $contactModel
                    ->like('name', $keyword)
                    ->orLike('email', $keyword)
                    ->orLike('message', $keyword)
                    ->findAll();
                $results['contacts'] = $convertToObject($contacts);
                break;
        }

        return $this->parse('Admin::search_results', array_merge($this->data, [
            'page_title'  => 'Search Results',
            'keyword'     => $keyword,
            'type'        => $type,
            'results'     => $results,
            'search_type' => $type,
        ]));
    }
}
