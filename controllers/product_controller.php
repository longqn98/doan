<?php
require_once("controllers/base_controller.php");
require_once("models/product.php");

class ProductController extends BaseController{
	public function __construct(){
		//Khai báo thư mục chứa các view của Product
		$this->folder = "product";
	}

	//Tạo action đã đăng ký trong 'route'
	public function index(){
		//Lấy dữ liệu từ Model
		$arrPro = Product::getAllProduct();
		$data = array('products'=>$arrPro);
		//Đổ dữ liệu, biểu diễn ra view tương ứng
		$this->render("home",$data);
	}

	public function detail(){
		//Kiểm tra sự tồn tại của mã sản phẩm
		$id = isset($_GET['id']) ? $_GET['id'] : "";
		if(!empty($id)){
			//Lấy dữ liệu của sản phẩm theo mã sản phẩm;
			
			$data = array('item'=>'thông tin chi tiết sản phâm');
			//Đưa dữ liệu ra view chi tiet de hien thi
			$this->render("detail", $data);
		}else{
			header("location:".PATH."?controller=page&action=error");
		}
	}
}
?>









