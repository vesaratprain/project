<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminMemberLvController extends CBController {


    public function cbInit()
    {
        $this->setTable("member lv");
        $this->setPermalink("member_lv");
        $this->setPageTitle("Member Lv");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Member Entified","member_identified")->strLimit(150)->maxLength(255);
		$this->addText("Member Level","member_level")->strLimit(150)->maxLength(255);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		

    }
}
