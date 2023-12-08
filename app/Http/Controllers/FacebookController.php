<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use FacebookAds\Api;

class FacebookController extends Controller
{
    // get all sponsored posts
    public function getSponsoredPosts(Request $request)
    {

        $accessToken = env('FACEBOOK_APP_ACCESS_TOKEN');

        Api::init(env('FACEBOOK_APP_ID'), env('FACEBOOK_APP_SECRET'), $accessToken);
        $api = Api::instance();

        $posts = $api->call('https://facebook.com/' . env('FACEBOOK_PAGE_ID') . '/posts', $accessToken);

        $filteredPosts = [];

        foreach ($posts['data'] as $post) {
            $filteredPosts[] = [
                'image' => $post['picture']['url'],
                'link' => $post['link']
            ];
        }

        return view('listings.facebook', [
            'posts' => $filteredPosts
        ]);
    }
}
