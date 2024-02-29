<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminCustomersController extends CBController {


    public function cbInit()
    {
        $this->setTable("customers");
        $this->setPermalink("customers");
        $this->setPageTitle("Customers");

        $this->addText("Address","address")->strLimit(150)->maxLength(255);
		$this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addSelectTable("Level","level",["table"=>"member lv","value_option"=>"id","display_option"=>"member_level","sql_condition"=>""]);
		$this->addText("Name","name")->strLimit(150)->maxLength(255);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		

    }
}
