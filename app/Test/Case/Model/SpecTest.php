<?php
App::uses('Spec', 'Model');

/**
 * Spec Test Case
 *
 */
class SpecTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.spec',
		'app.customer',
		'app.user',
		'app.m_role',
		'app.m_edit_master_role',
		'app.m_edit_master',
		'app.m_menu_role',
		'app.m_menu',
		'app.user_customer_map',
		'app.m_tax_imputation',
		'app.m_deal_type',
		'app.m_cutoff_type',
		'app.m_withdrawal',
		'app.m_withdrawal_cycle',
		'app.m_fee_charge',
		'app.consignor',
		'app.customer_dept',
		'app.delivery',
		'app.m_courier',
		'app.goods',
		'app.m_process',
		'app.m_paper_size',
		'app.m_paper',
		'app.paper_inventory',
		'app.m_print_price',
		'app.finish_paper_size',
		'app.bookbinding',
		'app.fold',
		'app.inventory_type',
		'app.inventory_delivery',
		'app.m_reprint',
		'app.inventory_outsource',
		'app.spec_detail',
		'app.part',
		'app.spec_outsource',
		'app.outsource'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Spec = ClassRegistry::init('Spec');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Spec);

		parent::tearDown();
	}

}
