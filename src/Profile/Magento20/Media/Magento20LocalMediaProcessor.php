<?php declare(strict_types=1);
/*
 * (c) shopware AG <info@shopware.com>
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Swag\MigrationMagento\Profile\Magento20\Media;

use Swag\MigrationMagento\Profile\Magento\DataSelection\DataSet\MediaDataSet;
use Swag\MigrationMagento\Profile\Magento2\Media\Magento2LocalMediaProcessor;
use Swag\MigrationMagento\Profile\Magento20\Magento20Profile;
use SwagMigrationAssistant\Migration\MigrationContextInterface;

class Magento20LocalMediaProcessor extends Magento2LocalMediaProcessor
{
    public function supports(MigrationContextInterface $migrationContext): bool
    {
        return $migrationContext->getProfile() instanceof Magento20Profile
            && $migrationContext->getDataSet()::getEntity() === MediaDataSet::getEntity();
    }
}
