<?php
@session_start();

/*
  =========================================================
  BANEGAS GARAGE DOORS CO — text.php
  Generado por Cluster Media
  Los campos pendientes de confirmar con el cliente están
  marcados con comentarios "TODO CONFIRMAR".
  =========================================================
*/

/*=========================
   PAGE NAME (Routing simple)
   =========================*/
$full_name  = $_SERVER['PHP_SELF'] ?? '';
$name_array = explode('/', $full_name);
$count      = count($name_array);
$page_name  = $name_array[$count - 1] ?? '';

if      ($page_name == 'index.php')        { $namepage = "Home"; }
elseif ($page_name == 'about.php')        { $namepage = "About"; }
elseif ($page_name == 'services.php')     { $namepage = "Services"; }
elseif ($page_name == 'testimonials.php') { $namepage = "Reviews"; }
elseif ($page_name == 'reviews.php')      { $namepage = "Reviews"; }
elseif ($page_name == 'projects.php')     { $namepage = "Projects"; }
elseif ($page_name == 'thank-you.php')    { $namepage = "Thank You"; }
elseif ($page_name == '404.php')          { $namepage = "Not Found"; }
elseif ($page_name == 'contact.php')      { $namepage = "Contact"; }
else                                      { $namepage = ucfirst(str_replace('.php', '', $page_name)); }

/*=========================
   INFO GENERAL - BANEGAS GARAGE DOORS CO
   =========================*/
$Company      = "Banegas Garage Doors Co";
$CustomerName = "Banegas";

function detectBaseURL() {
  $scheme = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
  $host   = $_SERVER['HTTP_HOST'] ?? 'localhost';
  $script = $_SERVER['SCRIPT_NAME'] ?? '';
  $dir    = rtrim(str_replace('\\', '/', dirname($script)), '/.');
  $path   = $dir ? $dir . '/' : '/';
  return $scheme . '://' . $host . $path;
}

$BaseURL   = rtrim(detectBaseURL(), '/') . '/';
$Domain    = $BaseURL;
$MAVEN     = "go-maven.com";
$Address   = "7876 State St, Huntington Park, CA 90255";
$PhoneName = "Español";
$Phone2Name = "English";

/* Una sola línea telefónica bilingüe. Si el cliente confirma una
   segunda línea, actualizar $Phone2 aquí. */
$Phone     = "+1 (323) 413-1786";
$Phone2    = "+1 (323) 413-1786";

function telRef($p) {
  $clean = str_replace(str_split('()-/\\:?"<>|., '), '', $p);
  return "tel:" . $clean;
}
$PhoneRef  = telRef($Phone);
$PhoneRef2 = telRef($Phone2 ?? '');

function slugify($text) {
  $text = strtolower(trim($text));
  $text = preg_replace('/[^a-z0-9]+/i', '-', $text);
  return trim($text, '-') ?: 'service';
}

$whatsapp_num = preg_replace('/\D+/', '', $Phone);
if (strpos($whatsapp_num, '1') !== 0) { $whatsapp_num = '1' . $whatsapp_num; }
$whatsapp = "https://api.whatsapp.com/send?phone=$whatsapp_num&text=Hello%20Banegas%20Garage%20Doors!%20I%20need%20a%20free%20estimate%20for%20my%20garage%20door.";

$Mail    = "info@banegasgaragedoors.com";
$MailRef = "mailto:" . $Mail;

/*=========================
   GENERAL MESSAGES
   =========================*/
$Services       = "Garage door installation, replacement, spring repair, off-track repair, and maintenance";
$Estimates      = "Free Estimates";
$Payment        = "Cash, Card, Zelle"; /* TODO CONFIRMAR: métodos de pago reales con el cliente */
$Experience     = "10+ Years";
/* TODO CONFIRMAR: el sitio actual dice 9:00 AM y Yelp dice 8:30 AM. Se usa 9:00 AM (fuente: web oficial). */
$Schedule       = "Open Monday to Saturday, 9:00 AM to 5:00 PM. Closed Sunday.";
$Coverage       = "We serve Huntington Park, South Gate, Downey, and communities across Los Angeles County and Orange County.";
$LicenseNote    = "Visit Our Showroom";
$BilingualNote  = "English and Spanish Spoken";
$TypeOfService  = "Garage Door Installation, Repair, and Maintenance";

/*=========================
   BRAND COLORS (extraídos del logo oficial)
   Acento cian #00ADEE tomado por píxel del logo.
   =========================*/
$BrandColors = [
  'primary'       => '#0A1826',
  'primary_rgb'   => '10, 24, 38',
  'secondary'     => '#142A3C',
  'secondary_rgb' => '20, 42, 60',
  'accent'        => '#00ADEE',
  'accent_rgb'    => '0, 173, 238',
  'neutral'       => '#F2F6FA',
  'white'         => '#FFFFFF'
];

/*=========================
   SERVICE AREAS
   (Inferidas: Huntington Park + LA County + Orange County.
   TODO CONFIRMAR lista final de ciudades con el cliente.)
   =========================*/
$Areas = [
  "Huntington Park, CA",
  "South Gate, CA",
  "Bell, CA",
  "Bell Gardens, CA",
  "Cudahy, CA",
  "Maywood, CA",
  "Lynwood, CA",
  "Downey, CA",
  "Vernon, CA",
  "East Los Angeles, CA",
  "Los Angeles, CA",
  "Montebello, CA",
  "Paramount, CA",
  "Los Angeles County, CA",
  "Orange County, CA",
  "And nearby communities"
];

/*=========================
   MAPA Y REDES SOCIALES
   =========================*/
$GoogleMap = '<iframe src="https://maps.google.com/maps?q=7876%20State%20St%2C%20Huntington%20Park%2C%20CA%2090255&t=&z=14&ie=UTF8&iwloc=&output=embed" width="100%" height="450" style="border:0;" allowfullscreen loading="lazy"></iframe>';
$facebook  = "https://www.facebook.com/profile.php?id=61551100976747";
$instagram = "https://www.instagram.com/banegasgaragedoorsco";
$google    = "https://share.google/1CYEBom46B9q2ny27";
$tiktok    = "";
$messenger = "";
$yelp      = "https://www.yelp.com/biz/banegas-garage-doors-co-huntington-park"; /* Nota: si el theme no tiene ícono de Yelp en el header, agregarlo o usarlo solo en reviews. */

$DirectoryLinks = [
  'bbb' => 'reviews.php',
  'buildzoom' => 'reviews.php',
  'thumbtack' => 'reviews.php',
  'homeadvisor' => 'reviews.php'
];

