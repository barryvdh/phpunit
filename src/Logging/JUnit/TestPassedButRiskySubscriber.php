<?php declare(strict_types=1);
/*
 * This file is part of PHPUnit.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace PHPUnit\Logging\JUnit;

use PHPUnit\Event\Test\PassedButRisky;
use PHPUnit\Event\Test\PassedButRiskySubscriber;

/**
 * @internal This class is not covered by the backward compatibility promise for PHPUnit
 */
final class TestPassedButRiskySubscriber extends Subscriber implements PassedButRiskySubscriber
{
    public function notify(PassedButRisky $event): void
    {
        $this->logger()->testPassedButRisky($event);
    }
}
