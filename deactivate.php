<?php
/**
 * Deactivate the plugin, unregister custom class handlers
 */

update_subtype('object', \Wizard::SUBTYPE);
update_subtype('object', \WizardStep::SUBTYPE);