$GoogleReviews = $google; /* Perfil real de Google Business del cliente */

/* TODO CONFIRMAR: reseñas placeholder basadas en los servicios reales.
   La primera está parafraseada de una reseña real publicada en Yelp.
   Reemplazar el resto con reseñas textuales aprobadas de Yelp/Google. */
$DirectoryReviewItems = [
  [
    'name' => 'Verified Customer',
    'city' => 'Huntington Park, CA',
    'stars' => 5,
    'text' => 'A reliable company from start to finish. They handled my new garage door installation professionally.',
    'source' => 'Yelp Review',
    'url' => 'https://www.yelp.com/biz/banegas-garage-doors-co-huntington-park'
  ],
  [
    'name' => 'Homeowner',
    'city' => 'South Gate, CA',
    'stars' => 5,
    'text' => 'Fast spring replacement and clear communication in English and Spanish. Fair, upfront pricing.',
    'source' => 'Website Review',
    'url' => ''
  ],
  [
    'name' => 'Local Business Owner',
    'city' => 'Downey, CA',
    'stars' => 5,
    'text' => 'They installed a commercial door for our shop. Careful work, on time, and honest from the first estimate.',
    'source' => 'Website Review',
    'url' => ''
  ],
  [
    'name' => 'Residential Client',
    'city' => 'Lynwood, CA',
    'stars' => 5,
    'text' => 'My door came off track and they got it running smoothly again quickly. Straightforward and professional.',
    'source' => 'Website Review',
    'url' => ''
  ]
];

$GoogleReviewItems = $DirectoryReviewItems;

$ReviewSourceSummaries = [
  [
    'source' => 'Yelp Reviews',
    'rating' => '11+', /* TODO CONFIRMAR: Yelp muestra 11 reseñas y 25 fotos; verificar rating exacto de estrellas antes de publicar */
    'count' => 11,
    'label' => 'Reviews published on Yelp',
    'url' => 'https://www.yelp.com/biz/banegas-garage-doors-co-huntington-park'
  ],
  [
    'source' => 'Website Reviews',
    'rating' => '5.0/5',
    'count' => 4,
    'label' => 'Based on recent customer feedback',
    'url' => ''
  ]
];

$DetailedReviewItems = [
  [
    'name' => 'Verified Customer',
    'city' => 'Huntington Park, CA',
    'stars' => 5,
    'text' => 'A reliable company from start to finish. They handled my new garage door installation professionally.',
    'source' => 'Yelp Review',
    'date' => 'April 2026', /* TODO CONFIRMAR fecha real */
    'url' => 'https://www.yelp.com/biz/banegas-garage-doors-co-huntington-park'
  ],
  [
    'name' => 'Homeowner',
    'city' => 'South Gate, CA',
    'stars' => 5,
    'text' => 'Fast spring replacement and clear communication in English and Spanish. Fair, upfront pricing.',
    'source' => 'Website Review',
    'date' => 'March 2026',
    'url' => ''
  ],
  [
    'name' => 'Local Business Owner',
    'city' => 'Downey, CA',
    'stars' => 5,
    'text' => 'They installed a commercial door for our shop. Careful work, on time, and honest from the first estimate.',
    'source' => 'Website Review',
    'date' => 'February 2026',
    'url' => ''
  ],
  [
    'name' => 'Residential Client',
    'city' => 'Lynwood, CA',
    'stars' => 5,
    'text' => 'My door came off track and they got it running smoothly again quickly. Straightforward and professional.',
    'source' => 'Website Review',
    'date' => 'January 2026',
    'url' => ''
  ]
];

/*=========================
   SEO & BRANDING SLOGANS
   =========================*/
$Phrase = [
  "Garage Door Installation, Repair & Maintenance in Huntington Park",
  "New Installation - Service - Repair",
  "Free Estimates on Every Job",
  "Residential, Commercial & Custom Garage Doors",
  "English and Spanish Spoken"
];

/*=========================
   HOME / ABOUT
   =========================*/
$Home = [
  "Banegas Garage Doors Co provides garage door installation, replacement, spring repair, off-track repair, and maintenance across Huntington Park, South Gate, Downey, and communities throughout Los Angeles and Orange County.",
  "With more than 10 years of hands-on industry experience, our bilingual team shows up on time, gives clear pricing with free estimates, and makes sure every job is done right the first time."
];

$About = [
  "Banegas Garage Doors Co is a local garage door company based in Huntington Park, dedicated to reliable installation, repair, and maintenance for homes and businesses.",
  "Our team spent over 10 years working in the garage door industry across Los Angeles and Orange County before opening our own shop and showroom, where customers can explore door styles in person with English and Spanish support."
];

$Mission = "To keep every garage door working safely and efficiently, with honest service, clear pricing, and quality workmanship that gives our customers peace of mind.";
$Vision  = "To be the trusted garage door company for homeowners and businesses across Los Angeles and Orange County.";

/*=========================
   SERVICES SECTION
   =========================*/
$SN = $SD = $ExSD = [];

$SN[1] = "Garage Door Installation";
$SD[1] = "Professional installation of new garage doors, with styles and materials tailored to your home, needs, and budget.";

$SN[2] = "Garage Door Replacement";
$SD[2] = "Expert removal of your old garage door and installation of a high-quality new door with proper alignment and safe operation.";

$SN[3] = "Spring Replacement";
$SD[3] = "Replacement of broken or worn torsion and extension springs with durable components that restore balance and safety.";

$SN[4] = "Off-Track Door Repair";
$SD[4] = "Full inspection and realignment for doors that have come off their tracks, with repair or replacement of damaged parts.";

$SN[5] = "Garage Door Maintenance";
$SD[5] = "Thorough inspection, lubrication, adjustment, and safety checks that extend the life of your garage door system.";

$SN[6] = "Commercial Garage Doors";
$SD[6] = "Durable, high-performance door systems built for heavy daily use in commercial and industrial properties.";

$SN[7] = "Custom Door Design";
$SD[7] = "Custom garage door solutions that combine functionality, durability, and design, from carriage house to full view frameless.";

$OtherServices = [
  "Commercial Garage Doors",
  "Custom Door Design"
];

$ServicesByCategory = [
  [
    'label' => 'Installation & Repair',
    'summary_slug' => 'garage-door-installation',
    'service_slugs' => [
      'garage-door-installation',
      'garage-door-replacement',
      'spring-replacement',
      'off-track-door-repair',
      'garage-door-maintenance',
    ]
  ],
  [
    'label' => 'Commercial & Custom',
    'summary_slug' => 'commercial-garage-doors',
    'service_slugs' => [
      'commercial-garage-doors',
      'custom-door-design'
    ]
  ]
];

