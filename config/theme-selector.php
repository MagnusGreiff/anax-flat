<?php
/**
 * Config file for theme selector.
 *
 */
return [

    "separator" => "------------------------------------------------",
    
    "themes" => [

        "separator0" => "------------------------------------------------",

        "base"      => [
            "title"      => "Minimal style, only the plain base",
            "class"      => "",
            "stylesheets" => [
                "css/style.min.css"
            ]
        ],

        "default"   => [
            "title"      => "Your own selected default theme",
            "class"      => "",
            "stylesheets" => [
                "https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css",
                "css/typography.min.css"
            ]
        ],

        "separator1" => "------------------------------------------------",

        "light"     =>  [
            "title"      => "Very light theme, white, black and nuances of grey",
            "class"      => "light",
            "stylesheets" => [
                "css/light.min.css"
            ]
        ],

        "color"     => [
            "title"      => "Enhance the light theme by adding a tiny bit of color",
            "class"      => "color",
            "stylesheets" => [
                "css/color.min.css"
            ]
        ],

        "dark"      => [
            "title"      => "Dark background and light text",
            "class"      => "dark",
            "stylesheets" => [
                "css/dark.min.css"
            ]
        ],

        "colorful"  => [
            "title"      => "Make a very colorful theme",
            "class"      => "colorful",
            "stylesheets" => [
                "css/colorful.min.css"
            ]
        ],

        "typography" => [
            "title"      => "A theme where the typography really stands out",
            "class"      => "light",
            "stylesheets" => [
                "css/typography.min.css"
            ]
        ],

        "separator2" => "------------------------------------------------",

        "fun"       => [
            "title"      => "All fun, test and play, make it stand out!",
            "class"      => "fun",
            "stylesheets" => []
        ],

        "separator3" => "------------------------------------------------",

        "line"       => [
            "title"      => "Line principle",
            "class"      => "line",
            "stylesheets" => [
                "css/designprinciple1.min.css"
            ]
        ],
        "movement"       => [
            "title"      => "Movement principle",
            "class"      => "movement",
            "stylesheets" => [
                "css/designprinciple2.min.css"
            ]
        ],
        "depth"       => [
            "title"      => "Depth principle",
            "class"      => "depth",
            "stylesheets" => [
                "css/designprinciple3.min.css"
            ]
        ],
        "separator4" => "------------------------------------------------",

        "Design Element 1"       => [
            "title"      => "Bakgrundsbild, opacity and borders",
            "class"      => "designelement1",
            "stylesheets" => [
                "css/designelement1.min.css"
            ]
        ],
        "Design Element 2"       => [
            "title"      => "Strukturell bild, centrerad, bild som designelement",
            "class"      => "designelement2",
            "stylesheets" => [
                "css/designelement2.min.css"
            ]
        ],
        "Design Element 3"       => [
            "title"      => "Gradients, full bredd",
            "class"      => "designelement3",
            "stylesheets" => [
                "css/designelement3.min.css"
            ]
        ],
    ]
];
