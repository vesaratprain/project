<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminProductController extends CBController {


    public function cbInit()
    {
        $this->setTable("product");
        $this->setPermalink("product");
        $this->setPageTitle("Product");

        $this->addNumber("Amount","amount");
		$this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addWysiwyg("Description","description")->strLimit(150);
		$this->addNumber("Product price","product_price");
		$this->addText("Product Name","product_name")->strLimit(150)->maxLength(255);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Product code","product_code");
		

    }
}
