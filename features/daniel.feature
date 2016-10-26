Feature: Daniel's Site
  In order to know more about Daniel
  As a visitor
  I can view his personal and work related information

  Scenario: Main Menu
    Given I am on Daniel's site
    Then I should see the following options in the main menu:
      | About Me  |
      | Portfolio |
#      | Projects  |

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
    And I should see "Responsabilities"
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

#  Scenario: Projects Overview
#    Given I am on Daniel's site
#    When I follow "Projects > Overview" in the main menu
#    Then I should see a list of projects with image, title and summary
#
#  Scenario: Projects from Bachelor and Masters
#    Given I am on Daniel's site
#    When I follow "Projects > Bachelor & Masters" in the main menu
#    Then I should see:
#      | Tank Wars                             |
#      | Shaders Programming                   |
#      | OpenGL Terrain and Pattern Generator  |
#      | 3D Rigging and Animation              |
#      | Ray Tracing                           |
#      | Green Kangaroo - iPhone Game          |
#      | Sounds from Heaven - Research Project |
#
#
#  Scenario: Slot Car Lap Counter Project
#    Given I am on Daniel's site
#    When I follow "Projects > Slot Car Lap Counter" in the main menu
#    Then I should see:
#      | Overview   |
#      | How to use |
#      | Downloads  |
#      | Firmware   |
#      | Hardware   |
#      | DIY        |
#      | Log        |
