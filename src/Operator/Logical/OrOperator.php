<?php
/**
 * Copyright © 2018 Thomas Klein, All rights reserved.
 * See LICENSE bundled with this library for license details.
 */
declare(strict_types=1);

namespace LogicTree\Operator\Logical;

use LogicTree\Operator\OperatorInterface;

/**
 * Class OrOperator
 *
 * The OR:
 * The output is "true" if either or both of the inputs are "true".
 * If both inputs are "false," then the output is "false".
 */
final class OrOperator implements OperatorInterface
{
    public const CODE = 'or';

    /**
     * {@inheritdoc}
     */
    public function execute(...$expressions): bool
    {
        $count = count($expressions);
        $result = $expressions[0];

        for ($i = 1; $i < $count; $i++) {
            $result = ($result || $expressions[$i]);
        }

        return $result;
    }
}
