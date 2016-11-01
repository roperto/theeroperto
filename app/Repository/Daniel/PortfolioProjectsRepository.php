<?php
namespace App\Repository\Daniel;

use App\Models\MonthYear;
use App\Models\Portfolio;
use App\Models\PortfolioProject;
use App\Models\PortfolioProjectFeature;
use App\Models\PortfolioProjectFeatureGroup;

/**
 * Class PortfolioProjectsRepository
 *
 * Hardcoded repository for Daniel's portfolio projects.
 */
final class PortfolioProjectsRepository {
    /**
     * Static factory.
     */
    private function __construct() {
    }

    /**
     * Creates Daniel's Portfolio.
     * @return Portfolio
     */
    public static function create() : Portfolio {
        $portfolio = new Portfolio();

        $portfolio->add(
            (new PortfolioProject('Estil', 'Estil', new MonthYear(5, 1998)))
                ->setSummary('Simple static HTML website.')
                ->setObjective('Quickly create a website for a client who needed to publish simple information.')
                ->setResponsibilities('Front-end development.')
                ->addTechnology('HTML', 'to render most of the content.')
                ->addTechnology('JavaScript', 'for client-side programming.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('', [
                    new PortfolioProjectFeature('Static HTML pages containing all the information to be presented.', 'page1', 798, 675),
                    new PortfolioProjectFeature('Basic JavaScript programming to show dialogs and statusbar messages.', 'page2', 802, 675),
                ]))
        );

        $portfolio->add(
            (new PortfolioProject('InterSpace', 'InterSpace', new MonthYear(9, 1998)))
                ->setSummary('Website featuring CSS and DHTML animations.')
                ->setObjective('Create a website for the first Internet Cafe in Florianopolis (South Brazil), probably one of the first in Brazil. It was going first thing the customers would see when logged in and it should guide them on how to use the Internet.')
                ->setResponsibilities('Front-end development.')
                ->addTechnology('HTML', 'to render most of the content.')
                ->addTechnology('CSS', 'to layout the content.')
                ->addTechnology('JavaScript', 'for client-side programming.')
                ->addTechnology('DHTML', 'combining CSS and JavaScript.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('', [
                    new PortfolioProjectFeature('Home page explaining what is the Internet and how to learn more.', 'home', 840, 527),
                    new PortfolioProjectFeature('A tutorial explaining how to use links, browsers, e-mails and IRC chat.', 'tutorial', 840, 527),
                    new PortfolioProjectFeature('Links to free webmail providers.'),
                    new PortfolioProjectFeature('More information about the café, its menu and how to get there.'),
                    new PortfolioProjectFeature('Interesting links to start browsing'),
                ]))
        );

        $portfolio->add(
            (new PortfolioProject('PortalGeralNET', 'Portal Geral NET', new MonthYear(1, 1999)))
                ->setSummary('Web portal developed with SHTML, CGI and Perl.')
                ->setObjective('Create an information portal engaging users to participate.')
                ->setResponsibilities('Full-stack development.')
                ->addTechnology('HTML', 'to render most of the content.')
                ->addTechnology('SHTML', 'to interact with CGIs in Perl and create dynamic content.')
                ->addTechnology('Perl', 'for CGIs or server-side programming.')
                ->addTechnology('CSS', 'to layout the content.')
                ->addTechnology('JavaScript', 'for client-side programming.')
                ->addTechnology('Flash', 'for the introduction.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('', [
                    new PortfolioProjectFeature('Flash opening animation.'),
                    new PortfolioProjectFeature('Space for users to leave a message on the home page.', 'home', 794, 606),
                    new PortfolioProjectFeature('Toolbar-like menu with controls for music background.'),
                    new PortfolioProjectFeature('Information about games and player registration.', 'quake', 794, 554),
                    new PortfolioProjectFeature('Webcard (Virtual Postcard) fully customized including picture, colours, music and fonts.', 'webcard', 794, 606),
                    new PortfolioProjectFeature('Recipes database enabling users to send their own recipes.', 'recipes', 794, 606),
                    new PortfolioProjectFeature('Humour and general posts, including jokes and trivias posted by users.', 'humour', 794, 606),
                    new PortfolioProjectFeature('Curriculum Vitae database, including searching by keywords.', 'cv', 794, 606),
                ]))
        );

        $portfolio->add(
            (new PortfolioProject('TonyCar', 'TonyCar', new MonthYear(3, 1999)))
                ->setSummary('Website integrated to an external system using Perl scripts.')
                ->setObjective('Create a website to present their products integrated with their legacy pricing system.')
                ->setResponsibilities('Full-stack development.')
                ->addTechnology('HTML', 'to render most of the content.')
                ->addTechnology('Perl', 'for CGIs or server-side programming.')
                ->addTechnology('CSS', 'to layout the content.')
                ->addTechnology('JavaScript', 'for client-side programming.')
                ->addTechnology('Flash', 'for the introduction.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('', [
                    new PortfolioProjectFeature('Introduction in Flash.', 'flash', 812, 590),
                    new PortfolioProjectFeature('Rotating pictures of their products on the background.', 'home', 812, 590),
                    new PortfolioProjectFeature('Show Room allowing to select pictures from categories.', 'showroom', 812, 590),
                    new PortfolioProjectFeature('Product and price list loaded from an external software.', 'products', 812, 590),
                ]))
        );

        $portfolio->add(
            (new PortfolioProject('MestreVirtualMatematica', 'MestreVirtual de Matemática', new MonthYear(6, 1999)))
                ->setSummary('Math educational CD-Rom developed using web technologies.')
                ->setObjective('Create an educational CD-Rom with theory and exercises about Mathematics.')
                ->setResponsibilities('Programming the core functionality, create tools and guide other programmers.')
                ->addTechnology('HTML', 'to render most of the content.')
                ->addTechnology('CSS', 'to layout the content.')
                ->addTechnology('JavaScript', 'to do all programming.')
                ->addTechnology('Cookies', 'to serve as storage for the calculator and notepad.')
                ->addTechnology('Flash', 'for the introduction.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('', [
                    new PortfolioProjectFeature('Introduction and how to use the CD-Rom.', 'intro', 640, 480),
                    new PortfolioProjectFeature('Main Menu to offer a quick overview of all the features in one place.', 'mainmenu', 775, 584),
                    new PortfolioProjectFeature('Complete Math study for college and high school.', 'theory', 775, 881),
                    new PortfolioProjectFeature('Interactive tests to check your knowledge about specific topics.', 'tests', 775, 735),
                    new PortfolioProjectFeature('Explanation on how to solve all provided tests.', 'solutions', 602, 419),
                    new PortfolioProjectFeature('Built-in calculator and notepad.'),
                    new PortfolioProjectFeature('IQ Test.'),
                ]))
        );

        $portfolio->add(
            (new PortfolioProject('MestreVirtualFisica', 'MestreVirtual de Física', new MonthYear(10, 1999)))
                ->setSummary('Physics educational CD-Rom developed using web technologies.')
                ->setObjective('Create an educational CD-Rom with theory and exercises about Physics.')
                ->setResponsibilities('Programming the core functionality, create tools and guide other programmers.')
                ->addTechnology('HTML', 'to render most of the content.')
                ->addTechnology('CSS', 'to layout the content.')
                ->addTechnology('JavaScript', 'to do all programming.')
                ->addTechnology('Cookies', 'to serve as storage for the calculator and notepad.')
                ->addTechnology('Flash', 'for the introduction.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('', [
                    new PortfolioProjectFeature('Introduction and tools to learn how to run the CD-Rom using Internet Explorer.', 'intro', 640, 480),
                    new PortfolioProjectFeature('Main Menu to offer a quick overview of all the features in one place.', 'mainmenu', 742, 580),
                    new PortfolioProjectFeature('Interactive tests to check your knowledge about specific topics.', 'tests', 859, 773),
                    new PortfolioProjectFeature('Explanation on how to solve all provided tests.', 'solutions', 610, 429),
                    new PortfolioProjectFeature('Complete study about Physics for college and high school.', 'theory', 771, 798),
                    new PortfolioProjectFeature('Built-in calculator and notepad.', 'calculator', 460, 409),
                    new PortfolioProjectFeature('Interactive metric to imperial units converter.'),
                ]))
        );

        $portfolio->add(
            (new PortfolioProject('DinheiroDoBrasil', 'Dinheiro do Brasil', new MonthYear(3, 2000)))
                ->setSummary('Numismatics CD-Rom developed with Shockwave Flash.')
                ->setObjective('Create an interactive CD-Rom about the history of money and Brazilian currencies.')
                ->setResponsibilities('Sockwave Flash development.')
                ->addTechnology('Flash', 'go generate self-executable shockwave files.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('', [
                    new PortfolioProjectFeature('Introduction and instructions on how to use the CD.', 'intro', 640, 480),
                    new PortfolioProjectFeature('Index to quickly jump to one specific topic.', 'index', 640, 480),
                    new PortfolioProjectFeature('Present information with pictures and a quick reading panel.', 'info', 640, 480),
                    new PortfolioProjectFeature('Extended reading panel to enable easier reasong.', 'reading', 640, 480),
                    new PortfolioProjectFeature('Catalog with the pictures of all banknotes issued in Brazil.', 'banknotes', 640, 480),
                ]))
        );

        $portfolio->add(
            (new PortfolioProject('IrcNaWeb', 'IRC@WEB', new MonthYear(3, 2001)))
                ->setSummary('Interactive portal developed using LAMP.')
                ->setObjective('Create an interactive allowing IRC friends to create a group portal or website.')
                ->setResponsibilities('Full-stack development.')
                ->addTechnology('LAMP', 'as in Linux (Red Hat), Apache, MySQL and PHP.')
                ->addTechnology('PHP', 'for server-side programming.')
                ->addTechnology('HTML', 'to present the information.')
                ->addTechnology('JavaScript', 'for client side programming.')
                ->addTechnology('CSS', 'to style the HTML pages.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('', [
                    new PortfolioProjectFeature('Option to create your profile or login as guest.', 'login', 812, 576),
                    new PortfolioProjectFeature('Home page text customized by users to enable quick interaction.', 'home-edit', 812, 779),
                    new PortfolioProjectFeature('History of messages on the home page.', 'home-history', 812, 779),
                    new PortfolioProjectFeature('Photo album, allowing to search by different criteria including people tagged on it.', 'photos-search', 812, 579),
                    new PortfolioProjectFeature('Allow users to comment on photos.', 'photos-comments', 712, 721),
                    new PortfolioProjectFeature('Telephone, address and birthday book.'),
                    new PortfolioProjectFeature('View users and add comments with customized design.', 'profile', 812, 610),
                    new PortfolioProjectFeature('Messaging system (WebMemo)'),
                    new PortfolioProjectFeature('Visitor Log'),
                ]))
        );

        $portfolio->add(
            (new PortfolioProject('QuemEuQuero', 'Quem Eu Quero', new MonthYear(6, 2001)))
                ->setSummary('Dating website developed using LAMP.')
                ->setObjective('Create a fully-featured dating website.')
                ->setResponsibilities('Back-end development and build a matchmaking algorithm together with a psychologist expert in the field.')
                ->addTechnology('LAMP', 'as in Linux, Apache, MySQL and PHP.')
                ->addTechnology('PHP', 'for server-side programming, including the matchmaking algorithm.')
                ->addTechnology('HTML', 'to present the information.')
                ->addTechnology('JavaScript', 'for client side programming.')
                ->addTechnology('CSS', 'to style the HTML pages.')
                ->addTechnology('Flash', 'for some animations.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('', [
                    new PortfolioProjectFeature('Home page with articles and hints about personality and relationships.', 'home', 812, 674),
                    new PortfolioProjectFeature('Basic profile to find quick match.', 'basic', 812, 674),
                    new PortfolioProjectFeature('Advanced personality check for serious matchmaking.', 'advanced', 812, 674),
                    new PortfolioProjectFeature('Compatibility results shown as percentage values.', 'match', 812, 674),
                ]))
        );

        $portfolio->add(
            (new PortfolioProject('PortalFloripa', 'Portal Floripa', new MonthYear(1, 2002)))
                ->setSummary('ISP portal developed using LAMP.')
                ->setObjective('Create a portal with content fetched from partners.')
                ->setResponsibilities('Create and integrate a content fetcher and parse the information to be imported to the database.')
                ->addTechnology('LAMP', 'as in Linux, Apache, MySQL and PHP.')
                ->addTechnology('cron', 'to periodically run the PHP scripts.')
                ->addTechnology('PHP', 'to fetch, parse and store the information on the database.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('', [
                    new PortfolioProjectFeature('Several pages with different information provided by third parties.', 'home', 871, 611),
                ]))
        );

        $portfolio->add(
            (new PortfolioProject('DominoFloripa', 'Dominó Floripa', new MonthYear(3, 2002)))
                ->setSummary('Dominoes online game website developed in Java and LAMP.')
                ->setObjective('Create an online dominoes game website.')
                ->setResponsibilities('Development of the website and Java Applet game.')
                ->addTechnology('Java', 'in Applets for the gameplay and server - side Java as the game controller.')
                ->addTechnology('LAMP', 'as in Linux, Apache, MySQL and PHP.')
                ->addTechnology('PHP', 'for all server side programming.')
                ->addTechnology('HTML', 'to present the information.')
                ->addTechnology('JavaScript', 'for client side programming.')
                ->addTechnology('CSS', 'to style the HTML pages.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('', [
                    new PortfolioProjectFeature('Web pages with general information about the game.', 'home', 871, 571),
                    new PortfolioProjectFeature('Ranking and tournaments.'),
                    new PortfolioProjectFeature('On - line game with different rooms.', 'rooms', 749, 485),
                    new PortfolioProjectFeature('Chatting, table creation and seat selection.', 'tables', 749, 485),
                    new PortfolioProjectFeature('Complete dominoes gameplay without from within the webpage.', 'gameplay', 749, 485),
                ]))
        );

        $portfolio->add(
            (new PortfolioProject('Rattan', 'Intranet Rattan', new MonthYear(6, 2002)))
                ->setSummary('Industry intranet system developed in LAMP.')
                ->setObjective('Create an intranet system to manage orders, sales and production.')
                ->setResponsibilities('Back - end development of the system.')
                ->addTechnology('LAMP', 'as in Linux, Apache, MySQL and PHP.')
                ->addTechnology('PHP', 'for all server side programming.')
                ->addTechnology('HTML', 'to present the information.')
                ->addTechnology('JavaScript', 'for client side programming.')
                ->addTechnology('CSS', 'to style the HTML pages.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('Administration', [
                    new PortfolioProjectFeature('User management and logging.', 'user', 871, 714),
                    new PortfolioProjectFeature('Order management.', 'orders', 792, 708),
                    new PortfolioProjectFeature('Cashflow.', 'cashflow', 792, 708),
                    new PortfolioProjectFeature('Reports.'),
                    new PortfolioProjectFeature('Messaging.'),
                ]))
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('Production', [
                    new PortfolioProjectFeature('Warehouse management.'),
                    new PortfolioProjectFeature('Product parts and assembly specification.'),
                    new PortfolioProjectFeature('Issue invoice with delivery sticker.'),
                ]))
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('Sales', [
                    new PortfolioProjectFeature('Sale registration.', 'sale', 792, 708),
                    new PortfolioProjectFeature('Customer registration.'),
                    new PortfolioProjectFeature('Sales monitoring.'),
                ]))
        );

        $portfolio->add(
            (new PortfolioProject('Manske', 'Escadas Manske', new MonthYear(9, 2002)))
                ->setSummary('Website with content managed by the client in LAMP.')
                ->setObjective('Provide information about their products to customers.')
                ->setResponsibilities('Coding the website.')
                ->addTechnology('PHP', 'for all server side programming.')
                ->addTechnology('HTML', 'to present the information.')
                ->addTechnology('JavaScript', 'for client side programming.')
                ->addTechnology('CSS', 'to style the HTML pages.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('', [
                    new PortfolioProjectFeature('Provide general information about the company.', 'company', 792, 708),
                    new PortfolioProjectFeature('Display pictures of products, customized by the client.', 'pictures', 792, 708),
                    new PortfolioProjectFeature('Request quote form.', 'quote', 792, 708),
                ]))
        );

        $portfolio->add(
            (new PortfolioProject('PortaisVoceNaWeb', 'Portais Na Web', new MonthYear(1, 2003)))
                ->setSummary('Portal in LAMP featuring Asynchronous JavaScript single - page application.')
                ->setObjective('Expand the concept of IRC Portals to allow users to create portals about any other theme.')
                ->setResponsibilities('Full - stack development and architecture design.')
                ->addTechnology('LAMP', 'as in Linux(Red Hat), Apache, MySQL and PHP.')
                ->addTechnology('SPA', ' or Single - Page Application, where the main page is loaded all all other requests are handled through JavaScript.')
                ->addTechnology('PHP', 'for all server side programming.')
                ->addTechnology('HTML', 'with the strict definition when frames were not required.')
                ->addTechnology('JavaScript', 'was used asynchronously as the site was developed in SPA.')
                ->addTechnology('CSS', 'to style the HTML pages.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('', [
                    new PortfolioProjectFeature('Client environment detection to the general UI in the website.', 'detect', 1024, 744),
                    new PortfolioProjectFeature('Bulletin Board where users can post and position their notes on the portal home page.', 'bulletinboard', 1024, 744),
                    new PortfolioProjectFeature('Photo gallery with customized categories.', 'photos', 1024, 744),
                    new PortfolioProjectFeature('Portal agenda.', 'src', 1, 1),
                    new PortfolioProjectFeature('File sharing.', 'files', 1024, 744),
                    new PortfolioProjectFeature('Messaging.', 'src', 1, 1),
                    new PortfolioProjectFeature('Favourite Links'),
                    new PortfolioProjectFeature('Surveys'),
                    new PortfolioProjectFeature('Portal administrative area to customize all aspects of the portal.', 'admin', 1024, 744),
                ]))
        );

        $portfolio->add(
            (new PortfolioProject('Perdigao', 'Sistema Perdigão', new MonthYear(4, 2003)))
                ->setSummary('Intranet system in LAMP for one of the biggest food producers in Brazil.')
                ->setResponsibilities('Back - end system development and create the front - end based on Photoshop files..')
                ->addTechnology('LAMP', 'as in Linux(Red Hat), Apache, MySQL and PHP.')
                ->addTechnology('PHP', 'for all server side programming.')
                ->addTechnology('jpGraph', 'to generate complex charts and graphics.')
                ->addTechnology('JavaScript', 'was intensively used to interact with some charts.')
                ->addTechnology('HTML4', 'strict definition.')
                ->addTechnology('CSS', 'to style the HTML pages.')
                ->addTechnology('Flash', 'on the header.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('', [
                    new PortfolioProjectFeature('Task Schedule using an interactive Gannt Chart and an overview report.', 'gannt', 3116, 1736),
                    new PortfolioProjectFeature('Report submission system.', 'report', 812, 706),
                    new PortfolioProjectFeature('Messaging system to individuals or groups.'),
                    new PortfolioProjectFeature('Travel planner.'),
                    new PortfolioProjectFeature('Expenses control.', 'expenses', 812, 706),
                    new PortfolioProjectFeature('User access reports usage including bar and pie charts.', 'users', 812, 706),
                ]))
        );

        $portfolio->add(
            (new PortfolioProject('RedeVoceNaWeb', 'você@web', new MonthYear(4, 2005)))
                ->setSummary('Social networking website in LAMP with more than 50K active users.')
                ->setObjective('Expand the idea from Portais Na Web and focusing on personal profiles, instead of group(portal) profiles.')
                ->setResponsibilities('Full - stack development and server configuration.')
                ->addTechnology('LAMP', 'as in Linux(Fedora), Apache, MySQL and PHP.')
                ->addTechnology('PHP', 'for all server side programming.')
                ->addTechnology('HTML4', 'with the strict definition when frames were not required.')
                ->addTechnology('JavaScript', 'was intensively used asynchronously to avoid page reloads for every user action.')
                ->addTechnology('CSS', 'to style the HTML pages and layout printing.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('Personal', [
                    new PortfolioProjectFeature('Extensive profile information, including contacts, work, relationship, photos and more.', 'profile', 887, 540),
                    new PortfolioProjectFeature('Annonymous peer assessment about your personality.', 'assessment', 887, 540),
                    new PortfolioProjectFeature('Private and public messages or statements.', 'messages', 887, 540),
                    new PortfolioProjectFeature('Advanced networking, grouping contacts as friends, best friends, extended and close family.', 'relationship', 887, 540),
                    new PortfolioProjectFeature('Import contacts from MSN.'),
                ]))
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('Portals(Groups or Interests)', [
                    new PortfolioProjectFeature('Bulletin Board'),
                    new PortfolioProjectFeature('Surveys'),
                    new PortfolioProjectFeature('File sharing', 'files', 887, 540),
                    new PortfolioProjectFeature('Photo sharing'),
                    new PortfolioProjectFeature('Contacts'),
                    new PortfolioProjectFeature('Forum'),
                ]))
        );

        $portfolio->add(
            (new PortfolioProject('BallFight', 'Ball Fight', new MonthYear(2, 2008)))
                ->setSummary('A research project game developed at UTS Games Studio.')
                ->setObjective('Create a prototype 4 - player game to test a multi - user multi - touch surface called DiamondTouch.')
                ->setResponsibilities('Study the hardware and drivers, then develop and present the prototype.')
                ->addTechnology('Java', 'for the final prototype.')
                ->addTechnology('C++', 'to get low level readings from the driver.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('', [
                    new PortfolioProjectFeature('Present simple instructions.', 'opening', 1032, 749),
                    new PortfolioProjectFeature('Each player represents a different colour.'),
                    new PortfolioProjectFeature('Players can spawn balls by touching their base.'),
                    new PortfolioProjectFeature('Players use flicking gestures to throw balls.'),
                    new PortfolioProjectFeature('Players may touch two or more balls and merge them together.'),
                ]))
                ->setVideoHTML('<figure class="youtube-video">'
                               .'<iframe width="420" height="315" frameborder="0" allowfullscreen '
                               .'src="//www.youtube.com/embed/cp4X3UtiAUQ?origin=http://www.theeroperto.com&cc_load_policy=1&cc_lang_pref=en">'
                               .'</iframe><figcaption>BallFight Demonstration</figcaption></figure>')
        );

        $portfolio->add(
            (new PortfolioProject('IntranetCantinaRoperto', 'Intranet Cantina', new MonthYear(1, 2010)))
                ->setSummary('Intranet system in LAMP, ASP and Java for a major restaurant in Brazil.')
                ->setObjective('Create an intranet system to improve communication, supply chain, time clock and payroll.')
                ->setResponsibilities('Fullstack development and software design.')
                ->addTechnology('ASP', 'in their legacy system.')
                ->addTechnology('PHP', 'was used and created a better architecture, allowing the system to grow further.')
                ->addTechnology('Java', 'was used to interact with external hardwares such as caller id and thermal printers.')
                ->addTechnology('C#', 'applications to integrate different CCTV monitoring systems.')
                ->addTechnology('LAMP', 'as in Linux, Apache, MySQL and PHP.')
                ->addTechnology('HTML', 'validated to ensure its quality.')
                ->addTechnology('CSS', 'to style the HTML pages.')
                ->addTechnology('JavaScript', 'on client side programming.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('Employees', [
                    new PortfolioProjectFeature('Time clock based on personal cards.', 'timeclock', 721, 405),
                    new PortfolioProjectFeature('Calendar, shifts and table reservation.'),
                    new PortfolioProjectFeature('Internal messaging system.'),
                    new PortfolioProjectFeature('Delivery and Take Away system, automatically identifying customers based on the calling phone number.'),
                    new PortfolioProjectFeature('Warehouse control based on purchases, production and sales.'),
                    new PortfolioProjectFeature('Printing system to send order and delivery information to different internal areas.'),
                ]))
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('Management', [
                    new PortfolioProjectFeature('Employee registration system.'),
                    new PortfolioProjectFeature('Create payroll reports based on time clock entries.'),
                    new PortfolioProjectFeature('Analysis of product flow in the warehouse.'),
                    new PortfolioProjectFeature('Remote monitoring CCTV.'),
                    new PortfolioProjectFeature('Reports and logs.'),
                ]))
        );

        $portfolio->add(
            (new PortfolioProject('LojaGeralNET', 'Loja Geral.NET', new MonthYear(8, 2013)))
                ->setSummary('E - commerce site with intranet in LAMP and connected to external APIs.')
                ->setObjective('Create an e - commerce website for a store that sells electronic components and related tools online, including also all administration and management interfaces.')
                ->setResponsibilities('Analyse requirements, write use cases, test scenarios, design and fullstack development.')
                ->addTechnology('LAMP', 'as in Linux, Apache, MariaDB and PHP.')
                ->addTechnology('PHP5', 'Object - Oriented programming is used on the server side.')
                ->addTechnology('HTML5', 'validated to ensure its quality.')
                ->addTechnology('CSS3', 'to style the HTML pages.')
                ->addTechnology('JavaScript', 'on client side programming.')
                ->addTechnology('Ajax', 'to update the shopping cart without forcing a page reload.')
                ->addTechnology('jQuery', 'mostly for Ajax requests and DOM manipulation.')
                ->addTechnology('AngularJS', 'to design pages with many repetitive elements.')
                ->addTechnology('JSON', 'to communicate with RESTful services such as PayPal and MercadoLivre.')
                ->addTechnology('XML', 'to generate, sign and authorize the invoices with the Brazilian IRS.')
                ->addTechnology('GIT', 'for version control and repository.')
                ->addTechnology('PHPUnit', 'to elaborate test cases.')
                ->addTechnology('jpGraph', 'library to create dynamic graphics in reports.')
                ->addTechnology('Laravel', 'framework with Artisan, Composer, Eloquent and Symfony Components.')
                ->addTechnology('Internal Cache', 'suggested products in categories, due to the complexity of the selection algorithm.')
                ->addTechnology('Cookies', 'to store the shopping card when the customer is not logged in.')
                ->addTechnology('WebServices', 'to listen for external APIs for orders purchased at an external system or delayed payment approval.')
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('Customer Interface', [
                    new PortfolioProjectFeature('Categories have suggested products.', 'categories', 1024, 679),
                    new PortfolioProjectFeature('Shopping cart should be visible and updated as the customer adds items.'),
                    new PortfolioProjectFeature('Allow customers to add items to the shopping card straight from the products list.', 'product - list', 1024, 679),
                    new PortfolioProjectFeature('Clicking a product on the list must provide additional informatiom about this specific item.', 'product - info', 1024, 679),
                    new PortfolioProjectFeature('Anytime a product is added to the shopping cart it should update the cart summary without reloading the page.'),
                    new PortfolioProjectFeature('Shopping cart must be saved automatically, even if the customer has not logged in.'),
                    new PortfolioProjectFeature('The search must include specific tags registered for each product.'),
                    new PortfolioProjectFeature('Any extra fees, such as payment or shipping, must be calculated before placing an order.', 'checkout', 900, 1020),
                    new PortfolioProjectFeature('Payment feedback(approved, pending or declined) should be automatically updated according to external APIs.'),
                    new PortfolioProjectFeature('E - mail the customer once his order is posted or the delivery status changes.'),
                ]))
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('Management Interface', [
                    new PortfolioProjectFeature('Alerts, which can come from any unexpected behaviour from any module, API or order tracking.'),
                    new PortfolioProjectFeature('Cashflow, including integration with banking reports.'),
                    new PortfolioProjectFeature('Sales, including several types of reports.'),
                    new PortfolioProjectFeature('Supplier and Purchases, from initial quoting until receival of the products.'),
                    new PortfolioProjectFeature('Inventory, including tracking products in the warehouse.'),
                    new PortfolioProjectFeature('Products, including different price tiers for bulk buying.', 'admin - products', 1024, 679),
                    new PortfolioProjectFeature('Special Products, allowing to generate new products and specifications according to their technical properties.'),
                ]))
                ->addFeatureGroup(new PortfolioProjectFeatureGroup('API Integration', [
                    new PortfolioProjectFeature('With PayPal and MercadoPago payment gateways.'),
                    new PortfolioProjectFeature('With Brazilian IRS system to issue legal invoices prior to shipping.', 'danfe', 1024, 679),
                    new PortfolioProjectFeature('With MercadoLivre(similar to eBay) to receive external orders.'),
                    new PortfolioProjectFeature('With purchase in XML electronic invoices to automate purchases, pricing and stock management.'),
                    new PortfolioProjectFeature('With Correios(Brazilian Post) to calculate fees, to generate labels for bulk - posting and to track packages until they are delivered.'),
                ]))
        );

        return $portfolio;
    }
}
