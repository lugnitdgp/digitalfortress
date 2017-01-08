<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class roundController extends CrudController{

    public function all($entity){
        
        parent::all($entity); 

		$this->filter = \DataFilter::source(new \App\round);
		$this->filter->add('round_id', 'Round ID', 'text');
		$this->filter->submit('search');
		$this->filter->reset('reset');
		$this->filter->build();

		$this->grid = \DataGrid::source($this->filter);
		$this->grid->add('round_id', 'Round ID');
		$this->grid->add('round_name', 'Round Name');
		$this->grid->add('question', 'Question');
		$this->grid->add('answer', 'Answer');
		$this->addStylesToGrid();

 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

 		$this->edit = \DataEdit::source(new \App\round);

		$this->edit->label('Add/Edit Round');

 		$helpMessage = trans('This form is used to add/edit a round in Digital Fortress');
		$this->addHelperMessage($helpMessage);

		$this->edit->add('round_id', 'Round ID','text')->rule('required');
		$this->edit->add('round_name', 'Round Name','text')->rule('required');
		$this->edit->add('question', 'Question','text')->rule('required');
		$this->edit->add('answer', 'Answer','text')->rule('required');

		
        return $this->returnEditView();
    }    
}