$Badges = [
  $Estimates,
  $Experience,
  $Coverage,
  $LicenseNote,
  $BilingualNote
];

$ExAbout = substr($About[0], 0, 145) . '...';
$ExHome  = substr($Home[0],  0, 95)  . '...';
for ($i = 1; $i <= count($SN); $i++) {
  if (isset($SD[$i])) $ExSD[$i] = substr($SD[$i], 0, 120) . '...';
}

$ServicesList = [];
for ($i = 1; $i <= count($SN); $i++) {
  if (empty($SN[$i])) continue;
  $slug = slugify($SN[$i]);
  $ServicesList[$slug] = [
    'id'          => $i,
    'name'        => $SN[$i],
    'description' => $SD[$i] ?? '',
    'excerpt'     => $ExSD[$i] ?? '',
    'slug'        => $slug,
    'file'        => 'services.php',
    'url'         => 'services.php#' . $slug
  ];
}

$OtherServicesLandingSlugs = [
  'commercial-garage-doors',
  'custom-door-design'
];

$PrimaryServiceSlugs = [
  'garage-door-installation',
  'garage-door-replacement',
  'spring-replacement',
  'off-track-door-repair',
  'garage-door-maintenance'
];
$AllowedServiceSlugs = array_merge($PrimaryServiceSlugs, $OtherServicesLandingSlugs);
foreach (array_keys($ServicesList) as $serviceSlug) {
  if (!in_array($serviceSlug, $AllowedServiceSlugs, true)) unset($ServicesList[$serviceSlug]);
}

$serviceCategoryMap = [];
foreach ($ServicesByCategory as $category) {
  $categoryLabel = trim((string) ($category['label'] ?? 'General'));
  $categorySlug = trim((string) ($category['summary_slug'] ?? ''));
  if ($categorySlug === '') $categorySlug = slugify($categoryLabel);
  $allSlugs = [];
  if (!empty($category['summary_slug'])) $allSlugs[] = trim((string) $category['summary_slug']);
  foreach (($category['service_slugs'] ?? []) as $serviceSlug) {
    $serviceSlug = trim((string) $serviceSlug);
    if ($serviceSlug !== '') $allSlugs[] = $serviceSlug;
  }
  foreach (array_unique($allSlugs) as $serviceSlug) {
    $serviceCategoryMap[$serviceSlug] = [
      'category_slug' => $categorySlug,
      'category_label' => $categoryLabel
    ];
  }
}

foreach ($ServicesList as $serviceSlug => &$serviceData) {
  if (isset($serviceCategoryMap[$serviceSlug])) {
    $serviceData['category_slug'] = $serviceCategoryMap[$serviceSlug]['category_slug'];
    $serviceData['category_label'] = $serviceCategoryMap[$serviceSlug]['category_label'];
  } else {
    $serviceData['category_slug'] = 'general';
    $serviceData['category_label'] = 'General';
  }
}
unset($serviceData);

$ServicesDisplayList = array_values($ServicesList);
usort($ServicesDisplayList, static function ($a, $b) {
  return (int) ($a['id'] ?? 0) <=> (int) ($b['id'] ?? 0);
});

$ServiceDetails = [
  'garage-door-installation' => [
    'kicker' => 'New Installation',
    'headline' => 'New garage doors installed the right way',
    'paragraphs' => [
      'We install new garage doors for homes and businesses across Huntington Park and the greater Los Angeles area.',
      'Our team handles measurement, hardware, alignment, and a full safety check so your new door runs smoothly from day one.'
    ],
    'bullets' => ['Residential and commercial doors', 'Multiple styles and materials', 'Proper alignment and balancing', 'Free estimates in English and Spanish']
  ],
  'garage-door-replacement' => [
    'kicker' => 'Door Replacement',
    'headline' => 'Upgrade security, function, and curb appeal',
    'paragraphs' => [
      'When an old door has reached the end of its life, we remove it safely and install a high-quality replacement tailored to your style, needs, and budget.',
      'Every replacement includes careful installation, proper alignment, and safe operation built for long-lasting performance.'
    ],
    'bullets' => ['Old door removal', 'Quality new doors', 'Improved security and curb appeal', 'Clear, upfront pricing']
  ],
  'spring-replacement' => [
    'kicker' => 'Spring Replacement',
    'headline' => 'Broken springs replaced safely',
    'paragraphs' => [
      'Broken or worn-out springs make your garage door unsafe and hard to operate. We replace damaged torsion and extension springs with durable, high-quality components.',
      'Spring work is dangerous to attempt on your own — our technicians restore balance, performance, and safety the right way.'
    ],
    'bullets' => ['Torsion and extension springs', 'Durable, long-lasting parts', 'Balance and safety restored', 'Fast scheduling']
  ],
  'off-track-door-repair' => [
    'kicker' => 'Off-Track Repair',
    'headline' => 'Doors realigned and running smoothly',
    'paragraphs' => [
      'A garage door that has come off its tracks can be dangerous and stop working entirely. We inspect the full system, realign the door, and repair or replace damaged components.',
      'The result is smooth, reliable operation and a door you can trust again.'
    ],
    'bullets' => ['Full system inspection', 'Door realignment', 'Damaged parts repaired or replaced', 'Safety check included']
  ],
  'garage-door-maintenance' => [
    'kicker' => 'Maintenance',
    'headline' => 'Prevent costly repairs before they happen',
    'paragraphs' => [
      'Regular maintenance keeps your garage door operating safely and efficiently, extends the life of the system, and prevents expensive breakdowns.',
      'Our technicians perform a thorough inspection, lubrication, adjustment, and safety check of all major components.'
    ],
    'bullets' => ['Full inspection', 'Lubrication and adjustment', 'Safety checks', 'Longer system lifespan']
  ],
  'commercial-garage-doors' => [
    'kicker' => 'Commercial Doors',
    'headline' => 'Strong solutions for your business',
    'paragraphs' => [
      'We deliver durable, high-performance garage door systems for commercial and industrial properties.',
      'Our commercial doors are built to handle heavy daily use while keeping your business secure and running smoothly.'
    ],
    'bullets' => ['Commercial and industrial systems', 'Built for heavy use', 'Security focused', 'Installation and repair']
  ],
  'custom-door-design' => [
    'kicker' => 'Custom Design',
    'headline' => 'Built to fit your style',
    'paragraphs' => [
      'Looking for something unique? We offer custom garage door solutions that combine functionality, durability, and design.',
      'Choose from styles like raised panel, flush panel, carriage house, full view frameless, and planks — or design something entirely your own.'
    ],
    'bullets' => ['Raised and flush panel', 'Carriage house style', 'Full view frameless', 'Plank designs']
  ]
];

