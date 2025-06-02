<?php
/**
 * Copyright © Willem Poortman 2021-present. All rights reserved.
 *
 * Please read the README and LICENSE files for more
 * details on copyrights and license information.
 */

declare(strict_types=1);

namespace Magewirephp\Magewire\Features\SupportMagewireCompiling\View\Directive;

use Magewirephp\Magewire\Features\SupportMagewireCompiling\View\Directive;

class Base extends Directive
{
    public function translate(string $value, bool $escape = true): string
    {
        if ($escape) {
            return "<?= \$escaper->escapeHtml(__({$value})) ?>";
        }

        return "<?= __({$value}) ?>";
    }
}
