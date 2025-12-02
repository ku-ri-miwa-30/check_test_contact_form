<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Category;
use Illuminate\Http\Request;

class ContactController extends Controller
{

    public function input()
    {
        return view('input');
    }

    public function confirm(Request $req)
    {
        $contact = $req->only(['category_type','first_name','last_name', 'gender', 'email', 'tel1', 'tel2', 'tel3', 'address', 'building','detail']);
        return view('confirm', compact('contact'));
    }

    public function store(Request $req)
    {
        $category=Category::create(
            ['content'=>$req->category_type]
        );
        $contact = $req->only('first_name','last_name', 'gender', 'email', 'tel', 'address', 'building', 'detail')+['category_id'=>$category->id];
        Contact::create($contact);
        return view('thanks');
    }




}