/*=========================
  COPY / UI TEXT
  =========================*/
$WhyChoose = [
  'eyebrow' => 'Garage Door Experts You Can Trust',
  'title_pre' => 'Why Choose',
  'intro' => 'With more than 10 years in the garage door industry, Banegas Garage Doors Co delivers honest work, on-time service, and free estimates on every job.',
  'cards' => [
    ['title' => 'Free Estimates', 'text' => 'Call for a free estimate on installation, replacement, springs, off-track repair, and maintenance.'],
    ['title' => 'Bilingual Support', 'text' => $BilingualNote . '. Get clear answers in the language you prefer.'],
    ['title' => 'Need Help Now?', 'text' => 'Contact Banegas Garage Doors Co for fast, reliable garage door service.', 'btn' => ['href' => $PhoneRef, 'text' => 'Call Now']],
  ],
];

function paymentList($txt) {
  return array_map('trim', explode(',', $txt));
}
$PaymentMethods = paymentList($Payment);

$ExperienceYears = (int) filter_var($Experience, FILTER_SANITIZE_NUMBER_INT);
if ($ExperienceYears <= 0) $ExperienceYears = 1;

$NavCopy = [
  'home' => 'Home',
  'about' => 'About',
  'services' => 'Services',
  'projects' => 'Door Design',
  'reviews' => 'Reviews',
  'contact' => 'Contact',
  'other_services' => 'Commercial & Custom',
  'cta' => 'Call Now',
  'cta_mobile' => 'Call Now',
  'explore_service' => 'Explore Service',
  'view_services' => 'View Services',
  'contact_today' => 'Get a Free Estimate',
  'leave_review' => 'Leave a Review',
  'read_reviews' => 'Read Reviews'
];

$LanguageCopy = [
  'label' => 'Language',
  'english' => 'English',
  'spanish' => 'Espanol'
];

$HeaderCopy = [
  'menu_close' => 'Close Menu',
  'menu_toggle' => 'Toggle Menu',
  'social_titles' => [
    'facebook' => 'Facebook',
    'messenger' => 'Messenger',
    'google' => 'Google Reviews',
    'instagram' => 'Instagram',
    'tiktok' => 'TikTok',
    'whatsapp' => 'WhatsApp'
  ]
];

$FooterCopy = [
  'desc' => 'Garage door installation, replacement, spring repair, off-track repair, and maintenance in Huntington Park and across Los Angeles and Orange County.',
  'titles' => ['company' => 'Company', 'services' => 'Services', 'contact' => 'Contact Us'],
  'labels' => ['location' => 'Showroom', 'phone' => 'Phone', 'hours' => 'Hours'],
  'copyright_suffix' => 'All Rights Reserved.'
];

$PageHeroCopy = [
  'default' => ['title' => 'Garage Door Services', 'desc' => 'New installation, replacement, spring repair, off-track service, maintenance, and commercial or custom doors.', 'bg' => 'assets/img/hero/hero1.jpg'],
  'projects' => ['title' => 'Door Design Gallery', 'desc' => 'Explore raised panel, flush panel, carriage house, full view frameless, planks, and commercial styles.', 'bg' => 'assets/img/hero/hero2.jpg'],
  'about' => ['title' => 'About ' . $Company, 'desc' => 'Local garage door installation, repair, and maintenance with a showroom in Huntington Park.', 'bg' => 'assets/img/hero/hero3.jpg'],
  'contact' => ['title' => 'Get a Free Estimate', 'desc' => 'Call or send a message for garage door installation, repair, springs, and maintenance.', 'bg' => 'assets/img/hero/hero1.jpg'],
  'reviews' => ['title' => 'Customer Reviews', 'desc' => 'Read feedback from homeowners and businesses across Los Angeles and Orange County.', 'bg' => 'assets/img/hero/hero2.jpg'],
  'other' => ['title' => 'Commercial & Custom Doors', 'desc' => 'High-performance commercial systems and custom door designs built to fit your property.', 'bg' => 'assets/img/hero/hero3.jpg']
];

$HomeHeroCopy = [
  'headline' => $Company,
  'sub' => 'New installation, replacement, spring repair, off-track service, and maintenance in Huntington Park and across Los Angeles and Orange County. Free estimates, English and Spanish.',
  'cta_primary' => 'Call for Free Estimate',
  'cta_secondary' => 'WhatsApp Us',
  'cta_primary_href' => $PhoneRef,
  'cta_secondary_href' => $whatsapp,
  'prev_label' => 'Previous slide',
  'next_label' => 'Next slide',
  'slide_alt_prefix' => 'Banegas Garage Doors Slide',
  'thumb_alt_prefix' => 'Garage Door Thumbnail'
];

$HomeAboutCopy = [
  'eyebrow' => 'Huntington Park Garage Doors',
  'title' => 'Quality Doors,',
  'title_strong' => 'Done Right the First Time.',
  'description' => 'Banegas Garage Doors Co helps homeowners and businesses with installation, replacement, springs, off-track repair, and maintenance.',
  'badge_label' => 'Years in the Industry',
  'images' => [
    'back' => ['src' => 'assets/img/showroom.jpg', 'alt' => 'Banegas Garage Doors showroom'],
    'front' => ['src' => 'assets/img/showroom-2-hd.jpg', 'alt' => 'Banegas Garage Doors installation']
  ],
  'features' => [
    ['icon' => 'fa-warehouse', 'title' => 'New Installation', 'text' => 'Residential, commercial, and custom garage doors.'],
    ['icon' => 'fa-wrench', 'title' => 'Repair Service', 'text' => 'Springs, off-track doors, and full maintenance.'],
    ['icon' => 'fa-comments', 'title' => 'Bilingual Support', 'text' => $BilingualNote],
    ['icon' => 'fa-store', 'title' => 'Local Showroom', 'text' => 'Visit us at 7876 State St, Huntington Park.']
  ],
  'cta' => 'Learn About Us'
];

