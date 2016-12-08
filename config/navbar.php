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
                "text" => t("Start"),
                "url" => $this->di->get("url")->create("index"),
                "title" => t("Me-sida"),
                "mark-if-parent" => true,
            ],

            "report" => [
                "text" => t("Redovisning"),
                "url" => $this->di->get("url")->create("report"),
                "title" => t("Redovisningar från kmom uppgifter"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text" => t("Om"),
                "url" => $this->di->get("url")->create("about"),
                "title" => t("Om Sidan")
            ],

            "Grid" => [
                "text" => t("Grid"),
                "url" => $this->di->get("url")->create("grid"),
                "title" => t("grid"),

                "submenu" => [
                    "items" => [
                        "grid" => [
                            "text" => "Grid",
                            "url" => $this->di->get("url")->create("grid"),
                            "title" => "Grid",
                        ],
                        "typography" => [
                            "text" => "Typography",
                            "url" => $this->di->get("url")->create("typography"),
                            "title" => "Typography",
                        ],
                    ],
                ],
            ],

            "analysis" => [
                "text" => t("Analysis"),
                "url" => $this->di->get("url")->create("analysis"),
                "title" => t("Analysis"),
                "mark-if-parent" => true,
            ],
            "testsidor" => [
                "text" => t("Testsidor"),
                "url" => $this->di->get("url")->create("theme"),
                "title" => t("Theme"),
                "mark-if-parent" => true,

                "submenu" => [
                    "items" => [
                        "theme" => [
                            "text" => "Theme",
                            "url" => $this->di->get("url")->create("theme"),
                            "title" => "Theme",
                        ],
                        "Images" => [
                            "text" => "Images",
                            "url" => $this->di->get("url")->create("images"),
                            "title" => "Images",
                        ],
                        "Design Principle" => [
                            "text" => t("Design Principle"),
                            "url" => $this->di->get("url")->create("design-principle"),
                            "title" => t("Design Principle"),
                            "mark-if-parent" => true,
                        ],
                        "Design Elements" => [
                            "text" => t("Design Element"),
                            "url" => $this->di->get("url")->create("design-element"),
                            "title" => t("Design Element"),
                            "mark-if-parent" => true,
                        ],
                    ],
                ],
            ],
            "theme-selector" => [
                "text" => t("Theme-selector"),
                "url" => $this->di->get("url")->create("theme-selector"),
                "title" => t("Theme-selector"),
                "mark-if-parent" => true,
            ],
            "blogg" => [
                "text" => t("Blogg"),
                "url" => $this->di->get("url")->create("blogg"),
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
                "text" => t("Start"),
                "url" => $this->di->get("url")->create("index"),
                "title" => t("Me-sida"),
                "mark-if-parent" => true,
            ],

            "report" => [
                "text" => t("Redovisning"),
                "url" => $this->di->get("url")->create("report"),
                "title" => t("Redovisningar från kmom uppgifter"),
                "mark-if-parent" => true,
            ],

            "about" => [
                "text" => t("Om"),
                "url" => $this->di->get("url")->create("about"),
                "title" => t("Om Sidan")
            ],

            "Grid" => [
                "text" => t("Grid"),
                "url" => $this->di->get("url")->create("grid"),
                "title" => t("grid"),

                "submenu" => [
                    "items" => [
                        "grid" => [
                            "text" => "Grid",
                            "url" => $this->di->get("url")->create("grid"),
                            "title" => "Grid",
                        ],
                        "typography" => [
                            "text" => "Typography",
                            "url" => $this->di->get("url")->create("typography"),
                            "title" => "Typography",
                        ],
                    ],
                ],
            ],

            "analysis" => [
                "text" => t("Analysis"),
                "url" => $this->di->get("url")->create("analysis"),
                "title" => t("Analysis"),
                "mark-if-parent" => true,
            ],
            "testsidor" => [
                "text" => t("Testsidor"),
                "url" => $this->di->get("url")->create("theme"),
                "title" => t("Theme"),
                "mark-if-parent" => true,

                "submenu" => [
                    "items" => [
                        "theme" => [
                            "text" => "Theme",
                            "url" => $this->di->get("url")->create("theme"),
                            "title" => "Theme",
                        ],
                        "Images" => [
                            "text" => "Images",
                            "url" => $this->di->get("url")->create("images"),
                            "title" => "Images",
                        ],
                        "Design Principle" => [
                            "text" => t("Design Principle"),
                            "url" => $this->di->get("url")->create("design-principle"),
                            "title" => t("Design Principle"),
                            "mark-if-parent" => true,
                        ],
                        "Design Elements" => [
                            "text" => t("Design Element"),
                            "url" => $this->di->get("url")->create("design-element"),
                            "title" => t("Design Element"),
                            "mark-if-parent" => true,
                        ],
                    ],
                ],
            ],
            "theme-selector" => [
                "text" => t("Theme-selector"),
                "url" => $this->di->get("url")->create("theme-selector"),
                "title" => t("Theme-selector"),
                "mark-if-parent" => true,
            ],
            "blogg" => [
                "text" => t("Blogg"),
                "url" => $this->di->get("url")->create("blogg"),
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
