<?php

return [

    /**
     * The DocuSign Integrator's Key
     */

    'integrator_key' => '',

    /**
     * The Docusign Account Email
     */
    'email'          => '',
    

    /**
     * The Docusign Account Password
     */
    'password'       => '',

    /**
     * The version of DocuSign API (Ex: v1, v2)
     */
    'version'        => 'v2',

    /**
     * The DocuSign Environment (Ex: demo, test, www)
     */
    'environment'    => 'demo',

    /**
     * The DocuSign Account Id
     */
    'account_id'     => '',
    
    /**
     * Envelope ID field (for Envelope trait)
     */
    'envelope_field' => 'envelopeId',
    
    /**
     * use Dynamic Docusign Account (use '1' to enable it)
     */
    'dynamic'        => '0',
];