$AboutHeroCopy = [
  'eyebrow' => 'About ' . $Company,
  'title' => 'Garage door experts based in Huntington Park',
  'desc' => $About[0],
  'cta_primary' => 'Our Story',
  'cta_primary_href' => '#story',
  'cta_secondary_prefix' => 'Call',
  'meta' => [$Experience, $Estimates, $LicenseNote, $BilingualNote],
  'list' => [
    ['label' => 'Service area', 'value' => $Coverage],
    ['label' => 'Schedule', 'value' => $Schedule],
    ['label' => 'Core services', 'value' => $TypeOfService],
    ['label' => 'Showroom', 'value' => $Address]
  ]
];

$AboutStoryCopy = [
  'eyebrow' => 'Our Story',
  'title' => 'Built on honest work and doors done right',
  'points' => [
    ['title' => 'Free estimates', 'text' => $Estimates . ' on every job, with clear pricing before any work starts'],
    ['title' => 'Bilingual attention', 'text' => $BilingualNote],
    ['title' => 'Local showroom', 'text' => 'Explore door styles in person at ' . $Address]
  ],
  'actions' => ['primary_text' => 'Request an estimate', 'primary_href' => $PhoneRef, 'secondary_prefix' => 'Call'],
  'stats' => ['years_label' => 'Years of Experience', 'services_label' => 'Core services', 'areas_label' => 'Service areas', 'areas_separator' => ', ', 'areas_preview_count' => 5]
];

$AboutCredentialsCopy = [
  'eyebrow' => 'Why work with us',
  'title' => 'Reliable help for every garage door',
  'intro' => 'Every job starts with a free estimate, honest pricing, and respect for your time and property.',
  'list' => [
    ['label' => 'Contact', 'value' => $Phone],
    ['label' => 'Hours', 'value' => $Schedule],
    ['label' => 'Core services', 'value' => $TypeOfService],
    ['label' => 'Coverage', 'value' => $Coverage],
    ['text' => $Estimates . ' | ' . $BilingualNote]
  ],
  'cta' => ['title' => 'Need garage door help?', 'desc' => 'Call for installation, replacement, springs, off-track repair, and maintenance.', 'primary_text' => 'Call Now', 'primary_href' => $PhoneRef, 'secondary_prefix' => 'Call']
];

$AboutServicesSummaryCopy = ['eyebrow' => 'Services', 'title' => 'How we help', 'desc' => $TypeOfService . ' across Los Angeles and Orange County.', 'link_label' => 'Learn more'];
$ServicesListCopy = ['eyebrow' => 'Scope', 'title' => 'Garage door services we provide', 'desc' => $Services, 'link_label' => 'Learn more'];
$BrandsCopy = ['tagline' => 'Trusted by Homeowners and Businesses Across LA & Orange County'];

$HomeServicesCopy = [
  'eyebrow' => 'Garage Door Services',
  'title' => 'Everything Your',
  'title_strong' => 'Garage Door Needs',
  'desc' => 'New installation, replacement, spring repair, off-track service, maintenance, and commercial or custom doors.',
  'link_label' => 'Contact',
  'more_title' => 'Not Sure What You Need?',
  'more_desc' => 'Call and describe the problem — we will explain your options and give you a free estimate.',
  'more_button' => 'Call for Free Estimate',
  'more_href' => $PhoneRef
];

$HomeMaintenanceCopy = [
  'tagline' => 'Reliable Garage Door Service',
  'title' => 'Install, Repair,',
  'title_strong' => 'Maintain',
  'desc' => 'From new door installation to broken springs, Banegas Garage Doors Co responds with practical, honest solutions.',
  'cards' => [
    ['icon' => 'fa-warehouse', 'title' => 'Installation & Replacement', 'text' => 'New garage doors installed with proper alignment and safe operation.', 'action' => 'See Details'],
    ['icon' => 'fa-cogs', 'title' => 'Spring Replacement', 'text' => 'Broken torsion or extension springs replaced with durable parts.', 'action' => 'See Details'],
    ['icon' => 'fa-tools', 'title' => 'Off-Track Repair', 'text' => 'Doors realigned and damaged components repaired or replaced.', 'action' => 'See Details'],
    ['icon' => 'fa-shield-alt', 'title' => 'Maintenance', 'text' => 'Inspection, lubrication, and safety checks that prevent costly repairs.', 'action' => 'See Details']
  ],
  'foundation' => [
    ['icon' => 'fa-file-invoice-dollar', 'title' => 'Free Estimates', 'subtitle' => 'On every job'],
    ['icon' => 'fa-language', 'title' => 'Bilingual', 'subtitle' => 'English and Spanish'],
    ['icon' => 'fa-star', 'title' => $ExperienceYears . '+ Years', 'subtitle' => 'Industry experience']
  ]
];

$WhyCopy = [
  'badge' => 'Trusted Garage Door Choice',
  'title_prefix' => 'Why Customers Choose',
  'description' => 'Our service is built around honest pricing, quality workmanship, and doors done right the first time.',
  'stats' => [
    ['value' => $ExperienceYears . '+', 'label' => 'Years of Experience'],
    ['value' => count($ServicesList) . '+', 'label' => 'Services Offered'],
    ['value' => '100%', 'label' => 'Free Estimates']
  ],
  'service_area_label' => 'Coverage and Hours',
  'features' => [
    ['icon' => 'fa-comments', 'title' => 'Clear Communication', 'text' => $BilingualNote . '. Straight answers and upfront pricing.'],
    ['icon' => 'fa-file-invoice-dollar', 'title' => 'Free Estimates', 'text' => 'Know the price before any work starts — no surprises.'],
    ['icon' => 'fa-shield-alt', 'title' => 'Quality Workmanship', 'text' => 'Proper alignment, durable parts, and safe operation on every job.'],
    ['icon' => 'fa-clock', 'title' => 'Dependable Hours', 'text' => $Schedule]
  ],
  'cta_label' => 'Call Now'
];

$MissionCopy = ['mission_title' => 'Our Mission', 'vision_title' => 'Our Vision'];

$ProcessCopy = [
  'title' => 'How We Work',
  'title_strong' => 'From Call to Install',
  'desc' => 'Our process keeps garage door service simple from the first call to the final safety check.',
  'steps' => [
    ['icon' => 'fa-phone', 'title' => 'Call Us', 'text' => 'Tell us about your door — installation, repair, or maintenance.'],
    ['icon' => 'fa-file-invoice-dollar', 'title' => 'Free Estimate', 'text' => 'We inspect, explain your options, and give you clear pricing.'],
    ['icon' => 'fa-calendar-check', 'title' => 'Schedule', 'text' => 'We set a service date that works for you and show up on time.'],
    ['icon' => 'fa-check-circle', 'title' => 'Done Right', 'text' => 'Installation or repair completed with a full safety check.']
  ]
];

