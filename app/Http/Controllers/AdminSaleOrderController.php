<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminSaleOrderController extends CBController {


    public function cbInit()
    {
        $this->setTable("sale order");
        $this->setPermalink("sale_order");
        $this->setPageTitle("Sale Order");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addText("Offer","offer")->strLimit(150)->maxLength(255);
		$this->addWysiwyg("Order Detail","order_details")->strLimit(150);
		$this->addText("Po Ref","po_ref")->strLimit(150)->maxLength(255);
		$this->addMoney("Price","price");
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		

    }
}
