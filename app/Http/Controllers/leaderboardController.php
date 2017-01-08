<?php 

namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use \Serverfireteam\Panel\CrudController;

use Illuminate\Http\Request;

class leaderboardController extends CrudController{

    public function all($entity){

        parent::all($entity); 

		$this->filter = \DataFilter::source(new \App\leaderboard);
		$this->filter->add('email', 'Email', 'text');
		$this->filter->add('username', 'Name', 'text');
		$this->filter->add('round_id', 'Round No.', 'text');
		$this->filter->submit('search');
		$this->filter->reset('reset');
		$this->filter->build();

		$this->grid = \DataGrid::source($this->filter);
		$this->grid->add('id', 'ID',true);
		$this->grid->add('username', 'Name');
		$this->grid->add('email', 'Email');
		$this->grid->add('round_id','Round No.',true);
		$this->grid->paginate(20);
		$this->addStylesToGrid();

                 
        return $this->returnView();
    }
    
    public function  edit($entity){
        
        parent::edit($entity);
			
		$helpMessage = trans('Sorry !! This page is not meant for editing');
		$this->addHelperMessage($helpMessage);
       
        return $this->returnEditView();
    }    
}
