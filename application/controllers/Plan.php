<?php
use Coinbase\Wallet\Client;
use Coinbase\Wallet\Configuration;
use Coinbase\Wallet\Resource\Address;


class Plan extends CI_Controller
{
	
    public function index()
	{
        $this->load->model('Plan_model');
		$data['plans'] = $this->Plan_model->getPlans();
        $this->load->view('Admin/plans.php', $data);
    }
    public function Add()
	{
		$this->load->view('Admin/addPlan.php');
    }
    public function goToEditPlan($id)
	{
        $this->load->model('Plan_model');
        $data['plan'] = $this->Plan_model->getPlanById($id);
		$this->load->view('Admin/editPlan.php', $data);
    }
    function editPlan($id)
	{
        $this->load->model('Plan_model');
		$dataToSend['name'] = $this->input->post('name');
		$dataToSend['ghs'] = $this->input->post('ghs');
		$dataToSend['plan_price']=$this->input->post("planprice");
		$dataToSend['daily_profit'] = $this->input->post('dailyProfit');
		$this->Plan_model->update($id, $dataToSend);
		redirect(base_url() . 'plan');
	}
    function deletePlan($id)
	{
        $this->load->model('Plan_model');
		$this->Plan_model->delete($id);
		redirect(base_url() . 'plan');
	}
    public function newPlan()
	{
		$this->load->model('Plan_model');
		$dataToSend['name'] = $this->input->post('name');
		$dataToSend['ghs'] = $this->input->post('ghs');
		$dataToSend['plan_price']=$this->input->post("planprice");
		$dataToSend['daily_profit'] = $this->input->post('dailyProfit');
		$this->Plan_model->addPlan($dataToSend);
		redirect(base_url() . 'plan');
	}
	public function selectPlan()
	{
		
		$this->load->model('Plan_model');
		$planid=($this->input->post('planid'));
		$data['plan']=$this->Plan_model->getPlanById($planid);
		$dataToSend["plan_id"]=$data['plan']["id"];
		$dataToSend['user_id']=$_SESSION["id"];
		// $dataToSend['status']='pending';
		$this->Plan_model->selectedPlan($dataToSend);
		$key=' 2zS1NCrUrepG1PqK';
        $secret='COLRBdWX83ywG6wBuAGwQL2WeeGpPsvf';
        $configuration = Configuration::apiKey($key, $secret);
        $client = Client::create($configuration);
        $address = new Address([
			'name' => 'plan for use'
		]);
		 $a=$client->getCurrentAuthorization();
		die();
        // $client->createAccountAddress($account, $address);
		redirect(base_url() . 'dashboard');
	}
}
?>