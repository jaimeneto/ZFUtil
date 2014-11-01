<?php

/**
 * ZFUtil Filters
 *
 * @author Jaime Neto <contato@jaimeneto.com>
 */
class FilterController extends Zend_Controller_Action
{
    
    public function indexAction()
    {
        $this->_forward('index', 'index');
    }
        
    public function slugAction()
    {
        $texto = $this->getRequest()->getPost('texto', 
                'Este é um texto de exemplo para ver o filtro em ação!'
        );
        
        $filterSlug = new ZFUtil_Filter_Slug();
        
        $this->view->texto = $texto;
        $this->view->filteredText = $filterSlug->filter($texto);
    }
    
}
