<?php

class bdApi_ViewAdmin_Token_List extends XenForo_ViewAdmin_Base
{
    public function renderJson()
    {
        if (!empty($this->_params['filterView'])) {
            $this->_templateName = 'bdapi_token_list_items';
        }

        return null;
    }
}
