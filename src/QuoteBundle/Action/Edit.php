<?php

declare(strict_types=1);

/*
 * This file is part of SolidInvoice project.
 *
 * (c) Pierre du Plessis <open-source@solidworx.co>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace SolidInvoice\QuoteBundle\Action;

use Exception;
use SolidInvoice\QuoteBundle\Entity\Quote;
use SolidInvoice\QuoteBundle\Form\Handler\QuoteEditHandler;
use SolidInvoice\SettingsBundle\SystemConfig;
use SolidWorx\FormHandler\FormHandler;
use SolidWorx\FormHandler\FormRequest;
use Symfony\Component\HttpFoundation\Request;

final class Edit
{
    public function __construct(
        private readonly FormHandler $handler,
        private readonly SystemConfig $systemConfig
    ) {
    }

    /**
     * @throws Exception
     */
    public function __invoke(Request $request, Quote $quote): FormRequest
    {
        $options = [
            'quote' => $quote,
            'form_options' => [
                'currency' => $quote->getClient()->getCurrency() ?: $this->systemConfig->getCurrency(),
            ],
        ];

        return $this->handler->handle(QuoteEditHandler::class, $options);
    }
}
