<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Version details
 *
 * @package    theme
 * @subpackage adaptable
 * @copyright  2014 Birmingham City University <michael.grant@bcu.ac.uk>
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 *
 */

$settings = null;
require_once(__DIR__.'/libs/admin_confightmleditor.php');
require_once(__DIR__.'/lib.php');
defined('MOODLE_INTERNAL') || die;

$fontlist = array(
'default' => "default",
'ABeeZee' => "ABeeZee",
'Abel' => "Abel",
'Abril Fatface' => "Abril Fatface",
'Aclonica' => "Aclonica",
'Acme' => "Acme",
'Actor' => "Actor",
'Adamina' => "Adamina",
'Advent Pro' => "Advent Pro",
'Aguafina Script' => "Aguafina Script",
'Akronim' => "Akronim",
'Aladin' => "Aladin",
'Aldrich' => "Aldrich",
'Alef' => "Alef",
'Alegreya' => "Alegreya",
'Alegreya Sans' => "Alegreya Sans",
'Alegreya Sans SC' => "Alegreya Sans SC",
'Alegreya SC' => "Alegreya SC",
'Alex Brush' => "Alex Brush",
'Alfa Slab One' => "Alfa Slab One",
'Alice' => "Alice",
'Alike' => "Alike",
'Alike Angular' => "Alike Angular",
'Allan' => "Allan",
'Allerta' => "Allerta",
'Allerta Stencil' => "Allerta Stencil",
'Allura' => "Allura",
'Almendra' => "Almendra",
'Almendra Display' => "Almendra Display",
'Almendra SC' => "Almendra SC",
'Amarante' => "Amarante",
'Amaranth' => "Amaranth",
'Amatic SC' => "Amatic SC",
'Amethysta' => "Amethysta",
'Amiri' => "Amiri",
'Amita' => "Amita",
'Anaheim' => "Anaheim",
'Andada' => "Andada",
'Andika' => "Andika",
'Angkor' => "Angkor",
'Annie Use Your Telescope' => "Annie Use Your Telescope",
'Anonymous Pro' => "Anonymous Pro",
'Antic' => "Antic",
'Antic Didone' => "Antic Didone",
'Antic Slab' => "Antic Slab",
'Anton' => "Anton",
'Arapey' => "Arapey",
'Arbutus' => "Arbutus",
'Arbutus Slab' => "Arbutus Slab",
'Architects Daughter' => "Architects Daughter",
'Archivo Black' => "Archivo Black",
'Archivo Narrow' => "Archivo Narrow",
'Arimo' => "Arimo",
'Arizonia' => "Arizonia",
'Armata' => "Armata",
'Artifika' => "Artifika",
'Arvo' => "Arvo",
'Arya' => "Arya",
'Asap' => "Asap",
'Asar' => "Asar",
'Asset' => "Asset",
'Astloch' => "Astloch",
'Asul' => "Asul",
'Atomic Age' => "Atomic Age",
'Aubrey' => "Aubrey",
'Audiowide' => "Audiowide",
'Autour One' => "Autour One",
'Average' => "Average",
'Average Sans' => "Average Sans",
'Averia Gruesa Libre' => "Averia Gruesa Libre",
'Averia Libre' => "Averia Libre",
'Averia Sans Libre' => "Averia Sans Libre",
'Averia Serif Libre' => "Averia Serif Libre",
'Bad Script' => "Bad Script",
'Balthazar' => "Balthazar",
'Bangers' => "Bangers",
'Basic' => "Basic",
'Battambang' => "Battambang",
'Baumans' => "Baumans",
'Bayon' => "Bayon",
'Belgrano' => "Belgrano",
'Belleza' => "Belleza",
'BenchNine' => "BenchNine",
'Bentham' => "Bentham",
'Berkshire Swash' => "Berkshire Swash",
'Bevan' => "Bevan",
'Bigelow Rules' => "Bigelow Rules",
'Bigshot One' => "Bigshot One",
'Bilbo' => "Bilbo",
'Bilbo Swash Caps' => "Bilbo Swash Caps",
'Biryani' => "Biryani",
'Bitter' => "Bitter",
'Black Ops One' => "Black Ops One",
'Bokor' => "Bokor",
'Bonbon' => "Bonbon",
'Boogaloo' => "Boogaloo",
'Bowlby One' => "Bowlby One",
'Bowlby One SC' => "Bowlby One SC",
'Brawler' => "Brawler",
'Bree Serif' => "Bree Serif",
'Bubblegum Sans' => "Bubblegum Sans",
'Bubbler One' => "Bubbler One",
'Buda' => "Buda",
'Buenard' => "Buenard",
'Butcherman' => "Butcherman",
'Butterfly Kids' => "Butterfly Kids",
'Cabin' => "Cabin",
'Cabin Condensed' => "Cabin Condensed",
'Cabin Sketch' => "Cabin Sketch",
'Caesar Dressing' => "Caesar Dressing",
'Cagliostro' => "Cagliostro",
'Calligraffitti' => "Calligraffitti",
'Cambay' => "Cambay",
'Cambo' => "Cambo",
'Candal' => "Candal",
'Cantarell' => "Cantarell",
'Cantata One' => "Cantata One",
'Cantora One' => "Cantora One",
'Capriola' => "Capriola",
'Cardo' => "Cardo",
'Carme' => "Carme",
'Carrois Gothic' => "Carrois Gothic",
'Carrois Gothic SC' => "Carrois Gothic SC",
'Carter One' => "Carter One",
'Catamaran' => "Catamaran",
'Caudex' => "Caudex",
'Caveat' => "Caveat",
'Caveat Brush' => "Caveat Brush",
'Cedarville Cursive' => "Cedarville Cursive",
'Ceviche One' => "Ceviche One",
'Changa One' => "Changa One",
'Chango' => "Chango",
'Chau Philomene One' => "Chau Philomene One",
'Chela One' => "Chela One",
'Chelsea Market' => "Chelsea Market",
'Chenla' => "Chenla",
'Cherry Cream Soda' => "Cherry Cream Soda",
'Cherry Swash' => "Cherry Swash",
'Chewy' => "Chewy",
'Chicle' => "Chicle",
'Chivo' => "Chivo",
'Chonburi' => "Chonburi",
'Cinzel' => "Cinzel",
'Cinzel Decorative' => "Cinzel Decorative",
'Clicker Script' => "Clicker Script",
'Coda' => "Coda",
'Coda Caption' => "Coda Caption",
'Codystar' => "Codystar",
'Combo' => "Combo",
'Comfortaa' => "Comfortaa",
'Coming Soon' => "Coming Soon",
'Concert One' => "Concert One",
'Condiment' => "Condiment",
'Content' => "Content",
'Contrail One' => "Contrail One",
'Convergence' => "Convergence",
'Cookie' => "Cookie",
'Copse' => "Copse",
'Corben' => "Corben",
'Courgette' => "Courgette",
'Cousine' => "Cousine",
'Coustard' => "Coustard",
'Covered By Your Grace' => "Covered By Your Grace",
'Crafty Girls' => "Crafty Girls",
'Creepster' => "Creepster",
'Crete Round' => "Crete Round",
'Crimson Text' => "Crimson Text",
'Croissant One' => "Croissant One",
'Crushed' => "Crushed",
'Cuprum' => "Cuprum",
'Cutive' => "Cutive",
'Cutive Mono' => "Cutive Mono",
'Damion' => "Damion",
'Dancing Script' => "Dancing Script",
'Dangrek' => "Dangrek",
'Dawning of a New Day' => "Dawning of a New Day",
'Days One' => "Days One",
'Dekko' => "Dekko",
'Delius' => "Delius",
'Delius Swash Caps' => "Delius Swash Caps",
'Delius Unicase' => "Delius Unicase",
'Della Respira' => "Della Respira",
'Denk One' => "Denk One",
'Devonshire' => "Devonshire",
'Dhurjati' => "Dhurjati",
'Didact Gothic' => "Didact Gothic",
'Diplomata' => "Diplomata",
'Diplomata SC' => "Diplomata SC",
'Domine' => "Domine",
'Donegal One' => "Donegal One",
'Doppio One' => "Doppio One",
'Dorsa' => "Dorsa",
'Dosis' => "Dosis",
'Dr Sugiyama' => "Dr Sugiyama",
'Droid Sans' => "Droid Sans",
'Droid Sans Mono' => "Droid Sans Mono",
'Droid Serif' => "Droid Serif",
'Duru Sans' => "Duru Sans",
'Dynalight' => "Dynalight",
'Eagle Lake' => "Eagle Lake",
'Eater' => "Eater",
'EB Garamond' => "EB Garamond",
'Economica' => "Economica",
'Eczar' => "Eczar",
'Ek Mukta' => "Ek Mukta",
'Electrolize' => "Electrolize",
'Elsie' => "Elsie",
'Elsie Swash Caps' => "Elsie Swash Caps",
'Emblema One' => "Emblema One",
'Emilys Candy' => "Emilys Candy",
'Engagement' => "Engagement",
'Englebert' => "Englebert",
'Enriqueta' => "Enriqueta",
'Erica One' => "Erica One",
'Esteban' => "Esteban",
'Euphoria Script' => "Euphoria Script",
'Ewert' => "Ewert",
'Exo' => "Exo",
'Exo 2' => "Exo 2",
'Expletus Sans' => "Expletus Sans",
'Fanwood Text' => "Fanwood Text",
'Fascinate' => "Fascinate",
'Fascinate Inline' => "Fascinate Inline",
'Faster One' => "Faster One",
'Fasthand' => "Fasthand",
'Fauna One' => "Fauna One",
'Federant' => "Federant",
'Federo' => "Federo",
'Felipa' => "Felipa",
'Fenix' => "Fenix",
'Finger Paint' => "Finger Paint",
'Fira Mono' => "Fira Mono",
'Fira Sans' => "Fira Sans",
'Fjalla One' => "Fjalla One",
'Fjord One' => "Fjord One",
'Flamenco' => "Flamenco",
'Flavors' => "Flavors",
'Fondamento' => "Fondamento",
'Fontdiner Swanky' => "Fontdiner Swanky",
'Forum' => "Forum",
'Francois One' => "Francois One",
'Freckle Face' => "Freckle Face",
'Fredericka the Great' => "Fredericka the Great",
'Fredoka One' => "Fredoka One",
'Freehand' => "Freehand",
'Fresca' => "Fresca",
'Frijole' => "Frijole",
'Fruktur' => "Fruktur",
'Fugaz One' => "Fugaz One",
'Gabriela' => "Gabriela",
'Gafata' => "Gafata",
'Galdeano' => "Galdeano",
'Galindo' => "Galindo",
'Gentium Basic' => "Gentium Basic",
'Gentium Book Basic' => "Gentium Book Basic",
'Geo' => "Geo",
'Geostar' => "Geostar",
'Geostar Fill' => "Geostar Fill",
'Germania One' => "Germania One",
'GFS Didot' => "GFS Didot",
'GFS Neohellenic' => "GFS Neohellenic",
'Gidugu' => "Gidugu",
'Gilda Display' => "Gilda Display",
'Give You Glory' => "Give You Glory",
'Glass Antiqua' => "Glass Antiqua",
'Glegoo' => "Glegoo",
'Gloria Hallelujah' => "Gloria Hallelujah",
'Goblin One' => "Goblin One",
'Gochi Hand' => "Gochi Hand",
'Gorditas' => "Gorditas",
'Goudy Bookletter 1911' => "Goudy Bookletter 1911",
'Graduate' => "Graduate",
'Grand Hotel' => "Grand Hotel",
'Gravitas One' => "Gravitas One",
'Great Vibes' => "Great Vibes",
'Griffy' => "Griffy",
'Gruppo' => "Gruppo",
'Gudea' => "Gudea",
'Gurajada' => "Gurajada",
'Habibi' => "Habibi",
'Halant' => "Halant",
'Hammersmith One' => "Hammersmith One",
'Hanalei' => "Hanalei",
'Hanalei Fill' => "Hanalei Fill",
'Handlee' => "Handlee",
'Hanuman' => "Hanuman",
'Happy Monkey' => "Happy Monkey",
'Headland One' => "Headland One",
'Henny Penny' => "Henny Penny",
'Herr Von Muellerhoff' => "Herr Von Muellerhoff",
'Hind' => "Hind",
'Hind Siliguri' => "Hind Siliguri",
'Hind Vadodara' => "Hind Vadodara",
'Holtwood One SC' => "Holtwood One SC",
'Homemade Apple' => "Homemade Apple",
'Homenaje' => "Homenaje",
'Iceberg' => "Iceberg",
'Iceland' => "Iceland",
'IM Fell Double Pica' => "IM Fell Double Pica",
'IM Fell Double Pica SC' => "IM Fell Double Pica SC",
'IM Fell DW Pica' => "IM Fell DW Pica",
'IM Fell DW Pica SC' => "IM Fell DW Pica SC",
'IM Fell English' => "IM Fell English",
'IM Fell English SC' => "IM Fell English SC",
'IM Fell French Canon' => "IM Fell French Canon",
'IM Fell French Canon SC' => "IM Fell French Canon SC",
'IM Fell Great Primer' => "IM Fell Great Primer",
'IM Fell Great Primer SC' => "IM Fell Great Primer SC",
'Imprima' => "Imprima",
'Inconsolata' => "Inconsolata",
'Inder' => "Inder",
'Indie Flower' => "Indie Flower",
'Inika' => "Inika",
'Inknut Antiqua' => "Inknut Antiqua",
'Irish Grover' => "Irish Grover",
'Istok Web' => "Istok Web",
'Italiana' => "Italiana",
'Italianno' => "Italianno",
'Itim' => "Itim",
'Jacques Francois' => "Jacques Francois",
'Jacques Francois Shadow' => "Jacques Francois Shadow",
'Jaldi' => "Jaldi",
'Jim Nightshade' => "Jim Nightshade",
'Jockey One' => "Jockey One",
'Jolly Lodger' => "Jolly Lodger",
'Josefin Sans' => "Josefin Sans",
'Josefin Slab' => "Josefin Slab",
'Joti One' => "Joti One",
'Judson' => "Judson",
'Julee' => "Julee",
'Julius Sans One' => "Julius Sans One",
'Junge' => "Junge",
'Jura' => "Jura",
'Just Another Hand' => "Just Another Hand",
'Just Me Again Down Here' => "Just Me Again Down Here",
'Kadwa' => "Kadwa",
'Kalam' => "Kalam",
'Kameron' => "Kameron",
'Kantumruy' => "Kantumruy",
'Karla' => "Karla",
'Karma' => "Karma",
'Kaushan Script' => "Kaushan Script",
'Kavoon' => "Kavoon",
'Kdam Thmor' => "Kdam Thmor",
'Keania One' => "Keania One",
'Kelly Slab' => "Kelly Slab",
'Kenia' => "Kenia",
'Khand' => "Khand",
'Khmer' => "Khmer",
'Khula' => "Khula",
'Kite One' => "Kite One",
'Knewave' => "Knewave",
'Kotta One' => "Kotta One",
'Koulen' => "Koulen",
'Kranky' => "Kranky",
'Kreon' => "Kreon",
'Kristi' => "Kristi",
'Krona One' => "Krona One",
'Kurale' => "Kurale",
'La Belle Aurore' => "La Belle Aurore",
'Laila' => "Laila",
'Lakki Reddy' => "Lakki Reddy",
'Lancelot' => "Lancelot",
'Lateef' => "Lateef",
'Lato' => "Lato",
'League Script' => "League Script",
'Leckerli One' => "Leckerli One",
'Ledger' => "Ledger",
'Lekton' => "Lekton",
'Lemon' => "Lemon",
'Libre Baskerville' => "Libre Baskerville",
'Life Savers' => "Life Savers",
'Lilita One' => "Lilita One",
'Lily Script One' => "Lily Script One",
'Limelight' => "Limelight",
'Linden Hill' => "Linden Hill",
'Lobster' => "Lobster",
'Lobster Two' => "Lobster Two",
'Londrina Outline' => "Londrina Outline",
'Londrina Shadow' => "Londrina Shadow",
'Londrina Sketch' => "Londrina Sketch",
'Londrina Solid' => "Londrina Solid",
'Lora' => "Lora",
'Love Ya Like A Sister' => "Love Ya Like A Sister",
'Loved by the King' => "Loved by the King",
'Lovers Quarrel' => "Lovers Quarrel",
'Luckiest Guy' => "Luckiest Guy",
'Lusitana' => "Lusitana",
'Lustria' => "Lustria",
'Macondo' => "Macondo",
'Macondo Swash Caps' => "Macondo Swash Caps",
'Magra' => "Magra",
'Maiden Orange' => "Maiden Orange",
'Mako' => "Mako",
'Mallanna' => "Mallanna",
'Mandali' => "Mandali",
'Marcellus' => "Marcellus",
'Marcellus SC' => "Marcellus SC",
'Marck Script' => "Marck Script",
'Margarine' => "Margarine",
'Marko One' => "Marko One",
'Marmelad' => "Marmelad",
'Martel' => "Martel",
'Martel Sans' => "Martel Sans",
'Marvel' => "Marvel",
'Mate' => "Mate",
'Mate SC' => "Mate SC",
'Maven Pro' => "Maven Pro",
'McLaren' => "McLaren",
'Meddon' => "Meddon",
'MedievalSharp' => "MedievalSharp",
'Medula One' => "Medula One",
'Megrim' => "Megrim",
'Meie Script' => "Meie Script",
'Merienda' => "Merienda",
'Merienda One' => "Merienda One",
'Merriweather' => "Merriweather",
'Merriweather Sans' => "Merriweather Sans",
'Metal' => "Metal",
'Metal Mania' => "Metal Mania",
'Metamorphous' => "Metamorphous",
'Metrophobic' => "Metrophobic",
'Michroma' => "Michroma",
'Milonga' => "Milonga",
'Miltonian' => "Miltonian",
'Miltonian Tattoo' => "Miltonian Tattoo",
'Miniver' => "Miniver",
'Miss Fajardose' => "Miss Fajardose",
'Modak' => "Modak",
'Modern Antiqua' => "Modern Antiqua",
'Molengo' => "Molengo",
'Molle' => "Molle",
'Monda' => "Monda",
'Monofett' => "Monofett",
'Monoton' => "Monoton",
'Monsieur La Doulaise' => "Monsieur La Doulaise",
'Montaga' => "Montaga",
'Montez' => "Montez",
'Montserrat' => "Montserrat",
'Montserrat Alternates' => "Montserrat Alternates",
'Montserrat Subrayada' => "Montserrat Subrayada",
'Moul' => "Moul",
'Moulpali' => "Moulpali",
'Mountains of Christmas' => "Mountains of Christmas",
'Mouse Memoirs' => "Mouse Memoirs",
'Mr Bedfort' => "Mr Bedfort",
'Mr Dafoe' => "Mr Dafoe",
'Mr De Haviland' => "Mr De Haviland",
'Mrs Saint Delafield' => "Mrs Saint Delafield",
'Mrs Sheppards' => "Mrs Sheppards",
'Muli' => "Muli",
'Mystery Quest' => "Mystery Quest",
'Neucha' => "Neucha",
'Neuton' => "Neuton",
'New Rocker' => "New Rocker",
'News Cycle' => "News Cycle",
'Niconne' => "Niconne",
'Nixie One' => "Nixie One",
'Nobile' => "Nobile",
'Nokora' => "Nokora",
'Norican' => "Norican",
'Nosifer' => "Nosifer",
'Nothing You Could Do' => "Nothing You Could Do",
'Noticia Text' => "Noticia Text",
'Noto Sans' => "Noto Sans",
'Noto Serif' => "Noto Serif",
'Nova Cut' => "Nova Cut",
'Nova Flat' => "Nova Flat",
'Nova Mono' => "Nova Mono",
'Nova Oval' => "Nova Oval",
'Nova Round' => "Nova Round",
'Nova Script' => "Nova Script",
'Nova Slim' => "Nova Slim",
'Nova Square' => "Nova Square",
'NTR' => "NTR",
'Numans' => "Numans",
'Nunito' => "Nunito",
'Odor Mean Chey' => "Odor Mean Chey",
'Offside' => "Offside",
'Old Standard TT' => "Old Standard TT",
'Oldenburg' => "Oldenburg",
'Oleo Script' => "Oleo Script",
'Oleo Script Swash Caps' => "Oleo Script Swash Caps",
'Open Sans' => "Open Sans",
'Open Sans Condensed' => "Open Sans Condensed",
'Oranienbaum' => "Oranienbaum",
'Orbitron' => "Orbitron",
'Oregano' => "Oregano",
'Orienta' => "Orienta",
'Original Surfer' => "Original Surfer",
'Oswald' => "Oswald",
'Over the Rainbow' => "Over the Rainbow",
'Overlock' => "Overlock",
'Overlock SC' => "Overlock SC",
'Ovo' => "Ovo",
'Oxygen' => "Oxygen",
'Oxygen Mono' => "Oxygen Mono",
'Pacifico' => "Pacifico",
'Palanquin' => "Palanquin",
'Palanquin Dark' => "Palanquin Dark",
'Paprika' => "Paprika",
'Parisienne' => "Parisienne",
'Passero One' => "Passero One",
'Passion One' => "Passion One",
'Pathway Gothic One' => "Pathway Gothic One",
'Patrick Hand' => "Patrick Hand",
'Patrick Hand SC' => "Patrick Hand SC",
'Patua One' => "Patua One",
'Paytone One' => "Paytone One",
'Peddana' => "Peddana",
'Peralta' => "Peralta",
'Permanent Marker' => "Permanent Marker",
'Petit Formal Script' => "Petit Formal Script",
'Petrona' => "Petrona",
'Philosopher' => "Philosopher",
'Piedra' => "Piedra",
'Pinyon Script' => "Pinyon Script",
'Pirata One' => "Pirata One",
'Plaster' => "Plaster",
'Play' => "Play",
'Playball' => "Playball",
'Playfair Display' => "Playfair Display",
'Playfair Display SC' => "Playfair Display SC",
'Podkova' => "Podkova",
'Poiret One' => "Poiret One",
'Poller One' => "Poller One",
'Poly' => "Poly",
'Pompiere' => "Pompiere",
'Pontano Sans' => "Pontano Sans",
'Poppins' => "Poppins",
'Port Lligat Sans' => "Port Lligat Sans",
'Port Lligat Slab' => "Port Lligat Slab",
'Pragati Narrow' => "Pragati Narrow",
'Prata' => "Prata",
'Preahvihear' => "Preahvihear",
'Press Start 2P' => "Press Start 2P",
'Princess Sofia' => "Princess Sofia",
'Prociono' => "Prociono",
'Prosto One' => "Prosto One",
'PT Mono' => "PT Mono",
'PT Sans' => "PT Sans",
'PT Sans Caption' => "PT Sans Caption",
'PT Sans Narrow' => "PT Sans Narrow",
'PT Serif' => "PT Serif",
'PT Serif Caption' => "PT Serif Caption",
'Puritan' => "Puritan",
'Purple Purse' => "Purple Purse",
'Quando' => "Quando",
'Quantico' => "Quantico",
'Quattrocento' => "Quattrocento",
'Quattrocento Sans' => "Quattrocento Sans",
'Questrial' => "Questrial",
'Quicksand' => "Quicksand",
'Quintessential' => "Quintessential",
'Qwigley' => "Qwigley",
'Racing Sans One' => "Racing Sans One",
'Radley' => "Radley",
'Rajdhani' => "Rajdhani",
'Raleway' => "Raleway",
'Raleway Dots' => "Raleway Dots",
'Ramabhadra' => "Ramabhadra",
'Ramaraja' => "Ramaraja",
'Rambla' => "Rambla",
'Rammetto One' => "Rammetto One",
'Ranchers' => "Ranchers",
'Rancho' => "Rancho",
'Ranga' => "Ranga",
'Rationale' => "Rationale",
'Ravi Prakash' => "Ravi Prakash",
'Redressed' => "Redressed",
'Reenie Beanie' => "Reenie Beanie",
'Revalia' => "Revalia",
'Rhodium Libre' => "Rhodium Libre",
'Ribeye' => "Ribeye",
'Ribeye Marrow' => "Ribeye Marrow",
'Righteous' => "Righteous",
'Risque' => "Risque",
'Roboto' => "Roboto",
'Roboto Condensed' => "Roboto Condensed",
'Roboto Mono' => "Roboto Mono",
'Roboto Slab' => "Roboto Slab",
'Rochester' => "Rochester",
'Rock Salt' => "Rock Salt",
'Rokkitt' => "Rokkitt",
'Romanesco' => "Romanesco",
'Ropa Sans' => "Ropa Sans",
'Rosario' => "Rosario",
'Rosarivo' => "Rosarivo",
'Rouge Script' => "Rouge Script",
'Rozha One' => "Rozha One",
'Rubik' => "Rubik",
'Rubik Mono One' => "Rubik Mono One",
'Rubik One' => "Rubik One",
'Ruda' => "Ruda",
'Rufina' => "Rufina",
'Ruge Boogie' => "Ruge Boogie",
'Ruluko' => "Ruluko",
'Rum Raisin' => "Rum Raisin",
'Ruslan Display' => "Ruslan Display",
'Russo One' => "Russo One",
'Ruthie' => "Ruthie",
'Rye' => "Rye",
'Sacramento' => "Sacramento",
'Sahitya' => "Sahitya",
'Sail' => "Sail",
'Salsa' => "Salsa",
'Sanchez' => "Sanchez",
'Sancreek' => "Sancreek",
'Sansita One' => "Sansita One",
'Sarala' => "Sarala",
'Sarina' => "Sarina",
'Sarpanch' => "Sarpanch",
'Satisfy' => "Satisfy",
'Scada' => "Scada",
'Scheherazade' => "Scheherazade",
'Schoolbell' => "Schoolbell",
'Seaweed Script' => "Seaweed Script",
'Sevillana' => "Sevillana",
'Seymour One' => "Seymour One",
'Shadows Into Light' => "Shadows Into Light",
'Shadows Into Light Two' => "Shadows Into Light Two",
'Shanti' => "Shanti",
'Share' => "Share",
'Share Tech' => "Share Tech",
'Share Tech Mono' => "Share Tech Mono",
'Shojumaru' => "Shojumaru",
'Short Stack' => "Short Stack",
'Siemreap' => "Siemreap",
'Sigmar One' => "Sigmar One",
'Signika' => "Signika",
'Signika Negative' => "Signika Negative",
'Simonetta' => "Simonetta",
'Sintony' => "Sintony",
'Sirin Stencil' => "Sirin Stencil",
'Six Caps' => "Six Caps",
'Skranji' => "Skranji",
'Slabo 13px' => "Slabo 13px",
'Slabo 27px' => "Slabo 27px",
'Slackey' => "Slackey",
'Smokum' => "Smokum",
'Smythe' => "Smythe",
'Sniglet' => "Sniglet",
'Snippet' => "Snippet",
'Snowburst One' => "Snowburst One",
'Sofadi One' => "Sofadi One",
'Sofia' => "Sofia",
'Sonsie One' => "Sonsie One",
'Sorts Mill Goudy' => "Sorts Mill Goudy",
'Source Code Pro' => "Source Code Pro",
'Source Sans Pro' => "Source Sans Pro",
'Source Serif Pro' => "Source Serif Pro",
'Special Elite' => "Special Elite",
'Spicy Rice' => "Spicy Rice",
'Spinnaker' => "Spinnaker",
'Spirax' => "Spirax",
'Squada One' => "Squada One",
'Sree Krushnadevaraya' => "Sree Krushnadevaraya",
'Stalemate' => "Stalemate",
'Stalinist One' => "Stalinist One",
'Stardos Stencil' => "Stardos Stencil",
'Stint Ultra Condensed' => "Stint Ultra Condensed",
'Stint Ultra Expanded' => "Stint Ultra Expanded",
'Stoke' => "Stoke",
'Strait' => "Strait",
'Sue Ellen Francisco' => "Sue Ellen Francisco",
'Sumana' => "Sumana",
'Sunshiney' => "Sunshiney",
'Supermercado One' => "Supermercado One",
'Sura' => "Sura",
'Suranna' => "Suranna",
'Suravaram' => "Suravaram",
'Suwannaphum' => "Suwannaphum",
'Swanky and Moo Moo' => "Swanky and Moo Moo",
'Syncopate' => "Syncopate",
'Tangerine' => "Tangerine",
'Taprom' => "Taprom",
'Tauri' => "Tauri",
'Teko' => "Teko",
'Telex' => "Telex",
'Tenali Ramakrishna' => "Tenali Ramakrishna",
'Tenor Sans' => "Tenor Sans",
'Text Me One' => "Text Me One",
'The Girl Next Door' => "The Girl Next Door",
'Tienne' => "Tienne",
'Tillana' => "Tillana",
'Timmana' => "Timmana",
'Tinos' => "Tinos",
'Titan One' => "Titan One",
'Titillium Web' => "Titillium Web",
'Trade Winds' => "Trade Winds",
'Trocchi' => "Trocchi",
'Trochut' => "Trochut",
'Trykker' => "Trykker",
'Tulpen One' => "Tulpen One",
'Ubuntu' => "Ubuntu",
'Ubuntu Condensed' => "Ubuntu Condensed",
'Ubuntu Mono' => "Ubuntu Mono",
'Ultra' => "Ultra",
'Uncial Antiqua' => "Uncial Antiqua",
'Underdog' => "Underdog",
'Unica One' => "Unica One",
'UnifrakturCook' => "UnifrakturCook",
'UnifrakturMaguntia' => "UnifrakturMaguntia",
'Unkempt' => "Unkempt",
'Unlock' => "Unlock",
'Unna' => "Unna",
'Vampiro One' => "Vampiro One",
'Varela' => "Varela",
'Varela Round' => "Varela Round",
'Vast Shadow' => "Vast Shadow",
'Vesper Libre' => "Vesper Libre",
'Vibur' => "Vibur",
'Vidaloka' => "Vidaloka",
'Viga' => "Viga",
'Voces' => "Voces",
'Volkhov' => "Volkhov",
'Vollkorn' => "Vollkorn",
'Voltaire' => "Voltaire",
'VT323' => "VT323",
'Waiting for the Sunrise' => "Waiting for the Sunrise",
'Wallpoet' => "Wallpoet",
'Walter Turncoat' => "Walter Turncoat",
'Warnes' => "Warnes",
'Wellfleet' => "Wellfleet",
'Wendy One' => "Wendy One",
'Wire One' => "Wire One",
'Work Sans' => "Work Sans",
'Yanone Kaffeesatz' => "Yanone Kaffeesatz",
'Yantramanav' => "Yantramanav",
'Yellowtail' => "Yellowtail",
'Yeseva One' => "Yeseva One",
'Yesteryear' => "Yesteryear",
'Zeyada' => "Zeyada"
);

