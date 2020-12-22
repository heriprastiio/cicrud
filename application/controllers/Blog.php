    <?php
    Class Blog extends CI_Controller{
        public function __construct()
        {
            # code...
            parent::__construct();
            $this->load->database();
            $this->load->helper('url');
        }
        public function index(){
            $this->load->database();
            $query = $this->db->query("select * from  blogcoursecodepolitan");
            $data['blogskey'] = $query->result_array();
            $this->load->view('blogs',$data);
        }
        public function detail($url)
        {
            # code...
            // $this->load->database();
            // $this->db->where('url',$url);
            // $query = $this->db->get('blogcoursecodepolitan');

            $query = $this->db->query('SELECT * FROM blogcoursecodepolitan where url = "' .$url.' "');
            $data['blog'] = $query->result_array();

            $this->load->view('detail',$data);
        }
    }
    ?>