<?php
/**
 * Zyne Framework (https://phpframework.zyne.com.br/)
 *
 * @link      https://github.com/zynebr/phpframework para acesso ao repositório
 * @copyright Copyright (c) 2007-2017 Zyne BR. (https://www.zyne.com.br)
 * @license   https://framework.zyne.com.br/licensa/new-bsd New BSD License
 *
 */

namespace Zyne\Contract;

use Zyne\Core\{
    RunnableTrait, WithableTrait
};

/**
 * Class AbstractApp
 * @package Zyne\Contract
 */
abstract class AbstractApp implements AppInterface
{
    use RunnableTrait, WithableTrait;
}