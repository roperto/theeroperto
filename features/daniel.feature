Feature: Daniel's Site
  In order to know more about Daniel
  As a visitor
  I can view his personal and work related information

  Scenario: Main Menu
    Given I am on Daniel's site
    Then I should see the following options in the main menu:
      | About Me  |
      | Portfolio |
      | Projects  |

  Scenario: About Me Page
    Given I am on Daniel's site
    When I follow "About Me"
    Then I should see "daniel@theeroperto.com"
    And I should see links to:
      | Facebook |
      | GitHub   |
      | Google+  |
      | LinkedIn |
      | YouTube  |

  Scenario: Portfolio Overview
    Given I am on Daniel's site
    When I follow "Portfolio" > "Overview" in the main menu
    Then I should see "My Portfolio"
    And I should see the title of all portfolio projects

  Scenario Outline: Portfolio Page
    Given I am on Daniel's site
    When I follow "Portfolio" > "<title>" in the main menu
    Then I should see "Technologies"
    And I should see "Objective"
    And I should see "Responsibilities"
    And I should see "Core Features"
    And I should see "Technology Usage"
    And I should see "Gallery"
    Examples:
      | title                       |
      | Estil                       |
      | InterSpace                  |
      | Portal Geral NET            |
      | TonyCar                     |
      | MestreVirtual de Matemática |
      | MestreVirtual de Física     |
      | Dinheiro do Brasil          |
      | IRC@WEB                     |
      | Quem Eu Quero               |
      | Portal Floripa              |
      | Dominó Floripa              |
      | Intranet Rattan             |
      | Escadas Manske              |
      | Portais Na Web              |
      | Sistema Perdigão            |
      | você@web                    |
      | Ball Fight                  |
      | Intranet Cantina            |
      | Loja Geral.NET              |

  Scenario: Portfolio Overview
    Given I am on Daniel's site
    When I follow "Projects" > "Overview" in the main menu
    Then I should see "Projects"
    And I should see the title of all projects

  Scenario: Projects from Bachelor and Masters
    Given I am on Daniel's site
    When I follow "Projects" > "Bachelor & Masters" in the main menu
    Then I should see "Bachelor & Masters"
    And  I should see "Tank Wars"
    And I should see "Shaders Programming"
    And I should see "OpenGL Terrain and Pattern Generator"
    And I should see "3D Rigging and Animation"
    And I should see "Ray Tracing"
    And I should see "Green Kangaroo - iPhone Game"
    And I should see "Sounds from Heaven - Research Project"

  Scenario: Slot Car Lap Counter Project
    Given I am on Daniel's site
    When I follow "Projects" > "Slot Car Lap Counter" in the main menu
    Then I should see "Slot Car Lap Counter"
    And I should see "Overview"
    And I should see "How to use"
    And I should see "Downloads"
    And I should see "Firmware"
    And I should see "Hardware"
    And I should see "DIY"
    And I should see "Log"
