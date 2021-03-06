<?php
/**
 * This file is part of prooph/proophessor-do.
 * (c) 2014-2017 prooph software GmbH <contact@prooph.de>
 * (c) 2015-2017 Sascha-Oliver Prolic <saschaprolic@googlemail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Prooph\ProophessorDo\Model\Todo\Exception;

use Prooph\ProophessorDo\Model\Todo\Todo;
use Prooph\ProophessorDo\Model\Todo\TodoStatus;

final class TodoAlreadyDone extends \RuntimeException
{
    public static function triedStatus(TodoStatus $status, Todo $todo): TodoAlreadyDone
    {
        return new self(\sprintf(
            'Tried to change status of Todo %s to %s. But Todo is already marked as done!',
            $todo->todoId()->toString(),
            $status->toString()
        ));
    }
}
