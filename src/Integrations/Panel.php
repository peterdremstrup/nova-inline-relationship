<?php

namespace KirschbaumDevelopment\NovaInlineRelationship\Integrations;

use KirschbaumDevelopment\NovaInlineRelationship\Integrations\Contracts\ThirdPartyContract;

class Panel extends ThirdParty implements ThirdPartyContract
{
    /**
     * Fields array from object.
     *
     * @return array
     */
    public function fields(): array
    {
        return $this->field->data;
    }
}
