<?php
/*************************************************************************************/
/*      This file is part of the Thelia package.                                     */
/*                                                                                   */
/*      Copyright (c) OpenStudio                                                     */
/*      email : dev@thelia.net                                                       */
/*      web : http://www.thelia.net                                                  */
/*                                                                                   */
/*      For the full copyright and license information, please view the LICENSE.txt  */
/*      file that was distributed with this source code.                             */
/*************************************************************************************/

namespace Thelia\ImportExport\Export\Type;

use Thelia\ImportExport\Export\AbstractExport;
use Thelia\Model\Map\NewsletterTableMap;
use Thelia\Model\NewsletterQuery;

/**
 * Class MailingExport
 * @author Jérôme Billiras <jbilliras@openstudio.fr>
 */
class MailingExport extends AbstractExport
{
    const FILE_NAME = 'mailing';

    protected $orderAndAliases = [
        NewsletterTableMap::COL_ID => 'Identifier',
        NewsletterTableMap::COL_EMAIL => 'Email',
        NewsletterTableMap::COL_FIRSTNAME => 'FirstName',
        NewsletterTableMap::COL_LASTNAME => 'LastName'
    ];

    protected function getData()
    {
        return (new NewsletterQuery)->filterByUnsubscribed(false);
    }
}
