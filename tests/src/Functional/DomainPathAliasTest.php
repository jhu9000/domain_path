<?php

namespace Drupal\Tests\domain_path\Functional;

//use Drupal\Tests\domain_path\Functional\DomainPathTestBase;
use Drupal\Component\Render\FormattableMarkup;

/**
 * Tests the domain path creation API.
 *
 * @group domain_path
 */
class DomainPathAliasTest extends DomainPathTestBase {


  /**
   * {@inheritdoc}
   */
  protected function setUp() {
    parent::setUp();

    // Create domains.
    $this->domainCreateTestDomains();
    $this->domains = $this->getDomains();
  }

  public function testDomainPathAliasesFill() {
    $this->domainPathAliasesFill();
  }
}
