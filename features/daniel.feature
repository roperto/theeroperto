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
      | facebook |
      | github   |
      | linkedin |
      | google+  |
      | youtube  |

  Scenario: Portfolio Overview
    Given I am on Daniel's site
    When I follow "Portfolio > Overview" in the main menu
    Then I should see a list of projects with image, title, summary and description

  Scenario: Portfolio Page
    Given I am on Daniel's site
    When I follow "Portfolio > Overview" in the main menu
    And I click on every available project
    Then I should see in each of them:
      | Technologies     |
      | Objective        |
      | Responsabilities |
      | Core Features    |
      | Technology Usage |
      | Gallery          |

  Scenario: Projects Overview
    Given I am on Daniel's site
    When I follow "Projects > Overview" in the main menu
    Then I should see a list of projects with image, title and summary

  Scenario: Projects from Bachelor and Masters
    Given I am on Daniel's site
    When I follow "Projects > Bachelor & Masters" in the main menu
    Then I should see:
      | Tank Wars                             |
      | Shaders Programming                   |
      | OpenGL Terrain and Pattern Generator  |
      | 3D Rigging and Animation              |
      | Ray Tracing                           |
      | Green Kangaroo - iPhone Game          |
      | Sounds from Heaven - Research Project |


  Scenario: Slot Car Lap Counter Project
    Given I am on Daniel's site
    When I follow "Projects > Slot Car Lap Counter" in the main menu
    Then I should see:
      | Overview   |
      | How to use |
      | Downloads  |
      | Firmware   |
      | Hardware   |
      | DIY        |
      | Log        |
