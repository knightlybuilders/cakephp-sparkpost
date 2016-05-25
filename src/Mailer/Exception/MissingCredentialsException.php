<?php
/**
 * SparkPost plugin for CakePHP 3
 * Copyright (c) Narendra Vaghela (http://www.narendravaghela.com)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.md
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Narendra Vaghela (http://www.narendravaghela.com)
 * @link          https://github.com/narendravaghela/cakephp-sparkpost
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

namespace SparkPostEmail\Mailer\Exception;

use Cake\Core\Exception\Exception;

/**
 * Missing Credentials exception - used when API Key is not set.
 */
class MissingCredentialsException extends Exception
{

    /**
     * {@inheritDoc}
     */
    protected $_messageTemplate = 'SparkPost %s is not set.';
}
