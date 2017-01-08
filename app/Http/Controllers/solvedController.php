<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class solvedController extends CrudController{

    public function all($entity){
        parent::all($entity); 

			$this->filter = \DataFilter::source(new \App\solved);
			$this->filter->add('email', 'Email ID', 'text');
			$this->filter->add('question_no', 'Question No.', 'text');
			$this->filter->add('round_id', 'Round No.', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('id', 'ID');
			$this->grid->add('email', 'Email ID');
			$this->grid->add('question_no', 'Question No');
			$this->grid->add('round_id', 'Round ID');
			
			$this->addStylesToGrid();   
                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);
        
        $this->edit = \DataEdit::source(new \App\solved);

		$helpMessage = trans('Details of Question Solved by the Users');
		$this->addHelperMessage($helpMessage);
	
	    $this->edit->add('email', 'Email','text')->rule('required');
		$this->edit->add('question_no', 'Question No.','text')->rule('required');
		$this->edit->add('round_id', 'Round No.','text')->rule('required');
		
        return $this->returnEditView();
    }    
}
