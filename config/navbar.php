<?php
/**
 * Config-file for navigation bar.
 *
 */
return [

    // Name of this menu
    "navbarTop" => [
        // Use for styling the menu
        "wrapper" => null,
        "class" => "rm-default rm-desktop",
     
        // Here comes the menu structure
        "items" => [

            "start" => [
                "text"  => t("Start"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Me-sida"),
                "mark-if-parent" => true,
            ],

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningar från kmom uppgifter"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om Sidan")
            ],

            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("grid")
            ],

            "typography" => [
                "text"  => t("Typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typography")
            ],

            "analysis" => [
                "text"  => t("Analysis"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analysis"),
                "mark-if-parent" => true,
            ],
            "Theme" => [
                "text"  => t("Theme"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Theme"),
                "mark-if-parent" => true,
            ],
            "theme-selector" => [
                "text"  => t("Theme-selector"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("Theme-selector"),
                "mark-if-parent" => true,
            ],
            "Images" => [
                "text"  => t("Images"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("Images"),
                "mark-if-parent" => true,
            ],
            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("blogg"),
                "mark-if-parent" => true,
            ],
        ],
    ],




    // Used as menu together with responsive menu
    // Name of this menu
    "navbarMax" => [
        // Use for styling the menu
        "id" => "rm-menu",
        "wrapper" => null,
        "class" => "rm-default rm-mobile",
     
        // Here comes the menu structure
        "items" => [

            "start" => [
                "text"  => t("Start"),
                "url"   => $this->di->get("url")->create("index"),
                "title" => t("Me-sida"),
                "mark-if-parent" => true,
            ],

            "report" => [
                "text"  => t("Redovisning"),
                "url"   => $this->di->get("url")->create("report"),
                "title" => t("Redovisningar från kmom uppgifter"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text"  => t("Om"),
                "url"   => $this->di->get("url")->create("about"),
                "title" => t("Om Sidan")
            ],

            "grid" => [
                "text"  => t("Grid"),
                "url"   => $this->di->get("url")->create("grid"),
                "title" => t("grid")
            ],

            "typography" => [
                "text"  => t("Typography"),
                "url"   => $this->di->get("url")->create("typography"),
                "title" => t("Typography")
            ],

            "analysis" => [
                "text"  => t("Analysis"),
                "url"   => $this->di->get("url")->create("analysis"),
                "title" => t("Analysis"),
                "mark-if-parent" => true,
            ],
            "Theme" => [
                "text"  => t("Theme"),
                "url"   => $this->di->get("url")->create("theme"),
                "title" => t("Theme"),
                "mark-if-parent" => true,
            ],
            "theme-selector" => [
                "text"  => t("theme-selector"),
                "url"   => $this->di->get("url")->create("theme-selector"),
                "title" => t("theme-selector"),
                "mark-if-parent" => true,
            ],
            "Images" => [
                "text"  => t("Images"),
                "url"   => $this->di->get("url")->create("images"),
                "title" => t("Images"),
                "mark-if-parent" => true,
            ],
            "blogg" => [
                "text"  => t("Blogg"),
                "url"   => $this->di->get("url")->create("blogg"),
                "title" => t("blogg"),
                "mark-if-parent" => true,
            ],
        ],
    ],



    /**
     * Callback tracing the current selected menu item base on scriptname
     *
     */
    "callback" => function ($url) {
        return !strcmp($url, $this->di->get("request")->getCurrentUrl(false));
    },



    /**
     * Callback to check if current page is a decendant of the menuitem,
     * this check applies for those menuitems that has the setting
     * "mark-if-parent" set to true.
     *
     */
    "is_parent" => function ($parent) {
        $url = $this->di->get("request")->getCurrentUrl(false);
        return !substr_compare($parent, $url, 0, strlen($parent));
    },



   /**
     * Callback to create the url, if needed, else comment out.
     *
     */
     /*
    "create_url" => function ($url) {
        return $this->di->get("url")->create($url);
    },*/
];
