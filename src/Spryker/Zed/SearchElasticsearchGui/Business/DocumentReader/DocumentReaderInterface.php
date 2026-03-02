<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Zed\SearchElasticsearchGui\Business\DocumentReader;

use Generated\Shared\Transfer\SearchDocumentTransfer;

interface DocumentReaderInterface
{
    public function readDocument(string $documentId, string $indexName): SearchDocumentTransfer;
}
