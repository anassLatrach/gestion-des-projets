<?php
class Index extends Controller{
	protected function Index(){
		$viewmodel = new IndexModel();
		$this->returnView($viewmodel->Index(), true);
	}
}