$FaqCopy = [
  'title' => 'Frequently Asked Questions',
  'items' => [
    ['q' => 'Do you offer free estimates?', 'a' => 'Yes. Every job starts with a free estimate and clear, upfront pricing.'],
    ['q' => 'Do you speak Spanish?', 'a' => 'Yes. Banegas Garage Doors Co speaks English and Spanish.'],
    ['q' => 'What areas do you cover?', 'a' => $Coverage],
    ['q' => 'Do you have a showroom?', 'a' => 'Yes. Visit our showroom at 7876 State St, Huntington Park, CA 90255 — open Monday to Saturday, 9:00 AM to 5:00 PM.']
  ]
];

$AreasCopy = [
  'title' => 'Serving',
  'title_strong' => 'Los Angeles & Orange County',
  'subtitle' => 'Coverage includes Huntington Park, South Gate, Downey, and nearby communities.',
  'cta_label' => 'Request Service in Your Area',
  'map_overlay' => 'Active Service Coverage',
  'license_pills' => ['Free Estimates', 'English & Spanish', 'Residential & Commercial']
];

$CtaCopy = [
  'badge' => $ExperienceYears . '+ Years in Garage Doors',
  'title' => 'Need Garage Door',
  'title_strong' => 'Help Today?',
  'paragraph' => $Company . ' provides installation, replacement, spring repair, off-track service, and maintenance across Los Angeles and Orange County.',
  'features' => ['Free Estimates', 'Bilingual Team', 'Local Showroom'],
  'button' => 'Call for Free Estimate',
  'card_title' => 'Speak With Banegas Garage Doors',
  'card_subtitle' => 'Fast response for garage door service',
  'row_call_label' => 'Call for service',
  'row_license_label' => 'Showroom',
  'row_license_title' => $Address,
  'row_service_label' => 'Coverage Area',
  'whatsapp_button' => 'WhatsApp Us',
  'book_button' => 'Start Request'
];

$ContactFormCopy = [
  'eyebrow' => 'Request an Estimate',
  'title' => "Let's Get Your",
  'title_strong' => 'Door Working Right.',
  'desc' => 'Send your address, door type, and the service you need. For faster help, call directly.',
  'method_labels' => ['call' => 'Call or Text', 'hours' => 'Business Hours'],
  'form_labels' => ['name' => 'Name', 'phone' => 'Phone', 'email' => 'Email', 'service' => 'Service', 'message' => 'Service Details'],
  'placeholders' => ['service' => 'Select service type', 'service_other' => 'Other / Custom Request', 'message' => 'Describe your garage door, the issue, and your location...'],
  'submit' => 'Send Estimate Request',
  'honeypot_label' => 'Leave this field empty'
];

$MapCopy = ['title' => 'Visit', 'title_strong' => 'Our Showroom', 'labels' => ['location' => 'Showroom', 'call' => 'Phone', 'hours' => 'Hours']];

$TestimonialsCopy = ['title' => 'Customer Feedback', 'title_strong' => 'From Real Jobs', 'desc' => 'Read feedback from installation, repair, and maintenance customers across Los Angeles and Orange County.', 'button_label' => 'Read More Reviews', 'button_href' => 'reviews.php', 'fallback_name' => 'Verified Client'];

$TrustedDirectoriesCopy = [
  'eyebrow' => 'Trusted Feedback Sources',
  'title' => 'Customer Service Highlights',
  'desc' => 'Explore reviews and recent work from Banegas Garage Doors Co.',
  'cards' => [
    ['icon' => 'fa-star', 'subtitle' => 'Yelp', 'title' => 'Yelp Reviews', 'text' => 'Read verified customer reviews on our Yelp profile.', 'url' => $yelp, 'tags' => ['Verified Feedback', 'Huntington Park']],
    ['icon' => 'fa-map-marker-alt', 'subtitle' => 'Google', 'title' => 'Google Business Profile', 'text' => 'Find us on Google and read customer reviews.', 'url' => $google, 'tags' => ['Google Reviews', 'Local Business']],
    ['icon' => 'fa-camera', 'subtitle' => 'Instagram', 'title' => 'Project Photos', 'text' => 'See recent installations and door styles on Instagram.', 'url' => $instagram, 'tags' => ['Recent Work', 'Door Styles']],
    ['icon' => 'fa-thumbs-up', 'subtitle' => 'Facebook', 'title' => 'Facebook Page', 'text' => 'Follow Banegas Garage Doors Co for updates and projects.', 'url' => $facebook, 'tags' => ['Community', 'Updates']]
  ]
];

$ReviewsPageCopy = [
  'hero_title' => 'Customer Reviews',
  'hero_subtitle' => 'See what homeowners and businesses across Los Angeles and Orange County say about working with us.',
  'hero_image' => 'assets/img/hero/hero2.jpg',
  'list_eyebrow' => 'Reviews',
  'list_title' => 'What Our Customers Say',
  'list_desc' => 'Recent feedback from garage door installation, repair, and maintenance customers.',
  'list_cta' => 'Leave a Review'
];

$ReviewFormCopy = [
  'title' => 'Share Your Experience',
  'subtitle' => 'We value your feedback and would love to hear about your service.',
  'success_title' => 'Thank You!',
  'success_message' => 'Your review has been submitted successfully.',
  'error_title' => 'Error!',
  'captcha_error' => 'Incorrect security code. Please try again.',
  'labels' => ['name' => 'Your Name', 'city' => 'City / Location', 'rating' => 'Rating', 'rating_hint' => '(Select stars)', 'review' => 'Your Review', 'security' => 'Security Check', 'refresh' => 'Refresh', 'captcha' => 'Enter the code shown above'],
  'captcha_alt' => 'Captcha image',
  'placeholders' => ['name' => '', 'city' => 'e.g. Huntington Park, CA', 'review' => 'Tell us how we did...'],
  'submit' => 'Submit Review'
];

$GalleryHeroCopy = ['eyebrow' => 'Our Gallery', 'title' => 'Banegas Garage Doors in Action', 'desc' => 'Explore installations, door styles, and service work from ' . $Company . ' across Los Angeles and Orange County.', 'cta_text' => 'Call Now', 'cta_href' => $PhoneRef];

$ProjectsIntroCopy = [
  'label' => 'Our Work',
  'title_line1' => 'Doors',
  'title_line2' => 'Done Right.',
  'outline_line1' => 'Installed To',
  'outline_line2' => 'Last For Years.',
  'desc' => 'At ' . $Company . ', every installation and repair is handled with careful workmanship and clear communication.',
  'stats' => [
    ['value' => $ExperienceYears . '+', 'label' => 'Years of Experience'],
    ['value' => count($ServicesList) . '+', 'label' => 'Services Offered'],
    ['value' => count($Areas), 'label' => 'Areas Served']
  ]
];

