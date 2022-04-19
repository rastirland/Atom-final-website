<?php
namespace classes;
interface Routes {
	public function getController($route);
	public function getDefaultRoute();
	public function checkLogin($route);
}