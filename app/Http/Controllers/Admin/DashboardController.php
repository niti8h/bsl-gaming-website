<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\ContactMessage;

class DashboardController extends Controller
{
    public function index()
    {
        $blogCount = Blog::count();
        $messageCount = ContactMessage::count();
        $unreadMessages = ContactMessage::where('read_at', null)->count(); // if we had a read_at column, otherwise just total

        return view('admin.dashboard', compact('blogCount', 'messageCount'));
    }
}
