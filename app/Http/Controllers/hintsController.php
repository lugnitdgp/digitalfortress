<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class hintsController extends CrudController{

    public function all($entity){
        parent::all($entity); 


		$this->filter = \DataFilter::source(new \App\hints);
		$this->filter->add('id', 'ID', 'text');
		$this->filter->submit('search');
		$this->filter->reset('reset');
		$this->filter->build();

		$this->grid = \DataGrid::source($this->filter);
		$this->grid->add('id', 'Hint ID',true);
		$this->grid->add('hint', 'Content');
		$this->grid->add('created_at', 'Created At');
		$this->addStylesToGrid();

                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

		$this->edit = \DataEdit::source(new \App\hints);

		$this->edit->label('Edit/Add Questions');
		$helpMessage = trans('This form is used to edit/add a new hint in Digital Fortress');
		$this->addHelperMessage($helpMessage);
		
		$this->edit->add('hint', 'Hint Content','text')->rule('required');
        return $this->returnEditView();
    }    
}
