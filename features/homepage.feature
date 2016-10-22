Feature: The home page
  In order to choose which site to visit
  As a visitor
  I click on the image corresponding to the person

  Scenario: Home page
    Given I am on the homepage
    Then I should see "Which site would you like to visit?"

#  Scenario Outline: Selection site
#    Given I am on the homepage
#    When I click on <name>'s image
#    Then I should be to <name>'s website
#    Examples:
#      | name      |
#      | Christina |
#      | Daniel    |
#      | Luigi     |
#      | Amelia    |