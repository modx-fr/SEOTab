<?php
/**
 * Create redirect
 *
 * @package stercseo
 * @subpackage processors
 */

class StercSeoCreateProcessor extends modObjectCreateProcessor
{
    public $classKey = 'seoUrl';
    public $languageTopics = array('stercseo:default');

    public function beforeSave()
    {
        $this->object->set('url', urlencode($this->object->get('url')));
        $resource = $this->modx->getObject('modResource', $this->object->get('resource'));
        if ($resource) {
            $this->object->set('context_key', $resource->get('context_key'));
        }
        return parent::beforeSave();
    }
}
return 'StercSeoCreateProcessor';
