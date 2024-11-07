<?php

namespace App\Controllers;

use App\Core\App;

class NodeController
{
    /**
     * Show the home page.
     */
    public function home()
    {
        return view('index');
    }

    /**
     * Show the search page.
     */
    public function search()
    {
        $rows = [];
        if (!empty($_GET['search'])) {
            $rows = App::get('database')->searchAll($_GET['search']);
        }

        $results = [];
        foreach ($rows as $key => $row) {
            $results[$key] = '/' . $row['name'];
            if ($row['parent_id'] > 0) {
                $data = App::get('database')->getParentCategories($row['parent_id']);
                $results[$key] = implode('/', array_column($data, 'name')) . $results[$key];
            }
        }

        return view('search', compact('results'));
    }
}
