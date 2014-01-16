<?php
App::uses('AppController', 'Controller');
// App::import('Controller', 'Add');
// $Add = new AddController;
/**
 *
 * @Auth: GiangNT
 *
 */
class FeeChargeController extends AppController {

    public $name = 'FeeCharge';
    public $components = array('Check');
    public $uses = array('MFeeCharge');
    /**
     * list_data method
     * WS120302
     * @throws Exception
     * @param
     * @return json
     * @author GiangNT
     */

    public function list_data() {
        $this -> viewClass = 'Json';
        $res = array();
        $data_find = $this -> MFeeCharge -> find('all', array('recursive' => 0));
        if ($this -> Check -> is_multiArrayEmpty($data_find)) {
            $res['status'] = STS_EMPTY;
        } else {
            $res['status'] = STS_SUCCESS;
            $res['data_res'] = $data_find;
        }

        $this -> set(compact('res'));
        $this -> set('_serialize', array('res'));
    }

}
