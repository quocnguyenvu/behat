<?php

namespace Tests\Feature;

use Behat\Behat\Context\Context;
use Laravel\Inertia\Inertia;
use Behat\MinkExtension\Context\MinkContext;
use PHPUnit\Framework\Assert;

class LoginContext implements Context {
    private $minkContext;

    public function __construct(MinkContext $minkContext) {
        $this->minkContext = $minkContext;
    }

    /**
     * @Given I am on the login page
     */
    public function iAmOnTheLoginPage() {
        $this->minkContext->visit('/login');
    }

    /**
     * @When I fill in :field with :value
     */
    public function iFillInWith($field, $value) {
        $this->minkContext->fillField($field, $value);
   }

    /**
     * @When I press :button
     */
    public function iPress($button) {
        $this->minkContext->pressButton($button);
    }

    /**
     * @Then I should see :text
     */
    public function iShouldSee($text) {
        $page = Inertia::render('App')->toResponse(request())->getContent();
        Assert::assertStringContainsString($text, $page);
    }
}