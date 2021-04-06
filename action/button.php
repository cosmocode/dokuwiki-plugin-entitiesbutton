<?php
/**
 * DokuWiki Plugin entitiesbutton (Action Component)
 *
 * @license GPL 2 http://www.gnu.org/licenses/gpl-2.0.html
 * @author  Anna Dabrowska <dokuwiki@cosmocode.de>
 */

class action_plugin_entitiesbutton_button extends DokuWiki_Action_Plugin
{
    /**
     * Registers a callback function for a given event
     *
     * @param Doku_Event_Handler $controller DokuWiki's event controller object
     *
     * @return void
     */
    public function register(Doku_Event_Handler $controller)
    {
        $controller->register_hook('TOOLBAR_DEFINE', 'AFTER', $this, 'addEditorButton');
    }

    /**
     * Add entities button to editor toolbar
     *
     * @param Doku_Event $event  event object by reference
     * @return void
     */
    public function addEditorButton(Doku_Event $event)
    {
        $event->data[] = [
            'type' => 'picker',
            'title' => 'hello',
            'icon' => '../../plugins/entitiesbutton/images/toolbar/entities.png',
            'block'  => false,
            'list' => array_keys(getEntities()),
        ];
    }
}