$from0to6 = array(
        '0px' => "0px",
        '1px' => "1px",
        '2px' => "2px",
        '3px' => "3px",
        '4px' => "4px",
        '5px' => "5px",
        '6px' => "6px",
);

$from0to8 = array(
        '0px' => "0px",
        '1px' => "1px",
        '2px' => "2px",
        '3px' => "3px",
        '4px' => "4px",
        '5px' => "5px",
        '6px' => "6px",
        '7px' => "7px",
        '8px' => "8px",
);

$from0to12 = array(
        '0px' => "0px",
        '1px' => "1px",
        '2px' => "2px",
        '3px' => "3px",
        '4px' => "4px",
        '5px' => "5px",
        '6px' => "6px",
        '7px' => "7px",
        '8px' => "8px",
        '9px' => "9px",
        '10px' => "10px",
        '11px' => "11px",
        '12px' => "12px",
);

$from10to16 = array(
        '10px' => "10px",
        '11px' => "11px",
        '12px' => "12px",
        '13px' => "13px",
        '14px' => "14px",
        '15px' => "15px",
        '16px' => "16px",
);

$from0to20 = array(
        '0px' => "0px",
        '5px' => "5px",
        '10px' => "10px",
        '15px' => "15px",
        '20px' => "20px",
    );