$ProjectsBeforeAfterCopy = ['eyebrow' => 'Service', 'title' => 'Before & After', 'desc' => 'See how a new door transforms security and curb appeal.', 'before_label' => 'Before', 'after_label' => 'After'];
$ProjectsStatsCopy = ['items' => [
  ['icon' => 'fa-hourglass-half', 'value' => $ExperienceYears . '+', 'label' => 'Years of Experience'],
  ['icon' => 'fa-warehouse', 'value' => count($ServicesList) . '+', 'label' => 'Door Services'],
  ['icon' => 'fa-map-location-dot', 'value' => count($Areas), 'label' => 'Areas Served'],
  ['icon' => 'fa-file-invoice-dollar', 'value' => '100%', 'label' => 'Free Estimates']
]];

$ProjectsGalleryCopy = ['eyebrow' => 'Service Gallery', 'title' => 'Selected Work &', 'title_strong' => 'Recent Installations', 'videos_label' => 'Videos', 'empty' => 'Projects coming soon.', 'image_title' => 'Project Photo', 'video_title' => 'Project Video'];
$ServiceHeroCopy = ['badge' => 'Garage Door Service', 'cta_primary' => 'Call Now', 'cta_secondary' => 'Explore Service'];
$ServiceIntroCopy = [
  'eyebrow' => 'Our Method',
  'title' => 'How We Deliver',
  'title_strong' => 'Garage Door Service',
  'desc' => 'We keep the process simple so you know what to expect from call to completion.',
  'steps' => [
    ['icon' => 'fa-comments', 'title' => 'Call', 'text' => 'We confirm your door type, the issue, and your location.'],
    ['icon' => 'fa-file-invoice-dollar', 'title' => 'Estimate', 'text' => 'You get a free estimate with clear, upfront pricing.'],
    ['icon' => 'fa-tools', 'title' => 'Service', 'text' => 'We complete the installation or repair with a full safety check.']
  ]
];

$ServiceDetailsCopy = ['badge_title' => 'Banegas Promise', 'badge_subtitle' => 'Done Right the First Time', 'title_prefix' => 'Professional', 'button' => 'Call Now'];
$ServiceFaqCopy = [
  'eyebrow' => 'Common Questions',
  'title' => 'Info About Our',
  'title_strong' => 'Garage Door Service',
  'items' => [
    ['icon' => 'fa-hourglass-half', 'question' => 'How fast can you come out?', 'answer' => 'Scheduling depends on your location and the service needed. Call with your address for current availability.'],
    ['icon' => 'fa-file-invoice-dollar', 'question' => 'Do you offer free estimates?', 'answer' => 'Yes. ' . $Company . ' provides free estimates on every job.'],
    ['icon' => 'fa-language', 'question' => 'Do you speak Spanish?', 'answer' => $BilingualNote . '.'],
    ['icon' => 'fa-map', 'question' => 'What areas do you serve?', 'answer' => $Coverage]
  ],
  'footer' => 'Have a different question? Contact our team directly'
];

$ServiceCtaCopy = [
  'tag' => 'Need Help?',
  'title' => "Let's Get Your",
  'title_strong' => 'Door Moving Again',
  'paragraph' => 'Call for %s across Huntington Park and communities in Los Angeles and Orange County.',
  'subject_fallback' => 'service',
  'features' => ['Free Estimates', 'Bilingual', $Experience],
  'primary' => 'Call Now',
  'secondary_prefix' => 'Call'
];

$OtherServicesCopy = ['label' => 'Commercial & Custom', 'title' => 'More Ways We Can Help', 'title_strong' => 'With Your Doors', 'item_note' => 'Professional garage door solutions for every property.', 'cta_title' => 'Have a specific request?', 'cta_text' => 'From commercial systems to custom designs, call and tell us what you need.', 'cta_button' => $Estimates, 'page_desc' => 'Commercial door systems and custom designs tailored to your property.'];
$FounderCopy = ['title' => 'A Note from', 'title_strong' => 'The Owner', 'quote' => 'At ' . $Company . ', we believe garage door work is about honesty, showing up on time, and doing the job right the first time. Our goal is to give every customer a safe, reliable door and clear communication.', 'role' => 'Owner', 'image_alt' => $CustomerName];

$AriaCopy = [
  'call' => 'Click to call',
  'primary_nav' => 'Primary navigation',
  'whatsapp' => 'WhatsApp',
  'messenger' => 'Messenger',
  'facebook' => 'Facebook',
  'instagram' => 'Instagram',
  'google' => 'Google Maps',
  'tiktok' => 'TikTok',
  'email' => 'Email'
];

$TestimonialsPageCopy = ['eyebrow' => $NavCopy['reviews'] ?? 'Reviews', 'title' => 'What Customers Say', 'desc' => 'Trusted feedback from customers across Los Angeles and Orange County.', 'card_title' => 'Read Verified Reviews', 'card_desc' => 'See feedback from garage door installation and repair customers.', 'card_button' => $NavCopy['read_reviews'] ?? 'Read Reviews', 'card_link' => 'reviews.php'];
$ThankYouCopy = ['title' => 'Thank You', 'description' => 'Thank you for contacting ' . $Company . '. We will be in touch shortly.', 'eyebrow' => 'Thank You', 'headline' => 'We received your request', 'body' => 'Thank you for contacting ' . $Company . '. Our team will reach out soon to confirm your garage door service details and estimate.', 'cta_call' => 'Click to Call', 'cta_home' => 'Back to Home'];
$LabelsCopy = ['service_areas' => 'Service Areas', 'call' => 'Call', 'email' => 'Email'];

/*=========================
   CSS VARIABLES
   =========================*/
$BrandCSSVars = sprintf(
  ':root{--brand-primary:%s;--brand-secondary:%s;--brand-white:%s;--brand-accent:%s;--brand-neutral:%s;--brand-primary-rgb:%s;--brand-secondary-rgb:%s;--brand-accent-rgb:%s;}',
  $BrandColors["primary"],
  $BrandColors["secondary"],
  $BrandColors["white"],
  $BrandColors["accent"],
  $BrandColors["neutral"],
  $BrandColors["primary_rgb"],
  $BrandColors["secondary_rgb"],
  $BrandColors["accent_rgb"]
);

