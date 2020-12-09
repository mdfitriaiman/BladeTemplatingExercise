<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ebookController extends Controller
{
    public function about() {
        return view('subview/about');
    }

    public function list() {
        $title1 = 'The Cat in the Hat';
        $isbn1 = '978-0-7172-6059-1';
        $bookCategory1 = 'Childrens Literature';
        $noPages1 = '61';

        $title2 = 'The Lorax';
        $isbn2 = '0-394-82337-0';
        $bookCategory2 = 'Childrens Literature';
        $noPages2 = '64';

        return view('subview/list', compact('title1', 'isbn1', 'bookCategory1', 'noPages1', 
        'title2', 'isbn2', 'bookCategory2', 'noPages2'));
    }
}
