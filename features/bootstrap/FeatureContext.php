<?php

use Behat\Behat\Context\Context;
use Behat\Gherkin\Node\PyStringNode;
use Behat\Gherkin\Node\TableNode;
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
}
