<?php
	class View{
		private $__pageInfo = array();
		private $__pageData = array();
		private $__topNav = true,$__rightNav = true, $__footer = true,$__adminCP = false, $__viewName;

		public function getView(){
			//Set page info to varible
			$info = $this->__pageInfo;

			//Set page data to varibles
			$data = $this->__pageData;
			foreach ($data as $key => $value) {
				$$key = $value;
			}

			//Include the HTML header
			include "./View/header.php";

			//If is Admin page
			if($this->__adminCP) include "./View/ad-topnav.php";

			//If contain top nav
			if($this->__topNav) include "./View/topnav.php";

			//Include body
			include "./View/".$this->__viewName.".php";

			if($this->__adminCP) include "./View/ad-leftnav.php";

			//If contain right nav
			if($this->__rightNav) include "./View/rightnav.php";

			//If contain footer
			if($this->__footer) include "./View/footer.php";
			
		}

		public function Title($title){
			$this->__pageInfo["title"] = $title;
			return $this;
		}

		public function Des($des){
			$this->__pageInfo["des"] = $des;
			return $this;
		}

		public function KeyWord($keyword){
			$this->__pageInfo["keyword"] = $keyword;
			return $this;
		}

		public function tNav($enability){
			$this->__topNav = $enability;
			return $this;
		}

		public function rNav($enability){
			$this->__rightNav = $enability;
			return $this;
		}

		public function viewName($viewName){
			$this->__viewName = $viewName;
			return $this;
		}

		public function footer($enability){
			$this->__footer = $enability;
			return $this;
		}

		public function viewData($data){
			$this->__pageData = $data;
			return $this;
		}

		//Admin Page
		public function adminCP($enability){
			if($enability){
				$this->__rightNav = false;
				$this->__footer = false;
				$this->__topNav = false;
				$this->__adminCP = true;
				$this->__pageInfo["des"] = "Admin";
				$this->__pageInfo["keyword"] = "Admin";
				$this->__pageInfo["title"] = "Control Panel";
			}
			return $this;
		}
	}
?>