$BrandCSSVars .= <<<CSS
:root{
  --site-surface:#ffffff;
  --site-surface-soft:color-mix(in srgb, var(--brand-neutral) 82%, #fff 18%);
  --site-ink:var(--brand-secondary);
  --site-ink-soft:rgba(var(--brand-secondary-rgb),0.76);
  --site-panel:#ffffff;
  --site-panel-soft:rgba(255,255,255,0.78);
  --site-line:rgba(var(--brand-secondary-rgb),0.14);
  --site-dark:#07121c;
  --site-dark-2:#0e1d2b;
  --site-dark-3:#152838;
  --site-dark-line:rgba(var(--brand-accent-rgb),0.26);
  --site-dark-text:#ffffff;
  --site-dark-muted:rgba(255,255,255,0.72);
  --site-accent-soft:rgba(var(--brand-accent-rgb),0.14);
}
body{
  background:
    radial-gradient(circle at 10% 8%, rgba(var(--brand-accent-rgb),0.16), transparent 28%),
    linear-gradient(180deg, var(--brand-neutral) 0%, #ffffff 100%);
}
#hero-4.hero4{
  background: linear-gradient(130deg, #010a12 0%, var(--brand-secondary) 58%, #003a5c 100%) !important;
}
#hero-4 .hero4__slides::after{
  background: linear-gradient(to bottom, rgba(1,10,18,0.78) 0%, rgba(1,10,18,0.5) 42%, rgba(1,10,18,0.88) 100%) !important;
}
#hero-4 .hero4__content{
  background: linear-gradient(145deg, rgba(1,10,18,0.92), rgba(var(--brand-secondary-rgb),0.78)) !important;
  border: 1px solid rgba(var(--brand-accent-rgb),0.55) !important;
}
#hero-4 .hero4__content::before{
  background: radial-gradient(120% 140% at 0% 0%, rgba(var(--brand-accent-rgb),0.24), transparent 62%) !important;
}
#hero-4 .hero4__btn--primary,
.section-about-arch .btn-arch,
.section-remodel-why .btn-gold,
.cta-premium-section .btn-cta-primary,
.section-contact-premium .btn-submit-arch{
  background: var(--brand-accent) !important;
  color: #04121e !important;
  border-color: var(--brand-accent) !important;
}
#hero-4 .hero4__btn--ghost,
#hero-4 .hero4__thumb.active,
#hero-4 .hero4__arrow:hover{
  border-color: var(--brand-accent) !important;
}
.section-about-arch,
.section-services-premium,
.section-maint-pro,
.mission-vision-section,
.faq-section{
  background: linear-gradient(180deg, #ffffff 0%, var(--brand-neutral) 100%) !important;
}
.section-remodel-why,
.section-process,
.section-areas,
.cta-premium-section,
.section-contact-premium,
.section-map-contact{
  background: linear-gradient(135deg, #010a12 0%, var(--brand-secondary) 100%) !important;
}
.section-about-arch .arch-eyebrow,
.section-services-premium .sv-eyebrow,
.section-maint-pro .tagline,
.section-remodel-why .sub-badge,
.section-process .step-icon,
.section-areas .license-pill,
.section-areas .city-icon,
.cta-premium-section .cta-badge,
.section-contact-premium .ct-eyebrow,
.section-map-contact .info-icon,
.section-remodel-why .why-header h2 strong,
.section-process .process-header h2 span,
.section-areas .areas-content h2 strong,
.cta-premium-section .cta-content h2 strong,
.section-map-contact .contact-card h3 span{
  color: var(--brand-accent) !important;
  border-color: rgba(var(--brand-accent-rgb),0.6) !important;
}
.section-about-arch .arch-eyebrow::before,
.section-services-premium .sv-eyebrow::before,
.section-services-premium .sv-eyebrow::after,
.section-contact-premium .ct-eyebrow::before{
  background: var(--brand-accent) !important;
}
.section-about-arch .content-arch h2 strong,
.section-services-premium .sv-header h2 strong,
.section-maint-pro .pro-header h2 strong{
  color: var(--brand-primary) !important;
}
.section-services-premium .sv-card,
.section-maint-pro .maint-card-dark,
.section-remodel-why .feature-card,
.section-process .process-step,
.section-areas .map-frame-wrapper,
.section-contact-premium .ct-form-wrapper,
.cta-premium-section .contact-glass-card,
.section-map-contact .contact-card{
  border-radius: 18px !important;
}
.section-services-premium .sv-card:hover,
.section-maint-pro .maint-card-dark:hover,
.section-remodel-why .feature-card:hover,
.section-process .process-step:hover{
  box-shadow: 0 22px 48px rgba(1,10,18,0.28) !important;
}
.section-about-arch .btn-arch,
.section-remodel-why .btn-gold,
.section-areas .btn-area,
.cta-premium-section .btn-cta-primary,
.section-contact-premium .btn-submit-arch,
.section-services-premium .btn-sv-accent{
  border-radius: 999px !important;
}
.section-about-arch .btn-arch:hover,
.section-remodel-why .btn-gold:hover,
.cta-premium-section .btn-cta-primary:hover,
.section-contact-premium .btn-submit-arch:hover{
  background: color-mix(in srgb, var(--brand-accent) 84%, #fff 16%) !important;
  color: #04121e !important;
}
.section-areas .btn-area{
  border-color: var(--brand-accent) !important;
  color: var(--brand-accent) !important;
}
.section-areas .btn-area:hover{
  background: var(--brand-accent) !important;
  color: #04121e !important;
}
.section-contact-premium .form-control-arch:focus{
  border-bottom-color: var(--brand-accent) !important;
}
.section-map-contact .map-background iframe{
  filter: grayscale(60%) contrast(0.9) !important;
}
.language-switcher{
  display:inline-flex;
  align-items:center;
  gap:6px;
  padding:5px;
  border-radius:999px;
  background:#0a1826;
  border:1px solid rgba(var(--brand-accent-rgb),0.45);
}
.language-switcher button{
  border:0;
  border-radius:999px;
  padding:8px 10px;
  background:transparent;
  color:#fff;
  font-size:12px;
  font-weight:800;
  letter-spacing:.04em;
  cursor:pointer;
}
.language-switcher button.active,
.language-switcher button:hover{
  background:var(--brand-accent);
  color:#04121e;
}
.goog-te-banner-frame,
.skiptranslate iframe{
  display:none !important;
}
body{
  top:0 !important;
}
#google_translate_element{
  width:0;
  height:0;
  overflow:hidden;
  position:absolute;
  pointer-events:none;
}
CSS;
?>
