<?php
namespace Akhil\Customlog\Logger;
/**
 * Akhil Gupta
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL)
 * This is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/OSL-3.0  Open Software License (OSL)
 *
 * DISCLAIMER**
 *
 * @category   MAGENTO2 Simple LOGGER MODULE
 * @package    MAGENTO2 Simple LOGGER MODULE
 * @url       https://www.youtube.com/user/thisisakhilgupta/
 * @author    Akhil Gupta
 */
use Monolog\Logger;

class Handler extends \Magento\Framework\Logger\Handler\Base
{
    /**
     * Logging level
     * @var int
     */
    protected $loggerType = Logger::INFO;

    /**
     * File name
     * @var string
     */
    protected $fileName = '/var/log/mycustomlogfile.log';
}
