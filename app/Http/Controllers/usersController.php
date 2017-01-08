<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class usersController extends CrudController{

    public function all($entity){
        parent::all($entity); 

			$this->filter = \DataFilter::source(new \App\users);
			$this->filter->add('email', 'Email', 'text');
			$this->filter->add('username', 'Name', 'text');
			$this->filter->submit('search');
			$this->filter->reset('reset');
			$this->filter->build();

			$this->grid = \DataGrid::source($this->filter);
			$this->grid->add('id', 'ID',true);
			$this->grid->add('username', 'Name');
			$this->grid->add('email', 'Email');
			$this->grid->add('created_at', 'Created At');	
			$this->addStylesToGrid();	

                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);

			$this->edit = \DataEdit::source(new \App\users);

			$helpMessage = trans('User details are not editable');
			$this->addHelperMessage($helpMessage);


        return $this->returnEditView();
    }    
    
}
