<?php
namespace App;

class DanielRepository {
	private function __construct() { }

	public static function createPortfolio() {
		$p = new Project('Estil', 'Estil', '1998-05');
		$p->summary = 'Simple static HTML website.';
		$p->objective = 'Quickly create a website for a client who needed to publish simple information.';
		$p->responsabilities = 'Front-end development.';
		$p->technology = [
			'HTML' => 'to render most of the content.',
			'JavaScript' => 'for client-side programming.',
		];
		$p->features = [
			['', [
				['Static HTML pages containing all the information to be presented.', 'page1:798x675'],
				['Basic JavaScript programming to show dialogs and statusbar messages.', 'page2:802x675'],
			]],
		];
		$r[$p->key] = $p;
		
		$p = new Project('InterSpace', 'InterSpace', '1998-09');
		$p->summary = 'Website featuring CSS and DHTML animations.';
		$p->objective = 'Create a website for the first Internet Cafe in Florianopolis (South Brazil), probably one of the first in Brazil. It was going first thing the customers would see when logged in and it should guide them on how to use the Internet.';
		$p->responsabilities = 'Front-end development.';
		$p->technology = [
			'HTML' => 'to render most of the content.',
			'CSS' => 'to layout the content.',
			'JavaScript' => 'for client-side programming.',
			'DHTML' => 'combining CSS and JavaScript.',
		];
		$p->features = [
			['', [
				['Home page explaining what is the Internet and how to learn more.', 'home:840x527'],
				['A tutorial explaining how to use links, browsers, e-mails and IRC chat.', 'tutorial:840x527'],
				'Links to free webmail providers.',
				'More information about the café, its menu and how to get there.',
				'Interesting links to start browsing',
			]],
		];
		$r[$p->key] = $p;
		
		$p = new Project('PortalGeralNET', 'Portal Geral NET', '1999-01');
		$p->summary = 'Web portal developed with SHTML, CGI and Perl.';
		$p->objective = 'Create an information portal engaging users to participate.';
		$p->responsabilities = 'Full-stack development.';
		$p->technology = [
			'HTML' => 'to render most of the content.',
			'SHTML' => 'to interact with CGIs in Perl and create dynamic content.',
			'Perl' => 'for CGIs or server-side programming.',
			'CSS' => 'to layout the content.',
			'JavaScript' => 'for client-side programming.',
			'Flash' => 'for the introduction.',
		];
		$p->features = [
			['', [
				'Flash opening animation.',
				['Space for users to leave a message on the home page.', 'home:794x606'],
				'Toolbar-like menu with controls for music background.',
				['Information about games and player registration.', 'quake:794x554'],
				['Webcard (Virtual Postcard) fully customized including picture, colours, music and fonts.', 'webcard:794x606'],
				['Recipes database enabling users to send their own recipes.', 'recipes:794x606'],
				['Humour and general posts, including jokes and trivias posted by users.', 'humour:794x606'],
				['Curriculum Vitae database, including searching by keywords.', 'cv:794x606'],
			]],
		];
		$r[$p->key] = $p;
		
		$p = new Project('TonyCar', 'TonyCar', '1999-03');
		$p->summary = 'Website integrated to an external system using Perl scripts.';
		$p->objective = 'Create a website to present their products integrated with their legacy pricing system.';
		$p->responsabilities = 'Full-stack development.';
		$p->technology = [
			'HTML' => 'to render most of the content.',
			'Perl' => 'for CGIs or server-side programming.',
			'CSS' => 'to layout the content.',
			'JavaScript' => 'for client-side programming.',
			'Flash' => 'for the introduction.',
		];
		$p->features = [
			['', [
				['Introduction in Flash.', 'flash:812x590'],
				['Rotating pictures of their products on the background.', 'home:812x590'],
				['Show Room allowing to select pictures from categories.', 'showroom:812x590'],
				['Product and price list loaded from an external software.', 'products:812x590'],
			]],
		];
		$r[$p->key] = $p;
		
		$p = new Project('MestreVirtualMatematica', 'MestreVirtual de Matemática', '1999-06');
		$p->summary = 'Math educational CD-Rom developed using web technologies.';
		$p->objective = 'Create an educational CD-Rom with theory and exercises about Mathematics.';
		$p->responsabilities = 'Programming the core functionality, create tools and guide other programmers.';
		$p->technology = [
			'HTML' => 'to render most of the content.',
			'CSS' => 'to layout the content.',
			'JavaScript' => 'to do all programming.',
			'Cookies' => 'to serve as storage for the calculator and notepad.',
			'Flash' => 'for the introduction.',
		];
		$p->features = [
			['', [
				['Introduction and how to use the CD-Rom.', 'intro:640x480'],
				['Main Menu to offer a quick overview of all the features in one place.', 'mainmenu:775x584'],
				['Complete Math study for college and high school.', 'theory:775x881'],
				['Interactive tests to check your knowledge about specific topics.', 'tests:775x735'],
				['Explanation on how to solve all provided tests.', 'solutions:602x419'],
				'Built-in calculator and notepad.',
				'IQ Test.',
			]],
		];
		$r[$p->key] = $p;
		
		$p = new Project('MestreVirtualFisica', 'MestreVirtual de Física', '1999-10');
		$p->summary = 'Physics educational CD-Rom developed using web technologies.';
		$p->objective = 'Create an educational CD-Rom with theory and exercises about Physics.';
		$p->responsabilities = 'Programming the core functionality, create tools and guide other programmers.';
		$p->technology = [
			'HTML' => 'to render most of the content.',
			'CSS' => 'to layout the content.',
			'JavaScript' => 'to do all programming.',
			'Cookies' => 'to serve as storage for the calculator and notepad.',
			'Flash' => 'for the introduction.',
		];
		$p->features = [
			['', [
				['Introduction and tools to learn how to run the CD-Rom using Internet Explorer.', 'intro:640x480'],
				['Main Menu to offer a quick overview of all the features in one place.', 'mainmenu:742x580'],
				['Interactive tests to check your knowledge about specific topics.', 'tests:859x773'],
				['Explanation on how to solve all provided tests.', 'solutions:610x429'],
				['Complete study about Physics for college and high school.', 'theory:771x798'],
				['Built-in calculator and notepad.', 'calculator:460x409'],
				'Interactive metric to imperial units converter.',
			]],
		];
		$r[$p->key] = $p;
		
		$p = new Project('DinheiroDoBrasil', 'Dinheiro do Brasil', '2000-03');
		$p->summary = 'Numismatics CD-Rom developed with Shockwave Flash.';
		$p->objective = 'Create an interactive CD-Rom about the history of money and Brazilian currencies.';
		$p->responsabilities = 'Sockwave Flash development.';
		$p->technology = [
			'Flash' => 'go generate self-executable shockwave files.',
		];
		$p->features = [
			['', [
				['Introduction and instructions on how to use the CD.', 'intro:640x480'],
				['Index to quickly jump to one specific topic.', 'index:640x480'],
				['Present information with pictures and a quick reading panel.', 'info:640x480'],
				['Extended reading panel to enable easier reasong.', 'reading:640x480'],
				['Catalog with the pictures of all banknotes issued in Brazil.', 'banknotes:640x480'],
			]],
		];
		$r[$p->key] = $p;
		
		$p = new Project('IrcNaWeb', 'IRC@WEB', '2001-03');
		$p->summary = 'Interactive portal developed using LAMP.';
		$p->objective = 'Create an interactive allowing IRC friends to create a group portal or website.';
		$p->responsabilities = 'Full-stack development.';
		$p->technology = [
			'LAMP' => 'as in Linux (Red Hat), Apache, MySQL and PHP.',
			'PHP' => 'for server-side programming.',
			'HTML' => 'to present the information.',
			'JavaScript' => 'for client side programming.',
			'CSS' => 'to style the HTML pages.',
		];
		$p->features = [
			['', [
				['Option to create your profile or login as guest.', 'login:812x576'],
				['Home page text customized by users to enable quick interaction.', 'home-edit:812x779'],
				['History of messages on the home page.', 'home-history:812x779'],
				['Photo album, allowing to search by different criteria including people tagged on it.', 'photos-search:812x579'],
				['Allow users to comment on photos.', 'photos-comments:712x721'],
				'Telephone, address and birthday book.',
				['View users and add comments with customized design.', 'profile:812x610'],
				'Messaging system (WebMemo)',
				'Visitor Log'
			]],
		];
		$r[$p->key] = $p;
		
		$p = new Project('QuemEuQuero', 'Quem Eu Quero', '2001-06');
		$p->summary = 'Dating website developed using LAMP.';
		$p->objective = 'Create a fully-featured dating website.';
		$p->responsabilities = 'Back-end development and build a matchmaking algorithm together with a psychologist expert in the field.';
		$p->technology = [
			'LAMP' => 'as in Linux, Apache, MySQL and PHP.',
			'PHP' => 'for server-side programming, including the matchmaking algorithm.',
			'HTML' => 'to present the information.',
			'JavaScript' => 'for client side programming.',
			'CSS' => 'to style the HTML pages.',
			'Flash' => 'for some animations.',
		];
		$p->features = [
			['', [
				['Home page with articles and hints about personality and relationships.', 'home:812x674'],
				['Basic profile to find quick match.', 'basic:812x674'],
				['Advanced personality check for serious matchmaking.', 'advanced:812x674'],
				['Compatibility results shown as percentage values.', 'match:812x674'],
			]],
		];
		$r[$p->key] = $p;
		
		$p = new Project('PortalFloripa', 'Portal Floripa', '2002-01');
		$p->summary = 'ISP portal developed using LAMP.';
		$p->objective = 'Create a portal with content fetched from partners.';
		$p->responsabilities = 'Create and integrate a content fetcher and parse the information to be imported to the database.';
		$p->technology = [
			'LAMP' => 'as in Linux, Apache, MySQL and PHP.',
			'cron' => 'to periodically run the PHP scripts.',
			'PHP' => 'to fetch, parse and store the information on the database.',
		];
		$p->features = [
			['', [
				['Several pages with different information provided by third parties.', 'home:871x611'],
			]],
		];
		$r[$p->key] = $p;
		
		$p = new Project('', 'Engenho Velho', '2002-02');
		//$r[] = $p;
		
		$p = new Project('DominoFloripa', 'Dominó Floripa', '2002-03');
		$p->summary = 'Dominoes online game website developed in Java and LAMP.';
		$p->objective = 'Create an online dominoes game website.';
		$p->responsabilities = 'Development of the website and Java Applet game.';
		$p->technology = [
			'Java' => 'in Applets for the gameplay and server-side Java as the game controller.',
			'LAMP' => 'as in Linux, Apache, MySQL and PHP.',
			'PHP' => 'for all server side programming.',
			'HTML' => 'to present the information.',
			'JavaScript' => 'for client side programming.',
			'CSS' => 'to style the HTML pages.',
		];
		$p->features = [
			['', [
				['Web pages with general information about the game.', 'home:871x571'],
				'Ranking and tournaments.',
				['On-line game with different rooms.', 'rooms:749x485'],
				['Chatting, table creation and seat selection.', 'tables:749x485'],
				['Complete dominoes gameplay without from within the webpage.', 'gameplay:749x485'],
			]],
		];
		$r[$p->key] = $p;
		
		$p = new Project('', 'Portal Jurídico', '2002-04');
		//$r[] = $p;
		
		$p = new Project('Rattan', 'Intranet Rattan', '2002-06');
		$p->summary = 'Industry intranet system developed in LAMP.';
		$p->objective = 'Create an intranet system to manage orders, sales and production.';
		$p->responsabilities = 'Back-end development of the system.';
		$p->technology = [
			'LAMP' => 'as in Linux, Apache, MySQL and PHP.',
			'PHP' => 'for all server side programming.',
			'HTML' => 'to present the information.',
			'JavaScript' => 'for client side programming.',
			'CSS' => 'to style the HTML pages.',
		];
		$p->features = [
			['Administration', [
				['User management and logging.', 'user:871x714'],
				['Order management.', 'orders:792x708'],
				['Cashflow.', 'cashflow:792x708'],
				'Reports.',
				'Messaging.',
			]],
			['Production', [
				'Warehouse management.',
				'Product parts and assembly specification.',
				'Issue invoice with delivery sticker.',
			]],
			['Sales', [
				['Sale registration.', 'sale:792x708'],
				'Customer registration.',
				'Sales monitoring.',
			]],
		];
		$r[$p->key] = $p;
		
		$p = new Project('Manske', 'Escadas Manske', '2002-09');
		$p->summary = 'Website with content managed by the client in LAMP.';
		$p->objective = 'Provide information about their products to customers.';
		$p->responsabilities = 'Coding the website.';
		$p->technology = [
			'PHP' => 'for all server side programming.',
			'HTML' => 'to present the information.',
			'JavaScript' => 'for client side programming.',
			'CSS' => 'to style the HTML pages.',
		];
		$p->features = [
			['', [
				['Provide general information about the company.', 'company:792x708'],
				['Display pictures of products, customized by the client.', 'pictures:792x708'],
				['Request quote form.', 'quote:792x708'],
			]],
		];
		$r[$p->key] = $p;
		
		$p = new Project('', 'Pi Corretora', '2002-12');
		// $r[] = $p;
		
		$p = new Project('PortaisVoceNaWeb', 'Portais Na Web', '2003-01');
		$p->summary = 'Portal in LAMP featuring Asynchronous JavaScript single-page application.';
		$p->objective = 'Expand the concept of IRC Portals to allow users to create portals about any other theme.';
		$p->responsabilities = 'Full-stack development and architecture design.';
		$p->technology = [
			'LAMP' => 'as in Linux (Red Hat), Apache, MySQL and PHP.',
			'SPA' => 'or Single-Page Application, where the main page is loaded all all other requests are handled through JavaScript.',
			'PHP' => 'for all server side programming.',
			'HTML' => 'with the strict definition when frames were not required.',
			'JavaScript' => 'was used asynchronously as the site was developed in SPA.',
			'CSS' => 'to style the HTML pages.',
		];
		$p->features = [
			['', [
				['Client environment detection to the general UI in the website.', 'detect:1024x744'],
				['Bulletin Board where users can post and position their notes on the portal home page.', 'bulletinboard:1024x744'],
				['Photo gallery with customized categories.', 'photos:1024x744'],
				'Portal agenda.', 'src:1x1',
				['File sharing.', 'files:1024x744'],
				'Messaging.', 'src:1x1',
				'Favourite Links',
				'Surveys',
				['Portal administrative area to customize all aspects of the portal.', 'admin:1024x744'],
			]],
		];
		$r[$p->key] = $p;
		
		$p = new Project('Perdigao', 'Sistema Perdigão', '2003-04');
		$p->summary = 'Intranet system in LAMP for one of the biggest food producers in Brazil.';
		$p->responsabilities = 'Back-end system development and create the front-end based on Photoshop files..';
		$p->technology = [
			'LAMP' => 'as in Linux (Red Hat), Apache, MySQL and PHP.',
			'PHP' => 'for all server side programming.',
			'jpGraph' => 'to generate complex charts and graphics.',
			'JavaScript' => 'was intensively used to interact with some charts.',
			'HTML4' => 'strict definition.',
			'CSS' => 'to style the HTML pages.',
			'Flash' => 'on the header.',
		];
		$p->features = [
			['', [
				['Task Schedule using an interactive Gannt Chart and an overview report.', 'gannt:3116x1736'],
				['Report submission system.', 'report:812x706'],
				'Messaging system to individuals or groups.',
				'Travel planner.',
				['Expenses control.', 'expenses:812x706'],
				['User access reports usage including bar and pie charts.', 'users:812x706'],
			]],
		];
		$r[$p->key] = $p;
		
		$p = new Project('', 'InterSeller', '2003-08');
		// $r[] = $p;
		
		$p = new Project('RedeVoceNaWeb', 'você@web', '2005-04');
		$p->summary = 'Social networking website in LAMP with more than 50K active users.';
		$p->objective = 'Expand the idea from Portais Na Web and focusing on personal profiles, instead of group (portal) profiles.';
		$p->responsabilities = 'Full-stack development and server configuration.';
		$p->technology = [
			'LAMP' => 'as in Linux (Fedora), Apache, MySQL and PHP.',
			'PHP' => 'for all server side programming.',
			'HTML4' => 'with the strict definition when frames were not required.',
			'JavaScript' => 'was intensively used asynchronously to avoid page reloads for every user action.',
			'CSS' => 'to style the HTML pages and layout printing.',
		];
		$p->features = [
			['Personal', [
				['Extensive profile information, including contacts, work, relationship, photos and more.', 'profile:887x540'],
				['Annonymous peer assessment about your personality.', 'assessment:887x540'],
				['Private and public messages or statements.', 'messages:887x540'],
				['Advanced networking, grouping contacts as friends, best friends, extended and close family.', 'relationship:887x540'],
				'Import contacts from MSN.',
			]],
			['Portals (Groups or Interests)', [
				'Bulletin Board',
				'Surveys',
				['File sharing', 'files:887x540'],
				'Photo sharing',
				'Contacts',
				'Forum',
			]],
		];
		$r[$p->key] = $p;
		
		$p = new Project('BallFight', 'Ball Fight', '2008-02');
		$p->summary = 'A research project game developed at UTS Games Studio.';
		$p->objective = 'Create a prototype 4-player game to test a multi-user multi-touch surface called DiamondTouch.';
		$p->responsabilities = 'Study the hardware and drivers, then develop and present the prototype.';
		$p->technology = [
			'Java' => 'for the final prototype.',
			'C++' => 'to get low level readings from the driver.',
		];
		$p->features = [
			['', [
				['Present simple instructions.', 'opening:1032x749'],
				'Each player represents a different colour.',
				'Players can spawn balls by touching their base.',
				'Players use flicking gestures to throw balls.',
				'Players may touch two or more balls and merge them together.',
			]],
		];
		$p->video = '
<figure class="youtube-video">
	<iframe width="420" height="315" frameborder="0" allowfullscreen
		src="//www.youtube.com/embed/cp4X3UtiAUQ?origin=http://www.theeroperto.com&cc_load_policy=1&cc_lang_pref=en"></iframe>
	<figcaption>
		BallFight Demonstration
	</figcaption>
</figure>
		';
		$r[$p->key] = $p;
		
		$p = new Project('IntranetCantinaRoperto', 'Intranet Cantina', '2010-01');
		$p->summary = 'Intranet system in LAMP, ASP and Java for a major restaurant in Brazil.';
		$p->objective = 'Create an intranet system to improve communication, supply chain, time clock and payroll.';
		$p->responsabilities = 'Fullstack development and software design.';
		$p->technology = [
			'ASP' => 'in their legacy system.',
			'PHP' => 'was used and created a better architecture, allowing the system to grow further.',
			'Java' => 'was used to interact with external hardwares such as caller id and thermal printers.',
			'C#' => 'applications to integrate different CCTV monitoring systems.',
			'LAMP' => 'as in Linux, Apache, MySQL and PHP.',
			'HTML' => 'validated to ensure its quality.',
			'CSS' => 'to style the HTML pages.',
			'JavaScript' => 'on client side programming.',
		];
		$p->features = [
			['Employees', [
				['Time clock based on personal cards.', 'timeclock:721x405'],
				'Calendar, shifts and table reservation.',
				'Internal messaging system.',
				'Delivery and Take Away system, automatically identifying customers based on the calling phone number.',
				'Warehouse control based on purchases, production and sales.',
				'Printing system to send order and delivery information to different internal areas.'
			]],
			['Management', [
				'Employee registration system.',
				'Create payroll reports based on time clock entries.',
				'Analysis of product flow in the warehouse.',
				'Remote monitoring CCTV.',
				'Reports and logs.',
			]],
		];
		$r[$p->key] = $p;
		
		$p = new Project('LojaGeralNET', 'Loja Geral.NET', '2013-08');
		$p->summary = 'E-commerce site with intranet in LAMP and connected to external APIs.';
		$p->objective = 'Create an e-commerce website for a store that sells electronic components and related tools online, including also all administration and management interfaces.';
		$p->responsabilities = 'Analyse requirements, write use cases, test scenarios, design and fullstack development.';
		$p->technology = [
			'LAMP' => 'as in Linux, Apache, MariaDB and PHP.',
			'PHP5' => 'Object-Oriented programming is used on the server side.',
			'HTML5' => 'validated to ensure its quality.',
			'CSS3' => 'to style the HTML pages.',
			'JavaScript' => 'on client side programming.',
			'Ajax' => 'to update the shopping cart without forcing a page reload.',
			'jQuery' => 'mostly for Ajax requests and DOM manipulation.',
			'AngularJS' => 'to design pages with many repetitive elements.',
			'JSON' => 'to communicate with RESTful services such as PayPal and MercadoLivre.',
			'XML' => 'to generate, sign and authorize the invoices with the Brazilian IRS.',
			'GIT' => 'for version control and repository.',
			'PHPUnit' => 'to elaborate test cases.',
			'jpGraph' => 'library to create dynamic graphics in reports.',
			'Laravel' => 'framework with Artisan, Composer, Eloquent and Symfony Components.',
			'Internal Cache' => 'suggested products in categories, due to the complexity of the selection algorithm.',
			'Cookies' => 'to store the shopping card when the customer is not logged in.',
			'WebServices' => 'to listen for external APIs for orders purchased at an external system or delayed payment approval.',
		];
		$p->features = [
			['Customer Interface', [
				['Categories have suggested products.', 'categories:1024x679'],
				'Shopping cart should be visible and updated as the customer adds items.',
				['Allow customers to add items to the shopping card straight from the products list.', 'product-list:1024x679'],
				['Clicking a product on the list must provide additional informatiom about this specific item.', 'product-info:1024x679'],
				'Anytime a product is added to the shopping cart it should update the cart summary without reloading the page.',
				'Shopping cart must be saved automatically, even if the customer has not logged in.',
				'The search must include specific tags registered for each product.',
				['Any extra fees, such as payment or shipping, must be calculated before placing an order.', 'checkout:900x1020'],
				'Payment feedback (approved, pending or declined) should be automatically updated according to external APIs.',
				'E-mail the customer once his order is posted or the delivery status changes.',
			]],
			['Management Interface', [
				'Alerts, which can come from any unexpected behaviour from any module, API or order tracking.',
				'Cashflow, including integration with banking reports.',
				'Sales, including several types of reports.',
				'Supplier and Purchases, from initial quoting until receival of the products.',
				'Inventory, including tracking products in the warehouse.',
				['Products, including different price tiers for bulk buying.', 'admin-products:1024x679'],
				'Special Products, allowing to generate new products and specifications according to their technical properties.',
			]],
			['API Integration', [
				'With PayPal and MercadoPago payment gateways.',
				['With Brazilian IRS system to issue legal invoices prior to shipping.', 'danfe:1024x679'],
				'With MercadoLivre (similar to eBay) to receive external orders.',
				'With purchase in XML electronic invoices to automate purchases, pricing and stock management.',
				'With Correios (Brazilian Post) to calculate fees, to generate labels for bulk-posting and to track packages until they are delivered.',
			]],
		];
		$r[$p->key] = $p;
		
		return $r;
	}
}
