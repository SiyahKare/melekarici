<?php

namespace App\Http\Controllers;

use Backpack\PageManager\app\Models\Page;
use Backpack\MenuCRUD\app\Models\MenuItem;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function index($slug)
    {
        $page = Page::findBySlug($slug);

        abort_if(!$page, 404, 'Please go back to our <a href="'.url('').'">homepage</a>.');

        $this->data['parent_id'] = DB::table('menu_items')->where('page_id', $page->id)->where('active', 0)->whereNotNull('parent_id')->first()->parent_id;
        $this->data['title'] = $page->title;
        $this->data['page'] = $page->withFakes();

        // dd($this->data);

        return view('pages.'.$page->template, $this->data);
    }
}