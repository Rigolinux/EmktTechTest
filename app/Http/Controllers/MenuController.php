<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menu = array(
            "menu" => array(
                "id" => "file",
                "value" => "File",
                "popup" => array(
                    "menuitem" => array(
                        array("value" => "New", "onclick" => "CreateNewDoc()"),
                        array("value" => "Open", "onclick" => "OpenDoc()"),
                        array("value" => "Close", "onclick" => "CloseDoc()")
                    )
                )
            )
        );
        return response()->json($menu);
    }
}