$borderstyles = array(
		'solid' => 'solid',
		'dashed' => 'dashed',
		'dotted' => 'dotted',
		'double' => 'double',			
		);


if (is_siteadmin()) {
    // adaptable theme settings page.
    $ADMIN->add('themes', new admin_category('theme_adaptable', 'adaptable'));


    // Colors section.
    $temp = new admin_settingpage('theme_adaptable_color', get_string('colorsettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_color', get_string('colorsettingsheading', 'theme_adaptable'),
                   format_text(get_string('colordesc', 'theme_adaptable'), FORMAT_MARKDOWN)));


    // Main colors heading.
    $name = 'theme_adaptable/settingsmaincolors';
    $heading = get_string('settingsmaincolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);


    // Site main color.
    $name = 'theme_adaptable/maincolor';
    $title = get_string('maincolor', 'theme_adaptable');
    $description = get_string('maincolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Site background color.
    $name = 'theme_adaptable/backcolor';
    $title = get_string('backcolor', 'theme_adaptable');
    $description = get_string('backcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Link color.
    $name = 'theme_adaptable/linkcolor';
    $title = get_string('linkcolor', 'theme_adaptable');
    $description = get_string('linkcolordesc', 'theme_adaptable');
    $default = '#009688';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $temp->add($setting);

    // Link hover color.
    $name = 'theme_adaptable/linkhover';
    $title = get_string('linkhover', 'theme_adaptable');
    $description = get_string('linkhoverdesc', 'theme_adaptable');
    $default = '#009688';
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default, $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Header colors heading.
    $name = 'theme_adaptable/settingsheadercolors';
    $heading = get_string('settingsheadercolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Loading bar color.
    $name = 'theme_adaptable/loadingcolor';
    $title = get_string('loadingcolor', 'theme_adaptable');
    $description = get_string('loadingcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#f44336', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Top header background color.
    $name = 'theme_adaptable/headerbkcolor';
    $title = get_string('headerbkcolor', 'theme_adaptable');
    $description = get_string('headerbkcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#00796B', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Top header text color.
    $name = 'theme_adaptable/headertextcolor';
    $title = get_string('headertextcolor', 'theme_adaptable');
    $description = get_string('headertextcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Bottom header background color.
    $name = 'theme_adaptable/headerbkcolor2';
    $title = get_string('headerbkcolor2', 'theme_adaptable');
    $description = get_string('headerbkcolor2desc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Bottom header text color.
    $name = 'theme_adaptable/headertextcolor2';
    $title = get_string('headertextcolor2', 'theme_adaptable');
    $description = get_string('headertextcolor2desc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Loading bar color.
    $name = 'theme_adaptable/loadingcolor';
    $title = get_string('loadingcolor', 'theme_adaptable');
    $description = get_string('loadingcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#4db6ac', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Menu colors heading.
    $name = 'theme_adaptable/settingsmenucolors';
    $heading = get_string('settingsmenucolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Main menu background color.
    $name = 'theme_adaptable/menubkcolor';
    $title = get_string('menubkcolor', 'theme_adaptable');
    $description = get_string('menubkcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main menu text color.
    $name = 'theme_adaptable/menufontcolor';
    $title = get_string('menufontcolor', 'theme_adaptable');
    $description = get_string('menufontcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#444444', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main menu text hover color.
    $name = 'theme_adaptable/menufonthovercolor';
    $title = get_string('menufonthovercolor', 'theme_adaptable');
    $description = get_string('menufonthovercolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#3c469c', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main menu bottom border color.
    $name = 'theme_adaptable/menubordercolor';
    $title = get_string('menubordercolor', 'theme_adaptable');
    $description = get_string('menubordercolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#80cbc4', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Mobile Menu colors heading.
    $name = 'theme_adaptable/settingsmobilemenucolors';
    $heading = get_string('settingsmobilemenucolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Mobile menu background color.
    $name = 'theme_adaptable/mobilemenubkcolor';
    $title = get_string('mobilemenubkcolor', 'theme_adaptable');
    $description = get_string('mobilemenubkcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#F9F9F9', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Mobile menu text color.
    $name = 'theme_adaptable/mobilemenufontcolor';
    $title = get_string('mobilemenufontcolor', 'theme_adaptable');
    $description = get_string('mobilemenufontcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#000000', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Info Box colors heading.
    $name = 'theme_adaptable/settingsinfoboxcolors';
    $heading = get_string('settingsinfoboxcolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Info Box background color.
    $name = 'theme_adaptable/infoboxcolor';
    $title = get_string('infoboxcolor', 'theme_adaptable');
    $description = get_string('infoboxcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#333333', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Info Box text color.
    $name = 'theme_adaptable/infoboxtextcolor';
    $title = get_string('infoboxtextcolor', 'theme_adaptable');
    $description = get_string('infoboxtextcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Info Box 2 colors heading.
    $name = 'theme_adaptable/settingssecondinfoboxcolors';
    $heading = get_string('settingssecondinfoboxcolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Info Box 2 background color.
    $name = 'theme_adaptable/infoboxcolor2';
    $title = get_string('infoboxcolor2', 'theme_adaptable');
    $description = get_string('infoboxcolor2desc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#f3f3f3', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Info Box 2 text color.
    $name = 'theme_adaptable/infoboxtextcolor2';
    $title = get_string('infoboxtextcolor2', 'theme_adaptable');
    $description = get_string('infoboxtextcolor2desc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#666666', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Market blocks colors heading.
    $name = 'theme_adaptable/settingsmarketingcolors';
    $heading = get_string('settingsmarketingcolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Market blocks border color.
    $name = 'theme_adaptable/marketblockbordercolor';
    $title = get_string('marketblockbordercolor', 'theme_adaptable');
    $description = get_string('marketblockbordercolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#e8eaeb', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Market blocks background color.
    $name = 'theme_adaptable/marketblocksbackgroundcolor';
    $title = get_string('marketblocksbackgroundcolor', 'theme_adaptable');
    $description = get_string('marketblocksbackgroundcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFFFFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Overlay tiles colors heading.
    $name = 'theme_adaptable/settingsoverlaycolors';
    $heading = get_string('settingsoverlaycolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    $name = 'theme_adaptable/rendereroverlaycolor';
    $title = get_string('rendereroverlaycolor', 'theme_adaptable');
    $description = get_string('rendereroverlaycolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/rendereroverlayfontcolor';
    $title = get_string('rendereroverlayfontcolor', 'theme_adaptable');
    $description = get_string('rendereroverlayfontcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/tilesbordercolor';
    $title = get_string('tilesbordercolor', 'theme_adaptable');
    $description = get_string('tilesbordercolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/covbkcolor';
    $title = get_string('covbkcolor', 'theme_adaptable');
    $description = get_string('covbkcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/covfontcolor';
    $title = get_string('covfontcolor', 'theme_adaptable');
    $description = get_string('covfontcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/dividingline';
    $title = get_string('dividingline', 'theme_adaptable');
    $description = get_string('dividinglinedesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/dividingline2';
    $title = get_string('dividingline2', 'theme_adaptable');
    $description = get_string('dividingline2desc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Navbar colors heading.
    $name = 'theme_adaptable/settingsnavbarcolors';
    $heading = get_string('settingsnavbarcolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    $name = 'theme_adaptable/navbarborder';
    $title = get_string('navbarborder', 'theme_adaptable');
    $description = get_string('navbarborderdesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#B7B3EF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/navbarhover';
    $title = get_string('navbarhover', 'theme_adaptable');
    $description = get_string('navbarhoverdesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#3C469C', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Breadcrumb colors heading.
    $name = 'theme_adaptable/settingsbreadcrumbcolors';
    $heading = get_string('settingsbreadcrumbcolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    $name = 'theme_adaptable/breadcrumb';
    $title = get_string('breadcrumb', 'theme_adaptable');
    $description = get_string('breadcrumbdesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#b4bbbf', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Breadcrumb text color.
    $name = 'theme_adaptable/breadcrumbtextcolor';
    $title = get_string('breadcrumbtextcolor', 'theme_adaptable');
    $description = get_string('breadcrumbtextcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#444444', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/activebreadcrumb';
    $title = get_string('activebreadcrumb', 'theme_adaptable');
    $description = get_string('activebreadcrumbdesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#e8eaeb', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/sectionheadingcolor';
    $title = get_string('sectionheadingcolor', 'theme_adaptable');
    $description = get_string('sectionheadingcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#5f588a', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/currentcolor';
    $title = get_string('currentcolor', 'theme_adaptable');
    $description = get_string('currentcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#d9edf7', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Footer colors heading.
    $name = 'theme_adaptable/settingsfootercolors';
    $heading = get_string('settingsfootercolors', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    $name = 'theme_adaptable/footerbkcolor';
    $title = get_string('footerbkcolor', 'theme_adaptable');
    $description = get_string('footerbkcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#424242', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/footertextcolor';
    $title = get_string('footertextcolor', 'theme_adaptable');
    $description = get_string('footertextcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/footertextcolor2';
    $title = get_string('footertextcolor2', 'theme_adaptable');
    $description = get_string('footertextcolor2desc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/footerlinkcolor';
    $title = get_string('footerlinkcolor', 'theme_adaptable');
    $description = get_string('footerlinkcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);


    // Fonts Section.
    $temp = new admin_settingpage('theme_adaptable_font', get_string('fontsettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_font', get_string('fontsettingsheading', 'theme_adaptable'),
                   format_text(get_string('fontdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    // Fonts heading.
    $name = 'theme_adaptable/settingsfonts';
    $heading = get_string('settingsfonts', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Main Font Name.
    $name = 'theme_adaptable/fontname';
    $title = get_string('fontname', 'theme_adaptable');
    $description = get_string('fontnamedesc', 'theme_adaptable');
    $default = 'Open Sans';
    $choices = $fontlist;
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main Font Subset.
    $name = 'theme_adaptable/fontsubset';
    $title = get_string('fontsubset', 'theme_adaptable');
    $description = get_string('fontsubsetdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_configmulticheckbox($name, $title, $description, $default, array(
        'latin-ext' => "latin-ext",
        'cyrillic' => "cyrillic",
        'cyrillic-ext' => "cyrillic-ext",
        'greek' => "greek",
        'greek-ext' => "greek-ext",
        'vietnamese' => "vietnamese",
    ));
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    // Main Font weight.
    $name = 'theme_adaptable/fontweight';
    $title = get_string('fontweight', 'theme_adaptable');
    $description = get_string('fontweightdesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '400');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Main Font color.
    $name = 'theme_adaptable/fontcolor';
    $title = get_string('fontcolor', 'theme_adaptable');
    $description = get_string('fontcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#333333', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Header Font Name.
    $name = 'theme_adaptable/fontheadername';
    $title = get_string('fontheadername', 'theme_adaptable');
    $description = get_string('fontheadernamedesc', 'theme_adaptable');
    $default = 'Roboto Slab';
    $choices = $fontlist;
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $temp->add($setting);

    // Header Font weight.
    $name = 'theme_adaptable/fontheaderweight';
    $title = get_string('fontheaderweight', 'theme_adaptable');
    $description = get_string('fontheaderweightdesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '400');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Header font color.
    $name = 'theme_adaptable/fontheadercolor';
    $title = get_string('fontheadercolor', 'theme_adaptable');
    $description = get_string('fontheadercolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#333333', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Title Font Name.
    $name = 'theme_adaptable/fonttitlename';
    $title = get_string('fonttitlename', 'theme_adaptable');
    $description = get_string('fonttitlenamedesc', 'theme_adaptable');
    $default = 'Audiowide';
    $choices = $fontlist;
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Title Font size.
    $name = 'theme_adaptable/fonttitlesize';
    $title = get_string('fonttitlesize', 'theme_adaptable');
    $description = get_string('fonttitlesizedesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '48px');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Title Font weight.
    $name = 'theme_adaptable/fonttitleweight';
    $title = get_string('fonttitleweight', 'theme_adaptable');
    $description = get_string('fonttitleweightdesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '400');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Title font color.
    $name = 'theme_adaptable/fonttitlecolor';
    $title = get_string('fonttitlecolor', 'theme_adaptable');
    $description = get_string('fonttitlecolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);


    // Buttons Section.
    $temp = new admin_settingpage('theme_adaptable_buttons', get_string('buttonsettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_header', get_string('buttonsettingsheading', 'theme_adaptable'),
    format_text(get_string('buttondesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/buttonradius';
    $title = get_string('buttonradius', 'theme_adaptable');
    $description = get_string('buttonradiusdesc', 'theme_adaptable');
    $radchoices = $from0to6;
    $setting = new admin_setting_configselect($name, $title, $description, '5px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Buttons background color.
    $name = 'theme_adaptable/buttoncolor';
    $title = get_string('buttoncolor', 'theme_adaptable');
    $description = get_string('buttoncolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Buttons background hover color.
    $name = 'theme_adaptable/buttonhovercolor';
    $title = get_string('buttonhovercolor', 'theme_adaptable');
    $description = get_string('buttonhovercolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#00695c', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Buttons text color.
    $name = 'theme_adaptable/buttontextcolor';
    $title = get_string('buttontextcolor', 'theme_adaptable');
    $description = get_string('buttontextcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/editonbk';
    $title = get_string('editonbk', 'theme_adaptable');
    $description = get_string('editonbkdesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#4caf50', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/editoffbk';
    $title = get_string('editoffbk', 'theme_adaptable');
    $description = get_string('editoffbkdesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#f44336', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/editfont';
    $title = get_string('editfont', 'theme_adaptable');
    $description = get_string('editfontdesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ffffff', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/editverticalpadding';
    $title = get_string('editverticalpadding', 'theme_adaptable');
    $description = get_string('editverticalpadding', 'theme_adaptable');
    $radchoices = $from0to6;
    $setting = new admin_setting_configselect($name, $title, $description, '4px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/edithorizontalpadding';
    $title = get_string('edithorizontalpadding', 'theme_adaptable');
    $description = get_string('edithorizontalpadding', 'theme_adaptable');
    $radchoices = $from0to6;
    $setting = new admin_setting_configselect($name, $title, $description, '6px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/edittopmargin';
    $title = get_string('edittopmargin', 'theme_adaptable');
    $description = get_string('edittopmargin', 'theme_adaptable');
    $radchoices = $from0to8;
    $setting = new admin_setting_configselect($name, $title, $description, '1px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/buttonlogincolor';
    $title = get_string('buttonlogincolor', 'theme_adaptable');
    $description = get_string('buttonlogincolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#ef5350', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/buttonloginhovercolor';
    $title = get_string('buttonloginhovercolor', 'theme_adaptable');
    $description = get_string('buttonloginhovercolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#e53935', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/buttonlogintextcolor';
    $title = get_string('buttonlogintextcolor', 'theme_adaptable');
    $description = get_string('buttonlogintextcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFFFFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/buttonloginpadding';
    $title = get_string('buttonloginpadding', 'theme_adaptable');
    $description = get_string('buttonloginpaddingdesc', 'theme_adaptable');
    $radchoices = $from0to8;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/buttonloginheight';
    $title = get_string('buttonloginheight', 'theme_adaptable');
    $description = get_string('buttonloginheightdesc', 'theme_adaptable');
    $radchoices = array(
        '16px' => "16px",
        '18px' => "18px",
        '20px' => "20px",
        '22px' => "22px",
        '24px' => "24px",
        '26px' => "26px",
        '28px' => "28px",
        '30px' => "30px",
        '32px' => "32px",
        '34px' => "34px",
    );
    $setting = new admin_setting_configselect($name, $title, $description, '24px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/buttonloginmargintop';
    $title = get_string('buttonloginmargintop', 'theme_adaptable');
    $description = get_string('buttonloginmargintopdesc', 'theme_adaptable');
    $radchoices = $from0to12;
    $setting = new admin_setting_configselect($name, $title, $description, '2px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);


    // Header heading.
    $temp = new admin_settingpage('theme_adaptable_header', get_string('headersettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_header', get_string('headersettingsheading', 'theme_adaptable'),
    format_text(get_string('headerdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    // Enable Site title.
    $name = 'theme_adaptable/sitetitle';
    $title = get_string('sitetitle', 'theme_adaptable');
    $description = get_string('sitetitledesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    // Site title.
    $name = 'theme_adaptable/sitetitletext';
    $title = get_string('sitetitletext', 'theme_adaptable');
    $description = get_string('sitetitletextdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    // Logo.
    $name = 'theme_adaptable/logo';
    $title = get_string('logo', 'theme_adaptable');
    $description = get_string('logodesc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Favicon file setting.
    $name = 'theme_adaptable/favicon';
    $title = get_string('favicon', 'theme_adaptable');
    $description = get_string('favicondesc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'favicon');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Display Course title in the header.
    $name = 'theme_adaptable/enableheading';
    $title = get_string('enableheading', 'theme_adaptable');
    $description = get_string('enableheadingdesc', 'theme_adaptable');
    $radchoices = array(
        'fullname' => "Course Full Name",
        'shortname' => "Course Short Name",
        'off' => get_string('hide'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, 'fullname', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Display Course title in the breadcrumb.
    $name = 'theme_adaptable/breadcrumbtitle';
    $title = get_string('breadcrumbtitle', 'theme_adaptable');
    $description = get_string('breadcrumbtitledesc', 'theme_adaptable');
    $radchoices = array(
        'fullname' => "Course Full Name",
        'shortname' => "Course Short Name"
    );
    $setting = new admin_setting_configselect($name, $title, $description, 'shortname', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/frontpagelogin';
    $title = get_string('frontpagelogin', 'theme_adaptable');
    $description = get_string('frontpagelogindesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);

    // Navbar.
    $temp = new admin_settingpage('theme_adaptable_navbar', get_string('navbarsettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_navbar', get_string('navbarsettingsheading', 'theme_adaptable'),
        format_text(get_string('navbardesc', 'theme_adaptable'), FORMAT_MARKDOWN)));


    $name = 'theme_adaptable/menufontsize';
    $title = get_string('menufontsize', 'theme_adaptable');
    $description = get_string('menufontsizedesc', 'theme_adaptable');
    $radchoices = $from10to16;
    $setting = new admin_setting_configselect($name, $title, $description, '14px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enablehome';
    $title = get_string('home');
    $description = get_string('enablehomedesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enablehomeredirect';
    $title = get_string('enablehomeredirect', 'theme_adaptable');
    $description = get_string('enablehomeredirectdesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enablemyhome';
    $title = get_string('myhome');
    $description = get_string('enablemyhomedesc', 'theme_adaptable', get_string('myhome'));
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enableevents';
    $title = get_string('events', 'theme_adaptable');
    $description = get_string('enableeventsdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enablemysites';
    $title = get_string('mysites', 'theme_adaptable');
    $description = get_string('enablemysitesdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enablethiscourse';
    $title = get_string('thiscourse', 'theme_adaptable');
    $description = get_string('enablethiscoursedesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enablezoom';
    $title = get_string('enablezoom', 'theme_adaptable');
    $description = get_string('enablezoomdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/enableshowhideblocks';
    $title = get_string('enableshowhideblocks', 'theme_adaptable');
    $description = get_string('enableshowhideblocksdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable help link.
    $name = 'theme_adaptable/enablehelp';
    $title = get_string('enablehelp', 'theme_adaptable');
    $description = get_string('enablehelpdesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/helpprofilefield';
    $title = get_string('helpprofilefield', 'theme_adaptable');
    $description = get_string('helpprofilefielddesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
    
    $name = 'theme_adaptable/enablehelp2';
    $title = get_string('enablehelp', 'theme_adaptable');
    $description = get_string('enablehelpdesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/helpprofilefield2';
    $title = get_string('helpprofilefield', 'theme_adaptable');
    $description = get_string('helpprofilefielddesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_adaptable/helptarget';
    $title = get_string('helptarget', 'theme_adaptable');
    $description = get_string('helptargetdesc', 'theme_adaptable');
    $choices = array(
        '_blank' => get_string('targetnewwindow', 'theme_adaptable'),
        '_self' => get_string('targetsamewindow', 'theme_adaptable'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, '_blank', $choices);

    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);


    // Navbar.
    $temp = new admin_settingpage('theme_adaptable_usernav', get_string('usernav', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_usernav', get_string('usernavheading', 'theme_adaptable'),
           format_text(get_string('usernavdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/hideinforum';
    $title = get_string('hideinforum', 'theme_adaptable');
    $description = get_string('hideinforumdesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/headerprofilefontsize';
    $title = get_string('headerprofilefontsize', 'theme_adaptable');
    $description = get_string('headerprofilefontsizedesc', 'theme_adaptable');
    $radchoices = $from10to16;
    $setting = new admin_setting_configselect($name, $title, $description, '12px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable My.
    $name = 'theme_adaptable/enablemy';
    $title = get_string('enablemy', 'theme_adaptable');
    $description = get_string('enablemydesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable View Profile.
    $name = 'theme_adaptable/enableprofile';
    $title = get_string('enableprofile', 'theme_adaptable');
    $description = get_string('enableprofiledesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Edit Profile.
    $name = 'theme_adaptable/enableeditprofile';
    $title = get_string('enableeditprofile', 'theme_adaptable');
    $description = get_string('enableeditprofiledesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Calendar.
    $name = 'theme_adaptable/enablecalendar';
    $title = get_string('enablecalendar', 'theme_adaptable');
    $description = get_string('enablecalendardesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Private Files.
    $name = 'theme_adaptable/enableprivatefiles';
    $title = get_string('enableprivatefiles', 'theme_adaptable');
    $description = get_string('enableprivatefilesdesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Grades.
    $name = 'theme_adaptable/enablegrades';
    $title = get_string('enablegrades', 'theme_adaptable');
    $description = get_string('enablegradesdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Badges.
    $name = 'theme_adaptable/enablebadges';
    $title = get_string('enablebadges', 'theme_adaptable');
    $description = get_string('enablebadgesdesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Preferences.
    $name = 'theme_adaptable/enablepref';
    $title = get_string('enablepref', 'theme_adaptable');
    $description = get_string('enableprefdesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Notes.
    $name = 'theme_adaptable/enablenote';
    $title = get_string('enablenote', 'theme_adaptable');
    $description = get_string('enablenotedesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Blog.
    $name = 'theme_adaptable/enableblog';
    $title = get_string('enableblog', 'theme_adaptable');
    $description = get_string('enableblogdesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Forum posts.
    $name = 'theme_adaptable/enableposts';
    $title = get_string('enableposts', 'theme_adaptable');
    $description = get_string('enablepostsdesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Enable Feed.
    $name = 'theme_adaptable/enablefeed';
    $title = get_string('enablefeed', 'theme_adaptable');
    $description = get_string('enablefeeddesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);


    // Social links.
    $temp = new admin_settingpage('theme_adaptable_social', get_string('socialsettings', 'theme_adaptable'));

    $temp->add(new admin_setting_heading('theme_adaptable_social', get_string('socialheading', 'theme_adaptable'),
    format_text(get_string('socialtitledesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/socialset';
    $title = get_string('socialset', 'theme_adaptable');
    $description = get_string('socialsetdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/socialsize';
    $title = get_string('socialsize', 'theme_adaptable');
    $description = get_string('socialsize', 'theme_adaptable');
    $choices = array(
        16 => "16px",
        18 => "18px",
        22 => "22px",
        26 => "26px",
        32 => "32px",
        36 => "36px",
        42 => "42px",
    );
    $setting = new admin_setting_configselect($name, $title, $description, 32, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/socialsizemobile';
    $title = get_string('socialsizemobile', 'theme_adaptable');
    $description = get_string('socialsizemobile', 'theme_adaptable');
    $choices = array(
        14 => "14px",
        16 => "16px",
        18 => "18px",
        22 => "22px",
        26 => "26px",
        32 => "32px",
        36 => "36px",
        42 => "42px",
    );
    $setting = new admin_setting_configselect($name, $title, $description, '14', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/socialpaddingtop';
    $title = get_string('socialpaddingtop', 'theme_adaptable');
    $description = get_string('socialpaddingtop', 'theme_adaptable');
    $choices = array(
        '0%' => "0%",
        '0.1%' => "0.1%",
        '0.2%' => "0.2%",
        '0.3%' => "0.3%",
        '0.4%' => "0.4%",
        '0.5%' => "0.5%",
        '0.6%' => "0.6%",
        '0.7%' => "0.7%",
        '0.8%' => "0.8%",
        '0.9%' => "0.9%",
        '1%' => "1%",
        '1.1%' => "1.1%",
        '1.2%' => "1.2%",
        '1.3%' => "1.3%",
        '1.4%' => "1.4%",
        '1.5%' => "1.5%",
        '1.6%' => "1.6%",
        '1.7%' => "1.7%",
        '1.8%' => "1.8%",
        '1.9%' => "1.9%",
        '2%' => "2%",
        '2.1%' => "2.1%",
        '2.2%' => "2.2%",
        '2.3%' => "2.3%",
        '2.4%' => "2.4%",
        '2.5%' => "2.5%",
    );
    $setting = new admin_setting_configselect($name, $title, $description, '1.8%', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Social settings.
    $name = 'theme_adaptable/socialsearchicon';
    $title = get_string('socialsearchicon', 'theme_adaptable');
    $description = get_string('socialsearchicondesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, false, false);
    $temp->add($setting);

    $name = 'theme_adaptable/social1';
    $title = get_string('social1', 'theme_adaptable');
    $description = get_string('social1desc', 'theme_adaptable');
    $default = 'http://facebook.com/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social1icon';
    $title = get_string('social1icon', 'theme_adaptable') . ' - ' . get_string('social1', 'theme_adaptable');
    $default = 'fa-facebook-square';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social2';
    $title = get_string('social2', 'theme_adaptable');
    $description = get_string('social2desc', 'theme_adaptable');
	$default = 'http://twitter.com/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social2icon';
    $title = get_string('social2icon', 'theme_adaptable') . ' - ' . get_string('social2', 'theme_adaptable');
    $default = 'fa-twitter-square';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social3';
    $title = get_string('social3', 'theme_adaptable');
    $description = get_string('social3desc', 'theme_adaptable');
	$default = 'https://plus.google.com/';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social3icon';
    $title = get_string('social3icon', 'theme_adaptable') . ' - ' . get_string('social3', 'theme_adaptable');
    $default = 'fa-google-plus';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social4';
    $title = get_string('social4', 'theme_adaptable');
    $description = get_string('social4desc', 'theme_adaptable');
	$default = 'https://www.instagram.com/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social4icon';
    $title = get_string('social4icon', 'theme_adaptable') . ' - ' . get_string('social4', 'theme_adaptable');
    $default = 'fa-instagram';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social5';
    $title = get_string('social5', 'theme_adaptable');
    $description = get_string('social5desc', 'theme_adaptable');	
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social5icon';
    $title = get_string('social5icon', 'theme_adaptable') . ' - ' . get_string('social5', 'theme_adaptable');
    $default = 'fa-tumblr-square';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social6';
    $title = get_string('social6', 'theme_adaptable');
    $description = get_string('social6desc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social6icon';
    $title = get_string('social6icon', 'theme_adaptable') . ' - ' . get_string('social6', 'theme_adaptable');
    $default = 'fa-linkedin';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social7';
    $title = get_string('social7', 'theme_adaptable');
    $description = get_string('social7desc', 'theme_adaptable');
	$default = 'https://youtube.com/';
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social7icon';
    $title = get_string('social7icon', 'theme_adaptable') . ' - ' . get_string('social7', 'theme_adaptable');
    $default = 'fa-youtube-square';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social8';
    $title = get_string('social8', 'theme_adaptable');
    $description = get_string('social8desc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social8icon';
    $title = get_string('social8icon', 'theme_adaptable') . ' - ' . get_string('social8', 'theme_adaptable');
    $default = 'fa-flickr';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social9';
    $title = get_string('social9', 'theme_adaptable');
    $description = get_string('social9desc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social9icon';
    $title = get_string('social9icon', 'theme_adaptable') . ' - ' . get_string('social9', 'theme_adaptable');
    $default = 'fa-pinterest-p';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social10';
    $title = get_string('social10', 'theme_adaptable');
    $description = get_string('social10desc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social10icon';
    $title = get_string('social10icon', 'theme_adaptable') . ' - ' . get_string('social10', 'theme_adaptable');
    $default = 'fa-globe';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social11';
    $title = get_string('social11', 'theme_adaptable');
    $description = get_string('social11desc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/social11icon';
    $title = get_string('social11icon', 'theme_adaptable') . ' - ' . get_string('social11', 'theme_adaptable');
    $default = 'fa-rss';
    $description = get_string('socialicondesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_URL);
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);

    $temp = new admin_settingpage('theme_adaptable_menus', get_string('menusettings', 'theme_adaptable'));

    $temp->add(new admin_setting_heading('theme_adaptable_menus', get_string('menusheading', 'theme_adaptable'),
    format_text(get_string('menustitledesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/disablecustommenu';
    $title = get_string('disablecustommenu', 'theme_adaptable');
    $description = get_string('disablecustommenudesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, false, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/menusession';
    $title = get_string('menusession', 'theme_adaptable');
    $description = get_string('menusessiondesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, true, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/menusessionttl';
    $title = get_string('menusessionttl', 'theme_adaptable');
    $description = get_string('menusessionttldesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '30', PARAM_INT);
    $temp->add($setting);


    // Settings for tools menus.
    $temp->add(new admin_setting_heading('theme_adaptable_toolsmenu', get_string('toolsmenu', 'theme_adaptable'),
    format_text(get_string('toolsmenustitledesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $temp->add(new admin_setting_heading('theme_adaptable_toolsmenu1', get_string('toolsmenuheading1', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/enabletoolsmenus';
    $title = get_string('enabletoolsmenus', 'theme_adaptable');
    $description = get_string('enabletoolsmenusdesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/toolsmenu';
    $title = get_string('toolsmenu1', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_adaptable/toolsmenu1field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = get_string('newmenufielddesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_toolsmenu2', get_string('toolsmenuheading2', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/toolsmenu2';
    $title = get_string('toolsmenu2', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_adaptable/toolsmenu2field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = get_string('newmenufielddesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    // Settings for top header menus.
    $temp->add(new admin_setting_heading('theme_adaptable_topmenus', get_string('topmenusheading', 'theme_adaptable'),
    format_text(get_string('topmenusheadingdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $temp->add(new admin_setting_heading('theme_adaptable_menus_visibility', get_string('menusheadingvisibility', 'theme_adaptable'),
    format_text(get_string('menusheadingvisibilitydesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/enablemenus';
    $title = get_string('enablemenus', 'theme_adaptable');
    $description = get_string('enablemenusdesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/disablemenuscoursepages';
    $title = get_string('disablemenuscoursepages', 'theme_adaptable');
    $description = get_string('disablemenuscoursepagesdesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_adaptable/menuuseroverride';
    $title = get_string('menuuseroverride', 'theme_adaptable');
    $description = get_string('menuuseroverridedesc', 'theme_adaptable');
	$default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/menuoverrideprofilefield';
    $title = get_string('menuoverrideprofilefield', 'theme_adaptable');
    $description = get_string('menuoverrideprofilefielddesc', 'theme_adaptable');
	$default = get_string('menuoverrideprofilefielddefault', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, $default, PARAM_RAW);
    $temp->add($setting);	
	
	$temp->add(new admin_setting_heading('theme_adaptable_menus1', get_string('menusheading1', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu1';
    $title = get_string('newmenu1', 'theme_adaptable');
    $description = get_string('newmenudesc', 'theme_adaptable');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu1requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
	$default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu1field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = get_string('newmenufielddesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus2', get_string('menusheading2', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu2';
    $title = get_string('newmenu2', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);
	
	$name = 'theme_adaptable/newmenu2requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
	$default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu2field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus3', get_string('menusheading3', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu3';
    $title = get_string('newmenu3', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu3requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
	$default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
    $name = 'theme_adaptable/newmenu3field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus4', get_string('menusheading4', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu4';
    $title = get_string('newmenu4', 'theme_adaptable');
    $description = get_string('newmenudesc', 'theme_adaptable');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);
	
	$name = 'theme_adaptable/newmenu4requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
	$default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu4field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus5', get_string('menusheading5', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu5';
    $title = get_string('newmenu5', 'theme_adaptable');
    $description = get_string('newmenudesc', 'theme_adaptable');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);
	
	$name = 'theme_adaptable/newmenu5requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
	$default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu5field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus6', get_string('menusheading6', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu6';
    $title = get_string('newmenu6', 'theme_adaptable');
    $description = get_string('newmenudesc', 'theme_adaptable');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);
	
	$name = 'theme_adaptable/newmenu6requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
	$default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu6field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus7', get_string('menusheading7', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu7';
    $title = get_string('newmenu7', 'theme_adaptable');
    $description = get_string('newmenudesc', 'theme_adaptable');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);
	
	$name = 'theme_adaptable/newmenu7requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
	$default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu7field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus8', get_string('menusheading8', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu8';
    $title = get_string('newmenu8', 'theme_adaptable');
    $description = get_string('newmenudesc', 'theme_adaptable');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);

	$name = 'theme_adaptable/newmenu8requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
	$default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
    $name = 'theme_adaptable/newmenu8field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus9', get_string('menusheading9', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu9';
    $title = get_string('newmenu9', 'theme_adaptable');
    $description = get_string('newmenudesc', 'theme_adaptable');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);
	
	$name = 'theme_adaptable/newmenu9requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
	$default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu9field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_menus10', get_string('menusheading10', 'theme_adaptable'),
    format_text(get_string('menusdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/newmenu10';
    $title = get_string('newmenu10', 'theme_adaptable');
    $description = get_string('newmenudesc', 'theme_adaptable');
    $setting = new admin_setting_configtextarea($name, $title, $description, '', PARAM_RAW, '50', '10');
    $temp->add($setting);
	
	$name = 'theme_adaptable/newmenu10requirelogin';
    $title = get_string('newmenurequirelogin', 'theme_adaptable');
    $description = get_string('newmenurequirelogindesc', 'theme_adaptable');
	$default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/newmenu10field';
    $title = get_string('newmenufield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);

    $temp = new admin_settingpage('theme_adaptable_blocks', get_string('blocksettings', 'theme_adaptable'));

    $name = 'theme_adaptable/blockicons';
    $title = get_string('blockicons', 'theme_adaptable');
    $description = get_string('blockiconsdesc', 'theme_adaptable');
	$default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/blockbackgroundcolor';
    $title = get_string('blockbackgroundcolor', 'theme_adaptable');
    $description = get_string('blockbackgroundcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFFFFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/blockheaderbackgroundcolor';
    $title = get_string('blockheaderbackgroundcolor', 'theme_adaptable');
    $description = get_string('blockheaderbackgroundcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#FFFFFF', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);	
	
    $name = 'theme_adaptable/blockheadercolor';
    $title = get_string('blockheadercolor', 'theme_adaptable');
    $description = get_string('blockheadercolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/blockbordercolor';
    $title = get_string('blockbordercolor', 'theme_adaptable');
    $description = get_string('blockbordercolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#59585D', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/blocklinkcolor';
    $title = get_string('blocklinkcolor', 'theme_adaptable');
    $description = get_string('blocklinkcolordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#009688', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	$name = 'theme_adaptable/blockheaderbordertopstyle';
    $title = get_string('blockheaderbordertopstyle', 'theme_adaptable');
    $description = get_string('blockheaderbordertopstyledesc', 'theme_adaptable');
    $radchoices = $borderstyles;
    $setting = new admin_setting_configselect($name, $title, $description, 'dashed', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_adaptable/blockheadertopradius';
    $title = get_string('blockheadertopradius', 'theme_adaptable');
    $description = get_string('blockheadertopradiusdesc', 'theme_adaptable');
    $radchoices = $from0to20;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_adaptable/blockheaderbottomradius';
    $title = get_string('blockheaderbottomradius', 'theme_adaptable');
    $description = get_string('blockheaderbottomradiusdesc', 'theme_adaptable');
    $radchoices = $from0to20;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_adaptable/blockheaderbordertop';
    $title = get_string('blockheaderbordertop', 'theme_adaptable');
    $description = get_string('blockheaderbordertopdesc', 'theme_adaptable');
    $radchoices = $from0to6;
    $setting = new admin_setting_configselect($name, $title, $description, '1px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_adaptable/blockheaderborderleft';
    $title = get_string('blockheaderborderleft', 'theme_adaptable');
    $description = get_string('blockheaderborderleftdesc', 'theme_adaptable');
    $radchoices = $from0to6;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_adaptable/blockheaderborderright';
    $title = get_string('blockheaderborderright', 'theme_adaptable');
    $description = get_string('blockheaderborderrightdesc', 'theme_adaptable');
    $radchoices = $from0to6;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_adaptable/blockheaderborderbottom';
    $title = get_string('blockheaderborderbottom', 'theme_adaptable');
    $description = get_string('blockheaderborderbottomdesc', 'theme_adaptable');
    $radchoices = $from0to6;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	$name = 'theme_adaptable/blockmainbordertopstyle';
    $title = get_string('blockmainbordertopstyle', 'theme_adaptable');
    $description = get_string('blockmainbordertopstyledesc', 'theme_adaptable');
    $radchoices = $borderstyles;
    $setting = new admin_setting_configselect($name, $title, $description, 'solid', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_adaptable/blockmaintopradius';
    $title = get_string('blockmaintopradius', 'theme_adaptable');
    $description = get_string('blockmaintopradiusdesc', 'theme_adaptable');
    $radchoices = $from0to20;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_adaptable/blockmainbottomradius';
    $title = get_string('blockmainbottomradius', 'theme_adaptable');
    $description = get_string('blockmainbottomradiusdesc', 'theme_adaptable');
    $radchoices = $from0to20;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);	
	
	$name = 'theme_adaptable/blockmainbordertop';
    $title = get_string('blockmainbordertop', 'theme_adaptable');
    $description = get_string('blockmainbordertopdesc', 'theme_adaptable');
    $radchoices = $from0to6;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_adaptable/blockmainborderleft';
    $title = get_string('blockmainborderleft', 'theme_adaptable');
    $description = get_string('blockmainborderleftdesc', 'theme_adaptable');
    $radchoices = $from0to6;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_adaptable/blockmainborderright';
    $title = get_string('blockmainborderright', 'theme_adaptable');
    $description = get_string('blockmainborderrightdesc', 'theme_adaptable');
    $radchoices = $from0to6;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_adaptable/blockmainborderbottom';
    $title = get_string('blockmainborderbottom', 'theme_adaptable');
    $description = get_string('blockmainborderbottomdesc', 'theme_adaptable');
    $radchoices = $from0to6;
    $setting = new admin_setting_configselect($name, $title, $description, '0px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);


    // Marketing blocks section.
    $temp = new admin_settingpage('theme_adaptable_frontpage_blocks', get_string('frontpageblocksettings', 'theme_adaptable'));

    $name = 'theme_adaptable/homebk';
    $title = get_string('homebk', 'theme_adaptable');
    $description = get_string('homebkdesc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'homebk');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/infobox';
    $title = get_string('infobox', 'theme_adaptable');
    $description = get_string('infoboxdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/infoboxfullscreen';
    $title = get_string('infoboxfullscreen', 'theme_adaptable');
    $description = get_string('infoboxfullscreendesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/infobox2';
    $title = get_string('infobox2', 'theme_adaptable');
    $description = get_string('infobox2desc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $temp->add(new admin_setting_heading('theme_adaptable_marketing', get_string('marketingsettingsheading', 'theme_adaptable'),
        format_text(get_string('marketingdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/frontpagemarketenabled';
    $title = get_string('frontpagemarketenabled', 'theme_adaptable');
    $description = get_string('frontpagemarketenableddesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/frontpagemarketoption';
    $title = get_string('frontpagemarketoption', 'theme_adaptable');
    $description = get_string('frontpagemarketoptiondesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_adaptable/market1';
    $title = get_string('market1', 'theme_adaptable');
    $description = get_string('market1desc', 'theme_adaptable');
    $default = '';
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market2';
    $title = get_string('market2', 'theme_adaptable');
    $description = get_string('market2desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market3';
    $title = get_string('market3', 'theme_adaptable');
    $description = get_string('market3desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market4';
    $title = get_string('market4', 'theme_adaptable');
    $description = get_string('market4desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market5';
    $title = get_string('market5', 'theme_adaptable');
    $description = get_string('market5desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market6';
    $title = get_string('market6', 'theme_adaptable');
    $description = get_string('market6desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market7';
    $title = get_string('market7', 'theme_adaptable');
    $description = get_string('market7desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market8';
    $title = get_string('market8', 'theme_adaptable');
    $description = get_string('market8desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market9';
    $title = get_string('market9', 'theme_adaptable');
    $description = get_string('market9desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market10';
    $title = get_string('market10', 'theme_adaptable');
    $description = get_string('market10desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market11';
    $title = get_string('market11', 'theme_adaptable');
    $description = get_string('market11desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/market12';
    $title = get_string('market12', 'theme_adaptable');
    $description = get_string('market12desc', 'theme_adaptable');
    $setting = new adaptable_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);


    // Alert Section.
    $temp = new admin_settingpage('theme_adaptable_frontpage_alert', get_string('frontpagealertsettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_alert', get_string('alertsettingsheading', 'theme_adaptable'),
        format_text(get_string('alertdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));
		
	// Alert General Settings Heading.
    $name = 'theme_adaptable/settingsalertgeneral';
    $heading = get_string('alertsettingsgeneral', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);	
		
	// Disable alert in course pages.
    $name = 'theme_adaptable/enablealertcoursepages';
    $title = get_string('enablealertcoursepages', 'theme_adaptable');
    $description = get_string('enablealertcoursepagesdesc', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting); 
	
	// Strip Tags
    $name = 'theme_adaptable/enablealertstriptags';
    $title = get_string('enablealertstriptags', 'theme_adaptable');
    $description = get_string('enablealertstriptagsdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting); 
    
    // Number of Alerts 
    $name = 'theme_adaptable/alertcount';
    $title = get_string('alertcount', 'theme_adaptable');
    $description = get_string('alertcountdesc', 'theme_adaptable');
    $default = THEME_ADAPTABLE_DEFAULT_ALERTCOUNT;
    $choices = array('1'=>'1','2'=>'2','3'=>'3','4'=>'4','5'=>'5','6'=>'6','7'=>'7','8'=>'8','9'=>'9','10'=>'10');
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting); 
    
    //if we don't have an an alertcount yet, default to the preset
    $alertcount = get_config('theme_adaptable','alertcount');
    if(!$alertcount){$alertcount=THEME_ADAPTABLE_DEFAULT_ALERTCOUNT;}
    
    
    for($alertindex=1;$alertindex <= $alertcount;$alertindex++){
		
		// Alert Box Heading 1.
		$name = 'theme_adaptable/settingsalertbox' . $alertindex;
		$heading = get_string('alertsettings', 'theme_adaptable',$alertindex);
		$setting = new admin_setting_heading($name, $heading, '');
		$temp->add($setting);

		// Enable Alert 1.
		$name = 'theme_adaptable/enablealert' . $alertindex;
		$title = get_string('enablealert', 'theme_adaptable',$alertindex);
		$description = get_string('enablealertdesc', 'theme_adaptable', $alertindex);
		$default = false;
		$setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);
	
		//Alert Key
		$name = 'theme_adaptable/alertkey' . $alertindex;
		$title = get_string('alertkeyvalue', 'theme_adaptable');
		$description = get_string('alertkeyvalue_details', 'theme_adaptable');
		$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
		$temp->add($setting);

		// Alert Text 1.
		$name = 'theme_adaptable/alerttext' . $alertindex;
		$title = get_string('alerttext', 'theme_adaptable');
		$description = get_string('alerttextdesc', 'theme_adaptable');
		$default = '';
		$setting = new admin_setting_confightmleditor($name, $title, $description, $default);
		$temp->add($setting);

		// Alert Type 1.
		$name = 'theme_adaptable/alerttype' . $alertindex;
		$title = get_string('alerttype', 'theme_adaptable');
		$description = get_string('alerttypedesc', 'theme_adaptable');
		$default = 'info';
		$choices = array(
			'info' => get_string('alertinfo', 'theme_adaptable'),
			'warning' => get_string('alertwarning', 'theme_adaptable'),
			'success' => get_string('alertannounce', 'theme_adaptable'));
		$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);
	
		// Alert Access
		$name = 'theme_adaptable/alertaccess' . $alertindex;
		$title = get_string('alertaccess', 'theme_adaptable');
		$description = get_string('alertaccessdesc', 'theme_adaptable');
		$default = 'global';
		$choices = array(
			'global' => get_string('alertaccessglobal', 'theme_adaptable'),
			'users' => get_string('alertaccessusers', 'theme_adaptable'),
			'admin' => get_string('alertaccessadmins', 'theme_adaptable'),
			'profile' => get_string('alertaccessprofile', 'theme_adaptable'));
		$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
		$setting->set_updatedcallback('theme_reset_all_caches');
		$temp->add($setting);
	
		$name = 'theme_adaptable/alertprofilefield' . $alertindex;
		$title = get_string('alertprofilefield', 'theme_adaptable');
		$description = '';
		$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
		$temp->add($setting);

		$name = 'theme_adaptable/alertprofilevalue' . $alertindex;
		$title = get_string('alertprofilevalue', 'theme_adaptable');
		$description = '';
		$setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
		$temp->add($setting);
    }
/*		
	// Alert Box Heading 2.
    $name = 'theme_adaptable/settingsalertbox2';
    $heading = get_string('alertsettings2', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Enable Alert 2.
    $name = 'theme_adaptable/enablealert2';
    $title = get_string('enablealert2', 'theme_adaptable');
    $description = get_string('enablealertdesc2', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //Alert Key
    $name = 'theme_adaptable/alertkey2';
    $title = get_string('alertkeyvalue', 'theme_adaptable');
    $description = get_string('alertkeyvalue_details', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    // Alert text 2.
    $name = 'theme_adaptable/alerttext2';
    $title = get_string('alerttext', 'theme_adaptable');
    $description = get_string('alerttextdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    // Admins Alert type.
    $name = 'theme_adaptable/alerttype2';
    $title = get_string('alerttype', 'theme_adaptable');
    $description = get_string('alerttypedesc', 'theme_adaptable');
    $default = 'info';
    $choices = array(
        'info' => get_string('alertinfo', 'theme_adaptable'),
        'warning' => get_string('alertwarning', 'theme_adaptable'),
        'success' => get_string('alertannounce', 'theme_adaptable'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

	// Alert Access 2.
    $name = 'theme_adaptable/alertaccess2';
    $title = get_string('alertaccess', 'theme_adaptable');
    $description = get_string('alertaccessdesc', 'theme_adaptable');
    $default = 'global';
    $choices = array(
        'global' => get_string('alertaccessglobal', 'theme_adaptable'),
        'users' => get_string('alertaccessusers', 'theme_adaptable'),
        'admin' => get_string('alertaccessadmins', 'theme_adaptable'),
		'profile' => get_string('alertaccessprofile', 'theme_adaptable'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_adaptable/alertprofilefield2';
    $title = get_string('alertprofilefield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_adaptable/alertprofilevalue2';
    $title = get_string('alertprofilevalue', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);	
	
	// Alert Box Heading 3.
    $name = 'theme_adaptable/settingsalertbox3';
    $heading = get_string('alertsettings3', 'theme_adaptable');
    $setting = new admin_setting_heading($name, $heading, '');
    $temp->add($setting);

    // Enable Alert 3.
    $name = 'theme_adaptable/enablealert3';
    $title = get_string('enablealert3', 'theme_adaptable');
    $description = get_string('enablealertdesc3', 'theme_adaptable');
    $default = false;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    //Alert Key
    $name = 'theme_adaptable/alertkey3';
    $title = get_string('alertkeyvalue', 'theme_adaptable');
    $description = get_string('alertkeyvalue_details', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    // Users Alert text.
    $name = 'theme_adaptable/alerttext3';
    $title = get_string('alerttext', 'theme_adaptable');
    $description = get_string('alerttextdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    // Users Alert type.
    $name = 'theme_adaptable/alerttype3';
    $title = get_string('alerttype', 'theme_adaptable');
    $description = get_string('alerttypedesc', 'theme_adaptable');
    $default = 'info';
    $choices = array(
        'info' => get_string('alertinfo', 'theme_adaptable'),
        'warning' => get_string('alertwarning', 'theme_adaptable'),
        'success' => get_string('alertannounce', 'theme_adaptable'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	// Alert Three Access.
    $name = 'theme_adaptable/alertaccess3';
    $title = get_string('alertaccess', 'theme_adaptable');
    $description = get_string('alertaccessdesc', 'theme_adaptable');
    $default = 'global';
    $choices = array(
        'global' => get_string('alertaccessglobal', 'theme_adaptable'),
        'users' => get_string('alertaccessusers', 'theme_adaptable'),
        'admin' => get_string('alertaccessadmins', 'theme_adaptable'),
		'profile' => get_string('alertaccessprofile', 'theme_adaptable'));
    $setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_adaptable/alertprofilefield3';
    $title = get_string('alertprofilefield', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $name = 'theme_adaptable/alertprofilevalue3';
    $title = get_string('alertprofilevalue', 'theme_adaptable');
    $description = '';
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);	
    
*/   
	
    $ADMIN->add('theme_adaptable', $temp);

    // Frontpage Ticker heading.
    $temp = new admin_settingpage('theme_adaptable_frontpage_ticker', get_string('frontpagetickersettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_ticker', get_string('tickersettingsheading', 'theme_adaptable'),
        format_text(get_string('tickerdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/enableticker';
    $title = get_string('enableticker', 'theme_adaptable');
    $description = get_string('enabletickerdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
	$name = 'theme_adaptable/enabletickermy';
    $title = get_string('enabletickermy', 'theme_adaptable');
    $description = get_string('enabletickermydesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
	
    $name = 'theme_adaptable/tickertext1';
    $title = get_string('tickertext1', 'theme_adaptable');
    $description = get_string('tickertext1desc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
	
	$name = 'theme_adaptable/tickertext1profilefield';
    $title = get_string('tickertextprofilefield', 'theme_adaptable');
    $description = get_string('tickertextprofilefielddesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);
	
	$name = 'theme_adaptable/tickertext2';
    $title = get_string('tickertext2', 'theme_adaptable');
    $description = get_string('tickertext2desc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);
	
	$name = 'theme_adaptable/tickertext2profilefield';
    $title = get_string('tickertextprofilefield', 'theme_adaptable');
    $description = get_string('tickertextprofilefielddesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_RAW);
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);

    // Frontpage Slider.
    $temp = new admin_settingpage('theme_adaptable_frontpage_slider', get_string('frontpageslidersettings', 'theme_adaptable'));

    $temp->add(new admin_setting_heading('theme_adaptable_slideshow', get_string('slideshowsettingsheading', 'theme_adaptable'),
        format_text(get_string('slideshowdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

     $name = 'theme_adaptable/sliderfullscreen';
    $title = get_string('sliderfullscreen', 'theme_adaptable');
    $description = get_string('sliderfullscreendesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);

    $name = 'theme_adaptable/slidermargintop';
    $title = get_string('slidermargintop', 'theme_adaptable');
    $description = get_string('slidermargintopdesc', 'theme_adaptable');
    $radchoices = $from0to20;
    $setting = new admin_setting_configselect($name, $title, $description, '20px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/slidermarginbottom';
    $title = get_string('slidermarginbottom', 'theme_adaptable');
    $description = get_string('slidermarginbottomdesc', 'theme_adaptable');
    $radchoices = $from0to20;
    $setting = new admin_setting_configselect($name, $title, $description, '20px', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/slideroption2';
    $title = get_string('slideroption2', 'theme_adaptable');
    $description = get_string('slideroption2desc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);

    $name = 'theme_adaptable/p1';
    $title = get_string('p1', 'theme_adaptable');
    $description = get_string('p1desc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p1');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/p1url';
    $title = get_string('p1url', 'theme_adaptable');
    $description = get_string('p1urldesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/p1cap';
    $title = get_string('p1cap', 'theme_adaptable');
    $description = get_string('p1capdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/p2';
    $title = get_string('p2', 'theme_adaptable');
    $description = get_string('p2desc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p2');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/p2url';
    $title = get_string('p2url', 'theme_adaptable');
    $description = get_string('p2urldesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/p2cap';
    $title = get_string('p2cap', 'theme_adaptable');
    $description = get_string('p2capdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/p3';
    $title = get_string('p3', 'theme_adaptable');
    $description = get_string('p3desc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p3');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/p3url';
    $title = get_string('p3url', 'theme_adaptable');
    $description = get_string('p3urldesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/p3cap';
    $title = get_string('p3cap', 'theme_adaptable');
    $description = get_string('p3capdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/p4';
    $title = get_string('p4', 'theme_adaptable');
    $description = get_string('p4desc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p4');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/p4url';
    $title = get_string('p4url', 'theme_adaptable');
    $description = get_string('p4urldesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/p4cap';
    $title = get_string('p4cap', 'theme_adaptable');
    $description = get_string('p4capdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/p5';
    $title = get_string('p5', 'theme_adaptable');
    $description = get_string('p5desc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'p5');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/p5url';
    $title = get_string('p5url', 'theme_adaptable');
    $description = get_string('p5urldesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '', PARAM_URL);
    $temp->add($setting);

    $name = 'theme_adaptable/p5cap';
    $title = get_string('p5cap', 'theme_adaptable');
    $description = get_string('p5capdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/slideroption2color';
    $title = get_string('slideroption2color', 'theme_adaptable');
    $description = get_string('slideroption2colordesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#0066cc', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/slideroption2a';
    $title = get_string('slideroption2a', 'theme_adaptable');
    $description = get_string('slideroption2adesc', 'theme_adaptable');
    $previewconfig = null;
    $setting = new admin_setting_configcolourpicker($name, $title, $description, '#0066cc', $previewconfig);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);


    // Frontpage courses section.
    $temp = new admin_settingpage('theme_adaptable_frontpage_courses', get_string('frontpagecoursesettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_frontpage_courses', get_string('frontpagesettingsheading', 'theme_adaptable'),
        format_text(get_string('frontpagedesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    $name = 'theme_adaptable/frontpagerenderer';
    $title = get_string('frontpagerenderer', 'theme_adaptable');
    $description = get_string('frontpagerendererdesc', 'theme_adaptable');
    $choices = array(
        1 => get_string('frontpagerendereroption1', 'theme_adaptable'),
        2 => get_string('frontpagerendereroption2', 'theme_adaptable'),
        3 => get_string('frontpagerendereroption3', 'theme_adaptable'),
        4 => get_string('frontpagerendereroption4', 'theme_adaptable'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, 2, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/frontpagerendererdefaultimage';
    $title = get_string('frontpagerendererdefaultimage', 'theme_adaptable');
    $description = get_string('frontpagerendererdefaultimagedesc', 'theme_adaptable');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'frontpagerendererdefaultimage');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Show course contacts.
    $name = 'theme_adaptable/tilesshowcontacts';
    $title = get_string('tilesshowcontacts', 'theme_adaptable');
    $description = get_string('tilesshowcontactsdesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $name = 'theme_adaptable/tilesshowallcontacts';
    $title = get_string('tilesshowallcontacts', 'theme_adaptable');
    $description = get_string('tilesshowallcontactsdesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);

    $name = 'theme_adaptable/tilescontactstitle';
    $title = get_string('tilescontactstitle', 'theme_adaptable');
    $description = get_string('tilescontactstitledesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $name = 'theme_adaptable/covhidebutton';
    $title = get_string('covhidebutton', 'theme_adaptable');
    $description = get_string('covhidebuttondesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $temp->add($setting);

    // Show 'Available Courses' label.
    $name = 'theme_adaptable/enableavailablecourses';
    $title = get_string('enableavailablecourses', 'theme_adaptable');
    $description = get_string('enableavailablecoursesdesc', 'theme_adaptable');
    $setting = new admin_setting_configselect($name, $title, $description, 0,
    array(
            'inherit' => get_string('show'),
            'none' => get_string('hide')
        ));
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);

    $temp = new admin_settingpage('theme_adaptable_layout', get_string('layoutsettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_layout', get_string('layoutsettingsheading', 'theme_adaptable'),
        format_text(get_string('layoutdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    // Display block in the Left/Right side.
    $name = 'theme_adaptable/blockside';
    $title = get_string('blockside', 'theme_adaptable');
    $description = get_string('blocksidedesc', 'theme_adaptable');
    $setting = new admin_setting_configselect($name, $title, $description, 0,
    array(
            0 => get_string('rightblocks', 'theme_adaptable'),
            1 => get_string('leftblocks', 'theme_adaptable'),
        ));
    $temp->add($setting);

    // View default.
    $name = 'theme_adaptable/viewselect';
    $title = get_string('viewselect', 'theme_adaptable');
    $description = get_string('viewselectdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Fullscreen width.
    $name = 'theme_adaptable/fullscreenwidth';
    $title = get_string('fullscreenwidth', 'theme_adaptable');
    $description = get_string('fullscreenwidthdesc', 'theme_adaptable');
    $radchoices = array(
        '95%' => '95%',
        '96%' => '96%',
        '97%' => '97%',
        '98%' => '98%',
        '99%' => '99%',
        '100%' => '100%',
    );
    $setting = new admin_setting_configselect($name, $title, $description, '98%', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/coursetitlemaxwidth';
    $title = get_string('coursetitlemaxwidth', 'theme_adaptable');
    $description = get_string('coursetitlemaxwidthdesc', 'theme_adaptable');
    $radchoices = array(
        '35%' => '35%',
        '36%' => '36%',
        '37%' => '37%',
        '38%' => '38%',
        '39%' => '39%',
        '40%' => '40%',
        '41%' => '41%',
        '42%' => '42%',
        '43%' => '43%',
        '44%' => '44%',
        '45%' => '45%',
        '46%' => '46%',
        '47%' => '47%',
        '48%' => '48%',
        '49%' => '49%',
        '50%' => '50%',
    );
    $setting = new admin_setting_configselect($name, $title, $description, '50%', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);

    $temp = new admin_settingpage('theme_adaptable_mobile', get_string('mobilesettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_mobile', get_string('mobilesettingsheading', 'theme_adaptable'),
        '', FORMAT_MARKDOWN));

    $name = 'theme_adaptable/hidealertsmobile';
    $title = get_string('hidealertsmobile', 'theme_adaptable');
    $description = get_string('hidealertsmobiledesc', 'theme_adaptable');
    $radchoices = array(
        ', .customalert' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', .socialbox', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/hidesocialmobile';
    $title = get_string('hidesocialmobile', 'theme_adaptable');
    $description = get_string('hidesocialmobiledesc', 'theme_adaptable');
    $radchoices = array(
        ', .socialbox' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', .socialbox', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/socialboxpaddingtopmobile';
    $title = get_string('socialboxpaddingtopmobile', 'theme_adaptable');
    $description = get_string('socialboxpaddingtopmobile', 'theme_adaptable');
    $choices = array(
        '5px' => "5px",
        '6px' => "6px",
        '7px' => "7px",
        '8px' => "8px",
        '9px' => "9px",
        '10px' => "10px",
        '12px' => "12px",
        '14px' => "14px",
        '16px' => "16px",
        '18px' => "18px",
        '20px' => "20px",
        '22px' => "22px",
    );
    $setting = new admin_setting_configselect($name, $title, $description, '10px', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/socialboxpaddingbottommobile';
    $title = get_string('socialboxpaddingbottommobile', 'theme_adaptable');
    $description = get_string('socialboxpaddingbottommobile', 'theme_adaptable');
    $choices = $from0to12;
    $setting = new admin_setting_configselect($name, $title, $description, '10px', $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_adaptable/hidecoursetitlemobile';
    $title = get_string('hidecoursetitlemobile', 'theme_adaptable');
    $description = get_string('hidecoursetitlemobiledesc', 'theme_adaptable');
    $radchoices = array(
        ', #coursetitle' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', #coursetitle', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/hidelogomobile';
    $title = get_string('hidelogomobile', 'theme_adaptable');
    $description = get_string('hidelogomobiledesc', 'theme_adaptable');
    $radchoices = array(
        ', #logocontainer' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', #logocontainer', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/hideheadermobile';
    $title = get_string('hideheadermobile', 'theme_adaptable');
    $description = get_string('hideheadermobiledesc', 'theme_adaptable');
    $radchoices = array(
        ', #page-header' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', #page-header', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/hidebreadcrumbmobile';
    $title = get_string('hidebreadcrumbmobile', 'theme_adaptable');
    $description = get_string('hidebreadcrumbmobiledesc', 'theme_adaptable');
    $radchoices = array(
        ', .breadcrumb' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', .breadcrumb', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/hidepagefootermobile';
    $title = get_string('hidepagefootermobile', 'theme_adaptable');
    $description = get_string('hidepagefootermobiledesc', 'theme_adaptable');
    $radchoices = array(
        ', #page-footer' => get_string('hide'),
        '' => get_string('show'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, ', #page-footer', $radchoices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);

    $temp = new admin_settingpage('theme_adaptable_footer', get_string('footersettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_footer', get_string('footersettingsheading', 'theme_adaptable'),
        format_text(get_string('footerdesc', 'theme_adaptable'), FORMAT_MARKDOWN)));

    // Show moodle docs link.
    $name = 'theme_adaptable/moodledocs';
    $title = get_string('moodledocs', 'theme_adaptable');
    $description = get_string('moodledocsdesc', 'theme_adaptable');
    $default = true;
    $setting = new admin_setting_configcheckbox($name, $title, $description, $default, true, false);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $name = 'theme_adaptable/showfooterblocks';
    $title = get_string('showfooterblocks', 'theme_adaptable');
    $description = get_string('showfooterblocksdesc', 'theme_adaptable');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 1);
    $temp->add($setting);

    $name = 'theme_adaptable/footerblocksplacement';
    $title = get_string('footerblocksplacement', 'theme_adaptable');
    $description = get_string('footerblocksplacementdesc', 'theme_adaptable');
    $choices = array(
        1 => get_string('footerblocksplacement1', 'theme_adaptable'),
        2 => get_string('footerblocksplacement2', 'theme_adaptable'),
        3 => get_string('footerblocksplacement3', 'theme_adaptable'),
    );
    $setting = new admin_setting_configselect($name, $title, $description, 2, $choices);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);


    $name = 'theme_adaptable/footer1header';
    $title = get_string('footer1header', 'theme_adaptable');
    $description = get_string('footer1desc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/footer1content';
    $title = get_string('footer1content', 'theme_adaptable');
    $description = get_string('footer1contentdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/footer2header';
    $title = get_string('footer2header', 'theme_adaptable');
    $description = get_string('footer2desc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/footer2content';
    $title = get_string('footer2content', 'theme_adaptable');
    $description = get_string('footer2contentdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/footer3header';
    $title = get_string('footer3header', 'theme_adaptable');
    $description = get_string('footer3desc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/footer3content';
    $title = get_string('footer3content', 'theme_adaptable');
    $description = get_string('footer3contentdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/footer4header';
    $title = get_string('footer4header', 'theme_adaptable');
    $description = get_string('footer4desc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/footer4content';
    $title = get_string('footer4content', 'theme_adaptable');
    $description = get_string('footer4contentdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/footnote';
    $title = get_string('footnote', 'theme_adaptable');
    $description = get_string('footnotedesc', 'theme_adaptable');
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);

    // Custom CSS and JS section.
    $temp = new admin_settingpage('theme_adaptable_generic', get_string('customcssjssettings', 'theme_adaptable'));
    $temp->add(new admin_setting_heading('theme_adaptable_generic', get_string('genericsettingsheading', 'theme_adaptable'),
        format_text(get_string('genericsettingsdescription', 'theme_adaptable'), FORMAT_MARKDOWN)));

    // Custom CSS file.
    $name = 'theme_adaptable/customcss';
    $title = get_string('customcss', 'theme_adaptable');
    $description = get_string('customcssdesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Section for javascript to be added e.g. Google Analytics.
    $name = 'theme_adaptable/jssection';
    $title = get_string('jssection', 'theme_adaptable');
    $description = get_string('jssectiondesc', 'theme_adaptable');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $temp->add($setting);

    $name = 'theme_adaptable/fsize';
    $title = get_string('fsize', 'theme_adaptable');
    $description = get_string('fsizedesc', 'theme_adaptable');
    $setting = new admin_setting_configtext($name, $title, $description, '');
    $temp->add($setting);

    $ADMIN->add('theme_adaptable', $temp);
}
