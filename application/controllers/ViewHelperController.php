<?php

/**
 * ZFUtil View Helpers
 *
 * @author Jaime Neto <contato@jaimeneto.com>
 */
class ViewHelperController extends Zend_Controller_Action
{
    
    public function indexAction()
    {
        $this->_forward('index', 'index');
    }
        
    public function calendarAction()
    {
        $data = $this->_getParam('data', date('Y-m-d'));
        
        $date = new Zend_Date($data, 'yyyy-MM-dd');
        $ano = $date->get('yyyy');
        
        $feriados = array(
            "{$ano}-01-01" => 'Ano Novo',
            "{$ano}-04-21" => 'Tiradentes',
            "{$ano}-05-01" => 'Dia do Trabalhador',
            "{$ano}-09-07" => 'Dia da Independência',
            "{$ano}-10-12" => 'Nossa Senhora de Aparecida',
            "{$ano}-11-02" => 'Dia de Finados',
            "{$ano}-11-15" => 'Proclamação da República',
            "{$ano}-12-25" => 'Natal',
            "{$ano}-10-30" => array(
                'Evento 1',
                'Evento 2'
            )
        );
            
        $this->view->feriados = $feriados;
        $this->view->data = $data;
        $this->view->eventos = isset($feriados[$data]) 
                ? (array) $feriados[$data] 
                : array();
    }
    
}
