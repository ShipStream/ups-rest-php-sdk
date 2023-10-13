<?php

namespace ShipStream\Ups\Normalizer;

use ShipStream\Ups\Api\Normalizer\JaneObjectNormalizer;

class CustomJaneObjectNormalizer extends JaneObjectNormalizer
{
    public function __construct()
    {
        $this->normalizers['ShipStream\\Ups\\Api\\Model\\XAVResponseCandidate'] = XAVResponseCandidateNormalizer::class;
        $this->normalizers['ShipStream\\Ups\\Api\\Model\\CandidateAddressKeyFormat'] = CandidateAddressKeyFormatNormalizer::class;
        $this->normalizers['ShipStream\\Ups\\Api\\Model\\ShipmentResponseResponse'] = ShipmentResponseResponseNormalizer::class;
        $this->normalizers['ShipStream\\Ups\\Api\\Model\\ShipmentResponseShipmentResults'] = ShipmentResponseShipmentResultsNormalizer::class;
    }
}
