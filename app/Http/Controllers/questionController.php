<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class questionController extends CrudController{

    public function all($entity){
        parent::all($entity); 


		$this->filter = \DataFilter::source(new \App\question);
		$this->filter->add('question_no', 'Question No', 'text');
		$this->filter->add('round_id', 'Round ID', 'text');
		$this->filter->submit('search');
		$this->filter->reset('reset');
		$this->filter->build();

		$this->grid = \DataGrid::source($this->filter);
		$this->grid->add('round_id', 'Round No.',true);
		$this->grid->add('question_no', 'Question No.',true);
		$this->grid->add('title', 'Question Title');
		$this->grid->add('question', 'Question Content');
		$this->grid->add('answer', 'Answer');
		$this->grid->add('position', 'GMAP Position');
		$this->addStylesToGrid();

                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

		$this->edit = \DataEdit::source(new \App\question);

		$this->edit->label('Edit/Add Questions');
		$helpMessage = trans('This form is used to edit/add a new question in Digital Fortress');
		$this->addHelperMessage($helpMessage);
		
		$this->edit->add('round_id', 'Round No.','text')->rule('required');
		$this->edit->add('question_no', 'Question No.','text')->rule('required');
		$this->edit->add('title', 'Title','text')->rule('required');
		$this->edit->add('question', 'Question Content','text')->rule('required');
		$this->edit->add('answer', 'Answer','text')->rule('required');
		$this->edit->add('position', 'GMAP Position','text')->rule('required');
		
        return $this->returnEditView();
    }    
}
