<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class controller_home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		//$this->load->view('welcome_message');
        $this->intro();
	}
	public function intro(){
        $this->load->helper('url');
	    $this->load->view('intro.html');
    }

	public function home(){
	    $this->load->model('model_users');

        $data['title'] = 'PiTech';
        $data['page_header'] = 'PageHeader';
        $data['name'] = $this->model_users->getFirstNames();

        $data['users'] = $this->model_users->getUsers();
        $this->load->view('welcome_message',$data);

    }
    public function user_info(){
        $this->load->model('model_users');
	    $data['title'] = 'User_info';
	    $data['users'] = $this->model_users->getUsers();
	    $this->load->view('view_user_info',$data);
    }

    public function post(){
        $data['name'] = $_POST['name'];
        $this->load->view('view_post',$data);
    }

	public function monitorup(){
        $this->load->helper('url');
		$this->load->model('model_json');
		$data['mon'] = $this->model_json->model_monitor_up_json();
		$this->load->view('view_monitorup_json',$data);
	}

    public function monitordown(){
        $this->load->helper('url');
        $this->load->model('model_json');
        $data['mon'] = $this->model_json->model_monitor_down_json();
        $this->load->view('view_monitordown_json',$data);
    }

    public function dashboard(){
        $this->load->helper('url');
        $this->load->model('model_json');
        $data['mon'] = $this->model_json->model_monitor_up_json();
        $this->load->view('view_index_dash',$data);
    }

    public function chart($macaddr = NULL){
        $this->load->helper('url');
        $this->load->model('model_json');
        $data['macaddr'] = $this->model_json->model_chart_json($macaddr);
        //$data['macaddr'] = $macaddr;
        $this->load->view('view_chart_json',$data);
    }

    public function view_chart($macaddr = NULL){
        $this->load->helper('url');
        $this->load->model('model_json');
        $data['name'] = $this->model_json->model_chart($macaddr);
        $data['macaddr'] = $macaddr;
        $this->load->view('view_chart',$data);
    }

    public function view_inventory(){
        $this->load->view('view_inventory.html');
    }

    public function inventory(){
        $this->load->helper('url');
        $this->load->model('model_json');
        $data['data'] = $this->model_json->inventory();
        $this->load->view('view_inventory_json',$data);
    }

    public function edit_inventory($mac,$name,$temp){
        $this->load->helper('url');
        $data['mac']  = $mac;
        $data['name'] = $name;
        $data['temp'] = $temp;
        $this->load->view('view_edit_inventory',$data);

    }

    public function update_inventory(){
        $mac = $_POST["mac"];
        $name = $_POST["name"];
        $temp = $_POST["temp"];
        $this->load->model('model_data');
        $this->model_data->update_inventory($mac,$name,$temp);
        $this->load->view('view_inventory.html');

    }

    public function interface(){
        $this->load->view('view_interface_setup');
    }

    public function interface_setup(){
        $ip = $_POST['ipaddress'];
        $net = $_POST['netmask'];
        $gw = $_POST['gateway'];
        $dns = $_POST['dns'];

        $file = fopen("/etc/network/interfaces","w");

        echo fwrite($file,"source /etc/network/interfaces.d/*"."\n");
        echo fwrite($file,"auto lo"."\n");
        echo fwrite($file,"iface lo inet loopback"."\n");
        echo fwrite($file,"\n");
        echo fwrite($file,"auto enp0s3"."\n");
        echo fwrite($file,"iface enp0s3 inet static"."\n");
        echo fwrite($file,"address $ip"."\n");
        echo fwrite($file,"netmask $net"."\n");
        //echo fwrite($file,"network 192.168.1.0"."\n");
        echo fwrite($file,"gateway $gw"."\n");
        echo fwrite($file,"dns-nameservers $dns 8.8.4.4"."\n");
        echo fwrite($file,"\n");
        echo fwrite($file,"auto enp0s8"."\n");
        echo fwrite($file,"iface enp0s8 inet dhcp"."\n");
        fclose($file);

        shell_exec('sh /home/sitita/reboot.sh');

    }

    public function email(){
        $this->load->model('model_data');
        $data['email'] = $this->model_data->view_email();
        $this->load->view('view_email',$data);
    }

    public function edit_email(){
        $SMTPAuth = $_POST["SMTPAuth"];
        $SMTPSecure = $_POST["SMTPSecure"];
        $host = $_POST["host"];
        $port = $_POST["port"];
        $username = $_POST["username"];
        $password = $_POST["password"];
        $email = $_POST["from"];
        $this->load->model('model_data');
        $this->model_data->update_email($SMTPAuth, $SMTPSecure, $host, $port, $username, $password, $email);
        $this->load->view('view_email');



    }

}
