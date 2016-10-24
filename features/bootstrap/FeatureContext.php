<?php

use App\DanielRepository;
use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
use Behat\Mink\Exception\ElementNotFoundException;
use Behat\MinkExtension\Context\MinkContext;

/**
 * Defines application features from the specific context.
 */
class FeatureContext extends MinkContext implements Context {
    /**
     * Initializes context.
     *
     * Every scenario gets its own context instance.
     * You can also pass arbitrary arguments to the
     * context constructor through behat.yml.
     */
    public function __construct() {
    }

    /**
     * @When /^I click on (.*)'s image$/
     */
    public function iClickOnSImage($name) {
        $this->clickLink($name);
    }

    /**
     * @Then /^I should be on (.*)'s website$/
     */
    public function iShouldBeOnSWebsite($name) {
        $this->assertSession()->addressEquals($this->locatePath($name));
        $this->assertSession()->elementContains('xpath', '/head/title', $name.' Thee Roperto');
    }

    /**
     * @Given /^I am on Daniel's site$/
     */
    public function iAmOnDanielSSite() {
        $this->visit(url('/Daniel'));
    }

    /**
     * @Then /^I should see the following options in the main menu:$/
     */
    public function iShouldSeeTheFollowingOptionsInTheMainMenu(TableNode $table) {
        foreach ($table->getRows() as $item) {
            $this->assertElementContainsText('nav.navbar', $item[0]);
        }
    }

    /**
     * @Given /^I should see links to:$/
     */
    public function iShouldSeeLinksTo(TableNode $table) {
        foreach ($table->getRows() as $item) {
            $this->assertElementOnPage('a img[alt="'.$item[0].'"]');
        }
    }

    /**
     * @When /^I follow "([^"]*)" > "([^"]*)" in the main menu$/
     */
    public function iFollowInTheMainMenu1($submenu, $option) {
        $locator = "nav.navbar ul.nav li.dropdown a[title='{$submenu}'] + ul li a[title='{$option}']";
        $link = $this->getSession()->getPage()->findAll('css', $locator);
        if (count($link) == 0) {
            throw new ElementNotFoundException($this->getDriver(), 'link', 'css', $locator);
        }
        $link[0]->click();
    }

    /**
     * @Given /^I should see the title of all portfolio projects$/
     */
    public function iShouldSeeTheTitleOfAllPortfolioProjects() {
        $portfolioProjects = DanielRepository::createPortfolio();
        foreach ($portfolioProjects as $portfolioProject) {
            $this->assertSession()->pageTextContains($portfolioProject->title);
        }
    }
}
