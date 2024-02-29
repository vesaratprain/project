<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminEmployeeController extends CBController {


    public function cbInit()
    {
        $this->setTable("employee");
        $this->setPermalink("employee");
        $this->setPageTitle("Employee");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Name","name")->strLimit(150)->maxLength(255);
		$this->addText("Position","position")->strLimit(150)->maxLength(255);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		

    }
}
