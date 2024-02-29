<?php namespace App\Http\Controllers;

use crocodicstudio\crudbooster\controllers\CBController;

class AdminInvoiceController extends CBController {


    public function cbInit()
    {
        $this->setTable("invoice");
        $this->setPermalink("invoice");
        $this->setPageTitle("Invoice");

        $this->addDatetime("Created At","created_at")->required(false)->showAdd(false)->showEdit(false);
		$this->addWysiwyg("Customer Detail","customer_details")->strLimit(150);
		$this->addText("Offer","offer")->strLimit(150)->maxLength(255);
		$this->addText("Order Detail","order_detail")->strLimit(150)->maxLength(255);
		$this->addNumber("Price","price");
		$this->addSelectTable("Sale Order Ref","sale_order_ref",["table"=>"sale order","value_option"=>"id","display_option"=>"po_ref","sql_condition"=>""]);
		$this->addDatetime("Updated At","updated_at")->required(false)->showAdd(false)->showEdit(false);
		

    }
}
